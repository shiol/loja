<h1>Produtos</h1>
<p>
    <a href="produto.cadastrar.php">Cadastrar</a>
    /
    <a href="http://localhost/phpmyadmin/">phpmyadmin</a>
</p>

<?php
$link = mysqli_connect('localhost', 'root', '', 'loja', '3306', '');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$result = mysqli_query($link, 'select * from produtos order by descricao');

echo '<table border=1 align=center>';
while ($dados = mysqli_fetch_array($result)) {
    echo '<tr><td width=100> ' . $dados[0] . '</td><td width=300>'  . $dados[1] . '</td></tr>';
}
echo '</table>';

mysqli_close($link);
