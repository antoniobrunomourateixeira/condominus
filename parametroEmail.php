<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Parâmetro de Email </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastroEmail"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th>EMAIL</th> 
						<th>HOST</th> 
						<th>PORTA</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td>adm@condominus.com.br</td> 
						<td>smtp.condominus.com.br</td> 
						<td>465</td>  
					</tr> 
				</tbody> 
			</table> 
		</div>
	</section>

</div>

<!-- cadastro de bloco -->
<div class="modal fade" id="cadastroEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastro Parâmetro de Email</h4>
      </div>
      <div class="modal-body">
        <div class="row">
	        <div class="col-md-8">
        		<div class="form-group">
        			<label>Email</label>
        			<input class="form-control" type="email" name="">
        		</div>	
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Senha</label>
        			<input class="form-control" type="password" name="">
        		</div>	
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Porta</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>Host</label>
        			<input class="form-control" type="text" name="">
        		</div>	
        	</div>
        	<div class="col-md-5">
        		<div class="form-group">
        			<label>Remetente</label>
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