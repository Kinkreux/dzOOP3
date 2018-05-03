<?php

/* Создаем абстрактный базовый класс Товар.
Свойств: 5, все обязательные.
Категория str, подкатегория str, бренд str, цена в рублях int, размер партии int, осталось на складе int. */

abstract class Product
{
    protected $category; //категория текстом
    protected $subcategory; //категория текстом
    protected $brand; //бренд текстом
    protected $price; //цена в рублях int
    protected $stockSize; //Размер партии int
    protected $leftInStock; //осталось на складе int

    use GetPrice; //подключаем трейт с вычислением цены
    use PrintProduct; //подключаем отображение карточки товара

    // конструктор
    public function __construct($category, $subcategory, $brand, $price, $stockSize, $leftInStock)
    {
        $this->category = $category;
        $this->subcategory = $subcategory;
        $this->brand = $brand;
        $this->price = $price;
        $this->stockSize = $stockSize;
        $this->leftInStock = $leftInStock;
    }

    //получить значение свойства
    public function __get($property)
    {
        if (isset($property)) {
            if ($property === $this->price) {
                getPrice($property);
            } else {
                return $property;
            }
        else {
                echo 'Property is not set.';
            }
        }
    }

    //задать значение свойства
    public function __set($property, $value)
    {
        if (!isset($value)) {
            $this->$property = $value;
            return $this;
        } else {
            echo 'Property is already set. Please, check object creation or your database.';
        }
    }

    //проверить, задано ли свойство
    public function __isset($property)
    {
        return isset($property);
    }

    //попытаться удалить свойство
    public function __unset($property)
    {
        echo 'You should not unset protected or private properties.';
    }
}