<?php
interface Product
{
    public function __construct($category, $subcategory, $brand, $price, $stockSize, $leftInStock);
    public function __get($property);
    public function __set($property, $value);
    public function __isset($property);
    public function __unset($property);
    public function getPrice();
    public function printProduct();
}