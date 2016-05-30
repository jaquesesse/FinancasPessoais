<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Suas Finanças:</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap Core CSS -->
	<link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/bootstrap/css/meu-css.css">


</head>
<body>
<label><a href="#">Alterar Dados da Conta</a> <br><br></label>
<ul>
	<li><?= anchor('LoginCadastro_c/logout','Sair','title="Sair do sistema"') ?></li>
</ul>

	<div class="container">
		<h1 class="text-center">Finanças:</h1>
		<div class="col-md-12">

            <table border="1" class="table table-striped">
					<thead>
						<tr>
                                <th>Categoria</th>
                                <th>Valor (R$)</th>
                                <th>Total (R$)</th>
						</tr>
					</thead>
					<tr><!--linha(tabel row)-->
							<td>Categoria 1 </td><!--(table data)-->
							<td> valor 2</td>
							<td> valor </td>
						</tr>
					<tr>
						<td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
					</tr>
				</table>
            <button name="incluir" value="excluir">Incluir</button>
            <button name="excluir" value="excluir">Excluir</button>
            <button name="atualizar" value="atualizar">Atualizar</button>
					<h4>Nenhum registro cadastrado.</h4>
			</div>
		</div>	
	</div>

	
</body>
</html>