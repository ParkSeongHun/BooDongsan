<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
    function index(){
        $this->load->database();
        $this->load->model('Topic_model');
        $data = $this -> Topic_model-> gets();
        $this->load->view("head");
        $this->load->view("main",array('topic' =>$data));
        $this->load->view("footer");
    }
    function get($id){
        $this->load->view("head");
        $this->load->view("get",array("id"=>$id));
        $this->load->view("footer");
    }
}
?>
