<?php
class Passaporte {
    private $numero;
    private $dataEmissao;
    private $validade;

    public function __construct($numero, $dataEmissao, $validade) {
        $this->numero = $numero;
        $this->dataEmissao = $dataEmissao;
        $this->validade = $validade;
    }

    public function exibirInfo() {
        echo "Número: {$this->numero}<br>";
        echo "Emissão: {$this->dataEmissao}<br>";
        echo "Validade: {$this->validade}<br>";
    }
}

class PessoaComPassaporte {
    private $nome;
    private $dataNascimento;
    private $id;
    private $passaporte; 

    public function __construct($nome, $dataNascimento, $id) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->id = $id;
    }

    public function vincularPassaporte(Passaporte $passaporte) {
        $this->passaporte = $passaporte;
    }

    public function exibirInfoCompleta() {
        echo "Nome: {$this->nome}<br>";
        echo "Nascimento: {$this->dataNascimento}<br>";
        echo "ID: {$this->id}<br>";
        if ($this->passaporte) {
            echo "=== Dados do Passaporte ===<br>";
            $this->passaporte->exibirInfo();
        }
        echo "<br>";
    }
}


$pessoa = new PessoaComPassaporte("Vinicius Silva", "1994-05-10", 123);
$passaporte = new Passaporte("BR987654", "2020-01-01", "2032-01-01");
$pessoa->vincularPassaporte($passaporte);
$pessoa->exibirInfoCompleta();
?>