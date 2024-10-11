<?php  
require_once __DIR__ . "/Product.php";

class Toy extends Product{
    //% ho ereditato tutte le proprieta' e tutte le capacita' della classe Product
    public $size;
    public $material;

    public function __construct(string $name,  string $description, string $imageUrl, int $numberInStock, Category $category, float $price, string $size, string $material){
        parent::__construct($name, $description, $imageUrl, $numberInStock, $category, $price);
        $this->size = $size;
        $this->material = $material;
    }

    // ovveride
    public function getDescription(): string{
        return "Toy: " . parent::getDescription();
    }

}