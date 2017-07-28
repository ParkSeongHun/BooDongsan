<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
  function reg(){
    $this->load->database();
    $this->load->model('User_model');
    $email = $this->input->post('email');
    $pw = $this->input->post('pw');
    $hashedPW = password_hash($pw, PASSWORD_DEFAULT);  // 비밀번호 암호화
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
    $email = $this->input->post('email');
    $pw = $this->input->post('pw');
    $data = $this -> User_model-> login($email);
    $hashedPW = $data->row()->user_pw;
    $result = '';
    if (password_verify($pw,$hashedPW) ) {
      $result = "로그인 성공!";
    } else {
      $result = "로그인 실패!";
    }
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode(array('result_body' => $result)));
  }
}
?>
