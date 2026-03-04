<?php

class Produto{
    public string $nome;
    public float $preco;
    public int $estoque;
    public function apresentar(){
        echo "O produto $this->nome custa $this->preco reais e tem $this->estoque unidades em estoque.";
    }
}

$produto1 = new Produto;
$produto1->nome = "caderno";
$produto1->preco = 10.50;
$produto1->estoque = 2;

$produto1->apresentar();



?>