<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{

    function index(){
         $this->load->template('user/login');
     }

     function verify(){
       $login= $this->input->post('login');
       $pswd= md5($this->input->post('pswd'));

       $dados=array(
           'login'=>$login,
            'pswd'=>$pswd
        );
       $this->load->model('login_model');
       $result= $this->login_model->verify($dados);
 
        
       if($result!==NULL){
            $user=$this->login_model->userRoutes($dados);   
            $this->session->set_userdata('userLogado',$user);
            $user= $user['funcao'];
            if ($user==='adm'){
            $this->load->template('user/homeAdmin', $user);
            }  else  {
            $this->load->template('user/homeVistoriante', $user);
            }
     }else{
        $this->session->set_flashdata("danger", "Login ou senha inválido");         
        redirect('login');
     }

    }//fim de verify


    function logout(){
       
        $this->session->set_flashdata("danger", "DESLOGADO COM SUCESSO");
        $this->session->unset_userdata('userLogado');
        redirect('login');
    }

}