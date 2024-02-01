<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Hospitalmodel extends CI_model
{
    public function hospitalreg($data,$data1)
    {
        $this->db->insert('login',$data);
        $loginid=$this->db->insert_id();
        $data1['loginid']=$loginid;
        
        return $this->db->insert('hospitalreg',$data1);

    }
    public function password($pass)
    {
        return password_hash($pass,PASSWORD_BCRYPT);
    }
    public function hospitaldoctorview()
    {
        $this->db->select('*');
        $this->db->from('doctorreg');
        $this->db->join('login','login.id=doctorreg.loginid');
        $qry=$this->db->get();
        return $qry->result();
    }




    public function hospitalprofile($id)
    {
        $this->db->select('*');
        $this->db->from('hospitalreg');
        $this->db->where('loginid',$id);
        $this->db->join('login','login.id = hospitalreg.loginid');
        $qry=$this->db->get();
        return $qry->result();
    }

    public function updateprofile($data,$data1,$id)
    {
        $this->db->where('loginid',$id);
        $this->db->update('hospitalreg',$data);
        $this->db->where('id',$id);
        return $this->db->update('login',$data1);
        // 
        




    }
    public function adminnoti()
    {
        $this->db->select('*');
        $this->db->from('notification');
        $this->db->order_by('date','DESC');
        $qry=$this->db->get();
        return $qry->result();
    }
    public function hospitaldoctordata($hid)
    {
        $this->db->select('*');
        $this->db->from('doctorreg');
        $this->db->join('consultation','doctorreg.loginid=consultation.did');
        $this->db->where('consultation.hid',$hid);
       
        $qry=$this->db->get();
        return $qry->result();
    }


    public function doctorbookdataview($did,$hid)
    {
        // $this->db->select('*');
        // $this->db->from('consultation');
        // $this->db->join('hospitalreg','hospitalreg.loginid=consultation.hid','inner');
        // $this->db->join('booking','booking.cid=consultation.cid','inner');
        // $this->db->join('userreg','userreg.loginid=booking.uid');
        // $this->db->where('consultation.did',$did);
        // $this->db->where('consultation.hid',$hid);

          $this->db->select('*,consultation.hid');
        $this->db->from('consultation');
        $this->db->join('hospitalreg','hospitalreg.loginid=consultation.hid','inner');
        $this->db->join('booking','booking.cid=consultation.cid','inner');
        $this->db->join('userreg','userreg.loginid=booking.uid');
        $this->db->where('consultation.hid',$hid);
        $this->db->where('consultation.did',$did);

        $qry=$this->db->get();
        return $qry->result();

        // $this->db->select('*');
        // $this->db->from('consultation');



    }
    public function requestedleave($hid)
    {
        $this->db->select('*');
        $this->db->from('leave');
        $this->db->join('doctorreg','doctorreg.loginid=leave.did');
        $this->db->order_by('leave.lid','DESC');
        $this->db->where('leave.hid',$hid);

        $qry=$this->db->get();
        return $qry->result();
    }
    public function selctsearchuser($search)
    {
        $this->db->select('*');
        $this->db->from('userreg');
        $this->db->where('userreg.name',$search);
        $this->db->or_where('userreg.contactno',$search);
        $qry=$this->db->get();
        return $qry->result();

    }
    public function allhospital($hid)
    {
        $this->db->select('*');
        $this->db->from('hospitalreg');
        $this->db->where('loginid<>',$hid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function addreport($data)
    {
        return $this->db->insert('medicalreport',$data);
    }
    public function userdatatransferselect($hid)
    {
        // echo $hid;exit;
        $this->db->select('*');
        $this->db->from('medicalreport');
        $this->db->join('userreg','medicalreport.uid=userreg.loginid');
        $this->db->join('hospitalreg','medicalreport.hid=hospitalreg.loginid');
        $this->db->where('medicalreport.hid',$hid);
        $this->db->order_by('mrid','DESC');
        $qry=$this->db->get();
        return $qry->result();


    }
    // public function userdatatransferselect($hid)
    // {
    //     $this->db->select('*');
    //     $this->db->from('medicalreport');
    //     $this->db->join('userreg','medicalreport.uid=userreg.loginid');
    //     $this->db->where('loghid',$hid);
    //     $this->db->order_by('mrid','DESC');
    //     $qry=$this->db->get();
    //     return $qry->result();
    // }
    

    public function addeqdata($data)
    {
        return $this->db->insert('reqhospital',$data);
    }
    public function userdatatransferselect2($hid)
    {
        // echo $hid;exit;
        $this->db->select('*');
        $this->db->from('reqhospital');
        $this->db->join('hospitalreg','hospitalreg.loginid=reqhospital.hid');

        $this->db->join('userreg','reqhospital.contactno=userreg.contactno');
        // $this->db->join('hospitalreg','hospitalreg.loginid=reqhospital.reqhospitalname');


        $this->db->where('reqhospitalname',$hid);
        $this->db->where('approvestatus','1');
        $this->db->order_by('rhid','DESC');
        $qry=$this->db->get();
        return $qry->result();


    }

    public function addreportes($data,$rhid)
    {
        $this->db->where('rhid',$rhid);
        return $this->db->update('reqhospital',$data);
        // $this->db->where('loginid',$id);
        // $this->db->update('hospitalreg',$data);
    }
    public function myreqview($hid)
    {
        $this->db->select('*');
        $this->db->from('reqhospital');
        $this->db->where('hid',$hid);
        $this->db->order_by('rhid','DESC');
        $qry=$this->db->get();
        return $qry->result();
        
    }
    public function checkpatientinhos($cono,$hid)
    {
        $this->db->select('*');
        $this->db->from('userreg');
        $this->db->join('booking','booking.uid=userreg.loginid','inner');
        $this->db->join('consultation','booking.cid=consultation.cid','inner');
        $this->db->where('consultation.hid',$hid);
        $this->db->where('userreg.contactno',$cono);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function labview($hid)
    {
        $this->db->select('*');
        $this->db->from('labreg');
        $this->db->where('hid',$hid);
        $qry=$this->db->get();
        return $qry->result();
    }


    public function doctorname1()
    {
        $this->db->select('*');
        $this->db->from('doctorreg');
        $qry=$this->db->get();
        return $qry->result();
    }


    public function doctorname($hid)
    {
        $this->db->distinct();
        
        $this->db->select('name,doctorreg.loginid,doctorreg.photo,MAX(chatid) as chatid1,vstatus');
        $this->db->from('doctorreg');
        $this->db->join('chat','doctorreg.loginid=chat.rid OR doctorreg.loginid=chat.sid','inner');
       

      $this->db->where('chat.rid',$hid);
      $this->db->or_where('chat.sid',$hid);

    $this->db->group_by('did');
       $this->db->order_by('chatid1','DESC');
      
       $qry=$this->db->get();
      
       return $qry->result();
       
    }
    public function vstatus($hid)
    {
        $this->db->select('vstatus,MAX(chatid) as chatid1,sid');
        $this->db->from('chat');
        $this->db->where('rid',$hid);
        $this->db->where('vstatus','0');
        $this->db->group_by('sid');
        $this->db->order_by('chatid1','desc');
        // $this->db->order_by('vstatus','ASC');
    
        $qry=$this->db->get();
       return $qry->result();


    }


    public function addmsg($msg)
    {
       return $this->db->insert('chat',$msg);
    }
    public function message($hid,$did,$v)
    {
        if($did <> null)
        {
            $this->db->where('sid',$did);
            $this->db->where('rid',$hid);
            $this->db->update('chat',$v);

        }
       
        $this->db->select('*');
       $this->db->from('chat');
       $f = array('sid' => $hid, 'rid' => $did);
       $s = array('sid' => $did, 'rid' => $hid);
       $this->db->where($f);
       $this->db->or_where($s);
       $qry=$this->db->get();
       return $qry->result();
    }
    public function hospitaldata($hid)
    {
        $this->db->select('*');
        $this->db->from('hospitalreg');
        $this->db->where('loginid',$hid);
        $qry=$this->db->get();
       return $qry->result();
    }
    public function doctordata($did)
    {
        $this->db->select('*');
        $this->db->from('doctorreg');
        $this->db->where('loginid',$did);
        $qry=$this->db->get();
       return $qry->result();
    }
    public function leaveapprove($lid,$data)
    {
        $this->db->where('lid',$lid);
        return $this->db->update('leave',$data);
    }
    public function leavereject($lid,$data)
    {
        $this->db->where('lid',$lid);
        return $this->db->update('leave',$data);
    }
    public function checkhospitalaccount($hid,$cardno,$cvv)
    {
        $this->db->select('*');
        $this->db->from('hospitalreg');
        $this->db->join('bank','hospitalreg.contactno=bank.contactno');
        $this->db->where('bank.cardno',$cardno);
        $this->db->where('bank.cvv',$cvv);
        $this->db->where('hospitalreg.loginid',$hid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function checkhospitalbalance($hid)
    {
        $this->db->select('totalamount');
        $this->db->from('hospitalreg');
        $this->db->join('bank','hospitalreg.contactno=bank.contactno');
        $this->db->where('hospitalreg.loginid',$hid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function updatehamount($contactno,$amount)
    {
        $this->db->where('contactno',$contactno);
        return $this->db->update('bank',$amount);
    }
    public function finddocbank($did)
    {
        $this->db->select('*');
        $this->db->from('doctorreg');
        $this->db->join('bank','doctorreg.contactno=bank.contactno');
        $this->db->where('doctorreg.loginid',$did);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function updatedocamount($dcontactno,$damount)
    {
        $this->db->where('contactno',$dcontactno);
        return $this->db->update('bank',$damount);
    }
    public function salary($sdata)
    {
        return $this->db->insert('salary',$sdata);
    }
    public function rdoc($hospitalid)
    {
        $this->db->select('*');
        $this->db->from('hospital');
        $this->db->where('hosid',$hospitalid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function reqhosname($hid)
    {
        $this->db->select('*');
        $this->db->from('hospitalreg');
        $this->db->where('loginid',$hid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function sndhosname($rhid)
    {
        $this->db->select('*');
        $this->db->from('hospitalreg');
        $this->db->where('loginid',$rhid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function useremail($u_cono)
    {
        $this->db->select('*');
        $this->db->from('userreg');
        $this->db->join('login','userreg.loginid=login.id');
        $this->db->where('contactno',$u_cono);
        $qry=$this->db->get();
        return $qry->result();

    }
    public function rhid()
    {
        $this->db->select('*');
        $this->db->from('reqhospital');
        $this->db->order_by('rhid','DESC');
        $this->db->limit(1);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function transferapproved($rhid,$data)
    {
        $this->db->where('rhid',$rhid);
        return $this->db->update('reqhospital',$data);
    }
    public function useremail1($uid)
    {
        $this->db->select('email');
        $this->db->from('login');
        $this->db->where('id',$uid);
        $qry=$this->db->get();
        return $qry->result();
    
    }
    public function sendhos($cuhid)
    {
        $this->db->select('*');
        $this->db->from('hospitalreg');
        $this->db->where('loginid',$cuhid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function rehos($rhid)
    {
        $this->db->select('*');
        $this->db->from('hospitalreg');
        $this->db->where('loginid',$rhid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function mrid()
    {
        $this->db->select('*');
        $this->db->from('medicalreport');
        $this->db->order_by('mrid','DESC');
        $this->db->limit(1);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function searchtransferapproved($mrid,$data)
    {
        $this->db->where('mrid',$mrid);
        return $this->db->update('medicalreport',$data);
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



    // public function doctorname($hid)
    // {
    //     $this->db->distinct();
        
    //     $this->db->select('name,doctorreg.loginid,doctorreg.photo,MAX(chatid) as chatid1,vstatus');
    //     $this->db->from('doctorreg');
    //     $this->db->join('chat','doctorreg.loginid=chat.rid OR doctorreg.loginid=chat.sid','inner');
       

    //   $this->db->where('chat.rid',$hid);
    //   $this->db->or_where('chat.sid',$hid);

    // $this->db->group_by('did');
    //    $this->db->order_by('chatid1','DESC');
       
    //    $qry=$this->db->get();
      
    //    return $qry->result();
        
    // }

    public function get_days_array($did)
    {
        // echo $did;exit;

        $this->db->select('day');
        $this->db->from('consultation');
        $this->db->where('cid',$did);
        $qry=$this->db->get();
        // print_r($qry);exit;
        return $qry->result();
    }




    
    public function get_days_array_edit($bookid)
    {
        // echo $did;exit;
        $this->db->select('cid');
        $this->db->from('booking');
        $this->db->where('id',$bookid);
        $qry1=$this->db->get()->row('cid');

        $this->db->select('day');
        $this->db->from('consultation');
        //$this->db->join('booking','consultation.cid=booking.cid');
        $this->db->where('cid',$qry1);
        $qry=$this->db->get();
        // print_r($qry);exit;
        return $qry->result();
    }



    // public function get_days_array($did)
    // {
    //     // echo $did;exit;

    //     $this->db->select('day');
    //     $this->db->from('consultation');
    //     $this->db->where('did',$did);
    //     $qry=$this->db->get();
    //     // print_r($qry);exit;
    //     return $qry->result();
    // }
    
}