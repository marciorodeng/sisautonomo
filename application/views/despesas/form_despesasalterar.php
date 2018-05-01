<?php if (isset($msg)) echo $msg; ?>

<div class="container-fluid">	
	<div class="row">
	
		<div class="col-md-1"></div>
		<div class="col-md-10 ">

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
										Despesa & Forma de Pagam.
									</a>
								</h4>
							</div>

							<div id="collapse4" class="panel-collapse" role="tabpanel" aria-labelledby="heading4" aria-expanded="false">
								<div class="panel-body">
									<div class="form-group">
										<div class="panel panel-danger">
											<div class="panel-heading">
												<div class="row">

													<div class="col-md-2">
														<label for="Despesa">Despesa</label><br>
														<input type="text" class="form-control" maxlength="200"
																name="Despesa" value="<?php echo $despesas['Despesa'] ?>">
													</div>
													<div class="col-md-2">
														<label for="ValorRestanteDespesas">Valor da Despesa:</label><br>
														<div class="input-group" id="txtHint">
															<span class="input-group-addon" id="basic-addon1">R$</span>
															<input type="text" class="form-control Valor" id="ValorRestanteDespesas" maxlength="10" placeholder="0,00"
																   name="ValorRestanteDespesas" value="<?php echo $despesas['ValorRestanteDespesas'] ?>">
														</div>
													</div>
													<div class="col-md-2">
														<label for="DataVencimentoDespesas">Dt. Desp./ 1� Venc.</label>
														<div class="input-group <?php echo $datepicker; ?>">
															<span class="input-group-addon" disabled>
																<span class="glyphicon glyphicon-calendar"></span>
															</span>
															<input type="text" class="form-control Date" id="DataVencimentoDespesas" <?php echo $readonly; ?> maxlength="10" placeholder="DD/MM/AAAA"
																   name="DataVencimentoDespesas" value="<?php echo $despesas['DataVencimentoDespesas']; ?>">															
														</div>
													</div>														
												</div>
											</div>
										</div>	
									</div>		
								</div>
								
								<div class="panel-body">	
									<div class="form-group">
										<div class="panel panel-danger">
											<div class="panel-heading">
												<div class="row">																																																										
													<div class="col-md-2">
														<label for="FormaPagamentoDespesas">Forma de Pag.</label>
														<select data-placeholder="Selecione uma op��o..." class="form-control" <?php echo $readonly; ?>
																id="FormaPagamentoDespesas" name="FormaPagamentoDespesas">
															<!--<option value="">-- Selecione uma op��o --</option>-->
															<?php
															foreach ($select['FormaPagamentoDespesas'] as $key => $row) {
																(!$despesas['FormaPagamentoDespesas']) ? $despesas['FormaPagamentoDespesas'] = '1' : FALSE;
																if ($despesas['FormaPagamentoDespesas'] == $key) {
																	echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
																} else {
																	echo '<option value="' . $key . '">' . $row . '</option>';
																}
															}
															?>
														</select>
													</div>
													<div class="col-md-2">
														<label for="QtdParcelasDespesas">Qtd.Prc</label><br>
														<input type="text" class="form-control Numero" id="QtdParcelasDespesas" maxlength="3" placeholder="0"
															   name="QtdParcelasDespesas" value="<?php echo $despesas['QtdParcelasDespesas'] ?>">
													</div>														
													<div class="col-md-2">
														<label for="ModalidadeDespesas">Modalidade</label><br>
														<div class="form-group">
															<div class="btn-block" data-toggle="buttons">
																<?php
																foreach ($select['ModalidadeDespesas'] as $key => $row) {
																	(!$despesas['ModalidadeDespesas']) ? $despesas['ModalidadeDespesas'] = 'P' : FALSE;

																	if ($despesas['ModalidadeDespesas'] == $key) {
																		echo ''
																		. '<label class="btn btn-warning active" name="radiobutton_ModalidadeDespesas" id="radiobutton_ModalidadeDespesas' .  $key . '">'
																		. '<input type="radio" name="ModalidadeDespesas" id="radiobuttondinamico" '

																		. 'autocomplete="off" value="' . $key . '" checked>' . $row
																		. '</label>'
																		;
																	} else {
																		echo ''
																		. '<label class="btn btn-default" name="radiobutton_ModalidadeDespesas" id="radiobutton_ModalidadeDespesas' .  $key . '">'
																		. '<input type="radio" name="ModalidadeDespesas" id="radiobuttondinamico" '

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
									
									<input type="hidden" name="PRCount" id="PRCount" value="<?php echo $count['PRCount']; ?>"/>

									<div class="input_fields_wrap22">

									<?php
									for ($i=1; $i <= $count['PRCount']; $i++) {
									?>

										<?php if ($metodo > 1) { ?>
										<input type="hidden" name="idApp_ParcelasPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['idApp_ParcelasPagaveis']; ?>"/>
										<?php } ?>
										
										<div class="form-group" id="22div<?php echo $i ?>">
											<div class="panel panel-danger">
												<div class="panel-heading">
													<div class="row">
														<div class="col-md-1">
															<label for="ParcelaPagaveis">Parcela:</label><br>
															<input type="text" class="form-control" maxlength="6"
																   name="ParcelaPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['ParcelaPagaveis'] ?>">
														</div>
														<div class="col-md-2">
															<label for="ValorParcelaPagaveis">Valor Parcela:</label><br>
															<div class="input-group" id="txtHint">
																<span class="input-group-addon" id="basic-addon1">R$</span>
																<input type="text" class="form-control Valor" maxlength="10" placeholder="0,00" id="ValorParcelaPagaveis<?php echo $i ?>"
																	   name="ValorParcelaPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['ValorParcelaPagaveis'] ?>">
															</div>
														</div>
														<div class="col-md-2">
															<label for="DataVencimentoPagaveis">Data Venc. Parc.</label>
															<div class="input-group DatePicker">
																<span class="input-group-addon" disabled>
																	<span class="glyphicon glyphicon-calendar"></span>
																</span>
																<input type="text" class="form-control Date" id="DataVencimentoPagaveis<?php echo $i ?>" maxlength="10" placeholder="DD/MM/AAAA"
																	   name="DataVencimentoPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['DataVencimentoPagaveis'] ?>">
																
															</div>
														</div>
														<div class="col-md-2">
															<label for="ValorPagoPagaveis">Valor Pago:</label><br>
															<div class="input-group" id="txtHint">
																<span class="input-group-addon" id="basic-addon1">R$</span>
																<input type="text" class="form-control Valor" maxlength="10" placeholder="0,00" id="ValorPagoPagaveis<?php echo $i ?>"
																	   name="ValorPagoPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['ValorPagoPagaveis'] ?>">
															</div>
														</div>
														<div class="col-md-2">
															<label for="DataPagoPagaveis">Data Pag.</label>
															<div class="input-group DatePicker">
																<span class="input-group-addon" disabled>
																	<span class="glyphicon glyphicon-calendar"></span>
																</span>
																<input type="text" class="form-control Date" id="DataPagoPagaveis<?php echo $i ?>" maxlength="10" placeholder="DD/MM/AAAA"
																	   name="DataPagoPagaveis<?php echo $i ?>" value="<?php echo $parcelaspag[$i]['DataPagoPagaveis'] ?>">
																
															</div>
														</div>
														<div class="col-md-2">
															<label for="QuitadoPagaveis">Quitado?</label><br>
															<div class="form-group">
																<div class="btn-group" data-toggle="buttons">
																	<?php
																	foreach ($select['QuitadoPagaveis'] as $key => $row) {
																		(!$parcelaspag[$i]['QuitadoPagaveis']) ? $parcelaspag[$i]['QuitadoPagaveis'] = 'N' : FALSE;

																		if ($parcelaspag[$i]['QuitadoPagaveis'] == $key) {
																			echo ''
																			. '<label class="btn btn-warning active" name="radiobutton_QuitadoPagaveis' . $i . '" id="radiobutton_QuitadoPagaveis' . $i .  $key . '">'
																			. '<input type="radio" name="QuitadoPagaveis' . $i . '" id="radiobuttondinamico" '
																			. 'onchange="carregaQuitadoDespesas(this.value,this.name,'.$i.')" '
																			. 'autocomplete="off" value="' . $key . '" checked>' . $row
																			. '</label>'
																			;
																		} else {
																			echo ''
																			. '<label class="btn btn-default" name="radiobutton_QuitadoPagaveis' . $i . '" id="radiobutton_QuitadoPagaveis' . $i .  $key . '">'
																			. '<input type="radio" name="QuitadoPagaveis' . $i . '" id="radiobuttondinamico" '
																			. 'onchange="carregaQuitadoDespesas(this.value,this.name,'.$i.')" '
																			. 'autocomplete="off" value="' . $key . '" >' . $row
																			. '</label>'
																			;
																		}
																	}
																	?>
																</div>
															</div>
														</div>
														<div class="col-md-1">
															<label><br></label><br>
															<button type="button" id="<?php echo $i ?>" class="remove_field22 btn btn-danger">
																<span class="glyphicon glyphicon-trash"></span>
															</button>
														</div>
													</div>
												</div>
											</div>	
										</div>
									<?php
									}
									?>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<a class="add_field_button22 btn btn-danger">
													<span class="glyphicon glyphicon-plus"></span> Ad. Parcelas Extras
												</a>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
										
					<div class="panel-group" id="accordion8" role="tablist" aria-multiselectable="true">
						<div class="panel panel-primary">
							<div class="panel-heading collapsed" role="tab" id="heading8" data-toggle="collapse" data-parent="#accordion8" data-target="#collapse8" aria-expanded="false">								<h4 class="panel-title">
									<a class="accordion-toggle">
										<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
										Status da Despesa
									</a>
								</h4>
							</div>

							<div id="collapse8" class="panel-collapse" role="tabpanel" aria-labelledby="heading8" aria-expanded="false">
								<div class="panel-body">
									<div class="form-group">
										<div class="panel panel-danger">
											<div class="panel-heading">
												
												<div class="form-group text-left">
													<div class="row">									
														<div class="col-md-3 text-left form-inline">
															<label for="ServicoConcluidoDespesas">Conclu�da?</label><br>
															<div class="form-group">
																<div class="btn-group" data-toggle="buttons">
																	<?php
																	foreach ($select['ServicoConcluidoDespesas'] as $key => $row) {
																		(!$despesas['ServicoConcluidoDespesas']) ? $despesas['ServicoConcluidoDespesas'] = 'N' : FALSE;

																		if ($despesas['ServicoConcluidoDespesas'] == $key) {
																			echo ''
																			. '<label class="btn btn-warning active" name="radiobutton_ServicoConcluidoDespesas" id="radiobutton_ServicoConcluidoDespesas' . $key . '">'
																			. '<input type="radio" name="ServicoConcluidoDespesas" id="radiobutton" '
																			. 'autocomplete="off" value="' . $key . '" checked>' . $row
																			. '</label>'
																			;
																		} else {
																			echo ''
																			. '<label class="btn btn-default" name="radiobutton_ServicoConcluidoDespesas" id="radiobutton_ServicoConcluidoDespesas' . $key . '">'
																			. '<input type="radio" name="ServicoConcluidoDespesas" id="radiobutton" '
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

					<div class="form-group">
						<div class="row">
							<!--<input type="hidden" name="idApp_Cliente" value="<?php echo $_SESSION['Cliente']['idApp_Cliente']; ?>">-->
							<input type="hidden" name="idApp_Despesas" value="<?php echo $despesas['idApp_Despesas']; ?>">
							<?php if ($metodo > 1) { ?>
							<!--<input type="hidden" name="idApp_Procedimento" value="<?php echo $procedimento['idApp_Procedimento']; ?>">
							<input type="hidden" name="idApp_ParcelasRec" value="<?php echo $parcelaspag['idApp_ParcelasRec']; ?>">-->
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
													<a class="btn btn-danger" href="<?php echo base_url() . 'despesas/excluir/' . $despesas['idApp_Despesas'] ?>" role="button">
														<span class="glyphicon glyphicon-trash"></span> Confirmar Exclus�o
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } else { ?>
								<div class="col-md-3">
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
		<div class="col-md-1"></div>
	</div>
</div>