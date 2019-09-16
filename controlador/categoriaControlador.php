<?php

require_once 'modelo/categoriaModelo.php';

function adicionarCat() {
    if (ehPost()) {
        $nome = $_POST["Nome"];
        
        $erros = [];
        
        if (strlen(trim(htmlentities($nome))) == 0) {
            $errors[] = "insira um nome...";
        }
        
        
        adicionarCategoria($nome);
        redirecionar("categoria/adicionar");
    } else {
        exibir("categoria/adicionar");
    }
}

function listar(){
    $dados = [];
    $dados["categoria"] = pegarTodasCategorias();
    exibir("categoria/listar", $dados);
}

function deletar($id){
    deletarCategoria($id);
    redirecionar("categoria/listar");
}

function visualizar($id){
    $dados["categoria"] = ver($id);
    exibir("categoria/visualizar", $dados);
}

function editarCat($id){
    if (ehpost()){
        $nome = $_POST["Nome"];
        
        editarCategoria($id);
        redirecionar("categoria/adicionar");
    }else{
        $dados = pegarCategoria($id);
        exibir("categoria/adicionarCat", $dados);
    }
}