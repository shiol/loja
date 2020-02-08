<?php
$descricao = $_GET['descricao'];
$custo = $_GET['custo'];
$preco = $_GET['preco'];

$link = mysqli_connect('localhost', 'root', '', 'loja', '3306');

if (mysqli_connect_errno()) {
    printf("Erro: %s\n", mysqli_connect_error());
    exit();
}

mysqli_query(
    $link,
    'create table if not exists produtos (
        codigo int primary key auto_increment,
        descricao varchar(100),
        custo decimal(15,2),
        preco decimal(15,2)
    )'
);

$result = mysqli_query(
    $link,
    'insert into produtos (descricao, custo, preco) 
    values (\'' . $descricao . '\', ' . $custo . ', ' . $preco . ')'
);

echo '<h1>Cadastrar Produto</h1>';
if ($result) {
    echo 'Produto inserido com sucesso: ' . $descricao;
}

mysqli_close($link);
?>

<p>
    <a href="index.php">Index</a> - <a href="produto.cadastrar.html">Cadastrar Produto</a>
</p>