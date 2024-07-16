<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);


if($nome && $idade) {
echo 'NOME: '.$nome. "<br/>";
echo 'IDADE: '.$idade;
} else {
    echo 'NÃO ENVIOU!';
}