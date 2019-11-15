<?php

function adicionar_formPag($descricao){
    $sql = "INSERT INTO forma_pagamento (descriao) VALUES ('$descricao')";
    $resultado = mysqli_query(conn(), $sql);
    $formPag = mysqli_fetch_assoc($resultado);
    return $formPag;
}

function deletar_formPag($id){
    $sql = "DELETE FROM forma_pagamento WHERE idformPag = '$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar forma de pagmento' . mysqli_error($cnx)); }
    return 'Forma de pagamento deletada com sucesso!';
}

function visualizar_formPag($id){
    $sql = "SELECT * FROM forma_pagamento WHERE idformPag = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $formPag = mysqli_fetch_assoc($resultado);
    return $formPag;
}

function listar_formPag(){
    $sql = "SELECT * FROM forma_pagamento";
    $resultado = mysqli_query(conn(), $sql);
    $formPag = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $formPag[] = $linha;
    }
    return $formPag;
}

function editar_formPag($id,$descricao){
    $sql = "UPDATE forma_pagamento SET descricao = '$descricao' WHERE idformPag = '$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar forma de pagamento' . mysqli_error($cnx)); }
    return 'Forma de pagamento alterado com sucesso!';
}
