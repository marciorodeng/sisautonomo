<?php if (isset($msg)) echo $msg; ?>

<!--<div id="dp" class="col-md-2"></div>
<div id="datepickerinline" class="col-md-2"></div>
<div id="calendar" class="col-md-8"></div>-->

<div class="col-md-2">
    
    <div id="datepickerinline"></div>    
	<div class="form-group">
		<div class="row">
			<a class="btn btn-lg btn-warning" href="<?php echo base_url() ?>tarefa/listar" role="button"> 
				<span class="glyphicon glyphicon-list"></span> Listar Tarefas
			</a>
		<hr>	
			<a class="btn btn-lg btn-warning" href="<?php echo base_url() ?>tarefa/cadastrar" role="button"> 
				<span class="glyphicon glyphicon-plus"></span> Cadastrar Nova Tarefa
			</a>
		</div>	
	</div>    
    <table class="table table-condensed table-bordered">
        <tr class="active text-active">
            <th colspan="2" class="col-md-12 text-center"><b>Estat�sticas - <?php echo date('m/Y', time()) ?></b></th>
        </tr>
        <tr class="warning text-warning">
            <td class="col-md-8"><b>Agendadas</b></td>
            <th><?php if (isset($query['estatisticas'][1])) { echo $query['estatisticas'][1]; } else { echo 0; } ?></th>
        </tr>
        <tr class="success text-success">
            <td><b>Confirmadas</b></td>
            <th><?php if (isset($query['estatisticas'][2])) { echo $query['estatisticas'][2]; } else { echo 0; } ?></th>
        </tr>        
        <tr class="info text-primary">
            <td><b>Comparecimentos</b></td>
            <th><?php if (isset($query['estatisticas'][3])) { echo $query['estatisticas'][3]; } else { echo 0; } ?></th>
        </tr>
        <tr class="danger text-danger">
            <td><b>Faltas</b></td>
            <th><?php if (isset($query['estatisticas'][4])) { echo $query['estatisticas'][4]; } else { echo 0; } ?></th>
        </tr>
        <tr class="danger text-danger">
            <td><b>Remarca��es</b></td>
            <th><?php if (isset($query['estatisticas'][5])) { echo $query['estatisticas'][5]; } else { echo 0; } ?></th>
        </tr>
        <tr class="danger text-danger">
            <td><b>Cancelamentos</b></td>
            <th><?php if (isset($query['estatisticas'][6])) { echo $query['estatisticas'][6]; } else { echo 0; } ?></th>
        </tr>        
    </table>
           
    <table class="table table-condensed table-bordered table-striped"">
        <tr class="active text-active">
            <th colspan="2" class="col-md-12 text-center"><b>Aniversariantes - <?php echo date('d/m/Y', time()) ?></b></th>
        </tr>
        <?php

        if ($query['cliente_aniversariantes'] != FALSE) {
                    
            foreach ($query['cliente_aniversariantes']->result_array() as $row) {
                $url = base_url() . 'cliente/prontuario/' . $row['idApp_Cliente'];

                echo '<tr class="clickable-row" data-href="' . $url . '" data-original-title="' . $row['Idade'] . ' anos" data-container="body"
                        data-toggle="tooltip" data-placement="right" title="">';
                    echo '<td>' . $row['NomeCliente'] . '</td>';
                echo '</tr>';            

            }
        
        }
        
        if ($query['contatocliente_aniversariantes'] != FALSE) {
            
            foreach ($query['contatocliente_aniversariantes']->result_array() as $row) {
                $url = base_url() . 'cliente/prontuario/' . $row['idApp_Cliente'];

                echo '<tr class="clickable-row" data-href="' . $url . '" data-original-title="' . $row['Idade'] . ' anos" data-container="body"
                        data-toggle="tooltip" data-placement="right" title="">';
                    echo '<td>' . $row['NomeContatoCliente'] . '</td>';
                echo '</tr>';            
            }   
        
        }        
        ?>        
    </table>
    
</div>
<div id="calendar" class="col-md-10"></div>

<div id="fluxo" class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="fluxo" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-sm vertical-align-center">
            <div class="modal-content">

                <div class="modal-body text-center">
                    <button type="button" id="MarcarConsulta" onclick="redirecionar(2)" class="btn btn-primary">Marcar Consulta</button>
					<button type="button" id="AgendarEvento" onclick="redirecionar(1)" class="btn btn-info">Agendar Evento</button>
                    
                    <input type="hidden" id="start" />
                    <input type="hidden" id="end" />
                </div>

            </div>
        </div>
    </div>
</div>