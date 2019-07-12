<!DOCTYPE html>
<html>
	<head>
		<title>Formulários</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Aula de Formulários</h1>

		<form action="https://www.google.com.br" method="get">
			<!--fieldset relaciona as TAGs que estão em seu corpo-->
			<!--Vira uma margem no bloco do fieldset do formulário-->
			<fieldset>
				<!--Legend é o título do fieldset-->
				<legend>Infomações Pessoais</legend>	
				<!--Criando um label para Nome - Forma 1-->
				<p>
					<label for="nome1">Nome:</label> <br />
					<input type="text" id="nome1" name="txt-name" size="10" tabindex="4" accesskey="N" /> <br />
				</p>
				<p>
					<!--Utilizando Disabled-->
					<label for="sobrenome">Sobrenome:</label> <br>
					<input type="text" id="sobrenome" value="Insira seu sobrenome" /> <br />
				</p>			
			</fieldset>			

			<fieldset>
				<legend>Verificadores</legend>
				<!--Gerenciadores-->
				<!--<input type="submit" value="Enviar" name="btm_enviar"><br />-->
				<!--<input type="reset" value="Limpar Tudo"><br />-->
				<!--<input type="button" value="Validar Formulário"><br />-->
				<button type="submit" > Enviar </button>
			</fieldset>
		</form>

		<form action="https://www.google.com.br">
			<button type="submit"> Enviar </button>			
		</form>
	</body>
</html>