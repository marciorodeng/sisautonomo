<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-04-23 01:19:58 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:19:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:20:14 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:20:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:20:29 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:20:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:38:59 --> Severity: Notice --> Undefined index: StatusSN C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 612
ERROR - 2017-04-23 01:38:59 --> Query error: Table 'app.App_StatusSN' doesn't exist - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                
				ST.StatusSN,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_StatusSN AS ST ON ST.StatusSN = TF.AprovadoTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND				
				((TF.DataTarefa >= "2017-01-01"))
                
				


            ORDER BY
                TF.ProfissionalTarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-04-23 01:39:45 --> Severity: Notice --> Undefined index: StatusSN C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 612
ERROR - 2017-04-23 01:39:45 --> Query error: Table 'app.App_StatusSN' doesn't exist - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                
				ST.StatusSN,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_StatusSN AS ST ON ST.StatusSN = TF.AprovadoTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND				
				((TF.DataTarefa >= "2017-01-01"))
                
				


            ORDER BY
                TF.ProfissionalTarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-04-23 01:41:01 --> Severity: Notice --> Undefined index: StatusSN C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 39
ERROR - 2017-04-23 01:41:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 39
ERROR - 2017-04-23 01:41:02 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:41:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:42:59 --> Severity: Notice --> Undefined index: StatusSN C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 39
ERROR - 2017-04-23 01:42:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 39
ERROR - 2017-04-23 01:42:59 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:42:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:48:36 --> Severity: Notice --> Undefined index: Abrev C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 39
ERROR - 2017-04-23 01:48:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 39
ERROR - 2017-04-23 01:48:36 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:48:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:55:18 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:55:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 01:55:27 --> Query error: Table 'app.App_StatusSN' doesn't exist - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                
				ST.Abrev,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_StatusSN AS ST ON ST.Abrev = TF.AprovadoTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND				
				((TF.DataTarefa >= "2017-01-01"))
                
				


            ORDER BY
                TF.ProfissionalTarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-04-23 01:57:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 32 - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                
				ST.Abrev,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_StatusSN AS ST ON ST.Abrev = TF.AprovadoTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND				
				((TF.DataTarefa >= "2017-01-01"))
                
				


            ORDER BY
                 
        
ERROR - 2017-04-23 01:59:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 32 - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                
				ST.Abrev,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_StatusSN AS ST ON ST.idApp_StatusSN = TF.AprovadoTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND				
				((TF.DataTarefa >= "2017-01-01"))
                
				


            ORDER BY
                 
        
ERROR - 2017-04-23 02:06:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 32 - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                
				ST.Abrev,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_StatusSN AS ST ON ST.idApp_StatusSN = TF.AprovadoTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND				
				((TF.DataTarefa >= "2017-01-01"))
                
				 AND ST.idApp_StatusSN = 1


            ORDER BY
                 
        
ERROR - 2017-04-23 02:10:44 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 02:10:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 02:10:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 32 - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                
				ST.Abrev,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_StatusSN AS ST ON ST.idApp_StatusSN = TF.AprovadoTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND				
				((TF.DataTarefa >= "2017-01-01"))
                
				


            ORDER BY
                 
        
ERROR - 2017-04-23 02:47:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 32 - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                
				ST.StatusSN,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_StatusSN AS ST ON ST.idApp_StatusSN = TF.AprovadoTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND				
				((TF.DataTarefa >= "2017-01-01"))
                
				


            ORDER BY
                 
        
ERROR - 2017-04-23 02:53:24 --> Severity: Notice --> Undefined index: QuitadoTarefa C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 02:53:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 78
ERROR - 2017-04-23 02:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 32 - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                
				ST.StatusSN,
                TF.DataTarefa,
				TF.QuitadoTarefa,
				TF.ServicoConcluido,
				TF.DataPrazoTarefa,
				TF.DataConclusao,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_StatusSN AS ST ON ST.idApp_StatusSN = TF.AprovadoTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND				
				((TF.DataTarefa >= "2017-01-01"))
                
				


            ORDER BY
                 
        
