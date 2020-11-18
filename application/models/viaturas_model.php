<?php 

class Viaturas_Model extends CI_Model{

    function getAll(){
        $dados=$this->db->get('cepi_vtr')->result_array();
        return $dados;
    }


}


?>