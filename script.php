<?php

session_start();

$categorias = [];
$categorias[] = 'INFANTIL';
$categorias[] = 'ADOLESCENTE';
$categorias[] = 'ADULTO';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//restrições para nome
if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = "O campo nome não pode ser vazio. Preencha novamente.";
    header('location: index.php');
    return;
}

else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = "O nome não pode conter menos de 3 caracteres. Preencha novamente.";
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = "O nome não pode conter mais de 40 caracteres. Preencha novamente.";
    header('location: index.php');
    return;
}

//restrições para idade
else if(empty($idade)){
    $_SESSION['mensagem-de-erro'] = "O campo idade não pode ser vazio. Preencha novamente.";
    header('location: index.php');
    return;
}

else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = "Digite uma valor númerico para idade. Preencha novamente.";
    header('location: index.php');
    return;
}

else if(strlen($idade) > 2){
    $_SESSION['mensagem-de-erro'] = "A idade deve conter até dois caracteres. Preencha novamente.";
    header('location: index.php');
    return;
}

//condições para realizar o cadastro
if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i < sizeof($categorias); $i++){
        if($categorias[$i] == 'INFANTIL'){
            $_SESSION['mensagem-de-sucesso'] = "Nadador " . $nome . ", você está na categoria " . $categorias[$i] . ".";
            header('location: index.php');
            return;
        }
    }
}

else if($idade >= 13 && $idade <= 17)
{
    for($i = 0; $i < sizeof($categorias); $i++){
        if($categorias[$i] == 'ADOLESCENTE'){
            $_SESSION['mensagem-de-sucesso'] = "Nadador " . $nome . ", você está na categoria " . $categorias[$i] . ".";
            header('location: index.php');
            return;
        }
    }
}

else
{
    for($i = 0; $i < sizeof($categorias); $i++){
        if($categorias[$i] == 'ADULTO'){
            $_SESSION['mensagem-de-sucesso'] = "Nadador " . $nome . ", você está na categoria " . $categorias[$i] . ".";
            header('location: index.php');
            return;
        }
    }
}
