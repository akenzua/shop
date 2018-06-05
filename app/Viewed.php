<?php

namespace App;



class Viewed{

    public $look = null;
    public $totalQty = 0;
    

    public function __construct($history){
        if($history){
            $this->look = $history->look;  
            $this->totalQty = $history->totalQty;
        }
    }


    public function add($look, $id){
        $viewedItem = ['qty'=> 0, 'slug'=> $look->slug, 'item'=>$look];
        if($this->look){
            if(array_key_exists($id, $this->look)){
                $viewedItem = $this->look[$id];
            }
        }
        $viewedItem['qty']++;
        $this->look[$id] = $viewedItem;
        $this->totalQty++;
    }




}