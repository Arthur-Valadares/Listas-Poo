
<?php

require_once 'Aluno.php';
require_once 'Turma.php';

$aluno1 = new Aluno("Pedro Silva");


$aluno2 = new Aluno("Maria Souza", 20);


echo "--- Aluno 1--- \n";
echo "Nome: " . $aluno1->getNome() . "\n";
echo "Idade: " . $aluno1->getIdade() . "\n \n";


echo "---Aluno 2--- \n";
echo "Nome: " . $aluno2->getNome() . "\n";
echo "Idade: " . $aluno2->getIdade() . "\n";

?>