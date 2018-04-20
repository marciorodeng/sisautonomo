<?php if ($msg) echo $msg; ?>


	<div class="col-md-1"></div>
    <div class="col-md-10">
		<div class="row">
				
			<div class="main">

				<?php echo validation_errors(); ?>

				<div class="panel panel-primary">

					<div class="panel-heading"><strong><?php echo $titulo; ?></strong></div>
					<div class="panel-body">

						<?php echo form_open('relatorio/orcamento', 'role="form"'); ?>

						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="Ordenamento">Receitas:</label>
									<select data-placeholder="Selecione uma opção..." class="form-control Chosen" onchange="this.form.submit()"
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
								<div class="col-md-2">
									<label for="ServicoConcluido">Concl.?</label>
									<select data-placeholder="Selecione uma opção..." class="form-control Chosen" onchange="this.form.submit()"
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
								<div class="col-md-4">
									<label for="Ordenamento">Ordenamento:</label>
									<div class="form-group">
										<div class="row">
											<div class="col-md-6">
												<select data-placeholder="Selecione uma opção..." class="form-control Chosen" onchange="this.form.submit()"
														id="Campo" autofocus name="Campo">
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
								<br>								
								<div class="text-left">
									<span class="glyphicon glyphicon-search"></span> 
									<button class="btn btn-sm btn-primary" name="pesquisar" value="0" type="submit">
										<span class="glyphicon glyphicon-search"></span> Mensais
									</button>
									<a class="btn btn-sm btn-warning" href="<?php echo base_url() ?>relatorio/receitas" role="button"> 
										<span class="glyphicon glyphicon-search"></span> Todas
									</a>		
									<a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>orcatrata2/cadastrar" role="button"> 
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

