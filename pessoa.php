<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Pessoa </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastroPessoa"> <i class="fa fa-plus"></i> Cadastrar</button></li>
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


<!-- MODAL DE CADASTRO -->


<div class="modal fade" id="cadastroPessoa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastro Pessoa</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>CPF</label>
        			<input class="form-control" id="cpf" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Nome</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>Data Nascimento</label>
        			<input class="form-control" type="date" name="">
        		</div>	
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Email</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>Fone</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>Data Entrada</label>
        			<input class="form-control" type="date" name="">
        		</div>	
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Data Saida</label>
        			<input class="form-control" type="date" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
	        	<div class="form-group">
	        		<label>Perfil</label>
	        		<select class="form-control">
	        			<option>Administrador</option>
	        			<option>Sindico</option>
	        			<option>Morador</option>
	        		</select>
	        	</div>
	        </div>
	        <div class="col-md-4">
	        	<div class="form-group">
	        		<label>Função</label>
	        		<select class="form-control">
	        			<option>Zelador</option>
	        			<option>Encanador</option>
	        			<option>Eletricista</option>
	        			<option>Porteiro</option>
	        		</select>
	        	</div>
	        </div>
        </div>

        <div class="row">
        	<div class="col-md-10">
	        	<div class="form-group">
	        		<label>Unidade</label>
	        		<select class="form-control">
	        			<option>100</option>
	        			<option>105</option>
	        			<option>106</option>
	        			<option>122</option>
	        		</select>
	        	</div>
	        </div>
	        <div class="col-md-2">
	        	<div class="form-group" style="margin-top: 5px">
		        	<label></label>
		        	<button class="btn btn-success btn-block"><i class="fa fa-angle-down"></i> Inserir</button>
	        	</div>
	        </div>
        </div>

        <table class="table"> 
				<thead> 
					<tr style="background: #DDD"> 
						<th>UNIDADE</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td>102 A</td> 
					</tr> 
					<tr> 
						<td>103 A</td> 
					</tr> 
				</tbody> 
			</table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-ban"></i> Cancelar</button>
        <button type="button" class="btn btn-primary"> <i class="fa fa-save"></i> Salvar</button>
      </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php') ?>

<script>
	$('#cpf').mask('000.000.000-00');
</script>