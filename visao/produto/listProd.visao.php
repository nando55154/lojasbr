   <br>
<br>
<br>
<br><br>
<br><br><br>

<h2>Lista produtos</h2>

<table border="1">
    <tr>
        <th>NOME</th>
        <th>PRECO</th>
        <th>DELETAR</th>
        <th>VISUALIZAR</th>
        <th>EDITAR</th>
    </tr>

    <?php foreach($produto as $dados): ?>
        <tr>
            <td><?=$dados['NomeProduto']?></td>
            <td><?=$dados['Preco']?></td>
            <td><a href="./produto/deletar/<?=$dados['idProduto']?>">Deletar produto</a></td>
            <td><a href="./produto/visualizarProduto/<?=$dados['idProduto']?>">Ver produto</a></td>
            <td><a href="./produto/editar/<?=$dados['idProduto']?>">Editar</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>
