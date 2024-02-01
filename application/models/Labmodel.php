<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Labmodel extends CI_model
{
    public function password($pass)
    {
        return password_hash($pass,PASSWORD_BCRYPT);
    }
    public function labreg($data,$data1)
    {
        $this->db->insert('login',$data);
        $loginid=$this->db->insert_id();
        $data1['loginid']=$loginid;
        
        return $this->db->insert('labreg',$data1);

    }
    public function selectprofiledata($labid)
    {
        $this->db->select('*');
        $this->db->from('labreg');
        $this->db->where('loginid',$labid);
        $this->db->join('login', 'login.id = labreg.loginid');

        $qry=$this->db->get();
        //  echo $qry;exit;
        return $qry->result();
    }
    public function labprofileupdate($data,$data2,$labid)
    {
        $this->db->where('loginid', $labid);
        $this->db->update('labreg',$data);

        $this->db->where('id',$labid);
        return $this->db->update('login',$data2);
    }
    public function testview($labid)
    {
        $this->db->select('*');
        $this->db->from('testdata');
        $this->db->join('booking', 'testdata.bookid = booking.id','inner');
        $this->db->join('userreg', 'booking.uid = userreg.loginid','inner');

        $this->db->where('testdata.labid',$labid);
        $qry=$this->db->get();
        return $qry->result();

    }
    public function addreport($data,$tid)
    {
        $this->db->where('tid',$tid);
        return $this->db->update('testdata',$data);
    }
    public function reportstatus($data1,$bid)
    {
        $this->db->where('id',$bid);
        return $this->db->update('booking',$data1);
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