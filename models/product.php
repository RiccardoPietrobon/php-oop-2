<?php

require_once __DIR__ . "/categoria.php"; //faccio riferimento al file della categoria

class Prodotto
{
    protected $nome;
    protected $immagine;
    protected $prezzo;
    protected $categoria;

    public function __construct(
        string $nome,
        string $immagine,
        string $prezzo,
        Categoria $categoria //lego categoria 
    ) {
        $this->nome = $nome;
        $this->immagine = $immagine;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }

    public function setNome($nome)
    {
        if (!is_string($nome) || $nome === "") return false; //se non è una stringa o vuoto
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
    //******************************************* */
    public function setImmagine($immagine)
    {
        if (!is_string($immagine) || $immagine === "") return false; //se non è una stringa o vuoto
        $this->immagine = $immagine;
    }

    public function getImmagine()
    {
        return $this->immagine;
    }
    //******************************************* */
    public function setPrezzo($prezzo)
    {
        if (!is_float($prezzo) || $prezzo > 0) return false; //se non è un float o maggiore di zero
        $this->prezzo = $prezzo;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }
    //******************************************* */
    public function setCategoria($categoria)
    {
        if (!$categoria instanceof Categoria) return false; //se non è un'istanza di Categoria
        $this->categoria = $categoria;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
}
