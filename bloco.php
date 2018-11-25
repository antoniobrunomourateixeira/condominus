<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Bloco </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastroBloco"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th>NOME</th> 
						<th>DATA REVISÃO</th> 
						<th>QTDE UNIDADES</th> 
						<th>QTDE EXTINTOR</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td>Bloco A</td> 
						<td>20/12/2018</td> 
						<td>20</td> 
						<td>12</td> 
					</tr> 
					<tr> 
						<td>Bloco B</td> 
						<td>20/12/2018</td> 
						<td>20</td> 
						<td>12</td> 
					</tr>
					<tr> 
						<td>Bloco C</td> 
						<td>20/12/2018</td> 
						<td>20</td> 
						<td>12</td> 
					</tr>
					<tr> 
						<td>Bloco D</td> 
						<td>20/12/2018</td> 
						<td>20</td> 
						<td>12</td> 
					</tr>
				</tbody> 
			</table> 
		</div>
	</section>

</div>

<!-- cadastro de bloco -->
<div class="modal fade" id="cadastroBloco" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastro de Bloco</h4>
      </div>
      <div class="modal-body">
        <div class="row">
	        <div class="col-md-6">
        		<div class="form-group">
        			<label>Nome</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Data Revisão</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Qtde Unidades</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Qtde Extintor</label>
        			<input class="form-control" type="text" name="">
        		</div>	
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