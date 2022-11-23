<?php
header('Access-Control-Allow-Origin: *'); // Permite que o front chame o back 
// https://developer.mozilla.org/pt-BR/docs/Web/HTTP/CORS

$email = $_POST['email'];

$resource = fopen('user.csv', 'a+');
fwrite($resource, $email);
fclose($resource);


print_r($_POST);