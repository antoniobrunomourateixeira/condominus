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
						<th>LOGIN</th> 
						<th>PESSOA</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td>Bruno</td> 
						<td>Bruno Moura</td> 
					</tr> 
					<tr> 
						<td>Eduardo</td>  
						<td>Carlos Eduardo</td>  
					</tr>
					<tr> 
						<td>Hermano</td>  
						<td>Hermano Aley</td>  
					</tr> 
					<tr> 
						<td>Juninho</td>  
						<td>José Arimateia</td>  
					</tr>  
				</tbody> 
			</table> 
		</div>
	</section>

</div>

<div class="modal fade" id="cadastroUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastro Usuário</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Login</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Senha</label>
        			<input class="form-control" type="password" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
	        	<div class="form-group">
	        		<label>Pessoa</label>
	        		<select class="form-control">
	        			<option> -- </option>
	        			<option>Bruno Moura</option>
	        			<option>Carlos Eduardo</option>
	        			<option>Hermano Aley</option>
	        			<option>José Arimateia</option>
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