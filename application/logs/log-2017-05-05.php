<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-05-05 04:45:25 --> Severity: Notice --> Undefined index: QuitadoOrca C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_orcamentosv.php 78
ERROR - 2017-05-05 04:45:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_orcamentosv.php 78
ERROR - 2017-05-05 05:02:14 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sisautonomo\application\views\orcatrata\form_orcatrata.php 762
ERROR - 2017-05-05 05:02:15 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sisautonomo\application\views\orcatrata\form_orcatrata.php 763
ERROR - 2017-05-05 05:02:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2017-05-05 05:02:56 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Orcatrata.php 783
ERROR - 2017-05-05 05:04:27 --> Severity: Notice --> Undefined index: agenda C:\xampp\htdocs\sisautonomo\application\controllers\Cliente.php 332
ERROR - 2017-05-05 05:04:43 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sisautonomo\application\views\orcatrata\form_orcatrata.php 762
ERROR - 2017-05-05 05:04:43 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sisautonomo\application\views\orcatrata\form_orcatrata.php 763
ERROR - 2017-05-05 05:06:10 --> Severity: Notice --> Undefined index: procedimento C:\xampp\htdocs\sisautonomo\application\controllers\Orcatrata.php 738
ERROR - 2017-05-05 05:06:10 --> Severity: Warning --> array_values() expects parameter 1 to be array, null given C:\xampp\htdocs\sisautonomo\application\controllers\Orcatrata.php 738
ERROR - 2017-05-05 05:06:10 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Orcatrata.php 783
ERROR - 2017-05-05 05:07:00 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sisautonomo\application\views\orcatrata\form_orcatrata.php 762
ERROR - 2017-05-05 05:07:00 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sisautonomo\application\views\orcatrata\form_orcatrata.php 763
ERROR - 2017-05-05 05:08:02 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Orcatrata.php 783
ERROR - 2017-05-05 05:08:16 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sisautonomo\application\views\orcatrata\form_orcatrata.php 762
ERROR - 2017-05-05 05:08:16 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sisautonomo\application\views\orcatrata\form_orcatrata.php 763
ERROR - 2017-05-05 05:19:02 --> Severity: Notice --> Undefined index: QuitadoOrca C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_orcamentosv.php 78
ERROR - 2017-05-05 05:19:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_orcamentosv.php 78
ERROR - 2017-05-05 05:19:16 --> Severity: Notice --> Undefined index: QuitadoOrca C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_orcamentosv.php 78
ERROR - 2017-05-05 05:19:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_orcamentosv.php 78
ERROR - 2017-05-05 05:50:09 --> Query error: Unknown column 'PT.Profissional' in 'on clause' - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
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
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = PT.Profissional
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
                PT.Profissional ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-05 05:53:10 --> Query error: Unknown column 'PT.Profissional' in 'on clause' - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
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
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = PT.Profissional
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
                PT.Profissional ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-05 05:53:39 --> Query error: Unknown column 'PT.Profissional' in 'on clause' - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
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
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = PT.Profissional
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
                
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-05 05:56:09 --> Query error: Unknown column 'PT.Profissional' in 'on clause' - Invalid query: 
            SELECT

				P.NomeProfissional,
                TF.idApp_Tarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
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
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = PT.Profissional
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
                
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-05 06:05:25 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 06:05:25 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 06:05:25 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 06:05:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2017-05-05 06:06:40 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 06:06:40 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 06:06:40 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 06:09:28 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 425
ERROR - 2017-05-05 06:09:51 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 06:09:51 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 06:09:51 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 06:11:25 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 425
ERROR - 2017-05-05 06:12:08 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 06:12:08 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 06:12:08 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 06:13:42 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 425
ERROR - 2017-05-05 06:13:53 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 06:13:53 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 06:13:53 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 06:14:30 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 425
ERROR - 2017-05-05 06:14:59 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 06:14:59 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 06:14:59 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 06:15:48 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 06:15:48 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 06:15:48 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 06:16:43 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 425
ERROR - 2017-05-05 06:24:34 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 06:24:34 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 06:24:34 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 06:24:54 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 425
ERROR - 2017-05-05 06:25:39 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 06:25:39 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 06:25:39 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 06:25:48 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 425
ERROR - 2017-05-05 06:26:48 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 06:26:48 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 06:26:48 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 18:30:12 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 18:34:30 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 18:35:42 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 20:17:21 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 20:34:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.idApp_Tarefa,
				TF.ProfissionalTarefa,
				TF.ObsTarefa,
                T' at line 5 - Invalid query: 
            SELECT

				P.NomeProfissional,
				P2.NomeProfissional2
                TF.idApp_Tarefa,
				TF.ProfissionalTarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
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
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = PT.Profissional
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = TF.ProfissionalTarefa
            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-05 20:35:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.idApp_Tarefa,
				TF.ProfissionalTarefa,
				TF.ObsTarefa,
                T' at line 5 - Invalid query: 
            SELECT

				P.NomeProfissional,
				P2.NomeProfissional2
                TF.idApp_Tarefa,
				TF.ProfissionalTarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
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
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = PT.Profissional
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = TF.ProfissionalTarefa
            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-05 20:36:42 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-05-05 20:36:43 --> Query error: Unknown column 'P2.NomeProfissional2' in 'field list' - Invalid query: 
            SELECT

				P.NomeProfissional,
				P2.NomeProfissional2,
                TF.idApp_Tarefa,
				TF.ProfissionalTarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
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
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = PT.Profissional
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = TF.ProfissionalTarefa
            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-05 20:36:59 --> Query error: Unknown column 'P2.NomeProfissional2' in 'field list' - Invalid query: 
            SELECT

				P.NomeProfissional,
				P2.NomeProfissional2,
                TF.idApp_Tarefa,
				TF.ProfissionalTarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
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
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = PT.Profissional
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = TF.ProfissionalTarefa
            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-05 20:37:47 --> Query error: Unknown column 'P2.NomeProfissional2' in 'field list' - Invalid query: 
            SELECT

				P.NomeProfissional,
				P2.NomeProfissional2,
                TF.idApp_Tarefa,
				TF.ProfissionalTarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
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
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = PT.Profissional
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = TF.ProfissionalTarefa
            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-05 20:39:05 --> Query error: Unknown column 'P2.NomeProfissional2' in 'field list' - Invalid query: 
            SELECT

				P.NomeProfissional,
				P2.NomeProfissional2,
                TF.idApp_Tarefa,
				TF.ProfissionalTarefa,
				TF.ObsTarefa,
                TF.AprovadoTarefa,
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
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = PT.Profissional
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = TF.ProfissionalTarefa
            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:45 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:46 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:47 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:39:48 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 48
ERROR - 2017-05-05 20:52:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2017-05-05 20:52:57 --> Severity: Notice --> Undefined index: query C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 370
ERROR - 2017-05-05 20:52:58 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 377
ERROR - 2017-05-05 20:53:08 --> 404 Page Not Found: Consulta/favicon.ico
ERROR - 2017-05-05 20:53:41 --> Severity: Notice --> Undefined index: query C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 370
ERROR - 2017-05-05 20:53:41 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 377
ERROR - 2017-05-05 20:54:38 --> Severity: Notice --> Undefined index: query C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 370
ERROR - 2017-05-05 20:54:38 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 377
ERROR - 2017-05-05 20:55:47 --> Severity: Notice --> Undefined index: query C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 370
ERROR - 2017-05-05 20:55:48 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 377
ERROR - 2017-05-05 20:56:08 --> Severity: Notice --> Undefined index: query C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 370
ERROR - 2017-05-05 20:56:08 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 377
ERROR - 2017-05-05 20:57:15 --> Severity: Notice --> Undefined index: query C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 370
ERROR - 2017-05-05 20:57:15 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 377
ERROR - 2017-05-05 20:57:37 --> Severity: Notice --> Undefined index: query C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 370
ERROR - 2017-05-05 20:57:38 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 377
ERROR - 2017-05-05 20:57:53 --> Severity: Notice --> Undefined index: query C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 370
ERROR - 2017-05-05 20:57:54 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 377
ERROR - 2017-05-05 20:59:30 --> Severity: Notice --> Undefined index: query C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 370
ERROR - 2017-05-05 20:59:31 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Consulta.php 377
ERROR - 2017-05-05 21:00:00 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\sisautonomo\application\controllers\Login.php 479
ERROR - 2017-05-05 21:00:51 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\sisautonomo\application\controllers\Login.php 479
ERROR - 2017-05-05 22:38:11 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-05-05 22:38:19 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-05-05 22:38:29 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-05-05 22:39:47 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 22:39:48 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 22:39:48 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 22:39:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2017-05-05 22:40:39 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 22:40:39 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 22:40:39 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 22:41:04 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-05-05 22:41:07 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 22:41:07 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 22:41:07 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 22:41:17 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 22:41:17 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 22:41:17 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-05 22:45:41 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-05-05 22:45:49 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-05-05 22:53:01 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:01 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:01 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:01 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:01 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:02 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:04 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:05 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 22:53:06 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 45
ERROR - 2017-05-05 23:40:57 --> Severity: Notice --> Undefined index: idApp_Procedimento C:\xampp\htdocs\sisautonomo\application\views\orcatrata\form_orcatrata.php 762
ERROR - 2017-05-05 23:40:57 --> Severity: Notice --> Undefined index: idApp_ParcelasRec C:\xampp\htdocs\sisautonomo\application\views\orcatrata\form_orcatrata.php 763
ERROR - 2017-05-05 23:42:03 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\sisautonomo\application\controllers\Login.php 479
ERROR - 2017-05-05 23:47:00 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-05 23:47:00 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-05 23:47:00 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
