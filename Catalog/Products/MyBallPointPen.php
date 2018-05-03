<?php
/* Создаем класс Шариковая ручка. Наследуем от Товара.
Свойство: 1, обязательное. Цвет str. */

class MyBallPointPen extends Product
{
    protected $color; //цвет текстом

    // задать свойства шариковой ручки
    public function setMyBallPointPen($color)
    {
        $this->color = $color;
    }
}