<?php

    class Login_model extends CI_Model{
        function can_login($email, $password){
            $this->db->where('email', $email);
            $query = $this->db->get('client');
            if($query->num_rows()>0){
                foreach($query->result() as $row){
                    if($row->is_email_verified == 'yes'){
                       
                        $store_password = $this->encryption->decode($row->password);

                        if($password == $store_password){
                            $this->session->set_userdata('id', $row->id);
                        }else{
                            return 'Senha Errada';
                        }
                        }
                        else{
                            return 'Primeiro, verifique seu endereco de email';
                           // redirect('private_area');
                            //$this->load->view('teste_private_area');
                        }
                    }
                }
                else{
                    return 'Endereco de email errado';
                }
            }
        }
?>