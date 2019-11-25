<?php

function adicionar_endereco($CPF,$Logradouro,$Complemento,$Bairro,$Cidade,$CEP){
	$sql= "insert into endereco values('$CPF','$Logradouro','$Complemento','$Bairro','$Cidade','$CEP')";
	$resultado= mysqli_query($cnx = conn(),$sql);
	if(!$resultado) {
		die('Erro ao cadastrar endereço'. myslqi_error($cnx));
	}
	return 'Endereço cadastrado com sucesso';
}

function slc_tds_endereco() {
	$sql= "select * from endereco"; 
	$resultado= mysqli_query($cnx = conn(),$sql);
	$endereco = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
        $endereco[] = $linha;
    }
    return $endereco;
}

function del_endereco($id){
	$sql = "delete from endereco where idEndereco = '$id' ";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if (!$resultado){
		die('Erro ao deletar endereço'. myslqi_error($cnx));
	}
	return 'Endereço deletado com sucesso';
}

function slc_endereco($id){
	$sql = "select * from endereco where idEndereco = '$id' ";
	$resultado = mysqli_query($cnx = conn(), $sql);
	$endereco = mysql_fetch_assoc($resultado);
	return $endereco;
}

function edt_endereco($Logradouro,$Complemento,$Bairro,$Cidade,$CEP,$id){
	$sql = "update endereco set Logradouro = '$Logradouro', Complemento = '$Complemento', Bairro = '$Bairro', Cidade = '$Cidade', CEP = '$CEP' where idEndereco = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if (!$resultado){
		die('Erro ao alterar endereço'. myslqi_error($cnx));
	}
	return 'Endereço alterado com sucesso';
}

function  peqarIdEndereço($id){
	$sql = "SELECT idEndereco FROM endereco WHERE idUsuario = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	$endereco = mysql_fetch_assoc($resultado);
	return $endereco;
}