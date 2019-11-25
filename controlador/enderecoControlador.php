<?php

function adc_endereco(){
    if(ehPost()){
        $idusuario = acessoPegarIdLogado();
        $logradouro = $_POST["logradouro"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
        
        $erros = array();
        
        if (strlen(trim(htmlentities($logradouro))) == 0) {
            $errors[] = "insira um endereço...";
        }else{
            
        }if (strlen(trim(htmlentities($bairro))) == 0) {
            $errors[] = "insira um bairro...";
        }else{
            
        }if (strlen(trim(htmlentities($cidade))) == 0) {
            $errors[] = "insira uma cidade...";
        }else{
            
        }if (strlen(trim(htmlentities($cep))) == 0) {
            $errors[] = "insira seu cep...";
        }
    
        $msg = add_endereco($idusuario,$logradouro,$complemento,$bairro,$cidade,$cep);
        echo $msg;
        redirecionar("endereco/adicionar");
        }else{
            exibir("endereco/adicionar");
        }
    
}

function dlt_endereco($id){
    del_endereco($id);
    redirecionar("endereco/listar");
}

function listar_endereco(){
    $dados = [];
    $dados["endereco"] = slc_tds_endereco();
    exibir("endereco/listar", $dados);
}

function visu_endereco($id){
    $dados["endereco"] = slc_endereco($id);
    exibir("endereco/visualizar", $dados);
}

function edtEndereco($id){
    if(ehPost()){
        $logradouro = $_POST["logradouro"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
        
        edt_endereco($id,$logradouro,$complemento,$bairro,$cidade,$cep);
        redirecionar("endereco/listar");
    }else{
        $dados["endereco"] = slc_endereco($id);
        exibir("endereco/formulario", $dados);
    }
}