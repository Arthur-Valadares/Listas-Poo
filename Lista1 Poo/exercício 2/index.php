<?php

Class Livro {
    public $nome;
    public $autor;
    public $ano;
    public $genero;
    public function abrirLivro(){
        echo ("O livro " . $this->nome . " foi aberto! <br>");

    }

     public function selecionarPagina(){
        echo ("Escolhendo página... <br>");

    }

     public function lerLivro(){
        echo ("Lendo livro... <br>");

    }

     public function fecharLivro(){
        echo ("o livro " . $this->nome . " foi fechado! <br> <br>");

    }

}

$livro1 = new Livro;
$livro1->nome = "Feliz ano novo";
$livro1->autor = "Rubem Fonseca";
$livro1->ano = 1975;
$livro1->genero = "Coletânea de Contos";


$livro1->abrirLivro();
$livro1->selecionarPagina();
$livro1->lerLivro();
$livro1->fecharLivro();

$livro2 = new Livro;
$livro2->nome = "Frankeinstein";
$livro2->autor = "Mary shelley";
$livro2->ano = 1818;
$livro2->genero = "Ficção cientifica";

$livro2->abrirLivro();
$livro2->selecionarPagina();
$livro2->lerLivro();
$livro2->fecharLivro();

$livro3 = new Livro;
$livro3->nome = "Coraline";
$livro3->autor = "Neil Gaiman";
$livro3->ano = 2002;
$livro3->genero = "Terror infantojuvenil";

$livro3->abrirLivro();
$livro3->selecionarPagina();
$livro3->lerLivro();
$livro3->fecharLivro();

//Os 3 objetos não se confundem porque estão listados em ordem, onde o programa irá ler cada objeto linha por linha, não havendo risco de executar os 3 objetos ao mesmo tempo.
?>