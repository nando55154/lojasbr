<?php

require_once "modelo/formpagModelo";

function adicionarformPag(){
    if(ehPost()){
        $descricao = $_POST["descricao"];
        
        $errors = array();
        if (strlen(trim(htmlentities($descricao))) == 0) {
            $errors[] = "insira a descrição...";
        }
        $msg = adicionarformPag($descricao);
        redirecionar("formPag/adicionar");
    } else {
        exibir("formPar/formFormPag");
    }
}

function deletarformPag($id){
    deletar_formPag($id);
    redirecionar("formPag/listar");
}

function editarformPag(){
    
}