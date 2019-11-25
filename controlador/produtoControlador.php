<?php

require_once "modelo/produtoModelo.php";

function adicionar() {

    if (ehPost()) {
        $nomeProduto = $_POST["nomeproduto"];
        $descricao = $_POST["descricao"];
        $categoria = $_POST["categoria"];
        $preco = $_POST["preco"];
        $estoqueMin = $_POST["estoqueMin"];
        $estoqueMax = $_POST["estoqueMax"];
		$estoque = $_POST["estoque"];

        //validação

        $errors = array();
        if (strlen(trim(htmlentities($nomeProduto))) == 0) {
            $errors[] = "insira um id...";
        } else {
            
        }if (strlen(trim(htmlentities($descricao))) == 0) {
            $errors[] = "insira um nome...";
        } else {
            
        }if (strlen(trim(htmlentities($categoria))) == 0) {
            $errors[] = "Insira uma categoria...";
        } else {
            
        }if (strlen(trim(htmlentities($preco))) == 0) {
            $errors[] = "Insira um preco...";
        }else {
            
        }if (strlen(trim(htmlentities($estoqueMin))) == 0) {
            $errors[] = "Insira a quantidade minima ...";
        }else {
            
        }if (strlen(trim(htmlentities($estoqueMax))) == 0) {
            $errors[] = "Insira a quantidade maxima ...";
        }else {
            
        }if (strlen(trim(htmlentities($estoque))) == 0) {
            $errors[] = "Insira a quantidade em estoque ...";
        }
        
        $msg = adicionarProduto($preco, $nomeProduto, $descricao, $categoria,$estoqueMin, $estoqueMax, $estoque);
        echo $msg;
        redirecionar("produto/adicionar");
		}else{
			exibir("produto/formProd");
		}
	}																	

function deletar($id) {
	deletarProduto($id);
	redirecionar("produto/listar");
}

function visualizarProduto($id) {
    $dados["produto"] = pegarProduto($id);
    exibir("produto/visualizar", $dados);
}

function listar(){
    $dados = array();
    $dados["produto"] = pegarTodosProdutos();
    exibir("produto/listProd", $dados);
}

function editar($id){
    if (ehPost()){
        $nomeProduto = $_POST["nomeproduto"];
        $descricao = $_POST["descricao"];
        $categoria = $_POST["categoria"];
        $preco = $_POST["preco"];
        $estoqueMin = $_POST["estoqueMin"];
        $estoqueMax = $_POST["estoqueMax"];
		$estoque = $_POST["estoque"];        
        editarProduto($id, $preco, $nomeProduto, $descricao, $categoria, $estoqueMin, $estoqueMax, $estoque);
        redirecionar("produto/listar");
        
    }else{
        $dados["produto"] = pegarProduto($id);
        exibir("produto/formProd", $dados);
    }
}

function buscar() {
    if (ehPost()) {
        $busca = $_POST['busca'];
        $dados['produto'] = BuscarProdutosPorNome($busca);
        exibir("produto/listprod", $dados);
    }
}