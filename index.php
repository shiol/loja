<h1>Produtos</h1>
<p>
    <a href="produto.cadastrar.html">Cadastrar</a>
</p>

<?php
$link = mysqli_connect('localhost', 'root', '', 'loja', '3306');

if (mysqli_connect_errno()) {
    printf("erro: %s\n", mysqli_connect_error());
    exit();
}

$result = mysqli_query($link, 'select * from produtos order by descricao');

echo '<table border=1 align=center>';
while ($dados = mysqli_fetch_array($result)) {
    echo '<tr><td width=100> ' . $dados[0] . '</td><td width=300>'  . $dados[1] . '</td></tr>';
}
echo '</table>';

mysqli_close($link);
