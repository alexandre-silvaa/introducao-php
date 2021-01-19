<?php

$categorias = [];
$categorias[] = 'INFANTIL';
$categorias[] = 'ADOLESCENTE';
$categorias[] = 'ADULTO';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

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
