

<?php

class Aluno{
    public string $nome;
    public float $nota1;
    public float $nota2;
    
     
    function Exibir(){
        echo "Aluno: $this->nome. Média: ";
    }

    function Calcular(){
    echo ($this->nota1 + $this->nota2)/2;
    } 
     
    }


$aluno1 = new Aluno;
$aluno1->nome = "João";
$aluno1->nota1 = 7.0;
$aluno1->nota2 = 5.0;

$aluno1->Exibir();
$aluno1->Calcular();







?>