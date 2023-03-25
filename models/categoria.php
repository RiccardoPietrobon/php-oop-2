<?php

class Categoria
{
    protected $nome;

    public function __construct(string $nome)
    {
        $this->setNome($nome);
    }

    public function setNome($nome)
    {
        if ($nome !== "Gatto" || $nome !== "Cane") return false; //parametri stringa
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}
