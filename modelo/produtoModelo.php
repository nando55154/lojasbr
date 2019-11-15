<?php

function pegarTodosProdutos() {
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}

function pegarProduto($id) {
    $sql = "SELECT * FROM produto WHERE idProduto = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}

function adicionarProduto($preco, $nomeProduto, $descricao, $categoria, $estoqueMin, $estoqueMax) {
    $sql = "INSERT INTO produto (Preco,NomeProduto, Descricao, Categoria, EstoqueMin ,EstoqueMax) 
    VALUES ('$preco','$nomeProduto', '$descricao', '$categoria', '$estoqueMin', '$estoqueMax')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao adicionar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}

function deletarProduto($id) {
    $sql = "DELETE FROM produto WHERE idProduto = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}
    
function editarProduto($id, $preco ,$nomeProduto, $descricao, $categoria) {
$sql = "UPDATE produto SET Preco = '$preco', NomeProduto = '$nomeProduto', Descricao = '$descricao', Categoria= '$categoria' WHERE idProduto = '$id'";
$resultado = mysqli_query($cnx = conn(), $sql);
if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
return 'Usuário alterado com sucesso!';
}

function BuscarProdutosPorNome($busca) {
    $sql = "SELECT * FROM produtos WHERE nomeproduto LIKE '%$busca%'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}