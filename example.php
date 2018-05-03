<?php
/* Создаем класс Товар.
Свойств: 5, все обязательные.
Категория str, подкатегория str, бренд str, цена в рублях int, размер партии int, осталось на складе int. */
class Product
{
    private $category; //категория текстом
    private $subcategory; //подкатегория текстом
    private $brand; //бренд текстом
    private $price; //цена в рублях int
    private $stockSize; //Размер партии int
    private $leftInStock; //осталось на складе int

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

    // вывести карточку товара
    public function printProduct()
    {
        $category = $this->category;
        $subcategory = $this->subcategory;
        $brand = $this->brand;
        $price = $this->price;
        $stockSize = $this->stockSize;
        $leftInStock = $this->leftInStock;

        echo $subcategory.' из категории ' . $category . ' бренда ' . $brand . ' стоит ' . $price . ' рублей. <br>';

        if ($leftInStock === NULL OR $leftInStock === 0) {
            echo "Товара нет на складе. Доступен предзаказ - обратитесь к нашему менеджеру! : )";
        } else {
            if ($leftInStock <= 0.3 * $stockSize) {
            echo '<strong>Товар заканчивается на складе!</strong>';
        } else {
            echo 'Товар на складе';
        }
        }
    }
}

echo '<br>Товары:<br><pre>';

print_r($product1 = new Product('Посуда', 'Пиала','Авторская', 456, 150, 54));
print_r($product2 = new Product('Посуда', 'Чашка', 'Русский фарфор', 55000, 14, 10));
print_r($product3 = new Product('Бытовая техника', 'Утюг', 'Phillips', 1500, 240, 0));

echo '</pre>';

?>