<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-05-06 00:50:03 --> Query error: Unknown column 'P2.NomeProfissional2' in 'field list' - Invalid query: 
            SELECT

				P.NomeProfissional,
				P2.NomeProfissional2,
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
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
				TF.ProfissionalTarefa ASC,
				PT.Profissional ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-06 00:53:32 --> Query error: Unknown column 'P2.NomeProfissional2' in 'field list' - Invalid query: 
            SELECT

				P.NomeProfissional,
				P2.NomeProfissional2,
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
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
				TF.ProfissionalTarefa ASC,
				PT.Profissional ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-06 00:55:44 --> Severity: Notice --> Undefined index: NomeProfissional2 C:\xampp\htdocs\sisautonomo\application\controllers\Relatorio.php 772
ERROR - 2017-05-06 00:55:44 --> Query error: Unknown column 'P2.NomeProfissional2' in 'field list' - Invalid query: 
            SELECT

				P.NomeProfissional,
				P2.NomeProfissional2,
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
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
				TF.ProfissionalTarefa ASC,
				PT.Profissional ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:18 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:19 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:20 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:57:21 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\list_tarefa.php 36
ERROR - 2017-05-06 00:58:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

      ' at line 14 - Invalid query: 
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
				PT.Profissional
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa


            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
				TF.ProfissionalTarefa ASC,
				PT.Profissional ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-06 01:43:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2017-05-06 01:48:59 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\sisautonomo\application\controllers\Login.php 479
ERROR - 2017-05-06 01:51:00 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\sisautonomo\application\controllers\Login.php 479
ERROR - 2017-05-06 02:14:05 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Profissional.php 313
ERROR - 2017-05-06 02:14:43 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Profissional.php 313
ERROR - 2017-05-06 02:15:53 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Profissional.php 313
ERROR - 2017-05-06 02:16:24 --> Severity: Notice --> Undefined index: redirect C:\xampp\htdocs\sisautonomo\application\controllers\Profissional.php 313
ERROR - 2017-05-06 02:22:09 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\sisautonomo\application\models\Contato_model.php 56
ERROR - 2017-05-06 02:22:20 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\sisautonomo\application\models\Contato_model.php 56
ERROR - 2017-05-06 02:23:01 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\sisautonomo\application\models\Contato_model.php 56
ERROR - 2017-05-06 02:28:13 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\sisautonomo\application\models\Contato_model.php 56
ERROR - 2017-05-06 02:28:50 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\sisautonomo\application\models\Contato_model.php 56
ERROR - 2017-05-06 03:21:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

    ' at line 13 - Invalid query: 
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
				P2.NomeProfissional AS Profissional
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
				TF.ProfissionalTarefa ASC,
				PT.Profissional ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-06 03:22:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

    ' at line 13 - Invalid query: 
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
				P2.NomeProfissional2 AS Profissional
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
				TF.ProfissionalTarefa ASC,
				PT.Profissional ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-06 03:23:10 --> Query error: Unknown column 'P2.NomeProfissional2' in 'field list' - Invalid query: 
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
				P2.NomeProfissional2 AS Profissional,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
				TF.ProfissionalTarefa ASC,
				PT.Profissional ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-06 03:23:45 --> Query error: Unknown column 'P2.NomeProfissional2' in 'field list' - Invalid query: 
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
				P2.NomeProfissional2,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				TF.AprovadoTarefa ASC,
				TF.ProfissionalTarefa ASC,
				PT.Profissional ASC,
                PT.ConcluidoProcedtarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-05-06 14:29:06 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\xampp\htdocs\sisautonomo\system\database\drivers\mysqli\mysqli_driver.php 133
ERROR - 2017-05-06 14:30:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 31 - Invalid query: 
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
				P2.NomeProfissional AS Profissional,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                                

            ORDER BY
				 
        
ERROR - 2017-05-06 14:31:10 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-06 14:31:10 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-06 14:31:10 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-06 14:31:11 --> 404 Page Not Found: Faviconico/index
ERROR - 2017-05-06 14:31:27 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 425
ERROR - 2017-05-06 14:31:46 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-06 14:31:46 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-06 14:31:46 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-06 14:31:53 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 425
ERROR - 2017-05-06 14:59:08 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 14:59:08 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 14:59:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:09 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:27 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:33 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:37 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:41 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:46 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:00:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:01:30 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 15:01:30 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:01:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:02:08 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:02:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:06:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:06:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:06:08 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:06:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:06:15 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:06:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\sisautonomo\application\views\relatorio\tela_tarefa.php 40
ERROR - 2017-05-06 15:09:39 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 15:09:56 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 15:10:03 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 15:10:11 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 15:10:23 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 15:11:08 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 15:18:42 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 15:19:01 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 15:19:35 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 15:32:34 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-06 15:32:34 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-06 15:32:34 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-06 15:33:31 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 425
ERROR - 2017-05-06 15:33:52 --> Severity: Notice --> Undefined index: Cliente C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 320
ERROR - 2017-05-06 15:33:52 --> Severity: Notice --> Undefined index: idApp_Procedtarefa C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 323
ERROR - 2017-05-06 15:33:52 --> Severity: Notice --> Undefined variable: parcelasrec C:\xampp\htdocs\sisautonomo\application\views\tarefa\form_tarefa.php 324
ERROR - 2017-05-06 15:34:15 --> Severity: Notice --> Undefined index: auditoriaitem C:\xampp\htdocs\sisautonomo\application\controllers\Tarefa.php 425
ERROR - 2017-05-06 19:11:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND P.idApp_Profissional = 26                

            ORDER BY
				TF.Ap' at line 29 - Invalid query: 
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
				P2.NomeProfissional AS Profissional,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
				((TF.DataTarefa >= "2017-01-01"))
                 AND P2.idApp_Profissional =  AND P.idApp_Profissional = 26                

            ORDER BY
				TF.AprovadoTarefa ASC
				
        
ERROR - 2017-05-06 19:12:12 --> Severity: Notice --> Undefined index: Profissional C:\xampp\htdocs\sisautonomo\application\models\Relatorio_model.php 638
ERROR - 2017-05-06 23:34:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND P.idApp_Profissional = 12	
				((TF.DataTarefa >= "2017-01-01"))
         ' at line 31 - Invalid query: 
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
				P2.NomeProfissional AS Profissional,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
					
					TF.QuitadoTarefa = "S" AND 
					TF.ServicoConcluido = "S" AND 
				 AND P.idApp_Profissional = 12	
				((TF.DataTarefa >= "2017-01-01"))
                
				                 

            ORDER BY
				TF.ProfissionalTarefa ASC
				
        
ERROR - 2017-05-06 23:47:27 --> Query error: Unknown column 'TF.ConcluidoProcedtarefa' in 'where clause' - Invalid query: 
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
				P2.NomeProfissional AS Profissional,
				PT.Procedtarefa,
				PT.DataProcedtarefa,
				PT.ConcluidoProcedtarefa

            FROM

                App_Tarefa AS TF
					
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Profissional AS P2 ON P2.idApp_Profissional = PT.Profissional

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND			
					
					
					
					TF.ConcluidoProcedtarefa = "" AND 
				((TF.DataTarefa >= "2017-01-01"))
                 
				
				                 
            ORDER BY
				TF.ProfissionalTarefa ASC
				
        
