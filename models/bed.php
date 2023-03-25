<?php

require_once __DIR__ . "/product.php"; //faccio riferimento alla lista di prodotti

class Cuccia extends Prodotto //estendo la classe prodotto
{
    public $materiale; //caratteristiche in aggiunta di Cuccia
    public $forma; //caratteristiche in aggiunta di Cuccia

    public function __construct(
        string $nome,
        string $immagine,
        string $prezzo,
        Categoria $categoria, //lego categoria
        string $materiale, //caratteristiche in aggiunta di Cuccia
        string $forma //caratteristiche in aggiunta di Cuccia

    ) {
        parent::__construct($nome, $immagine, $prezzo, $categoria); //passo i parametri del genitore
        $this->materiale = $materiale; //caratteristiche in aggiunta di Cuccia
        $this->forma = $forma; //caratteristiche in aggiunta di Cuccia
    }
}
