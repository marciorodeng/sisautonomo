<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-04-10 14:02:07 --> Query error: Unknown column 'OT.AprovadoTarefa' in 'where clause' - Invalid query: 
            SELECT
                
				PR.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
                TF.DataTarefa,               
				TF.QuitadoTarefa,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa
					
            FROM
                
                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS PR ON PR.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					
            WHERE
                TF.idSis_Usuario = 33 AND                
				TF.idTab_Modulo = 1 AND
				OT.AprovadoTarefa = "N" AND
				((TF.DataTarefa >= "2017-01-01"))   
              
            ORDER BY
                TF.ProfissionalTarefa ASC
        
ERROR - 2017-04-10 14:04:44 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sisautonomo\application\views\tarefa\tela_tarefa.php 6
