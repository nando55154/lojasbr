<h2>Listar todos os usuários</h2>

<table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>CPF</th>
            <th>DELETAR</th>
            <th>VISUALIZAR</th>
            <th>EDITAR</th>
        </tr>
    
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['idUsuario']?></td>
            <td><?=$usuario['NomeUsuario']?></td>
            <td><?=$usuario['Email']?></td>
            <td><?=$usuario['Cpf']?></td>
            <td><a href="./usuario/deletar/<?=$usuario['idUsuario']?>">Deletar</a></td>
            <td><a href="./usuario/visualizar/<?=$usuario['idUsuario']?>">Ver</a></td>
            <td><a href="./usuario/editar/<?=$usuario['idUsuario']?>">Editar</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="./usuario/adicionar" class="btn btn-primary">Adicionar novo usuario</a>