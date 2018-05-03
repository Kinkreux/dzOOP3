<?php
/* Создаем класс Телевизор. Наследуем от Товара.
Свойства: 2, оба обязательные. Формат str, Цветной bool.
Константа USEFULNESS всегда ложь. */

class TV
{
    protected const USEFULNESS = false;
    protected $format; //формат текстом
    protected $colorful; //цветной или нет bool

    // задать свойства Телевизеру
    public function setTVProperties($format, $colorful) {
        $this->format = $format;
        $this->colorful = $colorful;
    }

    // узнать,полезен ли телевизор
    public function showUsefulness()
    {
        echo $this::USEFULLNESS;
    }
}