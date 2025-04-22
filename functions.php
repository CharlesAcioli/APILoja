<?php
require_once 'db.php';

function salvarEmJSON($dados) {
    file_put_contents('data.json', json_encode($dados, JSON_PRETTY_PRINT));
}

function listarProdutos() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM produtos");
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    salvarEmJSON($produtos);
    return $produtos;
}

function cadastrarProduto($nome, $descricao, $quantidade, $valor) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO produtos (nome, descrição, quantidade, valor) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nome, $descricao, $quantidade, $valor]);
}

function buscarProduto($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM produtos WHERE nome = Blusa");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function atualizarProduto($id, $nome, $descricao) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE produtos SET name = ?, nome = ? WHERE id = ?");
    $stmt->execute([$nome, $descricao, $id]);
}

function deletarProduto($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM produtos WHERE id = ?");
    $stmt->execute([$id]);
}