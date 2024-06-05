<?php
require_once ('../model/Cadastro.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nis'])) {
    $cadastro = new Cadastro();
    $nome = $cadastro->buscarCidadao($_POST['nis']);
    if ($nome === "Cidadão não encontrado") {
        header("Location: ../../public/index.php?mensagem=$nome");
    } else {
        header("Location: ../../public/index.php?mensagem=Nome: $nome, NIS: " . $_POST['nis']);
    }
}
?>
