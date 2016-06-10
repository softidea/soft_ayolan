<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index() {
        $this->load->view('login');
    }

    public function home() {
        $this->load->view('user/user_home');
    }

    public function registration() {
        $this->load->view('user/user_registration');
    }

    public function view() {
        
        //load model
        $this->load->model('user_model');
        
        $user_id=1;
        
        $user_info=$this->user_model->get_userinfo($user_id);
        
        //load view
        $this->load->view('user/user_view');
    }

    public function settings() {
        $this->load->view('user/user_settings');
    }

    public function reports() {
        $this->load->view('user/user_reports');
    }

}
