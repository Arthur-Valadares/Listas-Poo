
<?php

class Aluno {
    private string $nome;
    private int $idade;
    private ?Turma $turma = null;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Getter e setter do nome
    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    // Getter e setter da idade
    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    // Getter e setter da turma
    public function getTurma(): ?Turma {
        return $this->turma;
    }

    public function setTurma(?Turma $turma): void {
        $this->turma = $turma;
    }
}

?>