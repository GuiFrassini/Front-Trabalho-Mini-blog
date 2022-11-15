<?php 

// recebe as variaveis
$nome       = $_POST['nome'];
$email      = $_POST['email'];
$data       = date('d/m/Y H:i:s');

// monta uma lista (processando)
$linha = $nome . ';' . $email . ';'. $data . PHP_EOL;


file_put_contents('dados.csv', $linha, FILE_APPEND);

header('Location: /publi.html');

$handle = fopen("dados.csv", "r");

if ($email === 'r') {
    $template = file_get_contents('pagina-logada.html');
    $template = str_replace('{LOGADO}', 'true', $template);

} else {
    $template = file_get_contents('pagina-nao-logada.html');

}