<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Word extends CI_Controller {
  function index(){
    $this->load->database();
    $this->load->model('Word_model');
    $data = $this -> Word_model-> gets();
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode(array('result_body' => $data)));
  }
  function test(){
    $this->load->database();
    $this->load->model('Word_model');
    $data = $this -> Word_model-> gets();
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode(array('result_body' => $data)));
  }
}
?>
