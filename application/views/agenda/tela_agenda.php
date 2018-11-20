<?php if (isset($msg)) echo $msg; ?>

<!--<div id="dp" class="col-md-2"></div>
<div id="datepickerinline" class="col-md-2"></div>
<div id="calendar" class="col-md-8"></div>-->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<a class="btn btn-sm btn-info" href="<?php #echo base_url() ?>relatorio/procedimento" role="button">
				<span class="glyphicon glyphicon-search"></span> Pesq.
			</a>
			<a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>procedimento/cadastrar" role="button">
				<span class="glyphicon glyphicon-plus"></span> Cad.
			</a>
			<div class=" btn btn-primary" type="button" data-toggle="collapse" data-target="#Tarefas" aria-expanded="false" aria-controls="Tarefas">
				<span class="glyphicon glyphicon-pencil"> Tarefas</span>
			</div>
		</div>
		<div <?php echo $collapse1; ?> id="Tarefas">
			<div class="panel-body">
				<div class="form-group">
					<div class="row">
						<div class="col-md-12">
							<div style="overflow: auto; height: 140px; ">
								<table class="table table-condensed table-bordered table-striped" >
									<tr>
										<th class="active">Tarefa</th>	
										<th class="active">Data</th>
										<th class="active">Conc.</th>
									</tr>
									
									<?php
									if ($query['procedimento'] != FALSE) {

										foreach ($query['procedimento']->result_array() as $row) {
											$url = base_url() . 'procedimento/alterar/' . $row['idApp_Procedimento'];

											echo '<tr class="clickable-row" data-href="' . $url . '" data-original-title="' . $row['Idade'] . ' anos" data-container="body"
													data-toggle="tooltip" data-placement="right" title="">';
												echo '<td>' . $row['Procedimento'] . '</td>';
												echo '<td>' . $row['DataProcedimento'] . '</td>';
												echo '<td>' . $row['ConcluidoProcedimento'] . '</td>';
												
											echo '</tr>';

										}

									}
									?>
								</table>
							</div>
							<?php echo form_open('agenda', 'role="form"'); ?>

							
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
</div>

<div class="col-md-6">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<?php echo form_open('agenda', 'role="form"'); ?>		
			<?php if ($_SESSION['log']['Permissao'] == 1 || $_SESSION['log']['Permissao'] == 2) { ?>																																		
			<div class="col-md-6 text-left">
				<label class="sr-only" for="Ordenamento">Agenda dos Prof.:</label>
				<select data-placeholder="Selecione uma opção..." class="form-control Chosen" onchange="this.form.submit()"
						id="NomeUsuario" name="NomeUsuario">
					<?php
					foreach ($select['NomeUsuario'] as $key => $row) {
						if ($query['NomeUsuario'] == $key) {
							echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
						} else {
							echo '<option value="' . $key . '">' . $row . '</option>';
						}
					}
					?>
				</select>
			</div>
			<?php } ?>
			<div class=" btn btn-info" type="button" data-toggle="collapse" data-target="#Calendario" aria-expanded="false" aria-controls="Calendario">
				<span class="glyphicon glyphicon-calendar"></span>
			</div>
			<div class=" btn btn-primary" type="button" data-toggle="collapse" data-target="#Agenda" aria-expanded="false" aria-controls="Agenda">
				<span class="glyphicon glyphicon-pencil"> Agenda</span>
			</div>
				
			</form>
		</div>
		<div <?php echo $collapse; ?> id="Agenda">
			<div class="panel-body">
				<div class="text-right">
					<div <?php echo $collapse1; ?> id="Calendario">
							<div class="form-group" id="datepickerinline" class="col-md-12" >
							</div>
					</div>
				</div>
				<div class="form-group">
					<div  style="overflow: auto; height: 456px; "> 
							<table id="calendar" class="table table-condensed table-bordered table-striped "></table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="fluxo" class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="fluxo" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-sm vertical-align-center">
            <div class="modal-content">

                <div class="modal-body text-center">
					<div class="form-group">
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<label for="">Agendamento:</label>
								<div class="form-group">
									
									<div class="row">
										<button type="button" id="MarcarConsulta" onclick="redirecionar(2)" class="btn btn-primary"> Evento
										</button>
									</div>

										<input type="hidden" id="start" />
										<input type="hidden" id="end" />
									
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

