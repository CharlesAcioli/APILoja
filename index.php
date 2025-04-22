<?php
require 'functions.php';
$produtos = listarProdutos();
?>

<h2>Usuários</h2>
<a href="create.php">Adicionar Novo</a>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Valor</th>
    </tr>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?= $produto['ID_produto'] ?></td>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['descricao'] ?></td>
            <td><?= $produto['quantidade']?></td>
            <td><?= $produto['valor']?></td>
            <td>
                <a href="update.php?id=<?= $produto['nome'] ?>">Editar</a> |
                <a href="delete.php?id=<?= $produto['nome'] ?>" onclick="return confirm('Deseja deletar?')">Deletar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>