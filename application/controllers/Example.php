<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Example extends CI_Controller {
    function login(){
      $this->load->database();
      $this->load->model('Example_model');
      $id = $this->input->post('id');
      $data = $this -> Example_model-> gets();
      $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode(array('result_code'=>200,'result_body' => $data->result_array())));
    }
}
?>
