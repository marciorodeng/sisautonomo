<?php

#modelo que verifica usu�rio e senha e loga o usu�rio no sistema, criando as sess�es necess�rias

defined('BASEPATH') OR exit('No direct script access allowed');

class Loginempresafilial_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('basico');

    }

    public function check_dados_usuario1($senha, $usuario, $retorna = FALSE) {

        $query = $this->db->query('SELECT * FROM Sis_EmpresaFilial WHERE '
                . '(UsuarioEmpresaFilial = "' . $usuario . '" AND '
                . 'Senha = "' . $senha . '") OR '
                . '(Email = "' . $usuario . '" AND '
                . 'Senha = "' . $senha . '")'
        );
        #$query = $this->db->get_where('Sis_EmpresaFilial', $data);
        /*
          echo $this->db->last_query();
          echo "<pre>";
          print_r($query);
          echo "</pre>";
          exit();
         */
        if ($query->num_rows() === 0) {
            return FALSE;
        }
        else {
            if ($retorna === FALSE) {
                return TRUE;
            }
            else {
                $query = $query->result_array();
                return $query[0];
            }
        }

    }
	
	public function check_dados_usuario($senha, $usuario, $retorna = FALSE) {

        $query = $this->db->query('SELECT * FROM Sis_EmpresaFilial WHERE '
                . '(UsuarioEmpresaFilial = "' . $usuario . '" AND '
                . 'Senha = "' . $senha . '" AND '

				. 'idTab_Modulo = "' . $_SESSION['log']['idTab_Modulo'] . '") OR '
                . '(Email = "' . $usuario . '" AND '
                . 'Senha = "' . $senha . '" AND '

				. 'idTab_Modulo = "' . $_SESSION['log']['idTab_Modulo'] . '") '	
        );
        #$query = $this->db->get_where('Sis_EmpresaFilial', $data);
        /*
          echo $this->db->last_query();
          echo "<pre>";
          print_r($query);
          echo "</pre>";
          exit();
         */
        if ($query->num_rows() === 0) {
            return FALSE;
        }
        else {
            if ($retorna === FALSE) {
                return TRUE;
            }
            else {
                $query = $query->result_array();
                return $query[0];
            }
        }

    }

    public function check_usuario($data) {

        $query = $this->db->query('SELECT * FROM Sis_EmpresaFilial WHERE UsuarioEmpresaFilial = "' . $data . '" OR Email = "' . $data . '"');
        if ($query->num_rows() === 0) {
            return 1;
        }
        else {
            $query = $query->result_array();

            if ($query[0]['Inativo'] == 1)
                return 2;
            else
                return FALSE;
        }

        #$query = $this->db->get_where('Sis_EmpresaFilial', $data);
        /*
          echo $this->db->last_query();
          echo "<pre>";
          print_r($query);
          echo "</pre>";
          exit();
         */

    }
	
	public function check_nomeempresa($data) {

        $query = $this->db->query('SELECT * FROM Sis_EmpresaFilial WHERE NomeEmpresa = "' . $data . '"');
        if ($query->num_rows() === 0) {
            return 1;
        }
        else {
            $query = $query->result_array();

            if ($query[0]['Inativo'] == 1)
                return 2;
            else
                return FALSE;
        }

        #$query = $this->db->get_where('Sis_EmpresaFilial', $data);
        /*
          echo $this->db->last_query();
          echo "<pre>";
          print_r($query);
          echo "</pre>";
          exit();
         */

    }

    public function set_acesso($usuario, $operacao) {

        $data = array(
            'Data' => date('Y-m-d H:i:s'),
            'Operacao' => $operacao,
            'idSis_EmpresaFilial' => $usuario,
            'Ip' => $this->input->ip_address(),
            'So' => $this->agent->platform(),
            'Navegador' => $this->agent->browser(),
            'NavegadorVersao' => $this->agent->version(),
            'SessionId' => session_id(),
        );

        $query = $this->db->insert('Sis_AuditoriaAcessoEmpresa', $data);

        if ($this->db->affected_rows() === 0) {
            return FALSE;
        }
        else {
            return TRUE;
        }

    }

    public function set_usuario($data) {
        #unset($data['idSisgef_Fila']);
        /*
          echo $this->db->last_query();
          echo '<br>';
          echo "<pre>";
          print_r($data);
          echo "</pre>";
          exit();
         */
        $query = $this->db->insert('Sis_EmpresaFilial', $data);

        if ($this->db->affected_rows() === 0) {
            return FALSE;
        }
        else {
            #return TRUE;
            return $this->db->insert_id();
        }

    }

    public function set_agenda($data) {
        #unset($data['idSisgef_Fila']);
        /*
          echo $this->db->last_query();
          echo '<br>';
          echo "<pre>";
          print_r($data);
          echo "</pre>";
          exit();
         */
        $query = $this->db->insert('App_Agenda', $data);

        if ($this->db->affected_rows() === 0) {
            return FALSE;
        }
        else {
            #return TRUE;
            return $this->db->insert_id();
        }

    }

    public function ativa_usuario($id, $data) {

        $query = $this->db->query('SELECT * FROM Sis_EmpresaFilial WHERE Codigo = "' . $id . '"');
        if ($query->num_rows() === 0) {
            return FALSE;
        }
        else {
            $query = $this->db->update('Sis_EmpresaFilial', $data, array('Codigo' => $id));

            if ($this->db->affected_rows() === 0)
                return FALSE;
            else
                return TRUE;
        }

    }

    public function get_data_by_usuario($data) {

        $query = $this->db->query('SELECT idSis_EmpresaFilial, UsuarioEmpresaFilial, Email FROM Sis_EmpresaFilial WHERE '
                . 'UsuarioEmpresaFilial = "' . $data . '" OR Email = "' . $data . '"');
        $query = $query->result_array();
        return $query[0];

    }

    public function get_data_by_codigo($data) {

        $query = $this->db->query('SELECT idSis_EmpresaFilial, UsuarioEmpresaFilial, Email FROM Sis_EmpresaFilial WHERE Codigo = "' . $data . '"');
        $query = $query->result_array();
        #return $query[0]['idSis_EmpresaFilial'];
        return $query[0];

    }

    public function troca_senha($id, $data) {

        $query = $this->db->update('Sis_EmpresaFilial', $data, array('idSis_EmpresaFilial' => $id));

        if ($this->db->affected_rows() === 0)
            return TRUE;
        else
            return FALSE;

    }
/*
    public function get_agenda_padrao($data) {

        $query = $this->db->query('SELECT idApp_Agenda FROM App_Agenda WHERE idSis_EmpresaFilial = ' . $data . ' ORDER BY idApp_Agenda ASC LIMIT 1');
        $query = $query->result_array();
        #return $query[0]['idSis_EmpresaFilial'];
        return $query[0]['idApp_Agenda'];

    }
*/
}
