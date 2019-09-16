<?php

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
    $usuarios[] = $linha;
    }
    return $usuarios;
}

function ver($id) {
    $sql = "SELECT * FROM usuario WHERE idUsuario= $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = mysqli_fetch_assoc($resultado);
    return $usuarios;
}

function adicionarUsuario($nome, $sobrenome, $email, $senha, $cpf, $nascimento, $sexo) {
    $sql = "INSERT INTO usuario (NomeUsuario, SobrenomeUsuario, Email, Senha, Cpf, Nascimento, Sexo) 
    VALUES ('$nome', '$sobrenome','$email', '$senha', '$cpf', '$nascimento', '$sexo')";
    //echo "<br>".$sql;
    $cnx = conn();
    $resultado = mysqli_query($cnx, $sql);
    if($resultado == true){
        echo "Deu certo ao cadastrar usuario";
    }else{
        echo "Deu errado ao cadastrar usuario ";
    }
}

function editarUsuario($id, $nome, $sobrenome, $email, $senha, $cpf, $nascimento, $sexo) {
    $sql = "UPDATE usuario SET NomeUsuario = '$nome', SobrenomeUsuario = '$sobrenome', Email = '$email', Senha = '$senha', Cpf = '$cpf', Nascimento = '$nascimento', Sexo = '$sexo' WHERE IdUsuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM usuario WHERE IdUsuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); 
    }
    return 'Usuario deletado com sucesso!';
            
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM usuario WHERE idUsuario = $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}
