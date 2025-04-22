<?php
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    cadastrarProduto($_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['valor']);
    header("Location: index.php");
    exit;
}
?>

<h2>Adicionar Usuário</h2>
<form method="POST">
    Nome: <input type="text" name="nome"><br><br>
    Descrição: <input type="text" name="descricao"><br><br>
    Quantidade: <input type="number" name="quantidade"><br><br>
    Valor: <input type="number" name="valor"><br><br>

    <button type="submit">Salvar</button>
</form>