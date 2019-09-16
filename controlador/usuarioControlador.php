<?php

require_once "./servico/validacaoServico.php";

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
        $nascimento = $_POST["nascimento"];
        $sexo = $_POST["sexo"];

        $error = array();


        // Validacao Geral
        $valNome = validarNome($nome);

        $valSobrenome = validarNome($sobrenome);

        $valEmail = validarEmail($email);

        $valSenha = validarSenha($senha);

        $valData = validarData($nascimento);

        $validacaoCpf = isCPFValido($cpf);

        if ($valNome == false) {
            $error[] = "Insira um nome";
            if ($valSobrenome == false) {
                $error[] = "Insira um sobrenome";
                if ($valEmail == false) {
                    $error[] = "Insira um email valido";
                    if ($valSenha == false) {
                        $error[] = "Insira uma enha sem caracteres especiais";
                        if ($valSenha == false) {
                            $error[] = "Insira uma enha sem caracteres especiais";
                            if ($valData == false) {
                                $error[] = "Insira uma data valida";
                                if ($validacaoCpf == false) {
                                    $error[] = "CPF invalido"; 
                                }
                            }
                        }
                    }
                }
            }
            print_r($error);
        } else {
            $msg = adicionarUsuario($nome, $sobrenome, $email, $senha, $cpf, $nascimento, $sexo);
        }
    }
    exibir("usuario/formulario");
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