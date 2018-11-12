<?php if (isset($msg)) echo $msg; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-7 col-sm-offset-3 col-md-3 col-md-offset-4 main">

			<?php #echo validation_errors(); ?>

			<div class="panel panel-<?php echo $panel; ?>">
			<?php echo form_open_multipart($form_open_path); ?>
				<!--<div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>-->
				<div class="panel-body">

						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="form-group">
									<div class="row">
										<div class="col-md-12">
											<!--<label for="idApp_Agenda">Agenda do Profis.:*</label>-->
											<select data-placeholder="Selecione uma op��o..." class="form-control Chosen" <?php echo $readonly; ?>
													id="idApp_Agenda" name="idApp_Agenda">
												<?php echo $select['option']; ?>												
												<?php
												foreach ($select['idApp_Agenda'] as $key => $row) {
													if ($query['idApp_Agenda'] == $key) {
														echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
													} else {
														echo '<option value="' . $key . '">' . $row . '</option>';
													}
												}
												?>
											</select>
											<?php echo form_error('idApp_Agenda'); ?>
										</div>
										<div class="form-group col-md-12 text-left">
											<label for="Obs">Evento:</label>
											<textarea class="form-control" id="Obs"
													  name="Obs"><?php echo $query['Obs']; ?></textarea>
										<?php echo form_error('Obs'); ?>
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="row">		
										<div class="col-md-6">	
											<label for="Data">Data In�cio : </label>												
											<div class="input-group <?php echo $datepicker; ?>">
												<span class="input-group-addon" disabled>
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
												<input type="text" class="form-control Date" <?php echo $readonly; ?> maxlength="10" placeholder="DD/MM/AAAA"
													   name="Data" value="<?php echo $query['Data']; ?>">
											</div>
											<?php echo form_error('Data'); ?>
										</div>	
										
										<div class="col-md-6">
											<label for="Hora">D�s :</label>
											<!--<div class="input-group <?php echo $timepicker; ?>">-->
												<input type="text" class="form-control Time" <?php echo $readonly; ?> maxlength="5"  placeholder="HH:MM"
													   accept=""name="HoraInicio" value="<?php echo $query['HoraInicio']; ?>">
												<!--<span class="input-group-addon">
													<span class="glyphicon glyphicon-time"></span>
												</span>
											</div>-->
										<?php echo form_error('HoraInicio'); ?>
										</div>
										
										<div class="col-md-6">	
											<label for="Data2">Data Fim : </label>												
											<div class="input-group <?php echo $datepicker; ?>">
												<span class="input-group-addon" disabled>
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
												<input type="text" class="form-control Date" <?php echo $readonly; ?> maxlength="10" placeholder="DD/MM/AAAA"
													   name="Data2" value="<?php echo $query['Data2']; ?>">
											</div>
											<?php echo form_error('Data2'); ?>
										</div>
									
										<div class="col-md-6">		
											<label for="Hora">�s :</label>
											<!--<div class="input-group <?php echo $timepicker; ?>">-->
												<input type="text" class="form-control Time" <?php echo $readonly; ?> maxlength="5" placeholder="HH:MM"
													   accept=""name="HoraFim" value="<?php echo $query['HoraFim']; ?>">
												<!--<span class="input-group-addon">
													<span class="glyphicon glyphicon-time"></span>
												</span>
											</div>-->
										<?php echo form_error('HoraFim'); ?>
										</div>
									</div>
								</div>															

								<div class="form-group col-md-12">
									<div class="row">
										
											<label for="idTab_Status">Status:</label><br>
											<div class="form-group">
												<div class="btn-block" data-toggle="buttons">
													<?php
													foreach ($select['Status'] as $key => $row) {
														if (!$query['idTab_Status'])
															$query['idTab_Status'] = 1;

														if ($query['idTab_Status'] == $key) {
															echo ''
															. '<label class="btn btn-' . $this->basico->tipo_status_cor($key) . ' active" name="radio" id="radio' . $key . '">'
															. '<input type="radio" name="idTab_Status" id="radio" '
																. 'autocomplete="off" value="' . $key . '" checked>' . $row
															. '</label>'
															;
														} else {
															echo ''
															. '<label class="btn btn-default" name="radio" id="radio' . $key . '">'
															. '<input type="radio" name="idTab_Status" id="radio" class="idTab_Status" '
																. 'autocomplete="off" value="' . $key . '" >' . $row
															. '</label>'
															;
														}
													}
													?>
												</div>
											</div>
																				
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<input type="hidden" name="idApp_Consulta" value="<?php echo $query['idApp_Consulta']; ?>">
										<!--<input type="hidden" name="idApp_Agenda" value="<?php echo $_SESSION['log']['Agenda']; ?>">
										<input type="hidden" name="Evento" value="1">-->
										<?php if ($metodo == 2) { ?>

											<div class="col-md-6">
												<button class="btn btn-lg btn-primary" id="inputDb" data-loading-text="Aguarde..." type="submit">
													<span class="glyphicon glyphicon-save"></span> Salvar
												</button>
											</div>
											<div class="col-md-6 text-right">
												<button  type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-loading-text="Aguarde..." data-target=".bs-excluir-modal-sm">
													<span class="glyphicon glyphicon-trash"></span> Excluir
												</button>
											</div>

											<div class="modal fade bs-excluir-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header bg-danger">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															<h4 class="modal-title">Tem certeza que deseja excluir?</h4>
														</div>
														<div class="modal-body">
															<p>Ao confirmar esta opera��o todos os dados ser�o exclu�dos permanentemente do sistema.
																Esta opera��o � irrevers�vel.</p>
														</div>
														<div class="modal-footer">
															<div class="col-md-6 text-left">
																<button type="button" class="btn btn-warning" data-dismiss="modal">
																	<span class="glyphicon glyphicon-ban-circle"></span> Cancelar
																</button>
															</div>
															<div class="col-md-6 text-right">
																<a class="btn btn-danger" href="<?php echo base_url() . 'consulta/excluir/' . $query['idApp_Consulta'] ?>" role="button">
																	<span class="glyphicon glyphicon-trash"></span> Confirmar Exclus�o
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>

										<?php } else { ?>
											<div class="col-md-6">
												<button class="btn btn-lg btn-primary" id="inputDb" data-loading-text="Aguarde..." type="submit">
													<span class="glyphicon glyphicon-save"></span> Salvar
												</button>
											</div>
										<?php } ?>
									</div>
								</div>
								
								</form>
							</div>	
						</div>

				</div>

			</div>

		</div>

	</div>
</div>
