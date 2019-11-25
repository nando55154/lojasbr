<?php

function adicionarCupom($NomeCupom, $desconto){
    $sql = "INSERT INTO cupom (NomeCupom, Desconto) VALUES ('$NomeCupom', '$desconto')";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($resultado);
    return $cupom;
}

function listarCupom(){
    $sql = "SELECT * FROM cupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $cupom[] = $linha;
    }
    return $cupom;
}

function deletarCupom($id){
    $sql = "DELETE FROM cupom WHERE idCupom = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar cupom' . mysqli_error($cnx)); }
    return 'Cupom deletado com sucesso!';
}

function editarCupom($id, $NomeCupom, $desconto){
    $sql= "UPDATE cupom SET NomeCupom='$NomeCupom', Desconto='$desconto' WHERE idCupom='$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar cupom' . mysqli_error($cnx)); }
    return 'Cupom alterado com sucesso!';
}

function visualizar_Cupom($id){
    $sql = "SELECT * FROM cupom WHERE idCupom = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($resultado);
    return $cupom;
}