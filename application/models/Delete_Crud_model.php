<?php

    class Delete_Crud_model extends CI_Model{

        public function __construct(){
            parent::__construct();
        }
        
        function delete($ID){

            //$createdDate = date('Y-m-d H:i:s');
            $this->db->where('ID', $ID);
            return $this->db->delete('templates');
        }
    }
?>