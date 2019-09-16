<h2>Listar todas as categorias</h2>

<table border="1">
        <tr>
            <th>NOME DA CATEGORIA</th>
            <th>DELETAR</th>
            <th>VISUALIZAR</th>
            <th>EDITAR</th>
        </tr>
    
    <?php foreach ($categoria as $dados): ?>
        <tr>
            <td><?=$dados['Nome']?></td>
            <td><a href="./categoria/deletar/<?=$dados['idCategoria']?>">Deletar</a></td>
            <td><a href="./categoria/visualizar/<?=$dados['idCategoria']?>">Ver</a></td>
            <td><a href="./categoria/editarCat/">Editar</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="./categoria/adicionar" class="btn btn-primary">Adicionar nova categoria</a>