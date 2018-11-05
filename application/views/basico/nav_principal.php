<nav class="navbar navbar-inverse navbar-fixed-top " role="banner">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-3"></div>
			<div class="col-md-9 ">
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
						<span class="sr-only">MENU</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<a href="<?php echo base_url() ?>acesso/index" class="navbar-brand"><?php echo $_SESSION['log']['NomeEmpresa2']; ?>/<?php echo $_SESSION['log']['Nome2']; ?></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar1">

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
						
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">
							<div class="btn-group btn-dander" role="group" aria-label="...">
								<a href="<?php echo base_url() ?>acesso/index">
									<button type="button" class="btn btn-md btn-success ">
										<span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['log']['Usuario']; ?>
									</button>
								</a>
							</div>
							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>
						-->
						
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">
							<div class="btn-group " role="group" aria-label="...">
								<a href="<?php echo base_url(); ?>agenda">
									<button type="button" class="btn btn-md btn-info ">
										<span class="glyphicon glyphicon-calendar"></span> Agenda
									</button>
								</a>
							</div>
							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>
						<!--
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">
							<div class="btn-group btn-dander" role="group" aria-label="...">
								<a href="<?php echo base_url() ?>relatorio/tarefa">
									<button type="button" class="btn btn-md btn-success ">
										<span class="glyphicon glyphicon-pencil"></span> Tarefas
									</button>
								</a>
							</div>
							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>
						
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">
							<div class="btn-group">
								<button type="button" class="btn btn-md btn-info  dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-book"></span> Agendas <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">									
									<li><a href="<?php echo base_url(); ?>agenda"><span class="glyphicon glyphicon-calendar"></span> Calendário</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatorio/procedimento"><span class="glyphicon glyphicon-pencil"></span> Anotações</a></li>
								</ul>
							</div>
							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>
						-->
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">														
							<div class="btn-group">
								<button type="button" class="btn btn-md btn-warning  dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-usd"></span> Transações <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="<?php echo base_url() ?>relatorio/receitas"><span class="glyphicon glyphicon-pencil"></span> Receitas</a></li>							
									<li role="separator" class="divider"></li>
									<!--<li><a href="<?php echo base_url() ?>relatorio/orcamento"><span class="glyphicon glyphicon-pencil"></span> Receitas Mns.</a></li>							
									<li role="separator" class="divider"></li>-->
									<li><a href="<?php echo base_url() ?>relatorio/despesaspag"><span class="glyphicon glyphicon-pencil"></span> Despesas</a></li>							
									<li role="separator" class="divider"></li>
									<!--<li><a href="<?php echo base_url() ?>relatorio/despesas"><span class="glyphicon glyphicon-pencil"></span> Despesas Mns.</a></li>							
									<li role="separator" class="divider"></li>-->
									<li><a href="<?php echo base_url() ?>relatorio/balanco"><span class="glyphicon glyphicon-usd"></span> Balanço</a></li>

								</ul>
							</div>
							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">														
							<div class="btn-group" role="group" aria-label="...">
								<a href="<?php echo base_url(); ?>login/sair">
									<button type="button" class="btn btn-md btn-danger ">
										<span class="glyphicon glyphicon-log-out"></span> Sair
									</button>
								</a>
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
