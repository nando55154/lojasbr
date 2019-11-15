<form action="" method="POST">
    <input  type="text" placeholder="Nome..." name="nomeproduto" value="<?=@$produto['NomeProduto']?>">
    <input  type="text" placeholder="Descricao..." name="descricao" value="<?=@$produto['Descricao']?>">
    <input  type="text" placeholder="Categoria..."  name="categoria" value="<?=@$produto['categoria']?>">
    <input  type="number" placeholder="Preço..."  name="preco" value="<?=@$produto['Preco']?>">
    <input  type="number" placeholder="Estoque Minimo..."  name="estoqueMin" value="<?=@$produto['EstoqueMin']?>">
    <input  type="number" placeholder="Estoque Maximo..."  name="estoqueMax" value="<?=@$produto['EstoqueMax']?>">
    <button type="submit">Enviar</button>
</form>