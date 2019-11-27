<?php

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */
require_once "modelo/produtoModelo.php";

/** anon */
function index() {
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
    $registros = 10;
    $inicio = ($registros*$pagina)-$registros;
    $dados = array();
    $dados["produto"] = pegarTodosProdutos($inicio,$registros);
    exibir("paginas/inicial", $dados);
}


function contarPaginas(){
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
    $registros = 10;
    $inicio = ($registros*$pagina)-$registros;
    $total = cont_row($inicio, $registros);
    $numPaginas = ceil($total/$registros);
    
    return $numPaginas;
}