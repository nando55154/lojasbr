<?php  

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "lojasbr");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}