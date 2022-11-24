<?php
header('Access-Control-Allow-Origin: *'); // Permite que o front chame o back 
require_once 'Pessoa.php';
$pessoa = new Pessoa("railway", "containers-us-west-133.railway.app", "root", "5qAhjSTdOTr0gaFyxBqZ");



$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$pessoa->casdastrarPessoa($nome, $telefone, $email);

print_r($_POST);