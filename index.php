<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = 'Alexandre';
$idade = 15;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i < sizeof($categorias); $i++){
        if($categorias[$i] == 'infantil'){
        echo "Nadador " , $nome , ", você está na categoria INFANTIL.";
        }
    }
}

else if($idade >= 13 && $idade <= 17)
{
    for($i = 0; $i < sizeof($categorias); $i++){
        if($categorias[$i] == 'adolescentes'){
        echo "Nadador " , $nome , ", você está na categoria ADOLESCENTE.";
        }
    }
}

else
{
    for($i = 0; $i < sizeof($categorias); $i++){
        if($categorias[$i] == 'adulto'){
        echo "Nadador " , $nome , ", você está na categoria ADULTO.";
        }
    }
}
