<?php

    class Register_model extends CI_Model{
        function insert($data){
            $this->db->insert('client', $data);
            return $this->db->insert_id();
        }

        function verify_email($key){
            $this->db->where('verification_key', $key);
            $this->db->where('email_verified','no');
            $query = $this->db->get('client');
            if($query->num_rows()>0){
                $data = array(
                    'email_verified' => 'yes'
                );
                $this->db->where('verification_key', $key);
                $this->db->update('client', $data);
                return true;
            }else{
                return false;
            }
        }
    }
?>