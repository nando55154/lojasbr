<br>
<br>
<br>
<br>
<br>
<br>
<div class="carrin">
	<h4 class="titulo-carrin">Meu carrinho</h4>
	<table border="1">
		<tr>
			<th>PRODUTO</th>
			<th>PRECO</th>
			<th>REMOVER</th>
		</tr>
		<?php 
			if(isset($listadeprodutos)):
				foreach($listadeprodutos as $produtos):
		?>
					<tr>
						<td><a class="link-carrin" href="produto/visualizarProduto/<?= $produtos['idProduto'] ?>"><?= $produtos['NomeProduto'] ?></a></td>
						<td>R$ <?= number_format($produtos["Preco"],2) ?></td>
						<td><a class="link-carrin" href="carrinho/removerProduto/<?= $produtos['idProduto'] ?>">Remover</a></td>
					</tr>
		<?php
				endforeach;
			endif;
		?>
	</table>

	<div>
		<a href="carrinho/limparCarrinho" style="margin-right: 50px;">Limpar Carrinho</a>
		<a href="paginas/index">Continuar Comprando</a>
	</div>

	<div class="total-carrin">
		<p>Total</p> <p>R$ <?= number_format($total,2) ?></p>
	</div>
</div>