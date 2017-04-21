<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-04-20 09:43:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY' at line 30 - Invalid query: 
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
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				
				
				((TF.DataTarefa >= "2017-01-01")) AND
                
                                

            ORDER BY
                
        
ERROR - 2017-04-20 09:44:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY
                TF.ProfissionalTarefa ASC,
				TF.ServicoConcluido DE' at line 30 - Invalid query: 
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
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				
				
				((TF.DataTarefa >= "2017-01-01")) AND
                
                                

            ORDER BY
                TF.ProfissionalTarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
ERROR - 2017-04-20 09:50:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY
                TF.ProfissionalTarefa ASC,
				TF.ServicoConcluido DE' at line 30 - Invalid query: 
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
					LEFT JOIN App_Profissional AS P ON P.idApp_Profissional = TF.ProfissionalTarefa
					LEFT JOIN App_Procedtarefa AS PT ON TF.idApp_Tarefa = PT.idApp_Tarefa

            WHERE
                TF.idSis_Usuario = 33 AND
				TF.idTab_Modulo = 1 AND
				
				((TF.DataTarefa >= "2017-01-01")) AND
                TF.AprovadoTarefa = "S" AND 
                                

            ORDER BY
                TF.ProfissionalTarefa ASC,
				TF.ServicoConcluido DESC,
				TF.QuitadoTarefa DESC,
				TF.DataPrazoTarefa ASC
        
