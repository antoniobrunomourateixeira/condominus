<?php include('includes/header.php') ?>

<div class="content-wrapper" style="min-height: 0px;">
	<section class="content-header">
		<h1>Forúm Itens - Reunião Mensal</h1>
		<ol class="breadcrumb" style="padding-top: 0px">
			<li><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cadastrarForum"> <i class="fa fa-plus"></i> Nova mensagem</button></li>
		</ol>

		<div class="panel panel-default" style="margin-top: 10px"> 

			<section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                    26 Nov 2018
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                <h3 class="timeline-header"><a href="#">Hermano Aley</a> Locador</h3>

                <div class="timeline-body">
                  Gostaria que fosse colocado um video game PS4 na sala de jogos para chamar meus amigos da faculdade para jogar
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-trash"></i></a>
                </div>
              </div>
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 15:32 </span>

                <h3 class="timeline-header"><a href="#">Eduardo Oliveira</a> Morador</h3>

                <div class="timeline-body">
                  A limpeza do aréa de lazer do condóminio está deixando a desejar, só está sendo realizada uma vez por dia.
                </div>
                <div class="timeline-footer">
                	<a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
                  	<a class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-trash"></i></a>
                </div>
              </div>
            </li>
                        <!-- END timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
        </div>
        <!-- /.col -->
      </div>
    </section>

		</div>
	</section>
</div>


<div class="modal fade" id="cadastrarForum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><b>Comentário</b></h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-12">
        		<div class="form-group">
        			<label>Texto</label>
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