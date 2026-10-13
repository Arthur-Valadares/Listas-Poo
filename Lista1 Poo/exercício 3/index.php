<?php

Class Livro {
    public $nome;
    public $autor;
    public $ano;
    public $genero;
    public function abrirLivro(){
        echo ("O livro " . $this->nome . " foi aberto! \n");

    }

     public function selecionarPagina(){
        echo ("Escolhendo página... \n");

    }

     public function lerLivro(){
        echo ("Lendo livro... \n");

    }

     public function fecharLivro(){
        echo ("o livro " . $this->nome . " foi fechado! \n \n");

    }
    public function definirDados($nome){
        $this->nome = "LivroTeste";
    }
   
    public function getNome() { return $this->nome; }
    
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

$livro1->definirDados("Feliz ano novo");
$livro1->abrirLivro();
?>