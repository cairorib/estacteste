<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    function exibirVtr(){
        $this->load->model('viaturas_model');
        $dados=$this->viaturas_model->getAll();
        $dados=array('viatura'=>$dados);
        $this->load->template('admin/vtr',$dados);

    }


}