<div class="container-fluid">
    <div class="row">

        <div>

            <table class="table table-bordered table-condensed table-hover">

                <thead>
                    <tr>
                        <th class="active">Or�am.</th>

                        <th class="active">Cliente</th>
                        <th class="active">Data do Or�amento</th>
						<th class="active">Aprovado?</th>                        
                        <!--<th class="active">Valor Or�amento</th>-->
						<th class="active">Or�amento Quitado?</th>
                        <th class="active">Servi�o Conclu�do?</th>
                        <th class="active">Data Conclus�o</th>
						<th class="active">Data Proced.</th>
						<th class="active">Profis.</th>
						<th class="active">Proced.</th>
						<th class="active">Renova��o</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    foreach ($report->result_array() as $row) {

                        #echo '<tr>';
                        echo '<tr class="clickable-row" data-href="' . base_url() . 'orcatrata/alterar/' . $row['idApp_OrcaTrata'] . '">';
                            echo '<td>' . $row['idApp_OrcaTrata'] . '</td>';

                            echo '<td>' . $row['NomeCliente'] . '</td>';
                            echo '<td>' . $row['DataOrca'] . '</td>';
							echo '<td>' . $row['AprovadoOrca'] . '</td>';                            
                           # echo '<td class="text-left">R$ ' . $row['ValorOrca'] . '</td>';
							echo '<td>' . $row['QuitadoOrca'] . '</td>';
                            echo '<td>' . $row['ServicoConcluido'] . '</td>';
                            echo '<td>' . $row['DataConclusao'] . '</td>';
							echo '<td>' . $row['DataProcedimento'] . '</td>';
							echo '<td>' . $row['Profissional'] . '</td>';
							echo '<td>' . $row['Procedimento'] . '</td>';
							echo '<td>' . $row['DataRetorno'] . '</td>';
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
                <input type="text" class="form-control" disabled aria-label="Total Orcamentos" value="<?php echo $report->soma->somaorcamento ?>">
            </div>
        </div>

    </div>
</div>
-->
