<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
  function reg(){
    $this->load->database();
    $this->load->model('User_model');
        $email = $this->input->post('email');
        $pw = $this->input->post('pw');
        $hashedPW = password_hash($pw, PASSWORD_DEFAULT);
        $data = array(
          'user_id' => $email ,
          'user_pw' => $hashedPW
        );
        $result= $this -> User_model-> add($data);
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('result_body' => $result)));
      }
      function login(){
        $this->load->database();
        $this->load->model('User_model');
      }
    }
    ?>
