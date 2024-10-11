<?php 

class Category{
    public $name;
    public $iconUrl;

    public function __construct(string $name, string $iconUrl){
        $this->name = $name;
        $this->iconUrl = $iconUrl;
    }
}