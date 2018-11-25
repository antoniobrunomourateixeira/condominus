<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Contrato </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastrarContrato"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th>EMPRESA</th> 
						<th>CNPJ</th> 
						<th>SERVIÇO</th> 
						<th>VALOR</th> 
						<th>FONE</th> 
						<th>DATA VIGÊNCIA</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td>Security Service</td>
						<td>76.114.278/0001-51</td>
						<td>C.F.T.V</td>
						<td>R$ 550,00</td>
						<td>(11) 3397-0923</td>
						<td>31/05/2018</td>
					</tr> 
					<tr> 
						<td>Security Service</td>
						<td>76.114.278/0001-51</td>
						<td>C.F.T.V</td>
						<td>R$ 550,00</td>
						<td>(11) 3397-0923</td>
						<td>31/05/2018</td>
					</tr> 
					<tr> 
						<td>Security Service</td>
						<td>76.114.278/0001-51</td>
						<td>C.F.T.V</td>
						<td>R$ 550,00</td>
						<td>(11) 3397-0923</td>
						<td>31/05/2018</td>
					</tr> 
				</tbody> 
			</table> 
		</div>
	</section>
</div>

<div class="modal fade" id="cadastrarContrato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><b>Cadastro Contrato</b></h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Empresa</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>CNPJ</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Serviço</label>
        			<input class="form-control fone" type="text" name="">
        		</div>	
        	</div>
          </div>
          <div class="row">
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Valor</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Fone</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Data Vigência</label>
        			<input class="form-control fone" type="text" name="">
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