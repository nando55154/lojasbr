    <?php foreach($produto as $dados): ?>
            <p><?=$dados['NomeProduto']?></p>
            <p>Preço: <?=$dados['Preco']?></p>
            <a href="./carrinho/comprar/<?=$dados['idProduto']?>">Adicionar ao carrinho</a>
    <?php endforeach; ?>