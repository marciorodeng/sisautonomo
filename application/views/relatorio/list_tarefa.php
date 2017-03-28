<div class="container-fluid">
    <div class="row">

        <div>

            <table class="table table-bordered table-condensed table-hover">

                <thead>
                    <tr>
                        <th class="active">N.Tarefa.</th>
						<th class="active">Tarefa.</th>
						<th class="active">Responsável.</th>						
                        <!--<th class="active">Cliente</th>-->
                        <th class="active">Criada em:</th>
						<th class="active">Prioridade?</th>
						<th class="active">Data Prazo.</th>
						<th class="active">Tarefa Concluída?</th>                        
                        <!--<th class="active">Valor Orçamento</th>-->
						
                        <!--<th class="active">Serviço Concl.?</th>-->
                        <th class="active">Data Conclusão</th>
						<th class="active">Data Retorno</th>
						<th class="active">Data Proced.</th>
						<th class="active">Profis.</th>
						<th class="active">Procedtarefa</th>
						<th class="active">Proced. Conl.?</th>
						<th class="active">Data Limite.</th>
						
                    </tr>
                </thead>

                <tbody>

                    <?php
                    foreach ($report->result_array() as $row) {

                        #echo '<tr>';
                        echo '<tr class="clickable-row" data-href="' . base_url() . 'tarefa/alterar/' . $row['idApp_Tarefa'] . '">';
                            echo '<td>' . $row['idApp_Tarefa'] . '</td>';
							echo '<td>' . $row['ObsTarefa'] . '</td>';
							echo '<td>' . $row['NomeProfissional'] . '</td>';
                            #echo '<td>' . $row['NomeCliente'] . '</td>';
                            echo '<td>' . $row['DataTarefa'] . '</td>';
							echo '<td>' . $row['QuitadoTarefa'] . '</td>';
							echo '<td>' . $row['DataPrazoTarefa'] . '</td>';
							echo '<td>' . $row['AprovadoTarefa'] . '</td>';                            
                           # echo '<td class="text-left">R$ ' . $row['ValorTarefa'] . '</td>';
							
                           # echo '<td>' . $row['ServicoConcluido'] . '</td>';
                            echo '<td>' . $row['DataConclusao'] . '</td>';
							echo '<td>' . $row['DataRetorno'] . '</td>';
							echo '<td>' . $row['DataProcedtarefa'] . '</td>';
							echo '<td>' . $row['Profissional'] . '</td>';
							echo '<td>' . $row['Procedtarefa'] . '</td>';
							echo '<td>' . $row['ConcluidoProcedtarefa'] . '</td>';
							echo '<td>' . $row['DataProcedtarefaLimite'] . '</td>';
							
                        echo '</tr>';
                    }
                    ?>

                </tbody>

                <tfoot>
                    <tr>
                        <th colspan="9" class="active">Total encontrado: <?php echo $report->num_rows(); ?> resultado(s)</th>
                    </tr>
                </tfoot>
            </table>

        </div>

    </div>

</div>
<!--
<div class="panel panel-default">
    <div class="panel-body">

        <div class="col-md-2">
            <label for="DataFim">Total dos Orçamentos:</label>
            <div class="input-group">
                <span class="input-group-addon">R$</span>
                <input type="text" class="form-control" disabled aria-label="Total Tarefamentos" value="<?php echo $report->soma->somatarefa ?>">
            </div>
        </div>

    </div>
</div>
-->
