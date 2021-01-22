<?php

//condições para realizar o cadastro
function defineCategoriaCompetidor(string $nome, string $idade) : ?string {
    
    $categorias = [];
    $categorias[] = 'INFANTIL';
    $categorias[] = 'ADOLESCENTE';
    $categorias[] = 'ADULTO';

    if(validaNome($nome) && validaIdade(($idade))){

        removerMensagemErro();
        if($idade >= 6 && $idade <= 12)
        {
            for($i = 0; $i < sizeof($categorias); $i++){
                if($categorias[$i] == 'INFANTIL'){
                    setarMensageSucesso("Nadador " . $nome . ", você está na categoria " . $categorias[$i] . ".");
                    return null;
                }
            }
        }

        else if($idade >= 13 && $idade <= 17)
        {
            for($i = 0; $i < sizeof($categorias); $i++){
                if($categorias[$i] == 'ADOLESCENTE'){
                    setarMensageSucesso("Nadador " . $nome . ", você está na categoria " . $categorias[$i] . ".");
                    return null;
                }
            }
        }

        else if($idade >= 18 && $idade <= 59)
        {
            for($i = 0; $i < sizeof($categorias); $i++){
                if($categorias[$i] == 'ADULTO'){
                setarMensageSucesso("Nadador " . $nome . ", você está na categoria " . $categorias[$i] . ".");
                    return null;
                }
            }
        }
    }

    else{
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}