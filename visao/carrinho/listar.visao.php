<br>
<br>
<br>
<br>
<br>
<br>

<div class="carrin">
	<h4 class="titulo-carrin">Meu carrinho</h4>

	<div class="pedido">
		<?php foreach ($produto as $produtos): ?>
			<div>
				<a class="link-carrin" href="produto/visualizarProduto/<?= $produtos["idProduto"] ?>"><?= $produtos["NomeProduto"] ?></a>
				<p class="link-carrin">R$ <?= number_format($produtos["Preco"],2) ?></p>
				<a class="link-carrin" href="carrinho/removerProduto/<?= $produtos["idProduto"] ?>">Remover</a>
			</div>
		<?php endforeach; ?>
	</div>

	<div>
		<a href="carrinho/limparCarrinho" style="margin-right: 50px;">Limpar Carrinho</a>
		<a href="paginas/index">Continuar Comprando</a>
	</div>

	<div class="total-carrin">
		<p>Total</p> <p>R$ <?= number_format($total,2) ?></p>
	</div>
</div>

