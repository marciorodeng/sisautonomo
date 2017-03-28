<?php

#controlador de Login

defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefa extends CI_Controller {

    public function __construct() {
        parent::__construct();

        #load libraries
        $this->load->helper(array('form', 'url', 'date', 'string'));
        #$this->load->library(array('basico', 'Basico_model', 'form_validation'));
        $this->load->library(array('basico', 'form_validation'));
        $this->load->model(array('Basico_model', 'Tarefa_model', 'Profissional_model', 'Formapag_model'));
        $this->load->driver('session');

        #load header view
        $this->load->view('basico/header');
        $this->load->view('basico/nav_principal');

        #$this->load->view('tarefa/nav_secundario');
    }

    public function index() {

        if ($this->input->get('m') == 1)
            $data['msg'] = $this->basico->msg('<strong>Informa��es salvas com sucesso</strong>', 'sucesso', TRUE, TRUE, TRUE);
        elseif ($this->input->get('m') == 2)
            $data['msg'] = $this->basico->msg('<strong>Erro no Banco de dados. Entre em contato com o administrador deste sistema.</strong>', 'erro', TRUE, TRUE, TRUE);
        else
            $data['msg'] = '';

        $this->load->view('tarefa/tela_index', $data);

        #load footer view
        $this->load->view('basico/footer');
    }

    public function cadastrar() {

        if ($this->input->get('m') == 1)
            $data['msg'] = $this->basico->msg('<strong>Informa��es salvas com sucesso</strong>', 'sucesso', TRUE, TRUE, TRUE);
        elseif ($this->input->get('m') == 2)
            $data['msg'] = $this->basico->msg('<strong>Erro no Banco de dados. Entre em contato com o administrador deste sistema.</strong>', 'erro', TRUE, TRUE, TRUE);
        else
            $data['msg'] = '';
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $data['tarefa'] = quotes_to_entities($this->input->post(array(
            #### App_Tarefa ####
            'idApp_Tarefa',
            
            'DataTarefa',
			'DataPrazoTarefa',
            'ProfissionalTarefa',
            'AprovadoTarefa',
            'ServicoConcluido',
            'QuitadoTarefa',
            'DataConclusao',
            'DataRetorno',
            #'ValorTarefa',
            #'ValorEntradaTarefa',
            #'DataEntradaTarefa',
            #'ValorRestanteTarefa',
            #'FormaPagamento',
            #'QtdParcelasTarefa',
            #'DataVencimentoTarefa',
            'ObsTarefa',
        ), TRUE));

        //D� pra melhorar/encurtar esse trecho (que vai daqui at� onde estiver
        //comentado fim) mas por enquanto, se est� funcionando, vou deixar assim.

        #(!$this->input->post('SCount')) ? $data['count']['SCount'] = 0 : $data['count']['SCount'] = $this->input->post('SCount');
        #(!$this->input->post('PCount')) ? $data['count']['PCount'] = 0 : $data['count']['PCount'] = $this->input->post('PCount');
        (!$this->input->post('PTCount')) ? $data['count']['PTCount'] = 0 : $data['count']['PTCount'] = $this->input->post('PTCount');

        //Data de hoje como default
        (!$data['tarefa']['DataTarefa']) ? $data['tarefa']['DataTarefa'] = date('d/m/Y', time()) : FALSE;
		#(!$data['tarefa']['DataPrazoTarefa']) ? $data['tarefa']['DataPrazoTarefa'] = date('d/m/Y', time()) : FALSE;
		
		/*
        $j = 1;
        for ($i = 1; $i <= $data['count']['SCount']; $i++) {

            if ($this->input->post('idTab_Servico' . $i)) {
                $data['servico'][$j]['idTab_Servico'] = $this->input->post('idTab_Servico' . $i);
                $data['servico'][$j]['ValorVendaServico'] = $this->input->post('ValorVendaServico' . $i);
                $data['servico'][$j]['QtdVendaServico'] = $this->input->post('QtdVendaServico' . $i);
                $data['servico'][$j]['SubtotalServico'] = $this->input->post('SubtotalServico' . $i);
                $data['servico'][$j]['ObsServico'] = $this->input->post('ObsServico' . $i);
                $data['servico'][$j]['ConcluidoServico'] = $this->input->post('ConcluidoServico' . $i);
                $j++;
            }

        }
        $data['count']['SCount'] = $j - 1;

        $j = 1;
        for ($i = 1; $i <= $data['count']['PCount']; $i++) {

            if ($this->input->post('idTab_Produto' . $i)) {
                $data['produto'][$j]['idTab_Produto'] = $this->input->post('idTab_Produto' . $i);
                $data['produto'][$j]['ValorVendaProduto'] = $this->input->post('ValorVendaProduto' . $i);
                $data['produto'][$j]['QtdVendaProduto'] = $this->input->post('QtdVendaProduto' . $i);
                $data['produto'][$j]['SubtotalProduto'] = $this->input->post('SubtotalProduto' . $i);
                $j++;
            }
        }
        $data['count']['PCount'] = $j - 1;
*/
        $j = 1;
        for ($i = 1; $i <= $data['count']['PTCount']; $i++) {

            if ($this->input->post('DataProcedtarefa' . $i) || $this->input->post('Profissional' . $i) ||
                    $this->input->post('Procedtarefa' . $i) || $this->input->post('ConcluidoProcedtarefa' . $i) ||
					$this->input->post('DataProcedtarefaLimite' . $i)) {
                $data['procedtarefa'][$j]['DataProcedtarefa'] = $this->input->post('DataProcedtarefa' . $i);
                $data['procedtarefa'][$j]['Profissional'] = $this->input->post('Profissional' . $i);
                $data['procedtarefa'][$j]['Procedtarefa'] = $this->input->post('Procedtarefa' . $i);
				$data['procedtarefa'][$j]['ConcluidoProcedtarefa'] = $this->input->post('ConcluidoProcedtarefa' . $i);
				$data['procedtarefa'][$j]['DataProcedtarefaLimite'] = $this->input->post('DataProcedtarefaLimite' . $i);
                $j++;
            }

        }
        $data['count']['PTCount'] = $j - 1;
/*
        if ($data['tarefa']['QtdParcelasTarefa'] > 0) {

            for ($i = 1; $i <= $data['tarefa']['QtdParcelasTarefa']; $i++) {

                $data['parcelasrec'][$i]['ParcelaRecebiveis'] = $this->input->post('ParcelaRecebiveis' . $i);
                $data['parcelasrec'][$i]['ValorParcelaRecebiveis'] = $this->input->post('ValorParcelaRecebiveis' . $i);
                $data['parcelasrec'][$i]['DataVencimentoRecebiveis'] = $this->input->post('DataVencimentoRecebiveis' . $i);
                $data['parcelasrec'][$i]['ValorPagoRecebiveis'] = $this->input->post('ValorPagoRecebiveis' . $i);
                $data['parcelasrec'][$i]['DataPagoRecebiveis'] = $this->input->post('DataPagoRecebiveis' . $i);
                $data['parcelasrec'][$i]['QuitadoRecebiveis'] = $this->input->post('QuitadoRecebiveis' . $i);

            }

        }
*/
        //Fim do trecho de c�digo que d� pra melhorar

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

        #### App_Tarefa ####
        $this->form_validation->set_rules('DataTarefa', 'Data do Tarefa', 'required|trim|valid_date');
        #$this->form_validation->set_rules('DataProcedtarefa', 'DataProcedtarefa', 'required|trim');
        #$this->form_validation->set_rules('ParcelaRecebiveis', 'ParcelaRecebiveis', 'required|trim');
        #$this->form_validation->set_rules('idApp_Profissional', 'Profissional', 'required|trim');

        $data['select']['AprovadoTarefa'] = $this->Basico_model->select_status_sn();
        #$data['select']['FormaPagamento'] = $this->Formapag_model->select_formapag();
        $data['select']['ServicoConcluido'] = $this->Basico_model->select_status_sn();
        #$data['select']['ConcluidoServico'] = $this->Basico_model->select_status_sn();
        $data['select']['ConcluidoProcedtarefa'] = $this->Basico_model->select_status_sn();
		$data['select']['QuitadoTarefa'] = $this->Basico_model->select_status_sn();
        #$data['select']['QuitadoRecebiveis'] = $this->Basico_model->select_status_sn();
        $data['select']['Profissional'] = $this->Profissional_model->select_profissional();
        #$data['select']['Servico'] = $this->Basico_model->select_servico();
        #$data['select']['Produto'] = $this->Basico_model->select_produto();

        $data['titulo'] = 'Cadastar Tarefa';
        $data['form_open_path'] = 'tarefa/cadastrar';
        $data['readonly'] = '';
        $data['disabled'] = '';
        $data['panel'] = 'primary';
        $data['metodo'] = 1;
/*
        if ($data['tarefa']['ValorTarefa'] || $data['tarefa']['ValorEntradaTarefa'] || $data['tarefa']['ValorRestanteTarefa'])
            $data['tarefain'] = 'in';
        else
            $data['tarefain'] = '';

        if ($data['tarefa']['FormaPagamento'] || $data['tarefa']['QtdParcelasTarefa'] || $data['tarefa']['DataVencimentoTarefa'])
            $data['parcelasin'] = 'in';
        else
            $data['parcelasin'] = '';
*/
        //if ($data['procedtarefa'][0]['DataProcedtarefa'] || $data['procedtarefa'][0]['Profissional'])
        if (isset($data['procedtarefa']))
            $data['tratamentosin'] = 'in';
        else
            $data['tratamentosin'] = '';


        #Ver uma solu��o melhor para este campo
        (!$data['tarefa']['AprovadoTarefa']) ? $data['tarefa']['AprovadoTarefa'] = 'N' : FALSE;

        $data['radio'] = array(
            'AprovadoTarefa' => $this->basico->radio_checked($data['tarefa']['AprovadoTarefa'], 'Tarefa Aprovado', 'NS'),
        );

        ($data['tarefa']['AprovadoTarefa'] == 'S') ?
            $data['div']['AprovadoTarefa'] = '' : $data['div']['AprovadoTarefa'] = 'style="display: none;"';


        $data['sidebar'] = 'col-sm-3 col-md-2';
        $data['main'] = 'col-sm-7 col-md-8';

        $data['datepicker'] = 'DatePicker';
        $data['timepicker'] = 'TimePicker';

        #$data['nav_secundario'] = $this->load->view('tarefa/nav_secundario', $data, TRUE);

        /*
          echo '<br>';
          echo "<pre>";
          print_r($data);
          echo "</pre>";
          exit ();
          */

        #run form validation
        if ($this->form_validation->run() === FALSE) {
            //if (1 == 1) {
            $this->load->view('tarefa/form_tarefa', $data);
        } else {

            ////////////////////////////////Preparar Dados para Inser��o Ex. Datas "mysql" //////////////////////////////////////////////
            #### App_Tarefa ####
            $data['tarefa']['DataTarefa'] = $this->basico->mascara_data($data['tarefa']['DataTarefa'], 'mysql');
            $data['tarefa']['DataPrazoTarefa'] = $this->basico->mascara_data($data['tarefa']['DataPrazoTarefa'], 'mysql');
			$data['tarefa']['DataConclusao'] = $this->basico->mascara_data($data['tarefa']['DataConclusao'], 'mysql');
            $data['tarefa']['DataRetorno'] = $this->basico->mascara_data($data['tarefa']['DataRetorno'], 'mysql');
            #$data['tarefa']['DataVencimentoTarefa'] = $this->basico->mascara_data($data['tarefa']['DataVencimentoTarefa'], 'mysql');
            #$data['tarefa']['ValorTarefa'] = str_replace(',', '.', str_replace('.', '', $data['tarefa']['ValorTarefa']));
            #$data['tarefa']['ValorEntradaTarefa'] = str_replace(',', '.', str_replace('.', '', $data['tarefa']['ValorEntradaTarefa']));
            #$data['tarefa']['DataEntradaTarefa'] = $this->basico->mascara_data($data['tarefa']['DataEntradaTarefa'], 'mysql');
            #$data['tarefa']['ValorRestanteTarefa'] = str_replace(',', '.', str_replace('.', '', $data['tarefa']['ValorRestanteTarefa']));

            $data['tarefa']['idSis_Usuario'] = $_SESSION['log']['id'];
            $data['tarefa']['idTab_Modulo'] = $_SESSION['log']['idTab_Modulo'];
            $data['tarefa']['idApp_Tarefa'] = $this->Tarefa_model->set_tarefa($data['tarefa']);
            /*
            echo count($data['servico']);
            echo '<br>';
            echo "<pre>";
            print_r($data['servico']);
            echo "</pre>";
            exit ();
            */
/*
            #### App_ServicoVenda ####
            if (isset($data['servico'])) {
                $max = count($data['servico']);
                for($j=1;$j<=$max;$j++) {
                    $data['servico'][$j]['idSis_Usuario'] = $_SESSION['log']['id'];
                    $data['servico'][$j]['idTab_Modulo'] = $_SESSION['log']['idTab_Modulo'];
                    $data['servico'][$j]['idApp_Tarefa'] = $data['tarefa']['idApp_Tarefa'];

                    $data['servico'][$j]['ValorVendaServico'] = str_replace(',', '.', str_replace('.', '', $data['servico'][$j]['ValorVendaServico']));
                    unset($data['servico'][$j]['SubtotalServico']);
                }
                $data['servico']['idApp_ServicoVenda'] = $this->Tarefa_model->set_servico_venda($data['servico']);
            }

            #### App_ProdutoVenda ####
            if (isset($data['produto'])) {
                $max = count($data['produto']);
                for($j=1;$j<=$max;$j++) {
                    $data['produto'][$j]['idSis_Usuario'] = $_SESSION['log']['id'];
                    $data['produto'][$j]['idTab_Modulo'] = $_SESSION['log']['idTab_Modulo'];
                    $data['produto'][$j]['idApp_Tarefa'] = $data['tarefa']['idApp_Tarefa'];

                    $data['produto'][$j]['ValorVendaProduto'] = str_replace(',', '.', str_replace('.', '', $data['produto'][$j]['ValorVendaProduto']));
                    unset($data['produto'][$j]['SubtotalProduto']);
                }
                $data['produto']['idApp_ProdutoVenda'] = $this->Tarefa_model->set_produto_venda($data['produto']);
            }

            #### App_ParcelasRec ####
            if (isset($data['parcelasrec'])) {
                $max = count($data['parcelasrec']);
                for($j=1;$j<=$max;$j++) {
                    $data['parcelasrec'][$j]['idSis_Usuario'] = $_SESSION['log']['id'];
                    $data['parcelasrec'][$j]['idTab_Modulo'] = $_SESSION['log']['idTab_Modulo'];
                    $data['parcelasrec'][$j]['idApp_Tarefa'] = $data['tarefa']['idApp_Tarefa'];

                    $data['parcelasrec'][$j]['ValorParcelaRecebiveis'] = str_replace(',', '.', str_replace('.', '', $data['parcelasrec'][$j]['ValorParcelaRecebiveis']));
                    $data['parcelasrec'][$j]['DataVencimentoRecebiveis'] = $this->basico->mascara_data($data['parcelasrec'][$j]['DataVencimentoRecebiveis'], 'mysql');
                    $data['parcelasrec'][$j]['ValorPagoRecebiveis'] = str_replace(',', '.', str_replace('.', '', $data['parcelasrec'][$j]['ValorPagoRecebiveis']));
                    $data['parcelasrec'][$j]['DataPagoRecebiveis'] = $this->basico->mascara_data($data['parcelasrec'][$j]['DataPagoRecebiveis'], 'mysql');

                }
                $data['parcelasrec']['idApp_ParcelasRecebiveis'] = $this->Tarefa_model->set_parcelasrec($data['parcelasrec']);
            }
*/
            #### App_Procedtarefa ####
            if (isset($data['procedtarefa'])) {
                $max = count($data['procedtarefa']);
                for($j=1;$j<=$max;$j++) {
                    $data['procedtarefa'][$j]['idSis_Usuario'] = $_SESSION['log']['id'];
                    $data['procedtarefa'][$j]['idTab_Modulo'] = $_SESSION['log']['idTab_Modulo'];
                    $data['procedtarefa'][$j]['idApp_Tarefa'] = $data['tarefa']['idApp_Tarefa'];

                    $data['procedtarefa'][$j]['DataProcedtarefa'] = $this->basico->mascara_data($data['procedtarefa'][$j]['DataProcedtarefa'], 'mysql');
					#$data['procedtarefa'][$j]['DataProcedtarefaLimite'] = $this->basico->mascara_data($data['procedtarefa'][$j]['DataProcedtarefaLimite'], 'mysql');

                }
                $data['procedtarefa']['idApp_Procedtarefa'] = $this->Tarefa_model->set_procedtarefa($data['procedtarefa']);
            }

/*
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //*******CORRIGIR -  ALTERAR PARA ENTRAR COM TODAS AS MUDAN�AS NA TABELA DE LOG*****
            $data['campos'] = array_keys($data['query']);
            $data['anterior'] = array();
            //*******CORRIGIR -  ALTERAR PARA ENTRAR COM TODAS AS MUDAN�AS NA TABELA DE LOG*****
//////////////////////////////////////////////////Dados Basicos/////////////////////////////////////////////////////////////////////////
*/

            if ($data['idApp_Tarefa'] === FALSE) {
                $msg = "<strong>Erro no Banco de dados. Entre em contato com o administrador deste sistema.</strong>";

                $this->basico->erro($msg);
                $this->load->view('tarefa/form_tarefa', $data);
            } else {

                //$data['auditoriaitem'] = $this->basico->set_log($data['anterior'], $data['query'], $data['campos'], $data['idApp_Tarefa'], FALSE);
                //$data['auditoria'] = $this->Basico_model->set_auditoria($data['auditoriaitem'], 'App_Tarefa', 'CREATE', $data['auditoriaitem']);
                $data['msg'] = '?m=1';

                redirect(base_url() . 'tarefa/listar/' . $data['msg']);
                exit();
            }
        }

        $this->load->view('basico/footer');
    }

    public function alterar($id = FALSE) {

        if ($this->input->get('m') == 1)
            $data['msg'] = $this->basico->msg('<strong>Informa��es salvas com sucesso</strong>', 'sucesso', TRUE, TRUE, TRUE);
        elseif ($this->input->get('m') == 2)
            $data['msg'] = $this->basico->msg('<strong>Erro no Banco de dados. Entre em contato com o administrador deste sistema.</strong>', 'erro', TRUE, TRUE, TRUE);
        else
            $data['msg'] = '';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $data['tarefa'] = quotes_to_entities($this->input->post(array(
            #### App_Tarefa ####
            'idApp_Tarefa',

			
            'DataTarefa',
			'DataPrazoTarefa',
            'ProfissionalTarefa',
            'AprovadoTarefa',
            'ServicoConcluido',
            'QuitadoTarefa',
            'DataConclusao',
            'DataRetorno',
            #'ValorTarefa',
            #'ValorEntradaTarefa',
            #'DataEntradaTarefa',
            #'ValorRestanteTarefa',
            #'FormaPagamento',
            #'QtdParcelasTarefa',
            #'DataVencimentoTarefa',
            'ObsTarefa',
        ), TRUE));

        //D� pra melhorar/encurtar esse trecho (que vai daqui at� onde estiver
        //comentado fim) mas por enquanto, se est� funcionando, vou deixar assim.

        #(!$this->input->post('SCount')) ? $data['count']['SCount'] = 0 : $data['count']['SCount'] = $this->input->post('SCount');
        #(!$this->input->post('PCount')) ? $data['count']['PCount'] = 0 : $data['count']['PCount'] = $this->input->post('PCount');
        (!$this->input->post('PTCount')) ? $data['count']['PTCount'] = 0 : $data['count']['PTCount'] = $this->input->post('PTCount');
/*
        $j = 1;
        for ($i = 1; $i <= $data['count']['SCount']; $i++) {

            if ($this->input->post('idTab_Servico' . $i)) {
                $data['servico'][$j]['idApp_ServicoVenda'] = $this->input->post('idApp_ServicoVenda' . $i);
                $data['servico'][$j]['idTab_Servico'] = $this->input->post('idTab_Servico' . $i);
                $data['servico'][$j]['ValorVendaServico'] = $this->input->post('ValorVendaServico' . $i);
                $data['servico'][$j]['QtdVendaServico'] = $this->input->post('QtdVendaServico' . $i);
                $data['servico'][$j]['SubtotalServico'] = $this->input->post('SubtotalServico' . $i);
                $data['servico'][$j]['ObsServico'] = $this->input->post('ObsServico' . $i);
                $data['servico'][$j]['ConcluidoServico'] = $this->input->post('ConcluidoServico' . $i);
                $j++;
            }

        }
        $data['count']['SCount'] = $j - 1;

        $j = 1;
        for ($i = 1; $i <= $data['count']['PCount']; $i++) {

            if ($this->input->post('idTab_Produto' . $i)) {
                $data['produto'][$j]['idApp_ProdutoVenda'] = $this->input->post('idApp_ProdutoVenda' . $i);
                $data['produto'][$j]['idTab_Produto'] = $this->input->post('idTab_Produto' . $i);
                $data['produto'][$j]['ValorVendaProduto'] = $this->input->post('ValorVendaProduto' . $i);
                $data['produto'][$j]['QtdVendaProduto'] = $this->input->post('QtdVendaProduto' . $i);
                $data['produto'][$j]['SubtotalProduto'] = $this->input->post('SubtotalProduto' . $i);
                $j++;
            }
        }
        $data['count']['PCount'] = $j - 1;
*/
        $j = 1;
        for ($i = 1; $i <= $data['count']['PTCount']; $i++) {

            if ($this->input->post('DataProcedtarefa' . $i) || $this->input->post('Profissional' . $i) ||
                    $this->input->post('Procedtarefa' . $i) || $this->input->post('ConcluidoProcedtarefa' . $i) ||
					$this->input->post('DataProcedtarefaLimite' . $i)) {
                $data['procedtarefa'][$j]['idApp_Procedtarefa'] = $this->input->post('idApp_Procedtarefa' . $i);
                $data['procedtarefa'][$j]['DataProcedtarefa'] = $this->input->post('DataProcedtarefa' . $i);
                $data['procedtarefa'][$j]['Profissional'] = $this->input->post('Profissional' . $i);
                $data['procedtarefa'][$j]['Procedtarefa'] = $this->input->post('Procedtarefa' . $i);
				$data['procedtarefa'][$j]['ConcluidoProcedtarefa'] = $this->input->post('ConcluidoProcedtarefa' . $i);
				$data['procedtarefa'][$j]['DataProcedtarefaLimite'] = $this->input->post('DataProcedtarefaLimite' . $i);
                $j++;
            }

        }
        $data['count']['PTCount'] = $j - 1;
/*
        if ($data['tarefa']['QtdParcelasTarefa'] > 0) {

            for ($i = 1; $i <= $data['tarefa']['QtdParcelasTarefa']; $i++) {

                $data['parcelasrec'][$i]['idApp_ParcelasRecebiveis'] = $this->input->post('idApp_ParcelasRecebiveis' . $i);
                $data['parcelasrec'][$i]['ParcelaRecebiveis'] = $this->input->post('ParcelaRecebiveis' . $i);
                $data['parcelasrec'][$i]['ValorParcelaRecebiveis'] = $this->input->post('ValorParcelaRecebiveis' . $i);
                $data['parcelasrec'][$i]['DataVencimentoRecebiveis'] = $this->input->post('DataVencimentoRecebiveis' . $i);
                $data['parcelasrec'][$i]['ValorPagoRecebiveis'] = $this->input->post('ValorPagoRecebiveis' . $i);
                $data['parcelasrec'][$i]['DataPagoRecebiveis'] = $this->input->post('DataPagoRecebiveis' . $i);
                $data['parcelasrec'][$i]['QuitadoRecebiveis'] = $this->input->post('QuitadoRecebiveis' . $i);

            }

        }
*/
        //Fim do trecho de c�digo que d� pra melhorar

        if ($id) {
            #### App_Tarefa ####
            $data['tarefa'] = $this->Tarefa_model->get_tarefa($id);
            $data['tarefa']['DataTarefa'] = $this->basico->mascara_data($data['tarefa']['DataTarefa'], 'barras');
            $data['tarefa']['DataPrazoTarefa'] = $this->basico->mascara_data($data['tarefa']['DataPrazoTarefa'], 'barras');
			$data['tarefa']['DataConclusao'] = $this->basico->mascara_data($data['tarefa']['DataConclusao'], 'barras');
            $data['tarefa']['DataRetorno'] = $this->basico->mascara_data($data['tarefa']['DataRetorno'], 'barras');
            #$data['tarefa']['DataEntradaTarefa'] = $this->basico->mascara_data($data['tarefa']['DataEntradaTarefa'], 'barras');
            #$data['tarefa']['DataVencimentoTarefa'] = $this->basico->mascara_data($data['tarefa']['DataVencimentoTarefa'], 'barras');

            #### Carrega os dados do cliente nas vari�ves de sess�o ####
            #$this->load->model('Cliente_model');
            #$_SESSION['Cliente'] = $this->Cliente_model->get_cliente($data['tarefa']['idApp_Cliente'], TRUE);
            #$_SESSION['log']['idApp_Cliente'] = $_SESSION['Cliente']['idApp_Cliente'];
/*
            #### App_ServicoVenda ####
            $data['servico'] = $this->Tarefa_model->get_servico($id);
            if (count($data['servico']) > 0) {
                $data['servico'] = array_combine(range(1, count($data['servico'])), array_values($data['servico']));
                $data['count']['SCount'] = count($data['servico']);

                if (isset($data['servico'])) {

                    for($j=1;$j<=$data['count']['SCount'];$j++)
                        $data['servico'][$j]['SubtotalServico'] = number_format(($data['servico'][$j]['ValorVendaServico'] * $data['servico'][$j]['QtdVendaServico']), 2, ',', '.');
                }
            }

            #### App_ProdutoVenda ####
            $data['produto'] = $this->Tarefa_model->get_produto($id);
            if (count($data['produto']) > 0) {
                $data['produto'] = array_combine(range(1, count($data['produto'])), array_values($data['produto']));
                $data['count']['PCount'] = count($data['produto']);

                if (isset($data['produto'])) {

                    for($j=1;$j<=$data['count']['PCount'];$j++)
                        $data['produto'][$j]['SubtotalProduto'] = number_format(($data['produto'][$j]['ValorVendaProduto'] * $data['produto'][$j]['QtdVendaProduto']), 2, ',', '.');
                }
            }

            #### App_ParcelasRecebiveis ####
            $data['parcelasrec'] = $this->Tarefa_model->get_parcelasrec($id);
            if (count($data['parcelasrec']) > 0) {
                $data['parcelasrec'] = array_combine(range(1, count($data['parcelasrec'])), array_values($data['parcelasrec']));

                if (isset($data['parcelasrec'])) {

                    for($j=1; $j <= $data['tarefa']['QtdParcelasTarefa']; $j++) {
                        $data['parcelasrec'][$j]['DataVencimentoRecebiveis'] = $this->basico->mascara_data($data['parcelasrec'][$j]['DataVencimentoRecebiveis'], 'barras');
                        $data['parcelasrec'][$j]['DataPagoRecebiveis'] = $this->basico->mascara_data($data['parcelasrec'][$j]['DataPagoRecebiveis'], 'barras');
                    }

                }
            }
*/
            #### App_Procedtarefa ####
            $data['procedtarefa'] = $this->Tarefa_model->get_procedtarefa($id);
            if (count($data['procedtarefa']) > 0) {
                $data['procedtarefa'] = array_combine(range(1, count($data['procedtarefa'])), array_values($data['procedtarefa']));
                $data['count']['PTCount'] = count($data['procedtarefa']);

                if (isset($data['procedtarefa'])) {

                    for($j=1; $j <= $data['count']['PTCount']; $j++)
                        $data['procedtarefa'][$j]['DataProcedtarefa'] = $this->basico->mascara_data($data['procedtarefa'][$j]['DataProcedtarefa'], 'barras');
						#$data['procedtarefa'][$j]['DataProcedtarefaLimite'] = $this->basico->mascara_data($data['procedtarefa'][$j]['DataProcedtarefaLimite'], 'barras');

                }
            }

        }

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

        #### App_Tarefa ####
        $this->form_validation->set_rules('DataTarefa', 'Data do Tarefa', 'required|trim|valid_date');        
		#$this->form_validation->set_rules('DataProcedtarefa', 'DataProcedtarefa', 'required|trim');
        #$this->form_validation->set_rules('ParcelaRecebiveis', 'ParcelaRecebiveis', 'required|trim');
        #$this->form_validation->set_rules('idApp_Profissional', 'Profissional', 'required|trim');

        $data['select']['AprovadoTarefa'] = $this->Basico_model->select_status_sn();
        #$data['select']['FormaPagamento'] = $this->Formapag_model->select_formapag();
        $data['select']['ServicoConcluido'] = $this->Basico_model->select_status_sn();
        #$data['select']['ConcluidoServico'] = $this->Basico_model->select_status_sn();
        $data['select']['ConcluidoProcedtarefa'] = $this->Basico_model->select_status_sn();
		$data['select']['QuitadoTarefa'] = $this->Basico_model->select_status_sn();
        #$data['select']['QuitadoRecebiveis'] = $this->Basico_model->select_status_sn();
        $data['select']['Profissional'] = $this->Profissional_model->select_profissional();
        #$data['select']['Servico'] = $this->Basico_model->select_servico();
        #$data['select']['Produto'] = $this->Basico_model->select_produto();

        $data['titulo'] = 'Editar Tarefa';
        $data['form_open_path'] = 'tarefa/alterar';
        $data['readonly'] = '';
        $data['disabled'] = '';
        $data['panel'] = 'primary';
        $data['metodo'] = 2;
/*
        //if ($data['tarefa']['ValorTarefa'] || $data['tarefa']['ValorEntradaTarefa'] || $data['tarefa']['ValorRestanteTarefa'])
        if ($data['count']['SCount'] > 0 || $data['count']['PCount'] > 0)
            $data['tarefain'] = 'in';
        else
            $data['tarefain'] = '';

        if ($data['tarefa']['FormaPagamento'] || $data['tarefa']['QtdParcelasTarefa'] || $data['tarefa']['DataVencimentoTarefa'])
            $data['parcelasin'] = 'in';
        else
            $data['parcelasin'] = '';
*/
        //if (isset($data['procedtarefa']) && ($data['procedtarefa'][0]['DataProcedtarefa'] || $data['procedtarefa'][0]['Profissional']))
        if ($data['count']['PTCount'] > 0)
            $data['tratamentosin'] = 'in';
        else
            $data['tratamentosin'] = '';


        #Ver uma solu��o melhor para este campo
        (!$data['tarefa']['AprovadoTarefa']) ? $data['tarefa']['AprovadoTarefa'] = 'N' : FALSE;

        $data['radio'] = array(
            'AprovadoTarefa' => $this->basico->radio_checked($data['tarefa']['AprovadoTarefa'], 'Tarefa Aprovado', 'NS'),
        );

        ($data['tarefa']['AprovadoTarefa'] == 'S') ?
            $data['div']['AprovadoTarefa'] = '' : $data['div']['AprovadoTarefa'] = 'style="display: none;"';


        $data['sidebar'] = 'col-sm-3 col-md-2';
        $data['main'] = 'col-sm-7 col-md-8';

        $data['datepicker'] = 'DatePicker';
        $data['timepicker'] = 'TimePicker';

        #$data['nav_secundario'] = $this->load->view('cliente/nav_secundario', $data, TRUE);

        /*
          echo '<br>';
          echo "<pre>";
          print_r($data);
          echo "</pre>";
          exit ();
          */

        #run form validation
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('tarefa/form_tarefa', $data);
        } else {

            ////////////////////////////////Preparar Dados para Inser��o Ex. Datas "mysql" //////////////////////////////////////////////
            #### App_Tarefa ####
            $data['tarefa']['DataTarefa'] = $this->basico->mascara_data($data['tarefa']['DataTarefa'], 'mysql');
            $data['tarefa']['DataPrazoTarefa'] = $this->basico->mascara_data($data['tarefa']['DataPrazoTarefa'], 'mysql');
			$data['tarefa']['DataConclusao'] = $this->basico->mascara_data($data['tarefa']['DataConclusao'], 'mysql');
            $data['tarefa']['DataRetorno'] = $this->basico->mascara_data($data['tarefa']['DataRetorno'], 'mysql');
            #$data['tarefa']['DataVencimentoTarefa'] = $this->basico->mascara_data($data['tarefa']['DataVencimentoTarefa'], 'mysql');
            #$data['tarefa']['ValorTarefa'] = str_replace(',', '.', str_replace('.', '', $data['tarefa']['ValorTarefa']));
            #$data['tarefa']['ValorEntradaTarefa'] = str_replace(',', '.', str_replace('.', '', $data['tarefa']['ValorEntradaTarefa']));
           #$data['tarefa']['DataEntradaTarefa'] = $this->basico->mascara_data($data['tarefa']['DataEntradaTarefa'], 'mysql');
           # $data['tarefa']['ValorRestanteTarefa'] = str_replace(',', '.', str_replace('.', '', $data['tarefa']['ValorRestanteTarefa']));

            $data['tarefa']['idSis_Usuario'] = $_SESSION['log']['id'];
            $data['tarefa']['idTab_Modulo'] = $_SESSION['log']['idTab_Modulo'];

            $data['update']['tarefa']['anterior'] = $this->Tarefa_model->get_tarefa($data['tarefa']['idApp_Tarefa']);
            $data['update']['tarefa']['campos'] = array_keys($data['tarefa']);
            $data['update']['tarefa']['auditoriaitem'] = $this->basico->set_log(
                $data['update']['tarefa']['anterior'],
                $data['tarefa'],
                $data['update']['tarefa']['campos'],
                $data['tarefa']['idApp_Tarefa'], TRUE);
            $data['update']['tarefa']['bd'] = $this->Tarefa_model->update_tarefa($data['tarefa'], $data['tarefa']['idApp_Tarefa']);
/*
            #### App_ServicoVenda ####
            $data['update']['servico']['anterior'] = $this->Tarefa_model->get_servico($data['tarefa']['idApp_Tarefa']);
            if (isset($data['servico']) || (!isset($data['servico']) && isset($data['update']['servico']['anterior']) ) ) {

                if (isset($data['servico']))
                    $data['servico'] = array_values($data['servico']);
                else
                    $data['servico'] = array();

                //faz o tratamento da vari�vel multidimensional, que ira separar o que deve ser inserido, alterado e exclu�do
                $data['update']['servico'] = $this->basico->tratamento_array_multidimensional($data['servico'], $data['update']['servico']['anterior'], 'idApp_ServicoVenda');

                $max = count($data['update']['servico']['inserir']);
                for($j=0;$j<$max;$j++) {

                    $data['update']['servico']['inserir'][$j]['idSis_Usuario'] = $_SESSION['log']['id'];
                    $data['update']['servico']['inserir'][$j]['idTab_Modulo'] = $_SESSION['log']['idTab_Modulo'];
                    $data['update']['servico']['inserir'][$j]['idApp_Tarefa'] = $data['tarefa']['idApp_Tarefa'];

                    $data['update']['servico']['inserir'][$j]['ValorVendaServico'] = str_replace(',', '.', str_replace('.', '', $data['update']['servico']['inserir'][$j]['ValorVendaServico']));
                    unset($data['update']['servico']['inserir'][$j]['SubtotalServico']);
                }

                $max = count($data['update']['servico']['alterar']);
                for($j=0;$j<$max;$j++) {
                    $data['update']['servico']['alterar'][$j]['ValorVendaServico'] = str_replace(',', '.', str_replace('.', '', $data['update']['servico']['alterar'][$j]['ValorVendaServico']));
                    unset($data['update']['servico']['alterar'][$j]['SubtotalServico']);
                }

                if (count($data['update']['servico']['inserir']))
                    $data['update']['servico']['bd']['inserir'] = $this->Tarefa_model->set_servico_venda($data['update']['servico']['inserir']);

                if (count($data['update']['servico']['alterar']))
                    $data['update']['servico']['bd']['alterar'] = $this->Tarefa_model->update_servico_venda($data['update']['servico']['alterar']);

                if (count($data['update']['servico']['excluir']))
                    $data['update']['servico']['bd']['excluir'] = $this->Tarefa_model->delete_servico_venda($data['update']['servico']['excluir']);
            }

            #### App_ProdutoVenda ####
            $data['update']['produto']['anterior'] = $this->Tarefa_model->get_produto($data['tarefa']['idApp_Tarefa']);
            if (isset($data['produto']) || (!isset($data['produto']) && isset($data['update']['produto']['anterior']) ) ) {

                if (isset($data['produto']))
                    $data['produto'] = array_values($data['produto']);
                else
                    $data['produto'] = array();

                //faz o tratamento da vari�vel multidimensional, que ira separar o que deve ser inserido, alterado e exclu�do
                $data['update']['produto'] = $this->basico->tratamento_array_multidimensional($data['produto'], $data['update']['produto']['anterior'], 'idApp_ProdutoVenda');

                $max = count($data['update']['produto']['inserir']);
                for($j=0;$j<$max;$j++) {
                    $data['update']['produto']['inserir'][$j]['idSis_Usuario'] = $_SESSION['log']['id'];
                    $data['update']['produto']['inserir'][$j]['idTab_Modulo'] = $_SESSION['log']['idTab_Modulo'];
                    $data['update']['produto']['inserir'][$j]['idApp_Tarefa'] = $data['tarefa']['idApp_Tarefa'];

                    $data['update']['produto']['inserir'][$j]['ValorVendaProduto'] = str_replace(',', '.', str_replace('.', '', $data['update']['produto']['inserir'][$j]['ValorVendaProduto']));
                    unset($data['update']['produto']['inserir'][$j]['SubtotalProduto']);
                }

                $max = count($data['update']['produto']['alterar']);
                for($j=0;$j<$max;$j++) {
                    $data['update']['produto']['alterar'][$j]['ValorVendaProduto'] = str_replace(',', '.', str_replace('.', '', $data['update']['produto']['alterar'][$j]['ValorVendaProduto']));
                    unset($data['update']['produto']['alterar'][$j]['SubtotalProduto']);
                }

                if (count($data['update']['produto']['inserir']))
                    $data['update']['produto']['bd']['inserir'] = $this->Tarefa_model->set_produto_venda($data['update']['produto']['inserir']);

                if (count($data['update']['produto']['alterar']))
                    $data['update']['produto']['bd']['alterar'] =  $this->Tarefa_model->update_produto_venda($data['update']['produto']['alterar']);

                if (count($data['update']['produto']['excluir']))
                    $data['update']['produto']['bd']['excluir'] = $this->Tarefa_model->delete_produto_venda($data['update']['produto']['excluir']);

            }

            #### App_ParcelasRec ####
            $data['update']['parcelasrec']['anterior'] = $this->Tarefa_model->get_parcelasrec($data['tarefa']['idApp_Tarefa']);
            if (isset($data['parcelasrec']) || (!isset($data['parcelasrec']) && isset($data['update']['parcelasrec']['anterior']) ) ) {

                if (isset($data['servico']))
                    $data['parcelasrec'] = array_values($data['parcelasrec']);
                else
                    $data['parcelasrec'] = array();

                //faz o tratamento da vari�vel multidimensional, que ira separar o que deve ser inserido, alterado e exclu�do
                $data['update']['parcelasrec'] = $this->basico->tratamento_array_multidimensional($data['parcelasrec'], $data['update']['parcelasrec']['anterior'], 'idApp_ParcelasRecebiveis');

                $max = count($data['update']['parcelasrec']['inserir']);
                for($j=0;$j<$max;$j++) {
                    $data['update']['parcelasrec']['inserir'][$j]['idSis_Usuario'] = $_SESSION['log']['id'];
                    $data['update']['parcelasrec']['inserir'][$j]['idTab_Modulo'] = $_SESSION['log']['idTab_Modulo'];
                    $data['update']['parcelasrec']['inserir'][$j]['idApp_Tarefa'] = $data['tarefa']['idApp_Tarefa'];

                    $data['update']['parcelasrec']['inserir'][$j]['ValorParcelaRecebiveis'] = str_replace(',', '.', str_replace('.', '', $data['update']['parcelasrec']['inserir'][$j]['ValorParcelaRecebiveis']));
                    $data['update']['parcelasrec']['inserir'][$j]['DataVencimentoRecebiveis'] = $this->basico->mascara_data($data['update']['parcelasrec']['inserir'][$j]['DataVencimentoRecebiveis'], 'mysql');
                    $data['update']['parcelasrec']['inserir'][$j]['ValorPagoRecebiveis'] = str_replace(',', '.', str_replace('.', '', $data['update']['parcelasrec']['inserir'][$j]['ValorPagoRecebiveis']));
                    $data['update']['parcelasrec']['inserir'][$j]['DataPagoRecebiveis'] = $this->basico->mascara_data($data['update']['parcelasrec']['inserir'][$j]['DataPagoRecebiveis'], 'mysql');

                }

                $max = count($data['update']['parcelasrec']['alterar']);
                for($j=0;$j<$max;$j++) {
                    $data['update']['parcelasrec']['alterar'][$j]['ValorParcelaRecebiveis'] = str_replace(',', '.', str_replace('.', '', $data['update']['parcelasrec']['alterar'][$j]['ValorParcelaRecebiveis']));
                    $data['update']['parcelasrec']['alterar'][$j]['DataVencimentoRecebiveis'] = $this->basico->mascara_data($data['update']['parcelasrec']['alterar'][$j]['DataVencimentoRecebiveis'], 'mysql');
                    $data['update']['parcelasrec']['alterar'][$j]['ValorPagoRecebiveis'] = str_replace(',', '.', str_replace('.', '', $data['update']['parcelasrec']['alterar'][$j]['ValorPagoRecebiveis']));
                    $data['update']['parcelasrec']['alterar'][$j]['DataPagoRecebiveis'] = $this->basico->mascara_data($data['update']['parcelasrec']['alterar'][$j]['DataPagoRecebiveis'], 'mysql');
                }

                if (count($data['update']['parcelasrec']['inserir']))
                    $data['update']['parcelasrec']['bd']['inserir'] = $this->Tarefa_model->set_parcelasrec($data['update']['parcelasrec']['inserir']);

                if (count($data['update']['parcelasrec']['alterar']))
                    $data['update']['parcelasrec']['bd']['alterar'] =  $this->Tarefa_model->update_parcelasrec($data['update']['parcelasrec']['alterar']);

                if (count($data['update']['parcelasrec']['excluir']))
                    $data['update']['parcelasrec']['bd']['excluir'] = $this->Tarefa_model->delete_parcelasrec($data['update']['parcelasrec']['excluir']);

            }
*/
            #### App_Procedtarefa ####
            $data['update']['procedtarefa']['anterior'] = $this->Tarefa_model->get_procedtarefa($data['tarefa']['idApp_Tarefa']);
            if (isset($data['procedtarefa']) || (!isset($data['procedtarefa']) && isset($data['update']['procedtarefa']['anterior']) ) ) {

                if (isset($data['servico']))
                    $data['procedtarefa'] = array_values($data['procedtarefa']);
                else
                    $data['procedtarefa'] = array();

                //faz o tratamento da vari�vel multidimensional, que ira separar o que deve ser inserido, alterado e exclu�do
                $data['update']['procedtarefa'] = $this->basico->tratamento_array_multidimensional($data['procedtarefa'], $data['update']['procedtarefa']['anterior'], 'idApp_Procedtarefa');

                $max = count($data['update']['procedtarefa']['inserir']);
                for($j=0;$j<$max;$j++) {
                    $data['update']['procedtarefa']['inserir'][$j]['idSis_Usuario'] = $_SESSION['log']['id'];
                    $data['update']['procedtarefa']['inserir'][$j]['idTab_Modulo'] = $_SESSION['log']['idTab_Modulo'];
                    $data['update']['procedtarefa']['inserir'][$j]['idApp_Tarefa'] = $data['tarefa']['idApp_Tarefa'];

                    $data['update']['procedtarefa']['inserir'][$j]['DataProcedtarefa'] = $this->basico->mascara_data($data['update']['procedtarefa']['inserir'][$j]['DataProcedtarefa'], 'mysql');
					$data['update']['procedtarefa']['inserir'][$j]['DataProcedtarefaLimite'] = $this->basico->mascara_data($data['update']['procedtarefa']['inserir'][$j]['DataProcedtarefaLimite'], 'mysql');
                }

                $max = count($data['update']['procedtarefa']['alterar']);
                for($j=0;$j<$max;$j++) {
                    $data['update']['procedtarefa']['alterar'][$j]['DataProcedtarefa'] = $this->basico->mascara_data($data['update']['procedtarefa']['alterar'][$j]['DataProcedtarefa'], 'mysql');
					$data['update']['procedtarefa']['alterar'][$j]['DataProcedtarefaLimite'] = $this->basico->mascara_data($data['update']['procedtarefa']['alterar'][$j]['DataProcedtarefaLimite'], 'mysql');
                }

                if (count($data['update']['procedtarefa']['inserir']))
                    $data['update']['procedtarefa']['bd']['inserir'] = $this->Tarefa_model->set_procedtarefa($data['update']['procedtarefa']['inserir']);

                if (count($data['update']['procedtarefa']['alterar']))
                    $data['update']['procedtarefa']['bd']['alterar'] =  $this->Tarefa_model->update_procedtarefa($data['update']['procedtarefa']['alterar']);

                if (count($data['update']['procedtarefa']['excluir']))
                    $data['update']['procedtarefa']['bd']['excluir'] = $this->Tarefa_model->delete_procedtarefa($data['update']['procedtarefa']['excluir']);

            }

/*
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //*******CORRIGIR -  ALTERAR PARA ENTRAR COM TODAS AS MUDAN�AS NA TABELA DE LOG*****
            $data['campos'] = array_keys($data['query']);
            $data['anterior'] = array();
            //*******CORRIGIR -  ALTERAR PARA ENTRAR COM TODAS AS MUDAN�AS NA TABELA DE LOG*****
//////////////////////////////////////////////////Dados Basicos/////////////////////////////////////////////////////////////////////////
*/

            //if ($data['idApp_Tarefa'] === FALSE) {
            //if ($data['auditoriaitem'] && $this->Cliente_model->update_cliente($data['query'], $data['query']['idApp_Cliente']) === FALSE) {
            if ($data['auditoriaitem'] && !$data['update']['tarefa']['bd']) {
                $data['msg'] = '?m=2';
                $msg = "<strong>Erro no Banco de dados. Entre em contato com o administrador deste sistema.</strong>";

                $this->basico->erro($msg);
                $this->load->view('tarefa/form_tarefa', $data);
            } else {

                //$data['auditoriaitem'] = $this->basico->set_log($data['anterior'], $data['query'], $data['campos'], $data['idApp_Tarefa'], FALSE);
                //$data['auditoria'] = $this->Basico_model->set_auditoria($data['auditoriaitem'], 'App_Tarefa', 'CREATE', $data['auditoriaitem']);
                $data['msg'] = '?m=1';

                redirect(base_url() . 'tarefa/listar/' . $data['msg']);
                exit();
            }
        }

        $this->load->view('basico/footer');

    }

    public function excluir($id = FALSE) {

        if ($this->input->get('m') == 1)
            $data['msg'] = $this->basico->msg('<strong>Informa��es salvas com sucesso</strong>', 'sucesso', TRUE, TRUE, TRUE);
        elseif ($this->input->get('m') == 2)
            $data['msg'] = $this->basico->msg('<strong>Erro no Banco de dados. Entre em contato com o administrador deste sistema.</strong>', 'erro', TRUE, TRUE, TRUE);
        else
            $data['msg'] = '';

        /*
        #run form validation
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('tarefa/tela_tarefa', $data);
        } else {

            if (!$id) {
                $data['msg'] = '?m=2';
                $this->load->view('tarefa/form_tarefa', $data);
            } else {

                /*
                $data['anterior'] = $this->Tarefa_model->get_tarefa($data['query']['idApp_Tarefa']);
                $data['campos'] = array_keys($data['anterior']);

                $data['auditoriaitem'] = $this->basico->set_log($data['anterior'], NULL, $data['campos'], $data['query']['idApp_Tarefa'], FALSE, TRUE);
                $data['auditoria'] = $this->Basico_model->set_auditoria($data['auditoriaitem'], 'App_Tarefa', 'DELETE', $data['auditoriaitem']);
                */

                $this->Tarefa_model->delete_tarefa($id);

                $data['msg'] = '?m=1';

                redirect(base_url() . 'tarefa/listar/' . $data['msg']);
                exit();
            //}
        //}

        $this->load->view('basico/footer');
    }

    public function listar($id = NULL) {

        if ($this->input->get('m') == 1)
            $data['msg'] = $this->basico->msg('<strong>Informa��es salvas com sucesso</strong>', 'sucesso', TRUE, TRUE, TRUE);
        elseif ($this->input->get('m') == 2)
            $data['msg'] = $this->basico->msg('<strong>Erro no Banco de dados. Entre em contato com o administrador deste sistema.</strong>', 'erro', TRUE, TRUE, TRUE);
        else
            $data['msg'] = '';


        //$_SESSION['Tarefa'] = $this->Tarefa_model->get_cliente($id, TRUE);
        //$_SESSION['Tarefa']['idApp_Cliente'] = $id;
        $data['aprovado'] = $this->Tarefa_model->list_tarefa($id, 'S', TRUE);
        $data['naoaprovado'] = $this->Tarefa_model->list_tarefa($id, 'N', TRUE);

        //$data['aprovado'] = array();
        //$data['naoaprovado'] = array();
        /*
          echo "<pre>";
          print_r($data['query']);
          echo "</pre>";
          exit();
         */

        $data['list'] = $this->load->view('tarefa/list_tarefa', $data, TRUE);
       # $data['nav_secundario'] = $this->load->view('cliente/nav_secundario', $data, TRUE);

        $this->load->view('tarefa/tela_tarefa', $data);

        $this->load->view('basico/footer');
    }

    public function listarBKP($id = NULL) {

        if ($this->input->get('m') == 1)
            $data['msg'] = $this->basico->msg('<strong>Informa��es salvas com sucesso</strong>', 'sucesso', TRUE, TRUE, TRUE);
        elseif ($this->input->get('m') == 2)
            $data['msg'] = $this->basico->msg('<strong>Erro no Banco de dados. Entre em contato com o administrador deste sistema.</strong>', 'erro', TRUE, TRUE, TRUE);
        else
            $data['msg'] = '';


        //$_SESSION['Tarefa'] = $this->Tarefa_model->get_cliente($id, TRUE);
        #$_SESSION['Tarefa']['idApp_Cliente'] = $id;
        $data['query'] = $this->Tarefa_model->list_tarefa(TRUE, TRUE);
        /*
          echo "<pre>";
          print_r($data['query']);
          echo "</pre>";
          exit();
         */
        if (!$data['query'])
            $data['list'] = FALSE;
        else
            $data['list'] = $this->load->view('tarefa/list_tarefa', $data, TRUE);

        #$data['nav_secundario'] = $this->load->view('cliente/nav_secundario', $data, TRUE);

        $this->load->view('tarefa/tela_tarefa', $data);

        $this->load->view('basico/footer');
    }

}
