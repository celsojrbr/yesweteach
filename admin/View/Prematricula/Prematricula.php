<?php

$Unidades = $dados;

use src\Conexao\Conexao;

use Controler\AdminUser\AdminUserControler;
use Controler\prematricula\prematriculaControler;


$pdo = Conexao::getInstance();


$prematriculas = prematriculaControler::GetAllprematriculaDB($pdo);
var_dump($prematriculas);

$arrayNiveisIngles=[
"Não possuo NENHUM conhecimento em inglês.",
"Básico",
"Intermediario",
"Avançado"
];
?>
<div>

	<h2>Pré-Matriculado :</h2>

</div>
<?php 
	use src\MensagemTrait;

	MensagemTrait::get();
?>

<div class="container">
	<div class="row">
		<table class="table table-striped">
			<thead>
			    <tr>
			        <th>#</th>
			        <th>Nome Completo</th>
			        <th>Email</th>
			        <th>Whatsapp</th>
			        <th>Nivel de inglês</th>
			        <th>Ações</th>
				</tr>
			</thead>
			<tbody>
			
			<?php 
			foreach ($prematriculas as $prematricula) { 
			$CodPrematricula = $prematricula->getcodprematricula();
			$NomeCompleto = $prematricula->getNomeCompleto();
			$Email = $prematricula->getEmail();
			$Whatsapp = $prematricula->getWhatsapp();
			$NivelIngles = $prematricula->getNivelIngles();
			?>
				<tr>
					<td><?php echo $CodPrematricula; ?></td>
			        <td><?php echo $NomeCompleto; ?></td>
			        <td><?php echo $Email; ?></td>
			        <td><?php echo $Whatsapp; ?></td>
			        <td><?php echo $arrayNiveisIngles[$NivelIngles]; ?></td>
					<td>
					<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Visualizar Respostas</button>
			        </td>
				</tr>
			<?php
			}
			?>
				
			</tbody>
			</table>
			
	</div>
</div>