<div class="container-fluid">
    <div class="row">

        <div>

            <table class="table table-bordered table-condensed table-hover">

                <thead>
                    <tr>                       											
																							                       
						<th class="active">Profissional</th>						
						<th class="active">A��o</th>
						<th class="active">A��o Conclu�da?</th>
						<th class="active">Data da A��o</th>
						<th class="active">Respons�vel</th>
						<th class="active">Tarefa / Miss�o</th>						
						<th class="active">Tarefa Conclu�da?</th>
						<th class="active">Data da Conclus�o</th>
						<th class="active">Rotina?:</th>
						<th class="active">Prioridade?</th>												
						<!--<th class="active">N.Tarefa</th>-->
						<th class="active">Criada em:</th>
						<th class="active">Prazo de Conclus�o</th>												
						
                    </tr>
                </thead>

                <tbody>

                    <?php
                    foreach ($report->result_array() as $row) {

                        #echo '<tr>';
                        echo '<tr class="clickable-row" data-href="' . base_url() . 'tarefa/alterar/' . $row['idApp_Tarefa'] . '">';
                            																																																							
							echo '<td>' . $row['Profissional'] . '</td>';							
							echo '<td>' . $row['Procedtarefa'] . '</td>';
							echo '<td>' . $row['ConcluidoProcedtarefa'] . '</td>';
							echo '<td>' . $row['DataProcedtarefa'] . '</td>';
							echo '<td>' . $row['NomeProfissional'] . '</td>';
							echo '<td>' . $row['ObsTarefa'] . '</td>'; //  = Tarefa							
							echo '<td>' . $row['AprovadoTarefa'] . '</td>'; // = Tarefa Conclu�da?
							echo '<td>' . $row['DataConclusao'] . '</td>';
							echo '<td>' . $row['ServicoConcluido'] . '</td>'; // = Rotina
							echo '<td>' . $row['QuitadoTarefa'] . '</td>'; // = Prioridade														
							#echo '<td>' . $row['idApp_Tarefa'] . '</td>';
							echo '<td>' . $row['DataTarefa'] . '</td>';
							echo '<td>' . $row['DataPrazoTarefa'] . '</td>';														
							
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
            <label for="DataFim">Total dos Or�amentos:</label>
            <div class="input-group">
                <span class="input-group-addon">R$</span>
                <input type="text" class="form-control" disabled aria-label="Total Tarefamentos" value="<?php echo $report->soma->somatarefa ?>">
            </div>
        </div>

    </div>
</div>
-->
