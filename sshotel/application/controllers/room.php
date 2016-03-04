<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {
    
	public function index()
        {
            $this->load->view('include/header.php');
            $this->load->view('include/sidebar.php');
            $this->load->view('room/room_view');
            $this->load->view('include/footer.php');
        }
        
        public function add_room(){
            
            $roomType = $this->input->post('RoomType');
            $roomRent = $this->input->post('RoomRent');
            $notes    = $this->input->post('Notes');
            $date     = date("m.d.y");
            
            $room_array = [
              'Room_Type'  => $roomType,
              'Room_Rent'  => $roomRent,
              'Notes'      => $notes,
              'date_added' => $date
            ];
            
            $this->db->insert( 'room' , $room_array );
            
            redirect('Room');
        
        }
        
        public function list_all_rooms(){
            $q    = $this->db->get('room');
            $data['data'] = $q->result_array(); 
            $this->load->view('include/header.php');
            $this->load->view('include/sidebar.php');
            $this->load->view('room/add_room_view' , $data);
            $this->load->view('include/footer.php');
        }
        
}


