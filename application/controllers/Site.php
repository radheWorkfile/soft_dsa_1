<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $this->load->library('user_agent');
        error_reporting(0);
    }
    
 
public function index()
{
    $this->load->view('themes/index');
}
public function about()
{
    $this->load->view('themes/about');
}
public function services()
{
    $this->load->view('themes/services');
}
public function contact()
{
    $this->load->view('themes/contact');
}
public function request()
{
    $this->load->view('themes/request');
}





}
