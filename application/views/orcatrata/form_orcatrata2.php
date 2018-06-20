<?php if (isset($msg)) echo $msg; ?>


<div class="container-fluid">
	<div class="row">

		<div class="col-md-2"></div>
		<div class="col-md-8 ">

			<?php echo validation_errors(); ?>

			<div class="panel panel-<?php echo $panel; ?>">

				<div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>
				<div class="panel-body">

					<?php echo form_open_multipart($form_open_path); ?>

					<div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
						<div class="panel panel-primary">
							<div class="panel-heading collapsed" role="tab" id="heading4" data-toggle="collapse" data-parent="#accordion4" data-target="#collapse4" aria-expanded="false">								<h4 class="panel-title">
									<a class="accordion-toggle">
										<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
										Receita & Forma de Pagam.
									</a>
								</h4>
							</div>

							<div id="collapse4" class="panel-collapse" role="tabpanel" aria-labelledby="heading4" aria-expanded="false">
								<div class="panel-body">									
									<div class="panel panel-info">
										<div class="panel-heading">
											<div class="form-group">	
												<div class="row">
													<div class="col-md-3">
														<label for="TipoReceita">Tipo de Receita</label>
														<select data-placeholder="Selecione uma opção..." class="form-control" <?php echo $readonly; ?>
																id="TipoReceita" name="TipoReceita">
															<!--<option value="">-- Selecione uma opção --</option>-->
															<?php
															foreach ($select['TipoReceita'] as $key => $row) {
																(!$orcatrata['TipoReceita']) ? $orcatrata['TipoReceita'] = '1' : FALSE;
																if ($orcatrata['TipoReceita'] == $key) {
																	echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
																} else {
																	echo '<option value="' . $key . '">' . $row . '</option>';
																}
															}
															?>
														</select>
													</div>
													<div class="col-md-3">
														<label for="ObsOrca">Receita</label><br>
														<input type="text" class="form-control" maxlength="200"
																name="ObsOrca" value="<?php echo $orcatrata['ObsOrca'] ?>">
													</div>
													<div class="col-md-3">
														<label for="ValorRestanteOrca">Valor:</label><br>
														<div class="input-group" id="txtHint">
															<span class="input-group-addon" id="basic-addon1">R$</span>
															<input type="text" class="form-control Valor" id="ValorRestanteOrca" maxlength="10" placeholder="0,00"
																   data-toggle="collapse" onkeyup="calculaParcelas()"
																	data-target="#Parcelas" aria-expanded="false" aria-controls="Parcelas"
																   name="ValorRestanteOrca" value="<?php echo $orcatrata['ValorRestanteOrca'] ?>">
														</div>
													</div>														
													<div class="col-md-3">
														<label for="DataVencimentoOrca"> Dt./ 1º Venc.</label>
														<div class="input-group <?php echo $datepicker; ?>">
															<span class="input-group-addon" disabled>
																<span class="glyphicon glyphicon-calendar"></span>
															</span>
															<input type="text" class="form-control Date" id="DataVencimentoOrca" <?php echo $readonly; ?> maxlength="10" placeholder="DD/MM/AAAA"
																   name="DataVencimentoOrca" value="<?php echo $orcatrata['DataVencimentoOrca']; ?>">															
														</div>
													</div>																										
												</div>
											</div>
											<div class="form-group">
												<div class="row">																												
													<div class="col-md-3">
														<label for="FormaPagamento">Forma de Pagam.:</label>
														<select data-placeholder="Selecione uma opção..." class="form-control" <?php echo $readonly; ?>
																id="FormaPagamento" name="FormaPagamento">
															<!--<option value="">-- Selecione uma opção --</option>-->
															<?php
															foreach ($select['FormaPagamento'] as $key => $row) {
																(!$orcatrata['FormaPagamento']) ? $orcatrata['FormaPagamento'] = '1' : FALSE;
																if ($orcatrata['FormaPagamento'] == $key) {
																	echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
																} else {
																	echo '<option value="' . $key . '">' . $row . '</option>';
																}
															}
															?>
														</select>
													</div>
													<div class="col-md-3">
														<label for="QtdParcelasOrca">Qtd. Parc.:</label><br>
														<input type="text" class="form-control Numero" id="QtdParcelasOrca" maxlength="3" placeholder="0"
															   data-toggle="collapse" onkeyup="calculaParcelas()"
																	data-target="#Parcelas" aria-expanded="false" aria-controls="Parcelas"
															   name="QtdParcelasOrca" value="<?php echo $orcatrata['QtdParcelasOrca'] ?>">
													</div>													
													<div class="col-md-4">
														<label for="Modalidade">Modalidade</label><br>
														<div class="form-group">
															<div class="btn-block" data-toggle="buttons">
																<?php
																foreach ($select['Modalidade'] as $key => $row) {
																	(!$orcatrata['Modalidade']) ? $orcatrata['Modalidade'] = 'P' : FALSE;

																	if ($orcatrata['Modalidade'] == $key) {
																		echo ''
																		. '<label class="btn btn-warning active" name="radiobutton_Modalidade" id="radiobutton_Modalidade' .  $key . '">'
																		. '<input type="radio" name="Modalidade" id="radiobuttondinamico" '
																		. 'onchange="calculaParcelas()" '
																		. 'autocomplete="off" value="' . $key . '" checked>' . $row
																		. '</label>'
																		;
																	} else {
																		echo ''
																		. '<label class="btn btn-default" name="radiobutton_Modalidade" id="radiobutton_Modalidade' .  $key . '">'
																		. '<input type="radio" name="Modalidade" id="radiobuttondinamico" '
																		. 'onchange="calculaParcelasMensais()" '
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
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
						<div class="panel panel-primary">
							<div class="panel-heading" role="tab" id="heading2" data-toggle="collapse" data-parent="#accordion2" data-target="#collapse2">
								<h4 class="panel-title">
									<a class="accordion-toggle">
										<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
										Parcelas
									</a>
								</h4>
							</div>
							<div id="collapse2" class="panel-collapse" role="tabpanel" aria-labelledby="heading2" aria-expanded="false">
								
								<div class="panel-body">
									<!--App_parcelasRec-->
									
									<input type="hidden" name="SCount" id="SCount" value="<?php echo $count['SCount']; ?>"/>
									
									<div class="input_fields_parcelas">

									<?php
									for ($i=1; $i <= $orcatrata['QtdParcelasOrca']; $i++) {
									?>

										<?php if ($metodo > 1) { ?>
										<input type="hidden" name="idApp_ParcelasRecebiveis<?php echo $i ?>" value="<?php echo $parcelasrec[$i]['idApp_ParcelasRecebiveis']; ?>"/>
										<?php } ?>


										<div class="form-group">
											<div class="panel panel-warning">
												<div class="panel-heading">
													<div class="row">
														<div class="col-md-2">
															<label for="ParcelaRecebiveis">Parcela:</label><br>
															<input type="text" class="form-control" maxlength="6" 
																   name="ParcelaRecebiveis<?php echo $i ?>" value="<?php echo $parcelasrec[$i]['ParcelaRecebiveis'] ?>">
														</div>
														<div class="col-md-3">
															<label for="ValorParcelaRecebiveis">Valor Parcela:</label><br>
															<div class="input-group" id="txtHint">
																<span class="input-group-addon" id="basic-addon1">R$</span>
																<input type="text" class="form-control Valor" maxlength="10" placeholder="0,00" id="ValorParcelaRecebiveis<?php echo $i ?>"
																	   name="ValorParcelaRecebiveis<?php echo $i ?>" value="<?php echo $parcelasrec[$i]['ValorParcelaRecebiveis'] ?>">
															</div>
														</div>
														<div class="col-md-3">
															<label for="DataVencimentoRecebiveis">Data Venc. Parc.</label>
															<div class="input-group DatePicker">
																<span class="input-group-addon" disabled>
																	<span class="glyphicon glyphicon-calendar"></span>
																</span>
																<input type="text" class="form-control Date" id="DataVencimentoRecebiveis<?php echo $i ?>" maxlength="10" placeholder="DD/MM/AAAA"
																	   name="DataVencimentoRecebiveis<?php echo $i ?>" value="<?php echo $parcelasrec[$i]['DataVencimentoRecebiveis'] ?>">
																
															</div>
														</div>
														<!--
														<div class="col-md-2">
															<label for="ValorPagoRecebiveis">Valor Pago:</label><br>
															<div class="input-group" id="txtHint">
																<span class="input-group-addon" id="basic-addon1">R$</span>
																<input type="text" class="form-control Valor" maxlength="10" placeholder="0,00" id="ValorPagoRecebiveis<?php echo $i ?>"
																	   name="ValorPagoRecebiveis<?php echo $i ?>" value="<?php echo $parcelasrec[$i]['ValorPagoRecebiveis'] ?>">
															</div>
														</div>
														<div class="col-md-2">
															<label for="DataPagoRecebiveis">Data Pag.</label>
															<div class="input-group DatePicker">
																<span class="input-group-addon" disabled>
																	<span class="glyphicon glyphicon-calendar"></span>
																</span>
																<input type="text" class="form-control Date" id="DataPagoRecebiveis<?php echo $i ?>" maxlength="10" placeholder="DD/MM/AAAA"
																	   name="DataPagoRecebiveis<?php echo $i ?>" value="<?php echo $parcelasrec[$i]['DataPagoRecebiveis'] ?>">
																
															</div>
														</div>
														-->
														<div class="col-md-3">
															<label for="QuitadoRecebiveis">Quitado?</label><br>
															<div class="form-group">
																<div class="btn-group" data-toggle="buttons">
																	<?php
																	foreach ($select['QuitadoRecebiveis'] as $key => $row) {
																		(!$parcelasrec[$i]['QuitadoRecebiveis']) ? $parcelasrec[$i]['QuitadoRecebiveis'] = 'N' : FALSE;

																		if ($parcelasrec[$i]['QuitadoRecebiveis'] == $key) {
																			echo ''
																			. '<label class="btn btn-warning active" name="radiobutton_QuitadoRecebiveis' . $i . '" id="radiobutton_QuitadoRecebiveis' . $i .  $key . '">'
																			. '<input type="radio" name="QuitadoRecebiveis' . $i . '" id="radiobuttondinamico" '
																			. 'onchange="carregaQuitado(this.value,this.name,'.$i.')" '
																			. 'autocomplete="off" value="' . $key . '" checked>' . $row
																			. '</label>'
																			;
																		} else {
																			echo ''
																			. '<label class="btn btn-default" name="radiobutton_QuitadoRecebiveis' . $i . '" id="radiobutton_QuitadoRecebiveis' . $i .  $key . '">'
																			. '<input type="radio" name="QuitadoRecebiveis' . $i . '" id="radiobuttondinamico" '
																			. 'onchange="carregaQuitado(this.value,this.name,'.$i.')" '
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
												</div>
											</div>
										</div>

									<?php
									}
									?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--
					<div class="panel-group" id="accordion8" role="tablist" aria-multiselectable="true">
						<div class="panel panel-primary">
							<div class="panel-heading collapsed" role="tab" id="heading8" data-toggle="collapse" data-parent="#accordion8" data-target="#collapse8" aria-expanded="false">								<h4 class="panel-title">
									<a class="accordion-toggle">
										<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
										Status da Receita
									</a>
								</h4>
							</div>

							<div id="collapse8" class="panel-collapse" role="tabpanel" aria-labelledby="heading8" aria-expanded="false">
								<div class="panel-body">
									<div class="form-group">
										<div class="panel panel-info">
											<div class="panel-heading">
												<div class="form-group text-left">
													<div class="row">
														
														<div class="col-md-3 form-inline">
															<label for="ServicoConcluido">Concluída?</label><br>
															<div class="form-group">
																<div class="btn-group" data-toggle="buttons">
																	<?php
																	foreach ($select['ServicoConcluido'] as $key => $row) {
																		(!$orcatrata['ServicoConcluido']) ? $orcatrata['ServicoConcluido'] = 'N' : FALSE;

																		if ($orcatrata['ServicoConcluido'] == $key) {
																			echo ''
																			. '<label class="btn btn-warning active" name="radiobutton_ServicoConcluido" id="radiobutton_ServicoConcluido' . $key . '">'
																			. '<input type="radio" name="ServicoConcluido" id="radiobutton" '
																			. 'autocomplete="off" value="' . $key . '" checked>' . $row
																			. '</label>'
																			;
																		} else {
																			echo ''
																			. '<label class="btn btn-default" name="radiobutton_ServicoConcluido" id="radiobutton_ServicoConcluido' . $key . '">'
																			. '<input type="radio" name="ServicoConcluido" id="radiobutton" '
																			. 'autocomplete="off" value="' . $key . '" >' . $row
																			. '</label>'
																			;
																		}
																	}
																	?>
																</div>
															</div>
														</div>
														
														<div class="col-md-3 form-inline">
															<label for="QuitadoOrca">Receita Quit.?</label><br>
															<div class="form-group">
																<div class="btn-group" data-toggle="buttons">
																	<?php
																	foreach ($select['QuitadoOrca'] as $key => $row) {
																		(!$orcatrata['QuitadoOrca']) ? $orcatrata['QuitadoOrca'] = 'N' : FALSE;

																		if ($orcatrata['QuitadoOrca'] == $key) {
																			echo ''
																			. '<label class="btn btn-warning active" name="radiobutton_QuitadoOrca" id="radiobutton_QuitadoOrca' . $key . '">'
																			. '<input type="radio" name="QuitadoOrca" id="radiobutton" '
																			. 'autocomplete="off" value="' . $key . '" checked>' . $row
																			. '</label>'
																			;
																		} else {
																			echo ''
																			. '<label class="btn btn-default" name="radiobutton_QuitadoOrca" id="radiobutton_QuitadoOrca' . $key . '">'
																			. '<input type="radio" name="QuitadoOrca" id="radiobutton" '
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
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>							
					-->
					<div class="form-group">
						<div class="row">
							<input type="hidden" name="idApp_OrcaTrata" value="<?php echo $orcatrata['idApp_OrcaTrata']; ?>">
							<?php if ($metodo > 1) { ?>
							<?php } ?>
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
												<p>Ao confirmar esta operação todos os dados serão excluídos permanentemente do sistema.
													Esta operação é irreversível.</p>
											</div>
											<div class="modal-footer">
												<div class="col-md-6 text-left">
													<button type="button" class="btn btn-warning" data-dismiss="modal">
														<span class="glyphicon glyphicon-ban-circle"></span> Cancelar
													</button>
												</div>
												<div class="col-md-6 text-right">
													<a class="btn btn-danger" href="<?php echo base_url() . 'orcatrata2/excluir/' . $orcatrata['idApp_OrcaTrata'] ?>" role="button">
														<span class="glyphicon glyphicon-trash"></span> Confirmar Exclusão
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
		<div class="col-md-2"></div>
	</div>
</div>
