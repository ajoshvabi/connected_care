<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Adminmodel extends CI_model
{
    public function admindoctorview()
    {
        $this->db->select('*');
        $this->db->from('doctorreg');
        $this->db->join('login', 'login.id = doctorreg.loginid');
        $qry=$this->db->get();
        return $qry->result();
    }
    public function adminpublicview()
    {
        $this->db->select('*');
        $this->db->from('userreg');
        $this->db->join('login', 'login.id = userreg.loginid');

        $qry=$this->db->get();
        return $qry->result();
    }
    public function adminhospitalview()
    {
        $this->db->select('*');
        $this->db->from('hospitalreg');
        $this->db->join('login', 'login.id = hospitalreg.loginid');

        $qry=$this->db->get();
        return $qry->result();
    }




    public function checklogin($email,$password)
    {
        $this->db->select('password');
        $this->db->from('login');
        $this->db->where('email',$email);
        $tablepass=$this->db->get()->row('password');
        return $this->verifypassword($password,$tablepass);
    }
    public function verifypassword($password,$tablepass)
    {
        return password_verify($password,$tablepass);
    }
    public function getuserid($email)
    {
        $this->db->select('id');
        $this->db->from('login');
        $this->db->where('email',$email);
        return $this->db->get()->row('id');
    }
    public function getuserdetail($id)
    {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('id',$id);
        return $this->db->get()->row();
    }
    public function doctoraccept($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('login',$data);
        return true;

    }
    public function doctorreject($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('login',$data);
        return true;

    }
    public function hospitalaccept($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('login',$data);
        return true;

    }
    public function hospitalreject($data,$id)
    {
        $this->db->where('id', $id);
        return $this->db->update('login',$data);
       

    }
    public function notificationadd($data)
    {
       return $this->db->insert('notification',$data);
    }
    public function adminnotificationview()
    {
        $this->db->select('*');
         $this->db->from('notification');
         $query=$this->db->get();
         return $query->result();
    }

    
    public function adminnotificationupdate($nid)
    {
        $this->db->select('*');
         $this->db->from('notification');
         $this->db->where('nid',$nid);
         $query=$this->db->get();
         return $query->result();
    }
    public function notificationupdate($data,$nid)
    {
        $this->db->where('nid', $nid);
        return $this->db->update('notification',$data);
       

    }

    public function deletenotification($nid)
    {
        $this->db->where('nid', $nid);
        return $this->db->delete('notification');
    }
    public function admincomplaintview()
    {
        $this->db->select('*');
        $this->db->from('complaint');
        $this->db->join('userreg','complaint.loginid=userreg.loginid');
        $this->db->order_by('date','DESC');
        $query=$this->db->get();
        return $query->result();
    }
    public function addreply($comid,$data)
    {
        $this->db->where('comid',$comid);
       return $this->db->update('complaint',$data);
    }
    public function adminreplayview($coid)
    {
        // echo $coid;exit;
        $this->db->select('*');
        $this->db->from('complaint');
        $this->db->where('comid',$coid);
        $query=$this->db->get();
        return $query->result();
    }
    public function nouser()
    {
        return $this->db->count_all_results('userreg');
    }
    public function nodoctor()
    {
        return $this->db->count_all_results('doctorreg');
    }
    public function nohospital()
    {
        return $this->db->count_all_results('hospitalreg');
    }
    public function nolab()
    {
        return $this->db->count_all_results('labreg');
    }

 
}