<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Viewed;
use App\Product;
use App\Order;
use App\Color;
use App\Like;
use App\ColorVariant;
use Auth;
use App\Shipping;
use App\SubSubCategory;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Category;
use Session;
use Illuminate\Support\Facades\Redirect;
use Jenssegers\Agent\Agent;

class ProductController extends Controller
{
    
    public function getIndex(){
        
        $products = Product::orderBy('id', 'desc')->get();
        $men = Product::where('category_id', 1)->orderBy('id', 'desc')->get();
        $women = Product::where('category_id', 2)->orderBy('id', 'desc')->get();
        // dd($arrivals);
        return view('shop.index', ['products' => $products, 'men' => $men, 'women' => $women]);
    }


    

    public function ajaxData(Request $request){
        $item = $request->search;
        
        if(is_null($item)){
            return redirect()->back();
        }else{
           $typed = trim($item);
        }
       
           
    $products = Product::where('product_name','LIKE','%'.$typed.'%')->orderBy('id', 'desc')->take(10)->get();  
          
    return response()->json($products);
        
   
    
} 

public function ajaxRedirect($slug){
    $product = Product::where('slug', $slug)->get();
    $category=$product[0]->category->category;
    $subcategory =$product[0]->sub_category->sub_category;
    // dd($subcategory);
    $url = $category.'/'.$subcategory.'/' .$slug;
    

    return Redirect::to($url);

}
public function getCategory($cat){
    $catm= Category::where('category', $cat)->first();
    $cat = $catm->id;

    $category = $catm->category;
    $subcategory= "";
    $men = Product::where('category_id', $cat)->get();
    $agent = new Agent();
    // dd($products);
     return view('shop.products',  ['subcategory' => $men, 'category'=> $category, 'sub'=>$subcategory, 'agent'=>$agent]);
}
     public function getDetails($category, $subcategory, $slug){
        
        $details = Product::where('slug', $slug)->first();
        $color = Product::where('product_code', $details->product_code)->get();

        // dd($color);

        // Viewed Items Starts
        $history =Session::has('viewed')? Session::get('viewed'): null;
        $viewed = new Viewed($history); 
        $viewed->add($details, $details->id);
        Session::put('viewed', $viewed);
        $preview = Session::get('viewed');
        $previewed = new Viewed($preview);
        // Viewed Items Ends

        $sub = $details->sub_category['id'];
        $cat = $details->category['id'];
        

        $constraint = ['category_id' => $cat, 'sub_category_id' => $sub];
        $sub_cat = Product::where($constraint)->whereNotIn('id', [$details->id])->get();

        // dd($sub_cat);
       $agent = new Agent();


        return view('shop.details', [
            'details' => $details,
             'viewed' => $previewed->look,
             'similar' => $sub_cat,
             'color' => $color,
             'agent'=>$agent
             ]);
     }

     public function getProducts($category, $subcategory){
         
        
        
        $cat= Category::where('category', $category)->first();
        $cat = $cat->id;
        $sub = SubCategory::where(['sub_category'=> $subcategory, 'category_id' => $cat])->first();
        $sub = $sub->id;
        
        $constraint = ['category_id' => $cat, 'sub_category_id' => $sub];
        
        
        // dd($cat);
        $products = Product::where($constraint)->get();
        $agent = new Agent();
        // dd($products);
         return view('shop.products',  ['subcategory' => $products, 'category'=> $category, 'sub'=>$subcategory, 'agent'=>$agent]);
     }

     public function getWomenSubSub($subcategory, $subsubcat){
         $cat = 2;
         $sub = SubCategory::where(['sub_category'=> $subcategory, 'category_id' => $cat])->first();
         $sub = $sub->id;
         $subsub = SubSubCategory::where(['sub_category_id'=> $sub, 'category_id' => $cat, 'sub_sub_category' =>$subsubcat ])->first();
         $subsub = $subsub->id;
        
         $constraint = ['category_id' => $cat, 'sub_category_id' => $sub, 'sub_sub_category_id' => $subsub];
         
         
         // dd($cat);
         $products = Product::where($constraint)->get();
         $agent = new Agent();
         // dd($products);
          return view('shop.products',  ['subcategory' => $products, 
          'category'=> 'women', 
          'sub'=>$subcategory, 
          'agent'=>$agent,
          'subsub'=> $subsubcat
          ]);

     }

     public function getMenSubSub($subcategory, $subsubcat){
        $cat = 1;
        $sub = SubCategory::where(['sub_category'=> $subcategory, 'category_id' => $cat])->first();
        $sub = $sub->id;
        $subsub = SubSubCategory::where(['sub_category_id'=> $sub, 'category_id' => $cat, 'sub_sub_category' =>$subsubcat ])->first();
        $subsub = $subsub->id;
       
        $constraint = ['category_id' => $cat, 'sub_category_id' => $sub, 'sub_sub_category_id' => $subsub];
        
        
        // dd($cat);
        $products = Product::where($constraint)->get();
        $agent = new Agent();
        // dd($products);
         return view('shop.products',  ['subcategory' => $products,
          'category'=> 'men', 
          'sub'=>$subcategory,
          'agent'=>$agent,
          'subsub'=> $subsubcat]);

    }

     public function getAddToCart(Request $request){
        $product = Product::find($request->input('id'));

        //  dd($product);
        // $product = Product::find($id);
        $oldCart =Session::has('cart')? Session::get('cart'): null;  
        $cart = new Cart($oldCart);
        $this->validate($request,[
            
                    'size'=> 'required',
                    
                ]);
        $size = $request->input('size');
        $cart->add($product, $product->id, $size);

        $request->session()->put('cart', $cart);

        // dd(Session::get('cart'));
        return redirect()->back();
    }

    public function getReduce($id){
        $oldCart =Session::has('cart')? Session::get('cart'): null;  
        $cart = new Cart($oldCart);
        $cart->reduce($id);

        if(count($cart->items)>0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
        
        return redirect()->route('product.shoppingCart');
    }

    public function getIncrease($id){
        $oldCart =Session::has('cart')? Session::get('cart'): null;  
        $cart = new Cart($oldCart);
        $cart->increase($id);

     
        Session::put('cart', $cart);
       
        return redirect()->route('product.shoppingCart');
    }

    public function getRemove($id){
        $oldCart =Session::has('cart')? Session::get('cart'): null;  
        $cart = new Cart($oldCart);
        $cart->remove($id);

        if(count($cart->items)>0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getCart(Request $request){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $url = $request->path();
    //    dd($cart);
        $preview = Session::get('viewed');
        $previewed = new Viewed($preview);
        $agent = new Agent();
        
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice'=>$cart->totalPrice, 'url'=>$url, 'viewed' => $previewed->look, 'agent' => $agent]);
    }


    public function postSearch(Request $request){

        // dd($request->input('search_text'));
        $item = $request->input('search_text');
        if(is_null($item)){
            return redirect()->back();
        }else{
           $typed = trim($item);
        }     
        $products = Product::where('product_name','LIKE','%'.$typed.'%')->paginate(25);  

        return view('shop.search', ['subcategory' => $products, 'category'=> 'Search', 'sub'=>$item]);

    }

    public function getCheckout(Request $request){
        if(!Session::has('cart')){
            return view('product.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        $url = $request->path();
        return view('shop.checkout', ['total' => $total, 'url'=>$url]);
    }

    public function getShipping(Request $request){
        if(!Session::has('cart')){
            return redirect()->route('product.shoppingCart');
    }
        $url = $request->path();
        $agent = new Agent();
        return view('shop.shipping', ['url'=>$url, 'agent'=>$agent]);
    }

    public function postShipping(Request $request){
        if(!Session::has('cart')){
            return redirect()->route('product.shoppingCart');
    }
    $url = $request->path();
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);

    
     $order = new Order();
    // $user = Auth::user();
    // $product = new Product();

    // $order->user()->associate($user);
    // $order->product()->associate($product);
    // $order->save();

    $order->cart = serialize($cart);
    Auth::user()->orders()->save($order);
    // foreach($cart->items as $items){
    //     $summary[] = $items;
    // }
    // //  return $summary;
    // foreach( $summary as $sum){
    //     $qty[] = $sum['item']['id'];
    // }
    // return $qty;
   


    $this->validate($request,[

        'state'=> 'required',
        'city'=> 'required',
        'landmark'=> 'required',
        'address'=> 'required',
        'first_name'=> 'required',
        'last_name'=> 'required',
        'email'=> 'email|required',
        'phone'=> 'required',
        'method'=> 'required'
    ]);
    $shipping = new Shipping([
        'country' => $request->input('country'),
        'state' => $request->input('state'),
        'city' => $request->input('city'),
        'landmark' => $request->input('landmark'),
        'address' => $request->input('address'),
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'method' => $request->input('method')
    ]);
    $order->shipping()->save($shipping);
    $total = $cart->totalPrice;
    $summary = unserialize($order->cart);
    $agent = new Agent();

    // foreach($summary->items as $item){
    //     $sum[] = $item['item']['product_name'];
    // }
    // return $sum;
    //  dd($summary);
    return view('shop.checkout', ['order'=> $order, 
    'total'=>$total, 
    'summary' => $summary->items, 
    'url'=>$url, 
    'agent'=>$agent]);
    }



    public function postLikePost(Request $request)
    {   $product_id = $request->productId;

        // dd($product_id );
        // $product_id = $request['productId'];
        
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $product = Product::find($product_id);
        if (!$product) {
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('product_id', $product_id)->first();
        if ($like) {
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;
            }
        } else {
            $like = new Like();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->product_id = $product->id;
        if ($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }

}