<?php

include __DIR__ . "/Data/products.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1>PET SHOP</h1>

        <div class="row row-cols-4 g-4">
            <?php foreach ($products as $product) : ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $product->getImmagine() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?= $product->getNome() ?>
                        </h3>
                        <small><i class="<?= $product->getCategoria()->getIcona() ?>"></i></small>
                        <?php if ($product instanceof Cuccia || $product instanceof Giocattolo) : ?>
                        <h4 class="card-subtitle"> <?= $product->materiale ?> </h4>
                        <?php endif; ?>
                        <?php if ($product instanceof Cuccia) : ?>
                        <h4 class="card-subtitle"> <?= $product->forma ?> </h4>
                        <?php endif; ?>
                        <?php if ($product instanceof Giocattolo) : ?>
                        <h4 class="card-subtitle"> <?= $product->utilizzo ?> </h4>
                        <?php endif; ?>
                        <?php if ($product instanceof Cibo) : ?>
                        <h4 class="card-subtitle"> <?= $product->gusto ?> </h4>
                        <h4 class="card-subtitle"> <?= $product->packaging ?> </h4>
                        <?php endif; ?>

                        <a href="#" class="btn btn-primary">Acquista</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</body>

</html>