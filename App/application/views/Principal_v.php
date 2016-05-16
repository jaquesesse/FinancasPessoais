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
<label><a href="#">Alterar Dados da Conta</a> <br><br></label>
<ul>
	<li><?= anchor('LoginCadastro_c/logout','Sair','title="Sair do sistema"') ?></li>
</ul>

	<div class="container">
		<h1 class="text-center">Finanças:</h1>
		<div class="col-md-12">
			<div class="row">
				<table class="table table-striped">
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

	
</body>
</html>