<?php
/*Цена нужна в куче мест, поэтому создаем кусочек лего для ее получения. */

trait GetPrice
{
    //расчет цены
    public function getPrice()
    {
        if (isset($this->price)) {
            return $this->price;
        } else {
            echo '<em>- (уточняйте у менеджера)</em>';
        }
    }
}