<?php

namespace App;



class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id, $size){

        $storedItem = ['qty'=> 0, 'price'=> $item->price, 'item'=>$item, 'size'=>[$size]];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
                array_push($storedItem['size'], $size);
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        // $storedItem['size'] = [$size];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function reduce($id){
        $this->items[$id]['qty']--;
        array_pop($this->items[$id]['size']);
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];
        
        if($this->items[$id]['qty']<= 0){
            unset($this->items[$id]);
        }
    }
    public function increase($id){
        $this->items[$id]['qty']++;
        $add_size = end($this->items[$id]['size']);
        array_push($this->items[$id]['size'], $add_size);
        $this->items[$id]['price'] += $this->items[$id]['item']['price'];
        $this->totalQty++;
        $this->totalPrice += $this->items[$id]['item']['price'];
        
    }

    public function remove($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}