<?php

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */
require_once "modelo/produtoModelo.php";

function index() {
    $dados = array();
    $dados["produto"] = pegarTodosProdutos();
    exibir("paginas/inicial", $dados);
}