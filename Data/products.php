<?php

require_once __DIR__ . "/../models/categoria.php";
require_once __DIR__ . "/../models/product.php"; //tanto non la utilizzo
require_once __DIR__ . "/../models/food.php";
require_once __DIR__ . "/../models/bed.php";
require_once __DIR__ . "/../models/toy.php";

$dog = new Categoria("Cane", "fa-solid fa-dog"); // variabili per migliore leggibilità
$cat = new Categoria("Gatto", "fa-solid fa-cat"); // variabili per migliore leggibilità

$products = [
    new Cuccia("Morbidosa", "https://cdn.manomano.com/images/images_products/26388425/P/68008948_1.jpg", 10.10, $dog, "Stoffa", "tondeggiante"),
    new Cuccia("Casetta", "https://mangiardacani.it/wp-content/uploads/2019/04/cucce-per-cani-in-legno-doppie-con-veranda-grandi.jpeg", 10.10, $dog, "Plastica", "casetta"),

    new Giocattolo("Palla", "https://www.pacopetshop.it/3500-thickbox_default/palla-5-sensi-gioco-per-cani.jpg", 10.10, $dog, "Plastica", "per qualsiasi cane"),
    new Giocattolo("Frisbee", "https://it.blog.bepuppy.com/wp-content/uploads/2017/04/come-giocare-con-il-cane-a-frisbee.jpg", 10.10, $dog, "Plastica", "per cani di grossa taglia"),
    new Giocattolo("Topolino", "https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/51-EG8QtZLL._AC_SY355_.jpg", 10.10, $cat, "Stoffa", "Ideale per i cuccioli"),
    new Cibo("Simmental", "https://www.simmenthal.it/wp-content/uploads/prodotti-simmenthal-la-classica.png", 10.10, $dog, "Carne", "Scatola"),
    new Cibo("Misto", "https://rsbackend.blob.core.windows.net/brandbank-ufi/6616962_0_638016521975596554.png", 10.10, $dog, "Misto", "Busta"),
    new Cibo("Fish", "https://t1.ea.ltmcdn.com/it/posts/7/4/2/cibo_per_gatti_fatto_in_casa_con_il_pesce_1247_orig.jpg", 10.10, $cat, "Pesce", "Busta"),
];
