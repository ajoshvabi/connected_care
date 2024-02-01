<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Doctormodel extends CI_model
{
    public function doctorreg($data,$data1)
    {
        $this->db->insert('login',$data);
        $loginid=$this->db->insert_id();
      $data1['loginid']=$loginid;
        return $this->db->insert('doctorreg',$data1);

    }
    public function password($pass)
    {
        return password_hash($pass,PASSWORD_BCRYPT);
    }
    public function doctorcon($data)
    {
        return $this->db->insert('consultation',$data);

    }
    public function doctorconhospital()
    {
        $this->db->select('hospitalname,loginid,photo');
        $this->db->from('hospitalreg');
        $qry=$this->db->get();
        return $qry->result();
    }
    public function doctorprofileview($id)
    {
        $this->db->select('*');
        $this->db->from('doctorreg');
        $this->db->where('loginid',$id);
        $this->db->join('login','login.id = doctorreg.loginid');
        $qry=$this->db->get();
        return $qry->result();
    }
    public function updateprofile($data,$data1,$id)
    {

        $this->db->where('loginid',$id);
        $this->db->update('doctorreg',$data);
        $this->db->where('id',$id);
        return $this->db->update('login',$data1);
    }
    public function doctorbookdataview($did)
    {
        $this->db->select('*');
        $this->db->from('consultation');
        $this->db->join('hospitalreg','hospitalreg.loginid=consultation.hid','inner');
        $this->db->join('booking','booking.cid=consultation.cid','inner');
        $this->db->join('userreg','userreg.loginid=booking.uid');
        $this->db->join('testdata','testdata.bookid=booking.id','left');
        $this->db->order_by('date','DESC');
        $this->db->order_by('date');
        $this->db->where('consultation.did',$did);
        $qry=$this->db->get();
        return $qry->result();
    }
    // public function labtestcount($did)
    // {
    //     $this->db->select('count(tid)');
    //     $this->db->where('did',$did);
    //     $query = $this->db->get('testdata');
    //     $cnt = $query->row_array();
    //     return $cnt['count(tid)'];
    //     // $this->db->select('count(id)');
    //     // $this->db->from('testdata');
    //     // $this->db->where('did',$did);
    //     // $qry=$this->db->get('count(id)');
    //     // return $qry;
    // }


    public function addpresc($bid,$data)
    {
        $this->db->where('id',$bid);
        return $this->db->update('booking',$data);
    }
    public function viewprescription($bid)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('id',$bid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function updatepres($bid,$data)
    {

        $this->db->where('id',$bid);
        return $this->db->update('booking',$data);
    }
    public function doctorhospital($did)
    {
        $this->db->select('*');
        $this->db->from('hospitalreg');
        $this->db->join('consultation','consultation.hid=hospitalreg.loginid');
        // $this->db->join('consultation','consultation.hid=hospitalreg.loginid');

        $this->db->where('consultation.did',$did);
        // $this->db->where('consultation.hid','hospitalreg.loginid');

        $qry=$this->db->get();
        return $qry->result();
    }
    public function adddoctorleave($data)
    {
       return $this->db->insert('leave',$data);
    }
    public function myleavereq($did)
    {
        $this->db->select('*');
        $this->db->from('leave');
        $this->db->join('doctorreg','doctorreg.loginid=leave.did');
        $this->db->join('hospitalreg','hospitalreg.loginid=leave.hid');

        $this->db->order_by('leave.lid','DESC');
        $this->db->where('leave.did',$did);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function myleavedel($lid)
    {
        $this->db->where('lid',$lid);
        return $qry=$this->db->delete('leave');
    }


    public function selectdochospital($bookid)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('consultation','consultation.cid=booking.cid');
        $this->db->join('labreg','consultation.hid=labreg.hid');
        $this->db->where('booking.id',$bookid);
        $qry=$this->db->get();
        return $qry->result();

    }
    public function select_cid_uid($bid)
    {
        $this->db->select('cid');
        $this->db->from('booking');
        $this->db->where('booking.id',$bid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function addtestdata($data)
    {
        return $this->db->insert('testdata',$data);
    }
    public function selectdoclab($bookid)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('consultation','consultation.cid=booking.cid');
        $this->db->join('labreg','consultation.hid=labreg.hid');
        $this->db->where('booking.id',$bookid);
        $qry=$this->db->get();
        return $qry->result();

    }
    public function selectdoctest($bookid)
    {
       
        $this->db->select('*');
        $this->db->from('testdata');
        $this->db->join('labreg','testdata.labid=labreg.loginid');
        $this->db->where('testdata.bookid',$bookid);
        $qry=$this->db->get();
        return $qry->result();
    }
    // public function selectdoctest($bookid)
    // {
    //     $this->db->select('*');
    //     $this->db->from('testdata');
    //     $this->db->where('testdata.bookid',$bookid);
    //     $qry=$this->db->get();
    //     return $qry->result();
    // }
    public function updatetestdata($data,$tid)
    {
        $this->db->where('tid',$tid);
        return $this->db->update('testdata',$data);
    }
    // public function selectdoclab1($bookid)
    // {

    // }



    public function doctorlabreport($bookid)
    {
        $this->db->select('testreport');
        $this->db->from('testdata');
        $this->db->join('booking','booking.id=testdata.bookid');

        $this->db->where('testdata.bookid',$bookid);
        $qry=$this->db->get();
        return $qry->result();

    }
    public function hospitalname()
    {
       $this->db->select('*');
       $this->db->from('hospitalreg');
    //    $this->db->join('chat','hospitalreg.loginid=chat.rid','leftjoin');
    //    $this->db->order_by('chatid','DESC');
    // $this->db->join('chat','hospitalreg.loginid=chat.rid','leftjoin');


       $qry=$this->db->get();
       return $qry->result();

    }

    public function hospitalname1($did)
    {
    //    $this->db->select('*');
    //    $this->db->from('hospitalreg');
    //    $this->db->join('chat','hospitalreg.loginid=chat.rid and chat.sid="'.$did.'"','leftjoin');
    //    $this->db->group_by('hid');
    //    $this->db->order_by('chatid','DESC');
    //    $qry=$this->db->get();
    //    return $qry->result();





       $this->db->distinct();
        
        $this->db->select('hospitalname,hospitalreg.loginid,hospitalreg.photo,MAX(chatid) as chatid1,vstatus');
        $this->db->from('hospitalreg');
        $this->db->join('chat','hospitalreg.loginid=chat.rid OR hospitalreg.loginid=chat.sid','inner');
      $this->db->where('chat.rid',$did);
      $this->db->or_where('chat.sid',$did);
    $this->db->group_by('hid');
       $this->db->order_by('chatid1','DESC');
       
       $qry=$this->db->get();
      
       return $qry->result();

    }
    

    public function addmsg($msg)
    {
       return $this->db->insert('chat',$msg);
    }
    public function message($did,$hid,$v)
    {
        if($hid <> null)
        {
            $this->db->where('sid',$hid);
            $this->db->where('rid',$did);
            $this->db->update('chat',$v);

        }
       $this->db->select('*');
       $this->db->from('chat');
       $f = array('sid' => $did, 'rid' => $hid);
       $s = array('sid' => $hid, 'rid' => $did);
       $this->db->where($f);
       $this->db->or_where($s);
    //    $this->db->where('chat.sid',$did);
    //    $this->db->where('chat.rid',$hid);
    //    $this->db->or_where('chat.sid',$hid);
    //    $this->db->or_where('chat.rid',$did);
       $qry=$this->db->get();
       return $qry->result();
    }
    public function vstatus($did)
    {
        $this->db->select('vstatus,MAX(chatid) as chatid1,sid');
        $this->db->from('chat');
        $this->db->where('rid',$did);
        $this->db->where('vstatus','0');
        $this->db->group_by('sid');
        $this->db->order_by('chatid1','desc');
        // $this->db->order_by('vstatus','ASC');
    
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
    public function hospitaldata($hid)
    {
        $this->db->select('*');
        $this->db->from('hospitalreg');
        $this->db->where('loginid',$hid);
        $qry=$this->db->get();
       return $qry->result();

    }
    // public function chatcount($did,$hid)
    // {
    //     $this->db->select('count(chatid)');
    //     $this->db->from('chat');
    //     $this->db->join('hospitalreg','hospitalreg.loginid=chat.rid','leftjoin');
    //     $this->db->like('vstatus', '0');
    //     $this->db->where('sid',$did);
    //     $this->db->where('rid',$hid);
    //    return $qry=$this->db->get()->row('count(chatid)');
       
    // }
    //working-v
    // public function chatcount($did,$hid)
    // {
    //     $this->db->select('count(chatid)');
    //     $this->db->from('chat');
    //     $this->db->join('hospitalreg','hospitalreg.loginid=chat.sid','leftjoin');
    //     $this->db->like('vstatus', '0');
    //     $this->db->where('sid',$hid);
    //     $this->db->where('rid',$did);
    //    return $qry=$this->db->get()->row('count(chatid)');
       
    // }

    public function rdoc($doctorid)
    {
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->where('doc_id',$doctorid);
        $qry=$this->db->get();
        return $qry->result();
    }
    public function labstatus($data1,$bid)
    {
        $this->db->where('id',$bid);
        $this->db->update('booking',$data1);
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