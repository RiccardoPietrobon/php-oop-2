<?php

require_once __DIR__ . "/../models/categoria.php";
require_once __DIR__ . "/../models/product.php";

$products = [
    new Prodotto("Palla", "immagine", 10.10, new Categoria("Cane")),
    new Prodotto("Palla", "immagine", 10.10, new Categoria("Cane")),
    new Prodotto("Palla", "immagine", 10.10, new Categoria("Cane")),
    new Prodotto("Palla", "immagine", 10.10, new Categoria("Cane")),
    new Prodotto("Palla", "immagine", 10.10, new Categoria("Cane")),
    new Prodotto("Palla", "immagine", 10.10, new Categoria("Cane")),
    new Prodotto("Palla", "immagine", 10.10, new Categoria("Cane")),
    new Prodotto("Palla", "immagine", 10.10, new Categoria("Cane")),
];
