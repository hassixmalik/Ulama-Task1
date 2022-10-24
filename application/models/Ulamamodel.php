<?php
     class Ulamamodel extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function getdata(){
            return $this->db->get('blogs')->result_array();
        }

        public function insertdata()
        {
            $this->load->helper('url');

            $data = array(
                //pending to edit
                'title' => $this->input->post('title'), 
                'descriptionn' => $this->input->post('description')
            );

            return $this->db->insert('blogs', $data);
        }

        //will add if time
        public function mydelete($id){
            return $this->db->delete('blogs',array('id'=> $id));
        }
     }

?>