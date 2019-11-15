<?php

function add_estoque(){
    if(ehPost()){
		$id_produto = $_POST["idProduto"];
		$qtde = $_POST["quantidade"];
		
		$errors = array();
		if (strlen(trim(htmlentities($id_produto))) == 0){
			 $errors[] = "insira o id do produto...";
        } else {
            
		}
		if (strlen(trim(htmlentities($qtde))) == 0){
			 $errors[] = "insira a quantidade...";
        } else {
            
		}
		
		$msg = addEstoque($id_produto, $qtde);
		
		
}

}