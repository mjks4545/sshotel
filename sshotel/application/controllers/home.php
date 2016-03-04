<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
    public function index()
    {
        $this->load->view('include/header.php');
        $this->load->view('include/sidebar.php');
        $this->load->view('home/home.php');
        $this->load->view('include/footer.php');
    }
    
}
