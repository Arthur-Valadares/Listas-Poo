
<?php

require_once 'Aluno.php';
require_once 'Turma.php';


$aluno = new Aluno("A", 17);
$turma = new Turma("Informática 2026", "Sala 05");


$aluno->setNome("A");
$aluno->setIdade(18);

$turma->setNome("Téc. em Informática");
$turma->setSala("Sala 10");


$turma->adicionarAluno($aluno);


echo "---Dados do Aluno--- \n";
echo "Nome: " . $aluno->getNome() . "\n";
echo "Idade: " . $aluno->getIdade() . "\n \n";

echo "---Dados da Turma--- \n";
echo "Nome: " . $turma->getNome() . "\n";
echo "Sala: " . $turma->getSala() . "\n \n";

echo "---Alunos matriculados--- \n";

foreach ($turma->getAlunos() as $alunoMatriculado) {
    echo $alunoMatriculado->getNome();
}

echo " - " .
     $aluno->getTurma()->getNome();

?>