<?php

require_once "modelo/produtoModelo.php";

function comprar($id) {
	$idProduto = $id;

	if (isset($_SESSION["carrinho"])) {
		$produto = $_SESSION["carrinho"];
	} else {
		$produto = array();
	}
	$produto[] = $idProduto;

	$_SESSION["carrinho"] = $produto;
	redirecionar("./");
}

function listarCarrinho() {
	if(isset($_SESSION["carrinho"])) {
		$dados = array();
		$produto = $_SESSION["carrinho"];
		$dados["total"] = 0;

		foreach ($produto as $id) {
			$ProdutoDoBanco = pegarProduto($id);
			$dados["total"] += $ProdutoDoBanco['Preco'];
			$ProdutoSession[] = $ProdutoDoBanco;
			$dados["listadeprodutos"] = $ProdutoSession;
		}

		exibir("carrinho/listCar", $dados);
	} else {
		echo "<h2>Seu carrinho está vazio</h2>";
		echo "<br>";
		echo "<a href='./'>VOLTAR</a>";
	}
}

function limparCarrinho() {
	unset($_SESSION['carrinho']);
	redirecionar("carrinho/listarCarrinho");
}

function removerProduto($id) {
	$produtos = $_SESSION['carrinho'];
	foreach ($produtos as $key => $produto) {
		if ($produto['idProduto'] == $id) {
			unset($produtos[$key]);
		}
	}
	$_SESSION['carrinho'] = $produtos;
	redirecionar("carrinho/listarCarrinho");
}

function index() {
	$dados = array();
	$dados["produto"] = pegarTodosProdutos();
	exibir("paginas/inicial", $dados);
}
