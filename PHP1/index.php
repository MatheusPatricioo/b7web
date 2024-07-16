<?php require('header.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Envio de Dados</title>
    <!-- Define o título da página exibido na aba do navegador. -->
    <link rel="stylesheet" href="style.css">



<form method="POST" action="recebedor.php">


    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
</label>
<br/>
<br/>

<label>
        Idade:
        <br/>
        <input type="text" name="idade" required />

</label>
<br/>
<br/>

<input type="submit" value="Enviar" />
<br/>
<br/>

<form>
