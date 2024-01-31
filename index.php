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
    function getProduct()
    {
        return  'Nome Prodotto: ' . $this->name .
            ' Prezzo: ' . $this->price . '€' .
            ' Peso: ' . $this->weight . 'Kg' .
            ' Garanzia: ' . $this->warranty .
            ' Categoria: ' . $this->category->animal .
            ' Immagine: ' . $this->image;
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

    function mainInfoProduct()
    {
        return  'Nome Prodotto: ' . $this->name .
            ' Genere: ' . $this->genre .
            ' Materiale: ' . $this->material .
            ' Grandezza: ' . $this->size .
            ' Immagine: ' . $this->image;
    }
}

/* CREAZIONE DELLA CLASSE CATEOGORIA */
class Category
{
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
$product_type_royalCanin = new ProductType('Cibo', 'Plastica', 50, 'Royal Canin Mini Adult', 3, 5, 'Nessuna', $category_dog, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000');
$product_type_almoNatureCat = new ProductType('Cibo', 'Metallo', 20, 'Almo Nature Cat Daily Lattina', 1.5, 0.5, 'Nessuna', $category_cat, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');
$product_type_almoNatureDog = new ProductType('Cibo', 'Plastica', 50, 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 3, 5, 'Nessuna', $category_dog, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg');
$product_type_guppy = new ProductType('Cibo', 'Plastica', 10, 'Mangime per Pesci Guppy in Fiocchi', 2.5, 0.5, 'Nessuna', $category_fish, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg');
$product_type_wilma = new ProductType('Gabbia', 'Legno', 200, 'Voliera Wilma in Legno', 50, 20, '2', $category_bird, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg');
$product_type_easyCrystal = new ProductType('Filtri', 'Plastica', 30, 'Cartucce Filtranti per Filtro EasyCrystal', 10, 200, 'Nessuna', $category_fish, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg');
$product_type_kongClassic = new ProductType('Giocattolo', 'Plastica', 30, 'Kong Classic', 10, 100, 'Nessuna', $category_dog, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg');
$product_type_trixie = new ProductType('Giocattolo', 'Tessuto', 30, 'Topini di peluche Trixie', 10, 50, 'Nessuna', $category_cat, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg');

/* TODO: STAMPARE PRODOTTI NELLE CARD */

/* VISUALIZZAZIONE DEI PRODOTTI */
echo '<p>' . $product_type_royalCanin->mainInfoProduct() . '</p>';
echo '<p>' . $product_type_almoNatureDog->mainInfoProduct() . '</p>';
echo '<p>' . $product_type_almoNatureCat->mainInfoProduct() . '</p>';
echo '<p>' . $product_type_guppy->mainInfoProduct() . '</p>';
echo '<p>' . $product_type_wilma->mainInfoProduct() . '</p>';
echo '<p>' . $product_type_easyCrystal->mainInfoProduct() . '</p>';
echo '<p>' . $product_type_trixie->mainInfoProduct() . '</p>';
