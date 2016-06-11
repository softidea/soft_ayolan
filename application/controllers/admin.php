<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->load->view('admin/admin_home');
    }

    public function add() {
        $this->load->view('admin/admin_add');
    }

    public function settings() {
        $this->load->view('admin/admin_settings');
    }

    public function customer($method) {
        
        if ($method=="update") {
            $this->load->view('admin/customer/updateinfo');
        }
        if ($method=="service") {
             $this->load->view('admin/customer/updateservice');
        }
    }
   

}
