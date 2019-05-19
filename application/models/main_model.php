<?php  
 class Main_model extends CI_Model  
 {  
      function can_login($email, $password)  
      {  
           $this->db->where('email', $email);  
           $this->db->where('pass', $password);
           $this->db->where('access', 1);  
           $query = $this->db->get('user');  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }
        
      function emp_chk($username)  
      {  
            $this->db->select('emp_id');
            $this->db->from('user');
            $this->db->where('userName',$username);
            $query=$this->db->get();
            return $query->row()->emp_id;
      }    
 }
 ?> 