<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Garagem </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastroGaragem"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th>MODELO</th> 
						<th>PLACA</th> 
						<th>PESSOA</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td>Fusca</td> 
						<td>KKK-0102</td> 
						<td>Bruno Moura</td> 
					</tr> 
					<tr> 
						<td>CAMARO AMARELO</td>  
						<td>OCC-3456</td>  
						<td>Carlos Eduardo</td>  
					</tr>
					<tr> 
						<td>HILUX SW4</td>  
						<td>FEC-1918</td>  
						<td>Hermano Aley</td>  
					</tr> 
					<tr> 
						<td>NEW FIESTA</td>  
						<td>FIC-2201</td>  
						<td>José Arimateia</td>  
					</tr>  
				</tbody> 
			</table> 
		</div>
	</section>

</div>

<div class="modal fade" id="cadastroGaragem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><b>Cadastro de Garagem </b></h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Modelo</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Número</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Placa</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Cor</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Unidade</label>
        			<input class="form-control" type="text" name="">
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