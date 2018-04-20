<nav class="navbar navbar-inverse navbar-fixed-top " role="banner">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-3"></div>
			<div class="col-md-9 ">
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">MENU</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand"> <?php echo $_SESSION['log']['NomeEmpresa']; ?></a>
				</div>
				<div class="collapse navbar-collapse">

					<ul class="nav navbar-nav navbar-center">
						<!--
						<li>
							<?php echo form_open(base_url() . 'cliente/pesquisar', 'class="navbar-form navbar-left"'); ?>
							<div class="input-group">
								<span class="input-group-btn">
									<button class="btn btn-info" type="submit">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</span>
								<input type="text" placeholder="Pesquisar Contatos" class="form-control" name="Pesquisa" value="">
							</div>
							</form>
						</li>
						-->
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">
							<div class="btn-group">
								<button type="button" class="btn btn-md btn-primary  dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['log']['Usuario']; ?> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="<?php echo base_url() ?>acesso/index"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['log']['Usuario']; ?></a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url(); ?>login/sair"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
								</ul>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-md btn-warning  dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-calendar"></span> Agendas <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">									
									<li><a href="<?php echo base_url(); ?>agenda"><span class="glyphicon glyphicon-calendar"></span> Agendas</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatorio/tarefa"><span class="glyphicon glyphicon-pencil"></span> Tarefas</a></li>
								</ul>
							</div>
							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>
						
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">														
							<div class="btn-group" role="group" aria-label="...">
								<a href="<?php echo base_url(); ?>relatorio/clientes">
									<button type="button" class="btn btn-md btn-success ">
										<span class="glyphicon glyphicon-user"></span> Contatos
									</button>
								</a>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-md btn-primary  dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-pencil"></span> Transações <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="<?php echo base_url() ?>relatorio/receitas"><span class="glyphicon glyphicon-pencil"></span> Receitas</a></li>							
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatorio/despesaspag"><span class="glyphicon glyphicon-pencil"></span> Despesas</a></li>							
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatorio/balanco"><span class="glyphicon glyphicon-usd"></span> Balanço</a></li>

								</ul>
							</div>
							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>
					</ul>
				</div>
			</div>
		</div>	
	</div>
</nav>
<br>
