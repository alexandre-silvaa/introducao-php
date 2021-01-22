<?php

// função para validar nome
function validaNome(string $nome) : bool {

    if(empty($nome)){
        setarMensagemErro('O campo nome não pode ser vazio. Preencha novamente.');
        return false;
    }
    
    else if(strlen($nome) < 3){
        setarMensagemErro('O nome não pode conter menos de 3 caracteres. Preencha novamente.');
        return false;
    }
    
    else if(strlen($nome) > 40){
        setarMensagemErro('O nome não pode conter mais de 40 caracteres. Preencha novamente.');
        return false;
    }
    return true;
}

// função para validar idade
function validaIdade(string $idade) : bool{

    //restrições para idade
    if(empty($idade)){
        setarMensagemErro('O campo idade não pode ser vazio. Preencha novamente.');
        return false;
    }

    else if(!is_numeric($idade)){
        setarMensagemErro('Digite uma valor númerico para idade. Preencha novamente.');
        return false;
    }

    else if(strlen($idade) > 2){
        setarMensagemErro('A idade deve conter até dois caracteres. Preencha novamente.');
        return false;
    }
    return true;
}
