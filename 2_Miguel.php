<?php
class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function exibirDados() {
        echo "Nome: {$this->nome}<br>";
        echo "Idade: {$this->idade}<br>";
    }
}

class Aluno extends Pessoa {
    private $disciplinas = [];

    public function __construct($nome, $idade, $disciplinas = []) {
        parent::__construct($nome, $idade);
        $this->disciplinas = $disciplinas;
    }

    public function exibirDados() {
        parent::exibirDados();
        echo "Disciplinas: " . implode(", ", $this->disciplinas) . "<br><br>";
    }
}


$aluno1 = new Aluno("Rafaela", 30, ["Matemática", "História", "Português"]);
$aluno1->exibirDados();
?>