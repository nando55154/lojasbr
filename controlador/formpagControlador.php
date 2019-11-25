<?php

require_once "modelo/formpagModelo";

function adicionarformPag(){
    if(ehPost()){
        $descricao = $_POST["descricao"];
        
        $errors = array();
        if (strlen(trim(htmlentities($descricao))) == 0) {
            $errors[] = "insira a descrição...";
        }
        $msg = adicionar_formPag($descricao);
        echo $msg;
        redirecionar("formPag/adicionar");
    } else {
        exibir("formPag/formula_FormPag");
    }
}

function deletarformPag($id){
    deletar_formPag($id);
    redirecionar("formPag/listar");
}

function editarformPag($id){
   if(ehPost()){
        $descricao = $_POST["descricao"];
        
   
        $msg = editar_formPag($id,$descricao);
        redirecionar("formPag/listar_formPag");
   } else {
       $dados["fromPag"] = visualizar_formPag($id);
       exibir("formPag/formula_formPag", $dados);
   }
}

function tdsformPag(){
    
}