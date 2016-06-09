<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
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
        $this->load->view('user/user_view');
    }

    public function settings() {
        $this->load->view('user/user_settings');
    }

    public function reports() {
        $this->load->view('user/user_reports');
    }

}
