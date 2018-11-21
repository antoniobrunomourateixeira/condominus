<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Funcionário </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastroFuncionario"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th>NOME</th> 
						<th>PERFIL</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td>Bruno Moura</td> 
						<td>Administrador</td> 
					</tr> 
					<tr> 
						<td>Carlos Eduardo</td>  
						<td>Sindico</td>  
					</tr>
					<tr> 
						<td>Hermano Aley</td>  
						<td>Locador</td>  
					</tr> 
					<tr> 
						<td>José Arimateia</td>  
						<td>Morador</td>  
					</tr>  
				</tbody> 
			</table> 
		</div>
	</section>

</div>


<?php include('includes/footer.php') ?>