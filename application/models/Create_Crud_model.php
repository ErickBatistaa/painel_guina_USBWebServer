<?php

    class Create_Crud_model extends CI_Model{

        public function __construct(){
            parent::__construct();
        }
        
        function insert($data){

            //$createdDate = date('Y-m-d H:i:s');
            $this->db->insert('templates', $data);
            return $this->db->insert_id();

        }

        //$createdDate = date('Y-m-d H:i:s');
        //$query = "insert into 'templates' ('createdDate') values ('".$createdDate."')";
       // $this->db->insert('templates', $createdDate);

        function verify_create($key){

            $this->db->where('status', 'no');
            $this->db->where('createdDate', $key);
            $query = $this->db->get('templates');
            if($query->num_rows()>0){
                $data = array(
                    'status' => 'yes'
                );
                $this->db->where('createdDate', $key);
                $this->db->update('templates', $data);
                return true;
            }else{
                return false;
                echo "erro !!!!";
            }

        }

    }
?>