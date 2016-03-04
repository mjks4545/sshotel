<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class felio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
	public function index( $name = null , $company = null , $room_no = null , $reg_no = null , $bill_no = null )
        {
            $query  = $this->db->get_where( 'felio', ['O_No'=> $bill_no] );
            $result = $query->result('object');
            $array['values'] = [
                'name'     => $name,
                'company'  => $company,
                'room_no'  => $room_no,
                'reg_no'   => $reg_no,
                'bill_no'  => $bill_no,
                'result'   => $result
            ];
            $this->load->view('include/header.php');
            $this->load->view('include/sidebar.php');
            $this->load->view('felio/felio.php',$array);
            $this->load->view('include/footer.php');
        }
        
}


