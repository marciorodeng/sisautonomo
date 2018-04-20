<?php if ($msg) echo $msg; ?>


	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="row">

			<div class="main">

				<?php echo validation_errors(); ?>

				<div class="panel panel-primary">

					<div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>
					<div class="panel-body">

						<?php echo form_open('relatorio/despesaspag', 'role="form"'); ?>

						<div class="form-group">
							<div class="row">								
								<div class="col-md-4">
									<label for="Ordenamento">Tipo de Despesa:</label>
									<select data-placeholder="Selecione uma opção..." class="form-control Chosen" onchange="this.form.submit()"
											id="TipoDespesa" name="TipoDespesa">
										<?php
										foreach ($select['TipoDespesa'] as $key => $row) {
											if ($query['TipoDespesa'] == $key) {
												echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
											} else {
												echo '<option value="' . $key . '">' . $row . '</option>';
											}
										}
										?>
									</select>
								</div>																						
								<div class="col-md-4">
									<label for="Ordenamento">Ordenamento:</label>
									<div class="form-group">
										<div class="row">
											<div class="col-md-6">
												<select data-placeholder="Selecione uma opção..." class="form-control Chosen" onchange="this.form.submit()"
														id="Campo" name="Campo">
													<?php
													foreach ($select['Campo'] as $key => $row) {
														if ($query['Campo'] == $key) {
															echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
														} else {
															echo '<option value="' . $key . '">' . $row . '</option>';
														}
													}
													?>
												</select>
											</div>

											<div class="col-md-4">
												<select data-placeholder="Selecione uma opção..." class="form-control Chosen" onchange="this.form.submit()"
														id="Ordenamento" name="Ordenamento">
													<?php
													foreach ($select['Ordenamento'] as $key => $row) {
														if ($query['Ordenamento'] == $key) {
															echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
														} else {
															echo '<option value="' . $key . '">' . $row . '</option>';
														}
													}
													?>
												</select>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									<label for="DataInicio">Venc.- Data Inc.</label>
									<div class="input-group DatePicker">
										<span class="input-group-addon" disabled>
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
										<input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
											    name="DataInicio" value="<?php echo set_value('DataInicio', $query['DataInicio']); ?>">
										
									</div>
								</div>
								<div class="col-md-2">
									<label for="DataFim">Venc.- Data Fim</label>
									<div class="input-group DatePicker">
										<span class="input-group-addon" disabled>
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
										<input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
											    name="DataFim" value="<?php echo set_value('DataFim', $query['DataFim']); ?>">
										
									</div>
								</div>
								<div class="col-md-2">
									<label for="QuitadoPagaveis">Parc. Quit.?</label>
									<select data-placeholder="Selecione uma opção..." class="form-control Chosen" onchange="this.form.submit()"
											id="QuitadoPagaveis" name="QuitadoPagaveis">
										<?php
										foreach ($select['QuitadoPagaveis'] as $key => $row) {
											if ($query['QuitadoPagaveis'] == $key) {
												echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
											} else {
												echo '<option value="' . $key . '">' . $row . '</option>';
											}
										}
										?>
									</select>
								</div>
								<div class="col-md-2">
									<label for="DataInicio2">Pagam.- Data Inc.</label>
									<div class="input-group DatePicker">
										<span class="input-group-addon" disabled>
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
										<input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
											   autofocus name="DataInicio2" value="<?php echo set_value('DataInicio2', $query['DataInicio2']); ?>">
										
									</div>
								</div>
								<div class="col-md-2">
									<label for="DataFim2">Pagam.- Data Fim</label>
									<div class="input-group DatePicker">
										<span class="input-group-addon" disabled>
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
										<input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
											    name="DataFim2" value="<?php echo set_value('DataFim2', $query['DataFim2']); ?>">										
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								
								<div class="text-left">
									<span class="glyphicon glyphicon-search"></span>
									<button class="btn btn-sm btn-primary" name="pesquisar" value="0" type="submit">
										<span class="glyphicon glyphicon-search"></span> Todas
									</button>
									<a class="btn btn-sm btn-warning" href="<?php echo base_url() ?>relatorio/despesas" role="button"> 
										<span class="glyphicon glyphicon-pencil"></span> Mensais
									</a>
									<button  class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-loading-text="Aguarde..." data-target=".bs-excluir-modal-sm">
										<span class="glyphicon glyphicon-plus"></span> Nova Desp.
									</button>
									<div class="modal fade bs-excluir-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header bg-danger">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title">Antes de cadastrar uma<br> 
																			Nova Despesa<br> 
																			do tipo "Mensalidade",<br> 
																			confira as<br>
																			"Dep. Mensais Cads."!</h4>
												</div>
												<!--
												<div class="modal-body">
													<p>Ao confirmar esta operação todos os dados serão excluídos permanentemente do sistema. 
														Esta operação é irreversível.</p>
												</div>
												-->
												<div class="modal-footer">
													<div class="col-md-6 text-left">
														<a class="btn btn-md btn-warning" href="<?php echo base_url() ?>relatorio/despesas" role="button"> 
															<span class="glyphicon glyphicon-list"></span> Desp. Mensais Cads.
														</a>
													</div>
													<div class="col-md-6 text-left">
														<a class="btn btn-danger" href="<?php echo base_url() ?>despesas/cadastrar" role="button">
															<span class="glyphicon glyphicon-plus"></span> Nova Despesa
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>

						</form>

						<br>

						<?php echo (isset($list)) ? $list : FALSE ?>

					</div>

				</div>

			</div>

		</div>
	</div>
	<div class="col-md-1"></div>

