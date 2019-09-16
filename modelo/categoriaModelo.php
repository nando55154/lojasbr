<?php

//" ; '

function adicionarCategoria($nome) {
    $sql = "INSERT INTO categoria(idCategoria, Nome) VALUES(NULL, '$nome')";
    if (!mysqli_query(conn(), $sql)) {
        die('Erro ao adicionar categoria ' . mysqli_error(conn()));
    }
    return "Categoria cadastrada com sucesso!!!";
}

function PegarTodasCategorias(){
    $sql = "SELECT * FROM categoria";
    $categoria= [];
    $resultado = mysqli_query(conn(), $sql);
    while ($linha = mysqli_fetch_assoc($resultado)) {
    $categoria[] = $linha;
    }
    return $categoria;
}

function deletarCategoria($id){
    $sql = "DELETE FROM categoria WHERE idCategoria = '$id'";
    if (!mysqli_query(conn(), $sql)) {
        die('Erro ao deletar categoria ' . mysqli_error(conn()));
    }
}

function ver($id){
    $sql = "SELECT * FROM categoria WHERE idCategoria = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $categoria = mysqli_fetch_assoc($resultado);
    return $categoria;
}

function editarCategoria ($id, $nome) {
$sql = "UPDATE categoria SET Nome = '$nome' WHERE idCategoria = '$id'";
$resultado = mysqli_query($cnx = conn(), $sql);
if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
return 'Usuário alterado com sucesso!';
}

function pegarCategoria($id){
    $sql = "SELECT * FROM categoria WHERE idCategoria = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $categoria = mysqli_fetch_assoc($resultado);
    return $categoria;
}
