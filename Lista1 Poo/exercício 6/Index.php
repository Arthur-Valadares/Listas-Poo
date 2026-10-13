
<?php

require_once 'Aluno.php';
require_once 'Turma.php';

$turma = new Turma("Informática 2026", "Sala 05");


$aluno = new Aluno("Pedro Silva", 17);


$turma->adicionarAluno($aluno);


echo "---Dados do Aluno--- \n";
echo "Nome: " . $aluno->getNome() . "\n";
echo "Idade: " . $aluno->getIdade() . "\n";
echo "Turma: " . $aluno->getTurma()->getNome() . "\n \n";

echo "---Dados da Turma--- \n";
echo "Nome: " . $turma->getNome() . "\n";
echo "Sala: " . $turma->getSala() . "\n \n";

echo "---Alunos matriculados--- \n";

foreach ($turma->getAlunos() as $alunoMatriculado) {
    echo $alunoMatriculado->getNome() . "\n";
}
