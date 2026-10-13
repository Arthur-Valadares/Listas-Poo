<?php

require_once('Livro.php');

$livro1 = new Livro;
$livro1->nome = "Feliz ano novo";
$livro1->autor = "Rubem Fonseca";
$livro1->genero = "Coletânea de Contos";
$livro1->preco = 78.00;
$livro1->percentual = 10.00;


$livro1->abrirLivro();
$livro1->selecionarPagina();
$livro1->lerLivro();
$livro1->fecharLivro();

$livro1->definirDados("Feliz ano novo");
$livro1->aplicarDesconto(78.00, 10.00);

?>