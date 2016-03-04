<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registration extends CI_Controller {

	
    public function index()
    {
        $query = $this->db->query("SELECT `Reg_No` FROM `customer`");
        $row['reg_no'] = $query->last_row();
        $this->load->view('include/header.php');
        $this->load->view('include/sidebar.php');
        $this->load->view('registration/registration.php',$row);
        $this->load->view('include/footer.php');
    }
    
    // -------------------------------------------------------------------------
    
    public function after_form_posts(){
        
        $bool = $this->input->post('bool',TRUE);
        if($bool === 'false'){
            $customer = [
                'Name'                   => $this->input->post('name', TRUE),
                'Nationality'            => $this->input->post('nationality', TRUE),
                'Profession'             => $this->input->post('profession', TRUE),
                'Id_Card_Passport'       => $this->input->post('id_pass', TRUE),
                'Date_of_Issue'          => $this->input->post('date_of_issue', TRUE),
                'Telephon_No'            => $this->input->post('telephone_no', TRUE),
                'Date_of_birth'          => $this->input->post('date_of_birth', TRUE),
                'Address'                => $this->input->post('address', TRUE),
                'Company'                => $this->input->post('company', TRUE),
                'date_added'             => $this->input->post('date_of_arrival', TRUE)
            ];

            $reg_no_c = $this->db->insert('customer', $customer);
            $reg_no   = $this->db->insert_id();
        }else{
            $reg_no   = $this->input->post('reg_no',TRUE);
            $reg_no_c = True; 
        }
        
        $this->output->set_content_type('application_json');    
        
        if($reg_no_c){
        
            $occupancies = [
                'Room_No'         => $this->input->post('room_no', TRUE),
                'Reg_No'          => $reg_no,
                'Emp_No'          => '',
                'No_Persons'      => $this->input->post('persons', TRUE),
                'Arrival_Date'    => $this->input->post('date_of_arrival', TRUE),
                'Arrival_Time'    => $this->input->post('time_of_arrival', TRUE),
                'From'            => $this->input->post('from', TRUE),
                'Departure_Date'  => $this->input->post('date_of_departure', TRUE),
                'Departure_TIme'  => $this->input->post('time_of_departure', TRUE),
                'Destination'     => $this->input->post('destination', TRUE),
                'Purpose'         => $this->input->post('purpose_of_visit', TRUE),
                'Remarks'         => $this->input->post('remarks', TRUE),
                'date_added'      => $this->input->post('date_of_arrival', TRUE)
            ];
            
            $bill_no_c = $this->db->insert('occupancies', $occupancies);
            $bill_no   = $this->db->insert_id();
            
        }else{
            
            $this->output->set_output( json_encode([
                'result' => 0,
                'error'  => 'There must be some problem in the entered data that\'s why we are unable to register customer please try again'
            ]) );
            return FALSE;
        
        }
        
        if($bill_no_c){
          
            $felio = [
                'Room_Rent'  => $this->input->post('rate', TRUE),
                'O_No'       => $bill_no,
                'date_added' => $this->input->post('date_of_arrival', TRUE)   
            ];
        
            $felio_no_c = $this->db->insert('felio', $felio);
            
            $payments = [
                'Paid' => $this->input->post('deposited', TRUE),
                'O_No' => $bill_no
            ];
        
            $payment_no_c = $this->db->insert('payments', $payments);
        
        }else{
           
            $this->output->set_output( json_encode([
                'result' => 0,
                'error'  => 'There must be some problem in the entered data that\'s why we are unable to create customer bill please delete the customer entered data and try again'
            ]) );
            return FALSE;
            
        }
        
        if($felio_no_c && $payment_no_c){
            $this->output->set_output( json_encode( [
                'result'  => 1,
                'reg_no'  => $reg_no,
                'bill_no' => $bill_no
            ] ) );
            return FALSE;
            
        }
        $this->output->set_output( json_encode([
                'result' => 0,
                'error'  => 'There must be some problem that\'s why we are unable to complete the execution please try again later'
            ]) );

        
    }
    
    // -------------------------------------------------------------------------

    
    public function get_values_through_id(){
        $id = $this->input->post('name');
        $this->db->where( 'Id_Card_Passport' , $id );
        $q = $this->db->get( 'customer' );
        $result = $q->result();
        $this->output->set_content_type('application_json');
        if( empty($result) ){
            
            $this->output->set_output( json_encode([
                'result' => 0,
                'error'  => 'no user found'
            ]) );
            return false;
            
        }else{
            $this->output->set_output( json_encode( [
                'result'  => 1,
                'data'  => $result
            ] ) );
        }
    }
    
    // -------------------------------------------------------------------------

    
}