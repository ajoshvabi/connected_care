<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Usermod extends CI_model
{
    public function userreg($data,$data1)
    {
        $this->db->insert('login',$data);
        $loginid=$this->db->insert_id();
        $data1['loginid']=$loginid;
        return $this->db->insert('userreg',$data1);

    }
    public function password($pass)
    {
        return password_hash($pass,PASSWORD_BCRYPT);
    }

    public function userdoctorview()
    {
        $this->db->select('*');
        $this->db->from('doctorreg');
        $qry=$this->db->get();
        return $qry->result();
    }
    public function userprofileview($id)
    {
        $this->db->select('*');
        $this->db->from('userreg');
        $this->db->where('loginid',$id);
        $this->db->join('login', 'login.id = userreg.loginid');
        $qry=$this->db->get();
        return $qry->result();
    }
    public function updateuserprofile($data,$data1,$id)
    {
     
        $this->db->where('loginid', $id);
        $this->db->update('userreg',$data);

        $this->db->where('id',$id);
        return $this->db->update('login',$data1);
      
    }
    public function usersearch($search)
    {
        
        $this->db->select('*');
        $this->db->from('consultation');
        $this->db->join('hospitalreg','hospitalreg.loginid=consultation.hid','inner');
        $this->db->join('doctorreg','doctorreg.loginid=consultation.did','inner');
        $this->db->where('name',$search );
        $this->db->or_where('hospitalreg.district',$search);
        $this->db->or_where('hospitalname',$search);
        $this->db->or_where('specialization',$search);
        $this->db->or_where('name',$search);
        $qry=$this->db->get();
        return $qry->result();

    }
    public function doctorbooking($data)
    {
       $this->db->insert('booking',$data);
       return $this->db->insert_id();
    }
    public function userbookeddata($id)
    {
        
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('consultation','booking.cid=consultation.cid','inner');
        $this->db->join('hospitalreg','hospitalreg.loginid=consultation.hid','inner');
        $this->db->join('doctorreg','doctorreg.loginid=consultation.did');

        $this->db->order_by('id','DESC');
        $this->db->where('booking.uid',$id);
        // $this->db->where('pstatus','1');

        $qry=$this->db->get();
        return $qry->result();
    }
    public function usereditbook($bookid)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('id',$bookid);
        // $this->db->select('*');
        // $this->db->from('booking');
        // $this->db->join('doctorreg','doctorreg.loginid=booking.did');
        // $this->db->where('id',$bookid);

       

        $qry=$this->db->get();
        return $qry->result();
    }
    public function updatebook($bookid,$data)
    {
        $this->db->where('id',$bookid);
       return $this->db->update('booking',$data);
    }
    public function deletebook($bookid)
    {
        $this->db->where('id', $bookid);
        return $this->db->delete('booking');
    }



    // public function doctordate($id)
    // {
    //     $this->db->select('day');
    //     $this->db->from('consultation');
    //     return $this->db->where('cid',$id);
    //     //  $qry=$this->db->get();
    //     // return $qry->result();

        
    // }
    public function addcomplaint($data,$id)
    {
        return $this->db->insert('complaint',$data);
            
    }
    public function viewcomplaint()
    {
        $this->db->select('*');
        $this->db->from('complaint');
        $qry=$this->db->get();
        return $qry->result();
       
    }
    public function editcomplaint($comid)
    {
        $this->db->select('*');
        $this->db->from('complaint');
        $this->db->where('comid',$comid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function updatecomplaint($data,$comid)
    {
        $this->db->where('comid',$comid);
        return $this->db->update('complaint',$data);
    }
    public function deletecomplaint($comid)
    {
        $this->db->where('comid',$comid);
        return $this->db->delete('complaint');
    }
    public function checkpaymentdata($cardno,$cvv)
    {
        $this->db->select('*');
        $this->db->from('bank');
        $this->db->where('cardno',$cardno);
        $this->db->where('cvv',$cvv);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function paymentfee($cid,$id)
    {
        $this->db->select('fee');
        $this->db->from('consultation');
        $a=$this->db->where('cid',$cid);
        // $fee=$this->db->get()->row('fee');
        $qry=$this->db->get();
        return $qry->result();
    }
    public function bankamount($id)
    {
        $this->db->select('totalamount');
        $this->db->from('bank');
        $this->db->join('userreg','userreg.contactno=bank.contactno');
        $this->db->where('userreg.loginid',$id);
        // $tamount=$this->db->get()->row('totalamount');
                // echo $;exit;
         $qry=$this->db->get();
        return $qry->result();
    }
    public function bankamountupdate($cardno,$data)
    {
        $this->db->where('cardno',$cardno);
        return $this->db->update('bank',$data);

    }
    public function addpaymentdata($dataa)
    {
        $this->db->insert('payment',$dataa);
        return $this->db->insert_id();
    }
    public function finddoctorbank($cid)
    {
        // echo $cid;exit;
        $this->db->select('did');
        $this->db->from('consultation');
        $this->db->where('consultation.cid',$cid);
        $did=$this->db->get()->row('did');
    //    echo $did;exit;   
    //    did
        // $qry=$this->db->get();
        // return $qry->result();
        $this->db->select('contactno');
        $this->db->from('doctorreg');
        $this->db->where('doctorreg.loginid',$did);
        // $cn=$this->db->get()->row('contactno');
        // echo $cn;exit;
        $qry=$this->db->get();
        return $qry->result();



    }
    public function selectdoctoramount($contactno)
    {
        $this->db->select('totalamount');
        $this->db->from('bank');
        $this->db->where('bank.contactno',$contactno);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function updatedoctorfee($contactno,$data)
    {
       
        $this->db->where('bank.contactno',$contactno);
        return $this->db->update('bank',$data);
    }
    public function updatepstatus($d,$dat)
    {
        $this->db->where('payment.payid',$d);
        return $this->db->update('payment',$dat);

    }
    public function tokengen($bid,$data)
    {
        $this->db->where('id',$bid);
        return $this->db->update('booking',$data);

    }
    public function testresult($uid)
    {
        $this->db->select('*');
        $this->db->from('testdata');
        $this->db->join('booking','testdata.bookid=booking.id','inner');
        $this->db->join('labreg','labreg.loginid=testdata.labid');
        $this->db->where('booking.uid',$uid);
        $qry=$this->db->get();
        return $qry->result();

    }
    public function adddonationdata($data)
    {
        return $this->db->insert('donation',$data);
    }
    public function checkreg($uid)
    {
        $this->db->select('*');
        $this->db->from('donation');
        $this->db->where('uid',$uid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function viewdonation($uid)
    {
        $this->db->select('*');
        $this->db->from('donation');
        $this->db->where('uid',$uid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function updatedonationdata($data,$uid)
    {
        $this->db->where('uid',$uid);
        return $this->db->update('donation',$data);
    }
    public function dsearch($dsearch,$uid)
    {
        // echo $uid;exit;
        $this->db->select('*');
        $this->db->from('donation');
        $this->db->join('userreg','donation.uid=userreg.loginid','inner');
        $this->db->where('userreg.loginid <>',$uid );
        $this->db->where("(district='$dsearch' OR city='$dsearch' OR bloodgroup='$dsearch')", NULL, FALSE);
        $qry=$this->db->get();
        return $qry->result();

    }
    public function addreqdoner($data)
    {
        return $this->db->insert('blooddonation',$data);
    }
    public function donationdata($uid)
    {
        $this->db->select('*');
        $this->db->from('blooddonation');
        $this->db->join('userreg','blooddonation.donerid=userreg.loginid','inner');
        $this->db->order_by('bdid','DESC');
        $this->db->where('userreg.loginid',$uid );
        $qry=$this->db->get();
        return $qry->result();
    }
    public function dreqaccept($data,$bdid)
    {
        $this->db->where('bdid',$bdid);
        return $this->db->update('blooddonation',$data);

    }
    public function mydonationreq($uid)
    {
        $this->db->select('*');
        $this->db->from('blooddonation');
        $this->db->join('userreg','blooddonation.uid=userreg.loginid','inner');
        $this->db->order_by('bdid','DESC');
        $this->db->where('userreg.loginid',$uid );
        $qry=$this->db->get();
        return $qry->result();
    }
    public function dreqreject($data,$bdid)
    {
        $this->db->where('bdid',$bdid);
        return $this->db->update('blooddonation',$data);

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