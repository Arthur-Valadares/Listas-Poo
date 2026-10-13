
<?php

class Aluno {
    private string $nome;
    private int $idade;
    private ?Turma $turma = null;

    public function __construct(string $nome, int $idade) {
        $this->nome = "Aluno não definido";
        $this->setNome($nome);
        $this->idade = $idade;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        if (strlen(trim($nome)) < 2) {
            echo "Erro: o nome deve ter pelo menos 2 caracteres.<br>";
            return;
        }

        $this->nome = $nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function getTurma(): ?Turma {
        return $this->turma;
    }

    public function setTurma(?Turma $turma): void {
        $this->turma = $turma;
    }
}

?>