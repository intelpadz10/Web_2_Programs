<?php

interface iShoppingCart {
    public function putItemIntoCart($itemSet);
    public function takeItemFromCart($item);
    public function showCart();
    public function checkOut();
    public function getBill();
}