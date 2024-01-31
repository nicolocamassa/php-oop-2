<?php
// AGGIUNTA DELLA CLASSE PRODOTTO 
// Questa classe contiene le informazioni generali dei prodotti
class Product
{
    public $name;
    public $price;
    public $weight;
    public $warranty;
    public $category; /* TODO: ogni categirua deve essere associata ad un animale (incapsulamento) */

    function __construct($_name, $_price, $_weight, $_warranty, Category $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->weight = $_weight;
        $this->warranty = $_warranty;
        $this->category = $_category;
    }
}

// AGGIUNTA DELLA CLASSE TIPO PRODOTTO
// Questa classe contiene informazioni più specifiche sui prodotti
class ProductType extends Product
{
    public $genre;
    public $material;
    public $size;

    function __construct($_genre, $_material, $_size, $_name, $_price, $_weight, $_warranty, Category $_category)
    {
        parent::__construct($_name, $_price, $_weight, $_warranty, $_category);
        $this->genre = $_genre;
        $this->material = $_material;
        $this->size = $_size;
    }
}

class Category{
    public $animal;
    public $size;

    function __construct($_animal, $_size)
    {
        $this->animal = $_animal;
        $this->size = $_size;
    }
}

/* Incapsulamento delle categoria di animali */
$category_1 = new Category('Dog', '140');
$category_2 = new Category('Cat', '100');
$category_3 = new Category('Bird', '30');
$category_4 = new Category('Fish', '20');


/* CLASSE PRODOTTO (CATEGORIA)*/
/* SOTTOCLASSE TIPO (GIOCHI, CUCCIA, CIBO) */
/* CATEGORIA DA INCAPSULARE */

