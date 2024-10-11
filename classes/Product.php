<?php 

require_once __DIR__ . "/Category.php";

/**
 * Class to be used as a product in our simple ecommerce system.
 * 
 * @author Classe 131 Boolean.careers
 * 
 */
class Product{
    //  %  attributi, campi o variabili di istanza
    // # aggiungiamo incapsulamento
    private string $name;
    private string $description;
    private string $imageUrl;
    private int $numberInStock;
    private Category $category;
    private float $price;


    public function __construct(string $name,  string $description, string $imageUrl, int $numberInStock, Category $category, float $price){
        $this->name = $name;
        $this->description = $description;
        $this->imageUrl = $imageUrl;
        $this->numberInStock = $numberInStock;
        $this->category = $category;
        $this->price = $price;
    }

    /**
     * Checks if this product is still available or not.
     *
     * @return boolean Returns true if this product is still available, false otherwise.
     */
    public function isAvailable() : bool{
        if ( $this->numberInStock > 0 ){
            return true;
        } else {
            return false;
        }
    }

    /**
     * Tries to buy a product given the amount requested.
     *
     * @param integer $quantity the quantity of this product to buy.
     * @return boolean|float when available returns the total price if the bought produtcs, false otherwise.
     */
    public function buy(int $quantity = 1) : bool|float{
        if ($quantity >= 1 && $quantity <= $this->numberInStock){
            $this->numberInStock = $this->numberInStock - $quantity; 
            return $quantity * $this->price;
        } else {
            // % lancia eccezione prodotto finito
            return false;
        }
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function getImageUrl(): string {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): void {
        $this->imageUrl = $imageUrl;
    }

    public function getNumberInStock(): int {
        return $this->numberInStock;
    }

    private function setNumberInStock(int $numberInStock): void {
        $this->numberInStock = $numberInStock;
    }

    public function getCategory(): Category {
        return $this->category;
    }

    public function setCategory(Category $category): void {
        $this->category = $category;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    

}