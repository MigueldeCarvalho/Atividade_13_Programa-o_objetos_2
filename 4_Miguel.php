<?php
class Jogador {
    private $nome;
    private $nivel;

    public function __construct($nome, $nivel) {
        $this->nome = $nome;
        $this->nivel = $nivel;
    }

    public function getInfo() {
        return "{$this->nome} (Nível: {$this->nivel})";
    }
}

class Time {
    private $nome;
    private $ranking;
    private $jogadores = [];

    public function __construct($nome, $ranking) {
        $this->nome = $nome;
        $this->ranking = $ranking;
    }

    public function adicionarJogador(Jogador $jogador) {
        $this->jogadores[] = $jogador;
    }

    public function listarJogadores() {
        echo "Jogadores do {$this->nome} (Ranking {$this->ranking}):\n";
        foreach ($this->jogadores as $jogador) {
            echo "- " . $jogador->getInfo() . "\n";
        }
    }
}

$time = new Time("Clash", 3);
$time->adicionarJogador(new Jogador("Erik", 12));
$time->adicionarJogador(new Jogador("Gabriela", 15));
$time->listarJogadores();


?>