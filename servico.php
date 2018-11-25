<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Serviço </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastrarServico"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th>TIPO</th> 
						<th>RESPONSÁVEL</th> 
						<th>FONE</th> 
						<th>VALOR</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td>Encanador</td>
						<td>Carlos Leonardo</td>
						<td>(85) 98899-0134</td>
						<td>R$ 80,00</td>
					</tr> 
					<tr> 
						<td>Eletricista</td>
						<td>Francisglaydson Tavares</td>
						<td>(85) 3244-0109</td>
						<td>R$ 50,00</td>
					</tr> 
					<tr> 
						<td>Pedreiro</td>
						<td>Antonio José</td>
						<td>(85) 99715-0001</td>
						<td>R$ 90,00</td>
					</tr>
				</tbody> 
			</table> 
		</div>
	</section>
</div>

<div class="modal fade" id="cadastrarServico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><b>Cadastro Serviço</b></h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>Tipo</label>
        			<select class="form-control">
	        			<option>Encanador</option>
	        			<option>Eletricista</option>
	        			<option>Pedreiro</option>
	        		</select>
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Responsável</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>Fone</label>
        			<input class="form-control fone" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-2">
        		<div class="form-group">
        			<label>Valor</label>
        			<input class="form-control valor" type="text" name="">
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

<script type="text/javascript">
	// $('.fone').mask('0000-0000');
	$('.fone').mask('(00) 00000-0000');
	$('.valor').mask('#.##0,00');
</script>