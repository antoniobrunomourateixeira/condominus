<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1> Mensalidade </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastroMensalidade"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th>UNIDADE</th> 
						<th>NOME</th> 
						<th>OBSERVAÇÃO</th> 
						<th>VALOR</th> 
						<th>VENCIMENTO</th> 
						<th> PAGAMENTO</th> 
						<th>AÇÃO</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr>
						<td colspan="7" style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c">JANEIRO / 2017</td>
					</tr>

					<tr style="color: red"> 
						<td>505 - A</td> 
						<td>Cota Condominial</td> 
						<td>Parcela referente ao mês de janeiro</td> 
						<td>R$ 120,00</td>  
						<td>20/01/2017</td>  
						<td></td>  
						<td>
							<button class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Anexar Comprovante Pagamento"><i class="fa fa-paperclip"></i></button>
							<button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Confirmar Pagamento"><i class="fa fa-check"></i></button>
						</td> 
					</tr>

					<tr>
						<td colspan="3" style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c; text-align: right;">TOTAL</td>
						<td style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c;">R$ 120,00</td>
						<td colspan="3" style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c; text-align: right;"></td>
					</tr>

					<tr>
						<td colspan="7" style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c">DEZEMBRO / 2018</td>
					</tr>

					<tr> 
						<td>102 - B</td> 
						<td>Cota Condominial</td> 
						<td>Parcela referente ao mês de outubro</td> 
						<td>R$ 120,00</td>  
						<td>20/10/2018</td>  
						<td>21/11/2018</td>  
						
					</tr> 
					<tr> 
						<td>202 - A</td> 
						<td>Cota Condominial</td> 
						<td>Parcela referente ao mês de outubro</td> 
						<td>R$ 120,00</td>  
						<td>25/10/2018</td>  
						<td></td>  
						<td>
							<button class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Anexar Comprovante Pagamento"><i class="fa fa-paperclip"></i></button>
							<button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Confirmar Pagamento"><i class="fa fa-check"></i></button>
						</td> 
					</tr> 
					<tr> 
						<td>301 - C</td> 
						<td>Cota Condominial</td> 
						<td>Parcela referente ao mês de novembro</td> 
						<td>R$ 120,00</td>  
						<td>20/10/2018</td>  
						<td></td>  
						<td>
							<button class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Anexar Comprovante Pagamento"><i class="fa fa-paperclip"></i></button>
							<button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Confirmar Pagamento"><i class="fa fa-check"></i></button>
						</td> 
					</tr> 
					</tr> 
					<tr> 
						<td>102 - B</td> 
						<td>Cota Condominial</td> 
						<td>Parcela referente ao mês de outubro</td> 
						<td>R$ 120,00</td>  
						<td>20/10/2018</td>  
						<td></td>  
						<td>
							<button class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Anexar Comprovante Pagamento"><i class="fa fa-paperclip"></i></button>
							<button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Confirmar Pagamento"><i class="fa fa-check"></i></button>
						</td> 
					</tr> 
					

					<tr>
						<td colspan="3" style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c; text-align: right;">TOTAL</td>
						<td style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c;">R$ 480,00</td>
						<td colspan="3" style="padding-left: 10px; background: #ddd; font-size: 14px; font-weight: bold; color: #bc3c3c; text-align: right;"></td>
					</tr>
					  
				</tbody> 
			</table> 
		</div>
	</section>
</div>


<!-- modal de cadastro -->
<div class="modal fade" id="cadastroMensalidade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastro Mensalidade</h4>
      </div>
      <div class="modal-body">
        <div class="row">
	        <div class="col-md-3">
	        	<div class="form-group">
	        		<label>Unidade <span class="badge " data-toggle="tooltip" data-placement="top" title="Com a opção 'TODAS', irá criar parcelas para todas as unidades">?</span></label>
	        		<select class="form-control">
	        			<option>Todas</option>
	        			<option>101 - A</option>
	        			<option>101 - B</option>
	        			<option>101 - C</option>
	        			<option>101 - D</option>
	        			<option>101 - E</option>
	        			<option>101 - F</option>
	        			<option>202 - A</option>
	        		</select>
	        	</div>
	        </div>
	        <div class="col-md-3">
	        	<div class="form-group">
	        		<label>Tipo</label>
	        		<select class="form-control">
	        			<option>Cota Condominial</option>
	        			<option>Manutenção / Conservação</option>
	        			<option>Outros</option>
	        		</select>
	        	</div>
	        </div>
	        <div class="col-md-6">
        		<div class="form-group">
        			<label>Observação</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Vencimento</label>
        			<input class="form-control" type="date" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Valor</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Data Pagamento</label>
        			<input class="form-control" type="date" name="">
        		</div>	
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>Se Repete?</label>
        			<select class="form-control" id="seRepete" onchange="repeticaoParcelas(this)">
        				<option value='n'>Não</option>
        				<option value='s'>Sim</option>
        			</select>
        		</div>
        	</div>
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>Qtde Parcelas</label>
        			<input class="form-control" id="qtdeParcelas" type="text" name="" disabled="true">
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
<!-- fim do modal de cadastro -->

<?php include('includes/footer.php') ?>

<script type="text/javascript">
	function repeticaoParcelas(elemento) {
		var valor = elemento.value;
		if(valor == 's') {
			$('#qtdeParcelas').removeAttr('disabled');
		} else {
			$('#qtdeParcelas').attr('disabled', 'disabled');
			$('#qtdeParcelas').val('');	
		}
	}
</script>