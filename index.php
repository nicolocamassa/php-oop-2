<?php 
    // AGGIUNTA DELLA CLASSE PRODOTTO 
    // Questa classe contiene le informazioni generali dei prodotti
    class Product{
        public $name;
        public $price;
        public $weight;
        public $warranty;
        public $category; /* TODO: ogni categirua deve essere associata ad un animale (incapsulamento) */

        function __construct($_name, $_price, $_weight, $_warranty, $_category)
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
    class ProductType extends Product{
        public $genre;
        public $material;
        public $size;

        function __construct($_genre, $_material, $_size, $_name, $_price, $_weight, $_warranty, $_category)
        {
            parent::__construct($_name, $_price, $_weight, $_warranty, $_category);
            $this->genre = $_genre;
            $this->material = $_material;
            $this->size = $_size;
        }
        
    }
    /* CLASSE PRODOTTO (CATEGORIA)*/
    /* SOTTOCLASSE TIPO (GIOCHI, CUCCIA, CIBO) */
    /* CATEGORIA DA INCAPSULARE */

?>