<?php
class Musica {
    private $titulo;
    private $artista;
    private $duracao;

    public function __construct($titulo, $artista, $duracao) {
        $this->titulo = $titulo;
        $this->artista = $artista;
        $this->duracao = $duracao;
    }

    public function exibirInfo() {
        echo "Música: {$this->titulo}<br>";
        echo "Artista: {$this->artista}<br>";
        echo "Duração: {$this->duracao} min<br><br>";
    }
}


$musica1 = new Musica("Despacito", "Luis Fonsi", 3.0);
$musica1->exibirInfo();
?>