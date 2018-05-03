<?php
/* Создаем класс Утка. Наследуем от Товара.
Свойства: 2, оба обязательные. Имя str, возраст в месяцах int, вид str. */

class Duck
{
    protected $alias; //имя текстом
    protected $age; //возраст в месяцах
    protected $spiecy = 'кряква'; //вид текстом

// конструктор: нужно указать имя, возраст в месяцах и вид
    public function setDuck($alias, $age, $spiecy)
    {
        $this->alias = $alias;
        $this->age = $age;
        $this->spiecy = $spiecy;
    }
}