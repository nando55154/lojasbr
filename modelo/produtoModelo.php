<?php


function pegarTodosProdutos($inicio,$registro) {
    $sql = "SELECT * FROM produto LIMIT '$inicio','$registro'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}

function cont_row($inicio,$registro){
    $sql = "SELECT * FROM produto LIMIT '$inicio','$registro" ;
    $resultado = mysqli_query(conn(), $sql);
    $banco = mysqli_num_rows($resultado);
    
    return $banco;
    
}

function pegarProduto($id) {
    $sql = "SELECT produto.*, estoque.Quantidade FROM produto INNER JOIN estoque ON prodito.idProduto = estoque.idProduto WHERE idProduto = '$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}

function adicionarProduto($preco, $nomeProduto, $descricao, $categoria, $estoqueMin, $estoqueMax,$quantidade) {
    $cnx = conn();
	$sql = "INSERT INTO produto (Preco,NomeProduto, Descricao, Categoria, EstoqueMin ,EstoqueMax) VALUES ('$preco','$nomeProduto', '$descricao', '$categoria', '$estoqueMin', '$estoqueMax')";
    
	$resultado = mysqli_query($cnx, $sql);
	$idProduto = mysqli_insert_id($cnx);
	
	adicionarEstoque($idProduto, $quantidade);
	 
    if(!$resultado) { die('Erro ao adicionar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}


function deletarProduto($id) {
    $sql = "DELETE FROM produto WHERE idProduto = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
	deletarEstoque($id);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
            
}
    
function editarProduto($id, $preco ,$nomeProduto, $descricao, $categoria, $quantidade) {
	$sql = "UPDATE produto SET Preco = '$preco', NomeProduto = '$nomeProduto', Descricao = '$descricao', Categoria= '$categoria' WHERE idProduto = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	editarEstoque($quantidade, $idProduto);
	if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
	return 'Usuário alterado com sucesso!';
}

function BuscarProdutosPorNome($busca) {
    $sql = "SELECT * FROM produtos WHERE nomeproduto LIKE '%'$busca'%'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}

/*estouqe*/
function adicionarEstoque($idProduto, $quantidade) {
	$sql = "INSERT INTO estoque VALUES('$idProduto, $quantidade')";
	$resultado = mysqli_query($cnx = conn(), $sql);
}

function deletarEstoque($idProduto){
	$sql = "DELETE FROM estoque WHERE idProduto = '$idProduto'";
	$resultado = mysqli_query($cnx = conn(), $sql);
}

function editarEstoque($quantidade, $idProduto){
	$sql = "UPDATE estoque SET Quantidade = '$quantidade' WHERE idProduto = '$idProduto'";
	$resultado = mysqli_query($cnx = conn(), $sql);
}