<?php
include("conexao.php");

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$marca = $_POST['marca'];

if (!$nome || !$descricao || !$preco || !$marca) {
    echo "<script>
            alert('Preencha todos os campos!');
            window.history.back();
          </script>";
    exit();
}

$query = "INSERT INTO produtos (nome, descricao, preco, marca) VALUES (:nome, :descricao, :preco, :marca)";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':marca', $marca);

if ($stmt->execute()) {
    echo "<script>
            alert('Produto cadastrado com sucesso!');
            window.location.href = '/site/php/home.php';
          </script>";
} else {
    echo "<script>
            alert('Erro ao cadastrar o produto.');
            window.history.back();
          </script>";
}
?>
