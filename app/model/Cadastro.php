<?php

require_once ('Cidadao.php');
require_once ('../util/ConexaoBanco.php');

class Cadastro {
    private $conexao;

    public function __construct($conexao = null) {
        $this->conexao = $conexao ?: getConexao();
    }

    public function cadastrarCidadao($nome) {
        $nome = trim($nome);
        $nome = preg_replace('/\s+/', ' ', $nome);

        $cidadao = new Cidadao($nome);

        while ($this->nisExiste($cidadao->getNIS())) {
            $cidadao->gerarNIS();
        }
    
        $stmt = $this->conexao->prepare('INSERT INTO cidadaos (nome, nis) VALUES (:nome, :nis)');

        $stmt->bindParam(':nome', $cidadao->getNome());
        $stmt->bindParam(':nis', $cidadao->getNIS());

        $stmt->execute();
    
        return $cidadao->getNIS();
    }
    

    public function buscarCidadao($nis) {
        $stmt = $this->conexao->prepare('SELECT nome FROM cidadaos WHERE nis = :nis');

        $stmt->bindParam(':nis', $nis);

        $stmt->execute();
        $result = $stmt->fetch();        

        if ($result) {
            return $result['nome'];
        } else {
            return "Cidadão não encontrado";
        }
    }

    private function nisExiste($nis) {
        $stmt = $this->conexao->prepare('SELECT COUNT(*) FROM cidadaos WHERE nis = :nis');
        
        $stmt->bindParam(':nis', $nis);
        
        $stmt->execute();
        
        $numRows = $stmt->fetchColumn();

        return $numRows > 0;
    }    
}
?>
