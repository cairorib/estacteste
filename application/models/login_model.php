<?php 

class Login_model extends CI_Model{

    function verify($dados){
        $login= $dados['login'];
        $pswd=$dados['pswd'];
        $this->db->where('login', $login);
        $this->db->where('pswd', $pswd);
        $result=$this->db->get('sec_users')->row_array();
        return $result;
    }

    function userRoutes($dados){
        $login= $dados['login'];
        $pswd=$dados['pswd'];
        $this->db->where('login', $login);
        $this->db->where('pswd', $pswd);
        $user=$this->db->get('user_cepivtr')->row_array();
        return $user;
    }

}


?>