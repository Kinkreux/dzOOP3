<?php
interface Cart
{
    public function __construct(array $product);
    public function __get($property);
    public function __set($property, $value);
    public function __isset($property);
    public function __unset($property);
}
