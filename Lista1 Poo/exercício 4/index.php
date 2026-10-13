<?php


Class Livro {
    public $nome;
    public $autor;
    public $genero;
    public $preco;
    public $percentual;
    
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
    public function valor(){
        echo(" Este Livro está a venda pelo valor de R$ " . $preco . " \n");
    }
    
    public function definirDados($nome){
        $this->nome = "LivroTeste";
    }
    
       public function aplicarDesconto($preco, $percentual){
        $this->preco = $preco - ($preco * ($percentual / 100));
        
        
        echo ("Com o desconto de " . $percentual . "% o seu livro agora fica por R$ " . $this->preco);
    }
    
}

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

