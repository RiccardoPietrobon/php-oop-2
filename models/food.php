<?php

require_once __DIR__ . "/product.php"; //faccio riferimento alla lista di prodotti

class Cibo extends Prodotto //estendo la classe prodotto
{
    public $gusto; //caratteristiche in aggiunta di Cibo
    public $packaging; //caratteristiche in aggiunta di Cibo

    public function __construct(
        string $nome,
        string $immagine,
        string $prezzo,
        Categoria $categoria, //lego categoria
        string $gusto, //caratteristiche in aggiunta di Cibo
        string $packaging //caratteristiche in aggiunta di Cibo

    ) {
        parent::__construct($nome, $immagine, $prezzo, $categoria); //passo i parametri del genitore
        $this->gusto = $gusto; //caratteristiche in aggiunta di Cibo
        $this->packaging = $packaging; //caratteristiche in aggiunta di Cibo
    }
}
