<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    public function get_userinfo($user_id) {

        $this->db->select('user_email', 'user_password');
        $this->db->where('iduser',$user_id);
    }

}
