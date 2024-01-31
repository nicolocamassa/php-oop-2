<?php
// AGGIUNTA DELLA CLASSE PRODOTTO 
// Questa classe contiene le informazioni generali dei prodotti
class Product
{
    public $name;
    public $price;
    public $weight;
    public $warranty;
    public $category;
    public $image;

    function __construct($_name, $_price, $_weight, $_warranty, Category $_category, $_image)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->weight = $_weight;
        $this->warranty = $_warranty;
        $this->category = $_category;
        $this->image = $_image;
    }

    /* STAMPA DELLE INFORMAZIONI DEL PRODOTTO */
    function getProduct(){
        return  'Nome Prodotto: '.$this->name.
                ' Prezzo: '.$this->price.'€'.
                ' Peso: '.$this->weight.'Kg'.
                ' Garanzia: '.$this->warranty.
                ' Categoria: '.$this->category->animal.
                ' Immagine: '.$this->image;
    }
}

// AGGIUNTA DELLA CLASSE TIPO PRODOTTO
// Questa classe contiene informazioni più specifiche sui prodotti
class ProductType extends Product
{
    public $genre;
    public $material;
    public $size;

    function __construct($_genre, $_material, $_size, $_name, $_price, $_weight, $_warranty, Category $_category, $_image)
    {
        parent::__construct($_name, $_price, $_weight, $_warranty, $_category, $_image);
        $this->genre = $_genre;
        $this->material = $_material;
        $this->size = $_size;
    }

    function mainInfoProduct(){
        return  'Nome Prodotto: '.$this->name.
                ' Genere: '.$this->genre.
                ' Materiale: '.$this->material.
                ' Grandezza: '.$this->size.
                ' Immagine: '.$this->image;
    }
}

/* CREAZIONE DELLA CLASSE CATEOGORIA */
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
$category_dog = new Category('Dog', '140');
$category_cat = new Category('Cat', '100');
$category_bird = new Category('Bird', '30');
$category_fish = new Category('Fish', '20');

/* INSERIMENTO DEI DATI PER OGNI PRODOTTO */
/* Genere prodotto, Materiale, Grandezza, Nome, Prezzo, Peso, Garanzia, Categoria, Immagine */
$product_type_almoNature = new ProductType('Cibo', 'Metallo', 20, 'Almo Nature', 1.5, 0.5, 'Nessuna', $category_cat, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');
$product_type_2 = new ProductType('Cibo', 'Plastica', 100, 'Dog Toy', 10, 0.5, 1, $category_dog, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');


/* VISUALIZZAZIONE DEI PRODOTTI */
echo '<p>'.$product_type_almoNature->mainInfoProduct().'</p>';

