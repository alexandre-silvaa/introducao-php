<?php

session_start();

//funçções para mensagem de erro
function setarMensagemErro(string $mensagem) : void{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro() : ?string{
    if(isset($_SESSION['mensagem-de-erro']))
        return $_SESSION['mensagem-de-erro'];

    return null;
}

// funções para mensagem de sucesso
function setarMensageSucesso(string $mensagem) : void{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemSucesso() : ?string{
    if(isset($_SESSION['mensagem-de-sucesso']))
        return $_SESSION['mensagem-de-sucesso'];

    return null;
}

function setarMensagemSucesso(string $mensagem) : void{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

// funções para eliminar mensagens da sessão
function removerMensagemErro() : void {
    if(isset($_SESSION['mensagem-de-erro'])){
        unset($_SESSION['mensagem-de-erro']);
    }
}

function removerMensagemSucesso() : void {
    if(isset($_SESSION['mensagem-de-sucesso'])){
        unset($_SESSION['mensagem-de-sucesso']);
    }
}