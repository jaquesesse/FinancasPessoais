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

<?php 
if (isset($rendimentos)):
	foreach ($rendimentos -> result() as $d): ?>


<label><?= anchor("LoginCadastro_c/editar/$d->id_usuario","Alterar dados da Conta") ?></label>
<label> || </label>
<label><?= anchor("Categoria_c/carregar","Gerenciar Categorias") ?></label>
<label> || </label>
<Label><?= anchor('LoginCadastro_c/logout','Sair','title="Sair do sistema"') ?><label>


	<div class="container">
		<h1 class="text-center">Finanças</h1>
		<div>
			<div>
				<table>
					<thead>
						<tr>
							<th>Descrição</th>
							<th>Valor (R$)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <?= $d->descricao ?> </td>
							<td> <?= $d->valor ?> </td>
							
						</tr>
					</tbody> 
				</table>
			<?php endforeach; ?>
		<?php else: ?>
					<h4>Nenhum registro cadastrado.</h4>
		<?php endif; ?>
			</div>
		</div>
	</div>


</body>
</html>