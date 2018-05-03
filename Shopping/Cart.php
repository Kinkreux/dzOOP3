<?php
/*Создаем класс Корзина. */

class Cart
{
    protected $product;
    protected $productNumber;
    protected $sum;

    // конструктор
    public function __construct(array $product)
    {
        $this->product = $product;
    }

    public function __get($property)
    {
        echo 'Please, use method "printCart".';
    }

    public function __set($property, $value)
    {
        echo 'You successfully added ' . $this->product . ' to your cart.';
    }

    //проверить, задано ли свойство
    public function __isset($property)
    {
        return isset($property);
    }

    //попытаться удалить продукт
    public function __unset($property)
    {
        if ($property === $this->product[$property]) {
            if (isset($property)) {
                {
                    unset($this->product[$property]);
                    echo 'You successfully deleted ' . $property . ' from your cart';
                }

            } else {
                echo 'Your cart is empty, nothing to delete.';
            }
        } else {
            echo 'Error getting product to unset.';
        }
    }

    protected function setProductNumber()
    {
        count($this->product);
        $this->productNumber;
    }

    protected function setSum()
    {
        $priceArray = array_column($this->product, 'price');
        foreach ($priceArray as $item) {
            $item += $item;
        }
        $this->sum = $item;
        unset($item);
    }
}
