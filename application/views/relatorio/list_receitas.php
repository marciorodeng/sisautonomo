<div class="panel panel-default">
    <div class="panel-body">

        <div class="col-md-1"></div>
        <div class="col-md-3">
            <label for="DataFim">Receitas:</label>
            <div class="input-group">
                <span class="input-group-addon">R$</span>
                <input type="text" class="form-control" disabled aria-label="Total Entrada" value="<?php echo $report->soma->balanco ?>">
            </div>
        </div>		
		<div class="col-md-3">
            <label for="DataFim">Recebido:</label>
            <div class="input-group">
                <span class="input-group-addon">R$</span>
                <input type="text" class="form-control" disabled aria-label="Total Pago" value="<?php echo $report->soma->somarecebido ?>">
            </div>
        </div>
		<div class="col-md-3">
            <label for="DataFim">À Receber:</label>
            <div class="input-group">
                <span class="input-group-addon">R$</span>
                <input type="text" class="form-control" disabled aria-label="Total a receber" value="<?php echo $report->soma->somareceber ?>">
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
                        <!--<th class="active">Cliente</th>
						<th class="active">Nº</th>-->
						<th class="active">Receita/Tipo</th>
						<!--<th class="active">Quit</th>
                        <th class="active">Data Receita.</th>
                        <th class="active">Data Entrada</th>
                        <th class="active">Valor Entrada</th>
						<th class="active">Orç. Aprov.?</th>
						<th class="active">Concl.?</th>
						<th class="active">Quit.?</th>-->						
                        <th class="active">Pcl/Pg</th>
                        <th class="active">Venc/Mod</th>
                        <!--<th class="active">Pago</th>
                        <th class="active">Data do Pagam.</th>-->
                        <th class="active">Valor</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($report->result_array() as $row) {
                        #echo '<tr>';
                        echo '<tr class="clickable-row" data-href="' . base_url() . 'orcatrata2/alterar/' . $row['idApp_OrcaTrata'] . '">';
                           # echo '<td>' . $row['NomeCliente'] . '</td>';
							#echo '<td>' . $row['idApp_OrcaTrata'] . '</td>';
							echo '<td>' . $row['ObsOrca'] . '</td>';
							#echo '<td>' . $row['DataOrca'] . '</td>';
                           # echo '<td>' . $row['DataEntradaOrca'] . '</td>';
                           # echo '<td class="text-right">R$ ' . $row['ValorEntradaOrca'] . '</td>';
						    #echo '<td>' . $row['AprovadoOrca'] . '</td>';
							#echo '<td>' . $row['ServicoConcluido'] . '</td>';
							#echo '<td>' . $row['QuitadoOrca'] . '</td>';						
                            echo '<td>' . $row['ParcelaRecebiveis'] . ' ' . $row['QuitadoRecebiveis'] . '</td>';
                            echo '<td>' . $row['DataVencimentoRecebiveis'] . ' ' . $row['Modalidade'] . '</td>';
                            #echo '<td>' . $row['DataPagoRecebiveis'] . ' R$' . $row['ValorPagoRecebiveis'] . '</td>';
							#echo '<td>' . $row['QuitadoRecebiveis'] . '</td>';
							echo '<td class="text-left">' . $row['ValorParcelaRecebiveis'] . '</td>';
                            #echo '<td>' . $row['DataPagoRecebiveis'] . '</td>';
                            #echo '<td class="text-right">R$ ' . $row['ValorPagoRecebiveis'] . '</td>';                           
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
