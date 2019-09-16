<br>
<br>
<br>
<br>
<br>

<form action="produto/buscar" method="POST">
    <input  type="text" placeholder="Busca..." name="busca" >
    <button type="submit" class="btn btn-primary">BUSCAR</button>
</form>

    <?php foreach($produto as $dados): ?>
            <p><?=$dados['NomeProduto']?></p>
            <p>Preço: <?=$dados['Preco']?></p>
            <a href="./carrinho/comprar/<?=$dados['idProduto']?>">Adicionar ao carrinho</a>
    <?php endforeach; ?>