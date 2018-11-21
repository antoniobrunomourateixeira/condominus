<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1> Despesas </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastroDespesa"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th>DESCRIÇÃO</th>  
						<th>TIPO</th> 
						<th>VENCIMENTO</th> 
						<th>VALOR</th> 
					</tr> 
				</thead> 
				<tbody> 

					<tr>
						<td colspan="4" style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #3c8dbc">NOVEMBRO / 2018</td>
					</tr>

					<tr> 
						<td>Lâmpada para o jardim</td> 
						<td>Insumos</td> 
						<td>22/11/2018</td> 
						<td>R$ 12,00</td> 
					</tr>  
					<tr> 
						<td>Instalação Ar Condicionado</td> 
						<td>Insumos</td> 
						<td>22/11/2018</td> 
						<td>R$ 300,00</td> 
					</tr>  
					<tr> 
						<td>Salário Porteiro</td> 
						<td>Funcionários</td> 
						<td>22/11/2018</td> 
						<td>R$ 1.200,00</td> 
					</tr>

					<tr>
						<td colspan="3" style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c; text-align: right;">TOTAL</td>
						<td style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c;">R$ 1.512,00</td>
					</tr>

					<tr>
						<td colspan="4" style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #3c8dbc">DEZEMBRO / 2018</td>
					</tr>

					<tr> 
						<td>Pintura</td> 
						<td>Insumos</td> 
						<td>10/12/2018</td> 
						<td>R$ 1.520,00</td> 
					</tr>  

					<tr>
						<td colspan="3" style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c; text-align: right;">TOTAL</td>
						<td style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c;">R$ 1.520,00</td>
					</tr>
  
				</tbody> 
			</table> 
		</div>
	</section>

</div>

<div class="modal fade" id="cadastroDespesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastro Despesa</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-4">
	        	<div class="form-group">
	        		<label>Tipo</label>
	        		<select class="form-control">
	        			<option>Insumo</option>
	        			<option>Salario</option>
	        			<option>Administrativo</option>
	        		</select>
	        	</div>
	        </div>
	        <div class="col-md-8">
        		<div class="form-group">
        			<label>Descrição</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Vencimento</label>
        			<input class="form-control" type="date" name="">
        		</div>	
        	</div>
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Valor</label>
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