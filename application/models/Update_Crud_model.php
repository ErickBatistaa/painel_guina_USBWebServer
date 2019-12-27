<?php

    class Update_Crud_model extends CI_Model{

        public function __construct(){
            parent::__construct();
        }
        
        function editar($up){

           

           $this->db->select('*');

           $this->db->from('templates');
      
           $this->db->where('ID', $up);
      
           $query = $this->db->get();
      
           return $query->row();


            
        }

        function alterar($data){

            $this->db->where('id', $data['id']);
            $this->db->set($data);
            return $this->db->update('templates');

        }
    }
?>