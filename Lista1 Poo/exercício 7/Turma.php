
<?php

class Turma {
    private string $nome;
    private string $sala;
    private array $alunos = [];

    public function __construct(string $nome, string $sala) {
        $this->nome = $nome;
        $this->sala = $sala;
    }

  
    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getSala(): string {
        return $this->sala;
    }

    public function setSala(string $sala): void {
        $this->sala = $sala;
    }


    public function getAlunos(): array {
        return $this->alunos;
    }

    public function setAlunos(array $alunos): void {
        $this->alunos = $alunos;

        foreach ($alunos as $aluno) {
            $aluno->setTurma($this);
        }
    }

    public function adicionarAluno(Aluno $aluno): void {
        $this->alunos[] = $aluno;
        $aluno->setTurma($this);
    }
}

?>