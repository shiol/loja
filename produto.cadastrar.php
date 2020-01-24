<p>
    <a href="index.php">Index</a>
    /
    <a href="http://localhost/phpmyadmin/">phpmyadmin</a>
</p>

<?php
$link = mysqli_connect('localhost', 'root', '', 'loja', '3306', '');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$descricao = $_GET['descricao'];
$custo = $_GET['custo'];
$preco = $_GET['preco'];

mysqli_query(
    $link,
    'create table if not exists produtos (
        codigo int primary key auto_increment,
        descricao varchar(100),
        custo decimal(15,2),
        preco decimal(15,2),
    )'
);

$palavra = '';
for ($i = 0; $i < 5; $i++) {
    $palavra .= chr(random_int(97, 122));
}
$result = mysqli_query($link, 'insert into produtos (descricao) values (\'' . $palavra . '\')');

if ($result) {
    echo 'produto inserido com sucesso: ' . $palavra;
}
