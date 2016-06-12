<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function index() {
        $this->load->view('customer/customer_view');
    }

    public function registration() {
        $this->load->view('customer/customer_registration');
    }

    public function service() {
        $this->load->view('customer/customer_service');
    }

    public function installment() {
        $this->load->view('customer/customer_installment');
    }

    public function penalty() {
        $this->load->view('customer/customer_penalty');
    }

    public function addlease() {
        $this->load->view('customer/customer_addlease');
    }

    public function addpawn() {
        $this->load->view('customer/customer_addpawn');
    }
    public function serviceview(){
         $this->load->view('customer/customer_serviceview');
    }
    public function search() {
        $this->load->view('customer/customer_view');
    }
   
}
