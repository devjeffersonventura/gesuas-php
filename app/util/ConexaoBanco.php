<?php
function getConexao() {
    $host = 'localhost';
    $dbname = 'gesuas';
    $user = 'root';
    $password = '';

    try {
        $conexao = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    } catch(PDOException $e) {
        echo 'Erro de conexão: ' . $e->getMessage();
    }
}
?>
