<?php
/*Создаем класс Заказ. Наследуем от Корзины.
Свойств: , обязательные. */

class Order extends Cart
{
    use \Traits\GetPrice; //подключаем трейт с расчетом цены
    use \Traits\PrintProduct; //подключаем трейт с отображением карточки товара

    //выводим корзину с товарами
    public function printCart()
    {
        echo 'Your cart contains ' . $this->productNumber . ' products:<br>';
        foreach ($this->product as $item) {
            printProduct($item);
        }
        echo '<br><br>Общая сумма заказа: ' . $this->sum . ' рублей.';
    }
}