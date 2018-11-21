<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Usuários </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastroUsuario"> <i class="fa fa-plus"></i> Cadastrar</button></li>
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

<div class="modal fade" id="cadastroUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastro Usuário</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-7">
        		<div class="form-group">
        			<label>Login</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-5">
        		<div class="form-group">
        			<label>Senha</label>
        			<input class="form-control" type="password" name="">
        		</div>	
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-12">
	        	<div class="form-group">
	        		<label>Perfil</label>
	        		<select class="form-control">
	        			<option>Administrador</option>
	        			<option>Sindico</option>
	        			<option>Morador</option>
	        		</select>
	        	</div>
	        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-ban"></i> Cancelar</button>
        <button type="button" class="btn btn-primary"> <i class="fa fa-save"></i> Salvar</button>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php') ?>