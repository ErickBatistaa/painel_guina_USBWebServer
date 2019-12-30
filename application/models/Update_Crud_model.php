<?php

    class Update_Crud_model extends CI_Model{

        public function __construct(){
            parent::__construct();
        }
        
        function editar($up){

           

           $this->db->select('*');

           $this->db->from('templates');
      
           $this->db->where('ID', $up);

           //$this->db->query('SELECT * FROM templates');
      
           $query = $this->db->get();
      
           return $query->row();


            
        }

        function update($data){

            /*$this->db->where('id', $data['dados']);
            $this->db->set('header', $data['header']);
            $this->db->set('type', $data['type']);
            $this->db->set('content', $data['content']);
            return $this->db->update('templates');*/
            $this->db->where('ID', $this->input->post('ID'));
           
            $this->db->set('header', $data);
            $this->db->set('type', $data);
            $this->db->set('content', $data);
           
            return $this->db->update('templates', $data);

        }
    }
?>