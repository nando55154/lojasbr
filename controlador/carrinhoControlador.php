<?php
require_once "modelo/produtoModelo.php";
function comprar($id) {
    // se existir a session carrinho
    if (isset($_SESSION["carrinho"])) {
        // produtos recebe session carrinho, pega o conteúdo dela
        $produto = $_SESSION["carrinho"];
    } else {
        // produtos recebe um array vazio
        $produto = [];
    }
    //verificar se existe o produto ja na lista de produtos!
    $chave = existeProdutoNoCarrinho($produto, $id);
    $produtos["quantidade"] = 0; 
    if ($chave === false) {
        $produtos = pegarProduto($id);
        $produtos["quantidade"] = 1;
        $produto[] = $produtos;
    } else {
        $produtos = $produtos[$chave];
        $produtos["quantidade"]++;
        $produto[$chave] = $produtos;
    }
    // produtos na posição dinâmica recebe o produto
    // salva todos os produtos na session carrinho
    $_SESSION["carrinho"] = $produtos;
    // redirecionar para a função de exibição de produtos
    redirecionar("carrinho/listarCarrinho");
}
function existeProdutoNoCarrinho($produto, $id) {
    foreach ($produto as $chave => $produtos) {
        if ($produtos["idProduto"] == $id) { //ja existe
            return $chave;
        }
    }
    return false;
}
function listarCarrinho() {
    $total = 0;
    $todos = array();
    if(isset($_SESSION["carrinho"])) {
        $produto = $_SESSION["carrinho"];
        //print_r($produtos);
        foreach ($produto as $produtos):
            $prod = pegarProduto($produtos);
            $todos[] = $prod;
            $total += $prod["Preco"];
        endforeach;
    } else {
        echo "Carrinho vazio!";
    }
   $dados = array();
   $dados["produto"] = $todos;
   $dados["total"] = $total;
   //print_r($dados);
    exibir('carrinho/listar', $dados);
}
function limparCarrinho() {
    unset($_SESSION['carrinho']);
    redirecionar("carrinho/listarCarrinho");
}
function removerProduto($id) {
    $produto = $_SESSION['carrinho'];
    foreach ($produto as $key => $produtos) {
        if ($produtos == $id) {
            unset($produtos[$key]);
        }
    }
    $_SESSION['carrinho'] = $produto;
    redirecionar("carrinho/listarCarrinho");
}
