<?php

class Cidadao {
    private $nome;
    private $nis;

    public function __construct($nome) {
        $this->nome = $nome;
        $this->nis = $this->gerarNIS();
    }

    private function gerarNIS() {
        return rand(10000000000, 99999999999);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNIS() {
        return $this->nis;
    }
}
