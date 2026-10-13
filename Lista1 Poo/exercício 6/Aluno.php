
<?php

class Aluno {
    private string $nome;
    private int $idade;
    private ?Turma $turma = null;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setTurma(Turma $turma): void {
        $this->turma = $turma;
    }

    public function getTurma(): ?Turma {
        return $this->turma;
    }
}

?>