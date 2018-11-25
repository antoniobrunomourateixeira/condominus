<?php include('includes/header.php') ?> 

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1> Comunicado </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastroComunicado"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th>TÍTULO</th> 
						<th>CONTEÚDO</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td> Nova cota </td> 
						<td>A partir do dia 01/01/2019 será cobrado uma taxa dicional de 5,00 no sua cota condominial.</td> 
					</tr> 
					<tr> 
						<td> Coleta de lixo </td> 
						<td>Srs favor separarem seus lixos todas as segundas, quartas e sextas para que possamos recolher.</td> 
					</tr> 
				</tbody> 
			</table> 
		</div>
	</section>

</div>

<div class="modal fade" id="cadastroComunicado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><b>Conteúdo</b></h4>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-md-12">
      			<div class="form-group">
      				<label> Título </label>
      				<input class="form-control" type="text" name="">
      			</div>
      		</div>
      	</div>
        <div class="row">
        	<div class="col-md-12">
        		<div class="form-group">
        			<label>Conteúdo</label>
        			<textarea class="form-control" rows="5"></textarea>
        			<!-- <input cl  ass="form-control" type="text" name=""> -->
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