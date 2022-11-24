<?php
require_once 'Pessoa.php';
$pessoa = new Pessoa("crudpdo2", "localhost", "root", "123456");


header('Access-Control-Allow-Origin: *'); // Permite que o front chame o back 

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$pessoa->casdastrarPessoa($nome, $telefone, $email);

print_r($_POST);