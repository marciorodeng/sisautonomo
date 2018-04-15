<?php if ($msg) echo $msg; ?>


	<div class="col-md-1"></div>
	<div class="col-md-10 ">		
		
		<div class="row">

			<div class="main">

				<?php echo validation_errors(); ?>

				<div class="panel panel-primary">

					<div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>
					<div class="panel-body">

						<?php echo form_open('relatorio/receitas', 'role="form"'); ?>

						<div class="form-group">
							<div class="row">
								<!--
								<div class="col-md-4">
									<label for="Ordenamento">Nome do Cliente:</label>
									<select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
											id="NomeCliente" name="NomeCliente">
										<?php
										foreach ($select['NomeCliente'] as $key => $row) {
											if ($query['NomeCliente'] == $key) {
												echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
											} else {
												echo '<option value="' . $key . '">' . $row . '</option>';
											}
										}
										?>
									</select>
								</div>
								
								<div class="col-md-2">
									<label for="AprovadoOrca">Or�.Aprov.?</label>
									<select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
											id="AprovadoOrca" name="AprovadoOrca">
										<?php
										foreach ($select['AprovadoOrca'] as $key => $row) {
											if ($query['AprovadoOrca'] == $key) {
												echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
											} else {
												echo '<option value="' . $key . '">' . $row . '</option>';
											}
										}
										?>
									</select>
								</div>
								-->
								<div class="col-md-4">
									<label for="Ordenamento">Receitas:</label>
									<select data-placeholder="Selecione uma op��o..." class="form-control Chosen" onchange="this.form.submit()"
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
								<!--
								<div class="col-md-2">
									<label for="ServicoConcluido">Receita. Concl.?</label>
									<select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
											id="ServicoConcluido" name="ServicoConcluido">
										<?php
										foreach ($select['ServicoConcluido'] as $key => $row) {
											if ($query['ServicoConcluido'] == $key) {
												echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
											} else {
												echo '<option value="' . $key . '">' . $row . '</option>';
											}
										}
										?>
									</select>
								</div>
								<div class="col-md-2">
									<label for="QuitadoOrca">Receita.Quit.?</label>
									<select data-placeholder="Selecione uma op��o..." class="form-control Chosen"
											id="QuitadoOrca" name="QuitadoOrca">
										<?php
										foreach ($select['QuitadoOrca'] as $key => $row) {
											if ($query['QuitadoOrca'] == $key) {
												echo '<option value="' . $key . '" selected="selected">' . $row . '</option>';
											} else {
												echo '<option value="' . $key . '">' . $row . '</option>';
											}
										}
										?>
									</select>
								</div>
								-->
								<div class="col-md-2">
									<label for="QuitadoRecebiveis">Parc. Quit.?</label>
									<select data-placeholder="Selecione uma op��o..." class="form-control Chosen" onchange="this.form.submit()"
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
								
								<div class="col-md-4">
									<label for="Ordenamento">Ordenamento:</label>

									<div class="form-group">
										<div class="row">
											<div class="col-md-6">
												<select data-placeholder="Selecione uma op��o..." class="form-control Chosen" onchange="this.form.submit()"
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
												<select data-placeholder="Selecione uma op��o..." class="form-control Chosen" onchange="this.form.submit()"
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
								<!--
								<div class="col-md-2">
									<label for="DataInicio3">Receita - Data Inc.</label>
									<div class="input-group DatePicker">
										<span class="input-group-addon" disabled>
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
										<input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
											    name="DataInicio3" value="<?php echo set_value('DataInicio3', $query['DataInicio3']); ?>">
										
									</div>
								</div>
								<div class="col-md-2">
									<label for="DataFim3">Receita - Data Fim</label>
									<div class="input-group DatePicker">
										<span class="input-group-addon" disabled>
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
										<input type="text" class="form-control Date" maxlength="10" placeholder="DD/MM/AAAA"
											    name="DataFim3" value="<?php echo set_value('DataFim3', $query['DataFim3']); ?>">
										
									</div>
								</div>
								-->
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
								<br>							
								<div class="text-left">
									<span class="glyphicon glyphicon-search"></span>
									<button class="btn btn-lg btn-primary" name="pesquisar" value="0" type="submit">
										<span class="glyphicon glyphicon-search"></span> Pesq.
									</button>											
									<a class="btn btn-lg btn-danger" href="<?php echo base_url() ?>relatorio/orcamento" role="button"> 
										<span class="glyphicon glyphicon-plus"></span> Nova Rec.
									</a>
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

