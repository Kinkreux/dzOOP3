<?php
trait PrintProduct
{
    // вывести карточку товара
    public function printProduct($product)
    {
        $this = $product;
        $category = $this->category;
        $subcategory = $this->subcategory;
        $brand = $this->brand;
        $price = $this->price;
        $stockSize = $this->stockSize;
        $leftInStock = $this->leftInStock;

        echo $subcategory . ' из категории ' . $category . ' бренда ' . $brand . ' стоит ' . $price . ' рублей. <br>';

        if ($leftInStock === NULL OR $leftInStock === 0) {
            echo "Товара нет на складе. Доступен предзаказ - обратитесь к нашему менеджеру! : )";
        } else {
            if ($leftInStock <= 0.3 * $stockSize) {
                echo '<strong>Товар заканчивается на складе! Осталось '.$leftInStock.' штук из '.$stockSize.'.</strong>';
            } else {
                echo 'Товар на складе. Осталось '.$leftInStock.' штук из '.$stockSize.'.';
            }
        }
    }
}