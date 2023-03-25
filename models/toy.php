<?php

require_once __DIR__ . "/product.php"; //faccio riferimento alla lista di prodotti

class Giocattolo extends Prodotto //estendo la classe prodotto
{
    public $materiale; //caratteristiche in aggiunta di Giocattolo
    public $utilizzo; //caratteristiche in aggiunta di Giocattolo

    public function __construct(
        string $nome,
        string $immagine,
        string $prezzo,
        Categoria $categoria, //lego categoria
        string $materiale, //caratteristiche in aggiunta di Giocattolo
        string $utilizzo //caratteristiche in aggiunta di Giocattolo

    ) {
        parent::__construct($nome, $immagine, $prezzo, $categoria); //passo i parametri del genitore
        $this->materiale = $materiale; //caratteristiche in aggiunta di Giocattolo
        $this->utilizzo = $utilizzo; //caratteristiche in aggiunta di Giocattolo
    }
}
