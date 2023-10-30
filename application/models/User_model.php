<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

  public function save_user($data)
  {
    // Insert user data into the database or perform other operations
    $this->db->insert('comments', $data);
    return $this->db->insert_id();
  }
}