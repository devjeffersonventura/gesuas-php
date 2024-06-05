<?php
require_once ('../model/Cadastro.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {
    $cadastro = new Cadastro();
    $nis = $cadastro->cadastrarCidadao($_POST['nome']);
    header("Location: ../../public/index.php?mensagem=Cidadão cadastrado com sucesso! NIS: $nis");
}
?>
