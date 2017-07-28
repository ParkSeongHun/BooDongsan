<?php
class Example_Model extends CI_Model{
  function __construct(){
    parent::__construct();
  }
  public function gets(){
    // $sql = "SELECT * FROM users WHERE name like ?";
    // return $this->db->query($sql, array("%".$id."%"));
    $sql = "SELECT * FROM users";
    return $this->db->query($sql);
  }
}
?>
