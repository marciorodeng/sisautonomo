<?php if ($msg) echo $msg; ?>


	<div class="col-md-2"></div>
	<div class="col-md-8 ">		
		
		<div class="row">

			<div class="main">

				<?php echo validation_errors(); ?>

				<div class="panel panel-primary">

					<div class="panel-heading"><strong><?php echo $titulo; ?></strong>
					
						<?php echo form_open('relatorio/receitas', 'role="form"'); ?>
							
						<button class="btn btn-sm btn-info" name="pesquisar" value="0" type="submit">
							<span class="glyphicon glyphicon-search"></span> Pesquisar
						</button>											
						<!--
						<a class="btn btn-sm btn-warning" href="<?php echo base_url() ?>relatorio/orcamento" role="button"> 
							<span class="glyphicon glyphicon-pencil"></span> Mensais
						</a>
						-->
						<button  class="btn btn-sm btn-success" type="button" data-toggle="modal" data-loading-text="Aguarde..." data-target=".bs-excluir-modal2-sm">
							<span class="glyphicon glyphicon-filter"></span> Filtros
						</button>
						<button  class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-loading-text="Aguarde..." data-target=".bs-excluir-modal-sm">
							<span class="glyphicon glyphicon-plus"></span> Nova Rec.
						</button>
					</div>
					<div class="panel-body">
						
						<div class="form-group">
														
							<div class="modal fade bs-excluir-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header bg-danger">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Antes de cadastrar uma<br>
																	Nova Receita, "Pesquise"<br>
																	as Receitas Cadastradas!</h4>
										</div>
										<!--
										<div class="modal-body">
											<p>Ao confirmar esta opera��o todos os dados ser�o exclu�dos permanentemente do sistema. 
												Esta opera��o � irrevers�vel.</p>
										</div>
										-->
										<div class="modal-footer">
											<!--
											<div class="form-group text-left">
												<div class="row">	
													<div class="col-md-6 text-left">
														<a class="btn btn-md btn-warning btn-block" href="<?php echo base_url() ?>relatorio/orcamento" role="button"> 
															<span class="glyphicon glyphicon-list"></span> Rec. Cads.
														</a>														
													</div>
												</div>
											</div>
											-->
											<div class="form-group col-md-3 text-left">
												<div class="form-footer">
													<button class="btn btn-info btn-block" name="pesquisar" value="0" type="submit">
														<span class="glyphicon glyphicon-search"></span> Pesquisar
													</button>
												</div>
											</div>
											<div class="form-group col-md-3 text-left">
												<div class="form-footer">		
													<a class="btn btn-danger btn-block" href="<?php echo base_url() ?>orcatrata2/cadastrar" role="button">
														<span class="glyphicon glyphicon-plus"></span> Nova Rec.
													</a>
												</div>	
											</div>		
										</div>
									</div>
								</div>
							</div>
							
							<div class="modal fade bs-excluir-modal2-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
								<div class="modal-dialog modal-lg " role="document">
									<div class="modal-content">
										<div class="modal-header bg-danger">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title"><span class="glyphicon glyphicon-filter"></span> Filtros</h4>
										</div>
										<div class="modal-footer">
											<div class="form-group">
												<div class="row">
													<div class="col-md-3 text-left">
														<label for="Ordenamento">Tipo de Receita:</label>
														<select data-placeholder="Selecione uma op��o..." class="form-control Chosen btn-block" onchange="this.form.submit()"
																id="TipoReceita" name="TipoReceita">
															<?php
															foreach ($select['TipoReceita'] as $key => $row) {
																if ($query['TipoReceita'] == $key) {
																	echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
																} else {
																	echo '<option value="' . $key . '">' . $row . '</option>';
																}
															}
															?>
														</select>
													</div>
													<!--
													<div class="col-md-3  text-left">
														<label for="Ordenamento">Receitas:</label>
														<select data-placeholder="Selecione uma op��o..." class="form-control Chosen btn-block" onchange="this.form.submit()"
																id="ObsOrca" name="ObsOrca">
															<?php
															foreach ($select['ObsOrca'] as $key => $row) {
																if ($query['ObsOrca'] == $key) {
																	echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
																} else {
																	echo '<option value="' . $key . '">' . $row . '</option>';
																}
															}
															?>
														</select>
													</div>
													-->
													<div class="col-md-6  text-left">
														<label for="Ordenamento">Ordenamento:</label>
														<div class="form-group btn-block">
															<div class="row">
																<div class="col-md-8">
																	<select data-placeholder="Selecione uma op��o..." class="form-control Chosen" 
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
																	<select data-placeholder="Selecione uma op��o..." class="form-control Chosen" 
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
													<div class="col-md-3 text-left">
														<label for="QuitadoRecebiveis">Parc. Quit.?</label>
														<select data-placeholder="Selecione uma op��o..." class="form-control Chosen btn-block" 
																id="QuitadoRecebiveis" name="QuitadoRecebiveis">
															<?php
															foreach ($select['QuitadoRecebiveis'] as $key => $row) {
																if ($query['QuitadoRecebiveis'] == $key) {
																	echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
																} else {
																	echo '<option value="' . $key . '">' . $row . '</option>';
																}
															}
															?>
														</select>
													</div>
												</div>	
												<div class="row">	
													<div class="col-md-3 text-left">
														<label for="DataInicio">Venc.- Data Inc.</label>
														<div class="input-group DatePicker btn-block">
															<span class="input-group-addon" disabled>
																<span class="glyphicon glyphicon-calendar"></span>
															</span>
															<input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
																   name="DataInicio" value="<?php echo set_value('DataInicio', $query['DataInicio']); ?>">										
														</div>
													</div>
													<div class="col-md-3 text-left">
														<label for="DataFim">Venc.- Data Fim</label>
														<div class="input-group DatePicker btn-block">
															<span class="input-group-addon" disabled>
																<span class="glyphicon glyphicon-calendar"></span>
															</span>
															<input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
																	name="DataFim" value="<?php echo set_value('DataFim', $query['DataFim']); ?>">										
														</div>
													</div>													
													<div class="col-md-3 text-left">
														<label for="DataInicio2">Pagam.- Data Inc.</label>
														<div class="input-group DatePicker btn-block">
															<span class="input-group-addon" disabled>
																<span class="glyphicon glyphicon-calendar"></span>
															</span>
															<input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
																   autofocus name="DataInicio2" value="<?php echo set_value('DataInicio2', $query['DataInicio2']); ?>">										
														</div>
													</div>
													<div class="col-md-3 text-left">
														<label for="DataFim2">Pagam.- Data Fim</label>
														<div class="input-group DatePicker btn-block">
															<span class="input-group-addon" disabled>
																<span class="glyphicon glyphicon-calendar"></span>
															</span>
															<input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
																	name="DataFim2" value="<?php echo set_value('DataFim2', $query['DataFim2']); ?>">										
														</div>
													</div>
												</div>
												<div class="row">
													<br>
													<div class="form-group col-md-3 text-left">
														<div class="form-footer ">
															<button class="btn btn-info btn-block" name="pesquisar" value="0" type="submit">
																<span class="glyphicon glyphicon-search"></span> Pesquisar
															</button>
														</div>
													</div>
													<div class="form-group col-md-3 text-left">
														<div class="form-footer ">
															<button type="button" class="btn btn-primary btn-block" data-dismiss="modal">
																<span class="glyphicon glyphicon-remove"> Fechar
															</button>
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
					</form>	
					
					<?php echo (isset($list)) ? $list : FALSE ?>
					
				</div>				
			</div>
		</div>		
	</div>
	<div class="col-md-2"></div>	

