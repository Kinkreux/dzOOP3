<?php
/* Создаем класс Машина. Наследуем от Товара.
Свойства: +2, все обязательные. Цвет str, нравится или нет bool */

class Car extends Product
{
    protected $color; //цвет текстом
    protected $like; //нравится или нет

    // задать свойства Машине
    public function setCarProperties($color, $like)
    {
        $this->color = $color;
        $this->like = $like;
    }
}