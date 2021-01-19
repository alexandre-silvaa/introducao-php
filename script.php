<?php

$categorias = [];
$categorias[] = 'INFANTIL';
$categorias[] = 'ADOLESCENTE';
$categorias[] = 'ADULTO';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//restrições para nome
if(empty($nome)){
    echo "O campo nome não pode ser vazio";
    return;
}

if(strlen($nome) < 3){
    echo "O nome deve conter mais de três caracteres";
    return;
}

if(strlen($nome) > 40){
    echo "O nome é muito extenso";
    return;
}

//restrições para idade
if(strlen($idade) > 2){
    echo "A idade deve conter até dois caracteres";
    return;
}

if(empty($idade)){
    echo "O campo idade não pode ser vazio";
    return;
}

if(!is_numeric($idade)){
    echo "Digite um valor numérico para idade";
    return;
}


//condições para realizar o cadastro
if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i < sizeof($categorias); $i++){
        if($categorias[$i] == 'INFANTIL'){
        echo "Nadador " , $nome , ", você está na categoria " , $categorias[$i] , ".";
        }
    }
}

else if($idade >= 13 && $idade <= 17)
{
    for($i = 0; $i < sizeof($categorias); $i++){
        if($categorias[$i] == 'ADOLESCENTE'){
        echo "Nadador " , $nome , ", você está na categoria " , $categorias[$i] , ".";
        }
    }
}

else
{
    for($i = 0; $i < sizeof($categorias); $i++){
        if($categorias[$i] == 'ADULTO'){
        echo "Nadador " , $nome , ", você está na categoria " , $categorias[$i] , ".";
        }
    }
}
