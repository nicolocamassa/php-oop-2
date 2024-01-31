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
        return $this->name .
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio di animali</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
    body{
        font-family: 'Inter';
    }

    .img-container{
        width: 100%;
    }

    .img-container img{
        width: 100%;
    }

    .card{
        width: 350px;
        background-color: white;
        padding: 5px 20px;
        border-radius: 20px;
        -webkit-box-shadow: 0px 0px 23px -4px rgba(0,0,0,0.5); 
        box-shadow: 0px 0px 23px -4px rgba(0,0,0,0.5);
        margin-left: 50px;
        margin-bottom: 50px;
    }

    p{
        margin: 0;
    }
    .price{
        font-size: 20px;
    }

    .card-container{
        display: flex;
        flex-wrap: wrap;
    }
</style>
<body>
    <div class="card-container">
        <div class="card">
            <div class="img-container">
                <img src="<?php echo $product_type_royalCanin->image ?>" alt="">
            </div>
            <h1><?php echo '<p>' . $product_type_royalCanin->name . '</p>'; ?></h1>
            <div class="price"><?php echo '<p>' . $product_type_royalCanin->price .'€</p>'?></div>
            <div class="price"><?php echo '<p>' . $product_type_royalCanin->genre .'</p>'?></div>
        </div>

        <div class="card">
        <div class="img-container">
                <img src="<?php echo $product_type_almoNatureDog->image ?>" alt="">
            </div>
            <h1><?php echo '<p>' . $product_type_almoNatureDog->name . '</p>'; ?></h1>
            <div class="price"><?php echo '<p>' . $product_type_almoNatureDog->price .'€</p>'?></div>
            <div class="price"><?php echo '<p>' . $product_type_almoNatureDog->genre .'</p>'?></div>
        </div>


        <div class="card">
            <div class="img-container">
                <img src="<?php echo $product_type_almoNatureCat->image ?>" alt="">
            </div>
            <h1><?php echo '<p>' . $product_type_almoNatureCat->name . '</p>'; ?></h1>
            <div class="price"><?php echo '<p>' . $product_type_almoNatureCat->price .'€</p>'?></div>
            <div class="price"><?php echo '<p>' . $product_type_almoNatureCat->genre .'</p>'?></div>
        </div>


        <div class="card">
        <div class="img-container">
                <img src="<?php echo $product_type_guppy->image ?>" alt="">
            </div>
            <h1><?php echo '<p>' . $product_type_guppy->name . '</p>'; ?></h1>
            <div class="price"><?php echo '<p>' . $product_type_guppy->price .'€</p>'?></div>
            <div class="price"><?php echo '<p>' . $product_type_guppy->genre .'</p>'?></div>
        </div>


        <div class="card">
            <div class="img-container">
                <img src="<?php echo $product_type_wilma->image ?>" alt="">
            </div>
            <h1><?php echo '<p>' . $product_type_wilma->name . '</p>'; ?></h1>
            <div class="price"><?php echo '<p>' . $product_type_wilma->price .'€</p>'?></div>
            <div class="price"><?php echo '<p>' . $product_type_wilma->genre .'</p>'?></div>
        </div>


        <div class="card">
        <div class="img-container">
                <img src="<?php echo $product_type_easyCrystal->image ?>" alt="">
            </div>
            <h1><?php echo '<p>' . $product_type_easyCrystal->name . '</p>'; ?></h1>
            <div class="price"><?php echo '<p>' . $product_type_easyCrystal->price .'€</p>'?></div>
            <div class="price"><?php echo '<p>' . $product_type_easyCrystal->genre .'</p>'?></div>
        </div>


        <div class="card">
            <div class="img-container">
                <img src="<?php echo $product_type_trixie->image ?>" alt="">
            </div>
            <h1><?php echo '<p>' . $product_type_trixie->name . '</p>'; ?></h1>
            <div class="price"><?php echo '<p>' . $product_type_trixie->price .'€</p>'?></div>
            <div class="price"><?php echo '<p>' . $product_type_trixie->genre .'</p>'?></div>
        </div>
    </div>
</body>
</html>