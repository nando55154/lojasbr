<?php

//require_once "./servico/validacaoServico.php";

require_once "./modelo/usuarioModelo.php";

function listar() {
    $dados = array();
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $nascimento = $_POST["data"];
        $sexo = $_POST["sexo"];
        $msg = adicionarUsuario($nome, $sobrenome, $email, $senha, $cpf, $nascimento, $sexo);
        redirecionar("usuario/adicionar");
        }else {
               exibir("usuario/formulario");
        }

}

function deletar($id) {
    $msg = deletarUsuario($id);
    redirecionar("usuario/listar");
}

function visualizar($id) {
    $dados["usuario"] = ver($id);
    exibir("usuario/visualizar", $dados);
}

function editar($id){
    if (ehPost()){
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $nascimento = $_POST["nascimento"];
        $sexo = $_POST["sexo"];
        
        editarUsuario($id, $nome, $sobrenome, $email, $senha, $cpf, $nascimento, $sexo);
        redirecionar("usuario/listar");
    }else{
        $dados["usuario"] = pegarUsuarioPorId($id);
        exibir("usuario/formulario", $dados);
    }
}


function administrador(){
    exibir("administrador/administrador");
}