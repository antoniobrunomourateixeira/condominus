<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Unidade </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastroUnidade"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th>NÚMERO</th> 
						<th>MATRICULA</th> 
						<th>INFORMAÇÕES</th> 
						<th>ANDAR</th> 
						<th>BLOCO</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td> 201 - A </td> 
						<td>2018001922</td> 
						<td>Obse teste</td> 
						<td>2</td> 
						<td>A</td> 
					</tr> 
					<tr> 
						<td> 301 - C </td> 
						<td>2018001923</td> 
						<td>Obse teste</td> 
						<td>3</td> 
						<td>B</td> 
					</tr> 
					<tr> 
						<td> 302 - D </td> 
						<td>2018001924</td> 
						<td>Obse teste</td> 
						<td>3</td> 
						<td>B</td> 
					</tr> 
					<tr> 
						<td> 401 - A </td> 
						<td>2018001925</td> 
						<td>Obse teste</td> 
						<td>4</td> 
						<td>C</td> 
					</tr> 
				</tbody> 
			</table> 
		</div>
	</section>

</div>

<!-- cadastro de bloco -->
<div class="modal fade" id="cadastroUnidade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastro de Unidade</h4>
      </div>
      <div class="modal-body">
        <div class="row">
	        <div class="col-md-4">
        		<div class="form-group">
        			<label>Número</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Matricula</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Andar</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        </div>
        <div class="row">
	        <div class="col-md-8">
        		<div class="form-group">
        			<label>Informações</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Bloco</label>
        			<select class="form-control">
	        			<option>A</option>
	        			<option>B</option>
	        			<option>C</option>
	        			<option>D</option>
	        			<option>E</option>
	        			<option>F</option>
	        		</select>
        		</div>	
        	</div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-ban"></i> Cancelar</button>
        <button type="button" class="btn btn-primary"> <i class="fa fa-save"></i> Gerar</button>
      </div>
    </div>
  </div>
</div>
<!-- fim do modal de cadastro -->

<?php include('includes/footer.php') ?>