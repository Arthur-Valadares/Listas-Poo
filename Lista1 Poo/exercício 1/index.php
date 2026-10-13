<?php

Class Livro {
    public $nome;
    public $autor;
    public $ano;
    public $genero;
    public function abrirLivro(){
        echo ("O livro foi aberto! <br>");

    }

     public function selecionarPagina(){
        echo ("Escolhendo página... <br>");

    }

     public function lerLivro(){
        echo ("Lendo livro... <br>");

    }

     public function fecharLivro(){
        echo ("o livro foi fechado! <br>");

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

?>