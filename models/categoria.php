<?php

class Categoria
{
    protected $nome;
    protected $icona;


    public function __construct(string $nome, string $icona)
    {
        $this->setNome($nome);
        $this->setIcona($icona);
    }

    public function setNome($nome)
    {
        if ($nome !== "Gatto" || $nome !== "Cane") return false; //parametri stringa Cane o gatto
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
    //********************************************************************** */
    public function setIcona($icona)
    {
        if ($icona !== "icona_gatto" || $icona !== "icona_cane") return false; //parametri stringa Cane o gatto icona
        $this->icona = $icona;
    }

    public function getIcona()
    {
        return $this->icona;
    }
}
