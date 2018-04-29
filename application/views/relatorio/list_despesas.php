<div class="panel panel-default">
    <div class="panel-body">

		<div class="col-md-1"></div>
		<div class="col-md-3">
            <label for="DataFim">Total A Pagar:</label>
            <div class="input-group">
                <span class="input-group-addon">R$</span>
                <input type="text" class="form-control" disabled aria-label="Total Restante" value="<?php echo $report->soma->somarestante ?>">
            </div>
        </div>
		<div class="col-md-1"></div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div>
			<table class="table table-bordered table-condensed table-striped">
				<tfoot>
                    <tr>
                        <th colspan="3" class="active">Total encontrado: <?php echo $report->num_rows(); ?> resultado(s)</th>
                    </tr>
                </tfoot>
			</table>
            <table class="table table-bordered table-condensed table-striped">
                <thead>
                    <tr>
						<th class="active">Nº</th>
						<th class="active">Despesa</th>
						<th class="active">Concl.</th>
						<th class="active">Valor</th>
						<th class="active">Forma Pag</th>
                    </tr>
                </thead>
				<tbody>
                    <?php
                    foreach ($report->result_array() as $row) {
                        echo '<tr class="clickable-row" data-href="' . base_url() . 'despesas/alterar/' . $row['idApp_Despesas'] . '">';
							echo '<td>' . $row['idApp_Despesas'] . '</td>';
							echo '<td>' . $row['Despesa'] . '</td>';
							echo '<td>' . $row['ServicoConcluidoDespesas'] . '</td>';
							echo '<td class="text-left">R$ ' . $row['ValorRestanteDespesas'] . '</td>';
							echo '<td>' . $row['FormaPag'] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
