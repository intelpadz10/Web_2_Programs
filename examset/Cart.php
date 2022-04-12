<?php

class Cart implements iShoppingCart {

    private array $cartItems = [];
    private int $cartItemsNo;
    private float $bill;

    public function _construct(float $bill, int $cartItemsNo){
        $this->bill = $bill;
        $this->cartItemsNo = $cartItemsNo;
    }

    public function putItemIntoCart($itemSet, int $qty){
        $cartItem = new Items($itemSet, $qty);
        foreach($this->items as $item){
            if ($item->getItems()->getID() === $itemSet->getID()){
                if ($item->getQuantity() + $qty > $item->getItems()->getAvailableQuantity()){
                    throw new Exception(message: "Total");                }
            }
        }

    }
    public function takeItemFromCart($item){
        unset($cartItems[$item]);
        $this->cartItemsNo--;
    }
    public function showCart(){
        return $this->cartItems;
    }
    public function checkOut(){
        for($i=0; $i<$this->cartItemsNo-1; $i++){
            unset($cartItems[$i]);
        }
        $this->cartItemsNo=0;
    }
    public function getBill(){
        return $this->bill;
    }
}