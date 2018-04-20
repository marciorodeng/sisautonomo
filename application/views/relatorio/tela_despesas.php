<?php if ($msg) echo $msg; ?>

	<div class="col-md-1"></div>
    <div class="col-md-10">
		<div class="row">				
			<div class="main">
				<?php echo validation_errors(); ?>
				<div class="panel panel-primary">
					<div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>
					<div class="panel-body">
						<?php echo form_open('relatorio/despesas', 'role="form"'); ?>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="Ordenamento">Tipo de Despesa:</label>
									<select data-placeholder="Selecione uma op��o..." class="form-control Chosen" onchange="this.form.submit()"
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
								<div class="col-md-2">
									<label for="ServicoConcluidoDespesas">Desp. Concl.?</label>
									<select data-placeholder="Selecione uma op��o..." class="form-control Chosen" onchange="this.form.submit()"
											id="ServicoConcluidoDespesas" name="ServicoConcluidoDespesas">
										<?php
										foreach ($select['ServicoConcluidoDespesas'] as $key => $row) {
											if ($query['ServicoConcluidoDespesas'] == $key) {
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
																
								<div class="text-left">
									<span class="glyphicon glyphicon-search"></span>
									<button class="btn btn-sm btn-primary" name="pesquisar" value="0" type="submit">
										<span class="glyphicon glyphicon-search"></span> Mensais
									</button>
									<a class="btn btn-sm btn-warning" href="<?php echo base_url() ?>relatorio/despesaspag" role="button"> 
										<span class="glyphicon glyphicon-search"></span> Todas
									</a>
									<a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>despesas/cadastrar" role="button"> 
										<span class="glyphicon glyphicon-plus"></span> Nova Desp.
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

