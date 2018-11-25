<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Fórum </h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastrarForum"> <i class="fa fa-plus"></i> Cadastrar</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 
			<!-- <div class="panel-heading">Panel heading</div>  -->

			<table class="table"> 
				<thead> 
					<tr> 
						<th style="width: 70%">NOME</th> 
						<th style="width: 30%">AÇÃO</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<td>Reunião Mensal <span class="badge label-info" data-toggle="tooltip" data-placement="top" title="4 NOVAS MENSAGENS">4</span></td> 
						<td><a href="topicoItem.php"><button class="btn btn-warning btn-sm"> <i class="fa fa-search"></i> Ver</button></a> </td> 
					</tr> 
				</tbody> 
			</table> 
		</div>
	</section>
</div>

<div class="modal fade" id="cadastrarForum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><b>Cadastro tópico</b></h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-12">
        		<div class="form-group">
        			<label>Nome</label>
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