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
ERROR - 2017-04-10 21:29:51 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-04-10 21:30:02 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-04-10 21:30:46 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-04-10 21:31:13 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sisautonomo\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-04-10 21:36:25 --> Severity: Parsing Error --> syntax error, unexpected 'else' (T_ELSE) C:\xampp\htdocs\sisautonomo\application\views\tarefa\list_tarefa.php 76
ERROR - 2017-04-10 21:39:54 --> Severity: Parsing Error --> syntax error, unexpected 'else' (T_ELSE) C:\xampp\htdocs\sisautonomo\application\views\tarefa\list_tarefa.php 77
ERROR - 2017-04-10 21:42:51 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sisautonomo\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-04-10 21:46:10 --> Severity: Parsing Error --> syntax error, unexpected 'else' (T_ELSE) C:\xampp\htdocs\sisautonomo\application\views\tarefa\list_tarefa.php 77
ERROR - 2017-04-10 21:49:44 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sisautonomo\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-04-10 21:51:34 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sisautonomo\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-04-10 21:54:09 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sisautonomo\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-04-10 21:56:47 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sisautonomo\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-04-10 21:59:09 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-04-10 21:59:22 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sisautonomo\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-04-10 22:00:46 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sisautonomo\application\views\tarefa\tela_tarefa.php 6
ERROR - 2017-04-10 22:01:14 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 317
ERROR - 2017-04-10 22:01:14 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-04-10 22:01:14 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 321
ERROR - 2017-04-10 22:01:15 --> 404 Page Not Found: Faviconico/index
ERROR - 2017-04-10 22:01:22 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 424
ERROR - 2017-04-10 22:01:36 --> Severity: Notice --> Undefined variable: nav_secundario C:\xampp\htdocs\sisautonomo\application\views\tarefa\tela_tarefa.php 6
