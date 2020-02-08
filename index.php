<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>
<h1>Produtos</h1>
<p>
    <a href="produto.cadastrar.html">Cadastrar</a>
</p>

<?php
$link = mysqli_connect('localhost', 'root', '', 'loja', '3306');

if (mysqli_connect_errno()) {
    printf("Erro: %s\n", mysqli_connect_error());
    exit();
}

$result = mysqli_query($link, 'select * from produtos order by descricao');

echo '<table border=1 align=center>';
echo '<tr><th>Código</th><th>Descrição</th><th>Custo</th><th>Preço</th></tr>';
while ($dados = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td width=100> ' . $dados[0] . '</td>';
    echo '<td width=300>'  . $dados[1] . '</td>';
    echo '<td width=100>'  . $dados[2] . '</td>';
    echo '<td width=100>'  . $dados[3] . '</td>';
    echo '</tr>';
}
echo '</table>';

mysqli_close($link);
