<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Suas Finanças:</title>
</head>
<body>

<?php foreach ($usuario -> result() as $dado){ ?>

<label><?= anchor("LoginCadastro_c/editar/$dado->id","Alterar dados da Conta") ?></label>
<label> || </label>
<label><?= anchor("Categoria_c/carregar","Gerenciar Categorias") ?></label>
<label> || </label>
<Label><?= anchor('LoginCadastro_c/logout','Sair','title="Sair do sistema"') ?><label>


	<div class="container">
		<h1 class="text-center">Finanças de <?= $dado->nome ?></h1>
		<div>
			<div>
				<table>
					<thead>
						<tr>
							<th>Tipo de Registro</th>
							<th>Valor (R$)</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td> </td>
							<td> </td>
							<td> </td>
							<td> </td>
							<td> </td>
						</tr>
					</tbody> 
				</table>
					<h4>Nenhum registro cadastrado.</h4>
			</div>
		</div>
	</div>
<?php } ?>

</body>
</html>