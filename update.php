<?php
require 'functions.php';

$id = $_GET['ID_produto'];
$produto = buscarProduto($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    atualizarProduto($id, $_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['valor']);
    header("Location: index.php");
    exit;
}
?>

<h2>Editar Usuário</h2>
<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $produto['name'] ?>"><br><br>
    Descrição: <input type="text" name="descricao" value="<?= $produto['descricao'] ?>"><br><br>
    Quantidade: <input type="number" name="quantidade" value="<?= $produto['quantidade'] ?>"><br><br>
    Valor: <input type="number" name="valor" value="<?= $produto['valor']?>"><br><br>
    <button type="submit">Atualizar</button>
</form>