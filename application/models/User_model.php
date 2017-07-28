<?php
class User_model extends CI_Model{
    function __construct(){
      parent::__construct();
    }
    # .. 모든 회원 조회
    public function gets(){
    return $this->db->query("SELECT * FROM users")->result();
    }
    # .. 회원가입
    public function add($data){
      return $this->db->insert('users',$data);
    }
    # .. 로그인
    public function login($email){
      return $this->db->get_where('users', array('user_id' => $email));
    }
}
