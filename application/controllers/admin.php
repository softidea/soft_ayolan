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

        if ($method == "update") {
            $this->load->view('admin/customer/updateinfo');
        }
        if ($method == "service") {
            $this->load->view('admin/customer/updateservice');
        }
        if ($method == "checksis") {
             $this->load->view('admin/customer/checksis');
        }
        if($method=="addsis"){
            $this->load->view('admin/customer/addsis');
        }
        if($method=="viewsis"){
            $this->load->view('admin/customer/viewsis');
        }
    }

}
