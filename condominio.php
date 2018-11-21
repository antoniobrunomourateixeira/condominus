<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Condomínio </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th>NOME</th> 
						<th>CNPJ</th> 
						<th>Endereço</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td>Residencial Vila Gale</td> 
						<td>43.882.007/0001-97</td> 
						<td>Av José Bastos 1420</td> 
					</tr> 
					<tr> 
						<td>Alphaville</td> 
						<td>62.467.626/0001-60</td> 
						<td>Av Borges de Melo 300</td> 
					</tr> 
				</tbody> 
			</table> 
		</div>
	</section>

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><b>Cadastro Condomínio</b></h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-9">
        		<div class="form-group">
        			<label>Nome</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>CNPJ</label>
        			<input class="form-control" type="text" name="" id="cnpj">
        		</div>	
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-12">
        		<div class="form-group">
        			<label>Endereço</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Quantidade Blocos</label>	
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Quantidade Unidades</label>
        			<input class="form-control" type="text" name="">
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

<script>
	 $('#cnpj').mask('00.000.000/0000-00')	
</script>