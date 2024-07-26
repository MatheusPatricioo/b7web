
<?php
//CRUD: O INDEX SERVIRIA COMO O "R", DO CONCEITO CRUD.
//R:Read (ler)
require 'config.php';
$sql = $pdo->query("SELECT * FROM usuarios");
?>

<a href="adicionar.php">ADICIONAR USUARIO</a>

<table border ="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
</tr>
</table>