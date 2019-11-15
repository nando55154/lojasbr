<div id="bolacha"> 	
    <div class="formulario">
	<div class="form__top">
			<h2>CADASTR<span>AR-SE</span></h2>
	</div>		
        <form class="form__reg" action="" method="POST">
            <input class="input" type="text" placeholder="&#128100;  Nome..." name ="nome" required autofocus>
            <input class="input" type="text" placeholder="&#128100;  Sobrenome..." name ="sobrenome" required autofocus>
            <input class="input" type="email" placeholder="&#9993;  Email..." name ="email" required>
            <input class="input" type="password" placeholder="&#8962; Senha..." name ="senha" required>
            <input class="input" type="text" placeholder="&#128222;  CPF..." name ="cpf" required>
            <input type="date" name="data" placeholder="&#128222; Nascimento" required>
            <input type="radio" name="sexo" value="M">Masculino
            <input type="radio" name="sexo" value="F">Femenino
            <div class="btn__form">
                <input class="btn__submit" type="submit" value="CADASTRAR-SE">
                <input class="btn__reset" type="reset" value="LIMPAR">	
            </div>
        </form>
    </div>

    <a href="./usuario/listar">Listar os usuarios</a>
    <a href="./produto/adicionar">Adicionar produtos</a>
</div>