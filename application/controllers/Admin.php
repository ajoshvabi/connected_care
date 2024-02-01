<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library(array('session','form_validation','email'));
        $this->load->model('Adminmodel');
    }
    public function adminview()
	{
        $data['nouser']=$this->Adminmodel->nouser();
        $data['nodoctor']=$this->Adminmodel->nodoctor();
        $data['nohospital']=$this->Adminmodel->nohospital();
        $data['nolab']=$this->Adminmodel->nolab();
        // print_r($data);exit;
		$this->load->view('admintpl',$data);
	}
    public function admindoctordataview()
	{
        $data["view"]=$this->Adminmodel->admindoctorview();
        $this->load->view('adminheader');
        $this->load->view('adminuserdataview',$data);
        
	}
    public function adminpublicdataview()
	{
        $data["pview"]=$this->Adminmodel->adminpublicview();
        $this->load->view('adminheader');
        $this->load->view('adminpublicdataview',$data);
        
        
	}
    public function adminhospitaldataview()
	{
        $data["hview"]=$this->Adminmodel->adminhospitalview();
        $this->load->view('adminheader');
        $this->load->view('adminhospitaldataview',$data);
	}
    public function loginview()
	{
		$this->load->view('logintpl');
	}


    public function login()
    {
        $this->load->helper('security');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        if($this->Adminmodel->checklogin($email,$password))
        {
            $id=$this->Adminmodel->getuserid($email);
            $alldetail=$this->Adminmodel->getuserdetail($id);
            $this->session->set_userdata(array('userid'=>$id,
            'logined'=>(bool)true,
            'usertype'=>$alldetail->usertype
            ,'status'=>$alldetail->status
        ));
           if(isset($_SESSION['logined'])AND($_SESSION['logined']==true) AND ($_SESSION['usertype']==='0'))
           {
            redirect('Admin/adminview','refresh');
           }
           elseif(isset($_SESSION['logined'])AND($_SESSION['logined']==true) AND ($_SESSION['usertype']==='1'))
           {
            redirect('User/userhome','refresh');

           }
           elseif(($_SESSION['logined'])AND($_SESSION['logined']==true) AND ($_SESSION['usertype']==='2'))
           {
            // redirect('Doctor/doctorhome','refresh');
            if($_SESSION['status']==='0')
            {
            echo"<script>alert('Wait for admin approve')</script>";
            redirect('Admin/loginview','refresh');
            }
            elseif($_SESSION['status']==='2')
            {
                echo"<script>alert('You are rejected')</script>";
            redirect('Admin/loginview','refresh');
            }
            elseif($_SESSION['status']==='1')
            {
            redirect('Doctor/doctorhome','refresh');

            }
           }
           elseif(($_SESSION['logined'])AND($_SESSION['logined']==true) AND ($_SESSION['usertype']==='3'))
           {
            // redirect('Hospital/hospitalhome','refresh');
            if($_SESSION['status']==='0')
            {
            echo"<script>alert('Wait for admin approve')</script>";
            redirect('Admin/loginview','refresh');
            }
            elseif($_SESSION['status']==='2')
            {
                echo"<script>alert('You are rejected')</script>";
            redirect('Admin/loginview','refresh');
            }
            elseif($_SESSION['status']==='1')
            {
                redirect('Hospital/hospitalhome','refresh');

            }
            
           }
           elseif(($_SESSION['logined'])AND($_SESSION['logined']==true) AND ($_SESSION['usertype']==='4'))
           {
            redirect('Lab/labhome','refresh');
           }

        }
        else{
            echo"<script>alert('Invalid user')</script>";
            redirect('Admin/loginview','refresh');
        }
        
    }
    public function doctoraccept()
    {
        $id=$this->uri->segment(3);
        $data=array('status'=>'1');
        $q=$this->Adminmodel->doctoraccept($data,$id);
        if($q)
        {
            echo"<script>alert('Approved')</script>";
            redirect('Admin/admindoctordataview','refresh');

        }
        {
            echo"<script>alert('Approved unsuccess')</script>";
            redirect('Admin/admindoctordataview','refresh');

        }


    }
    public function doctorreject()
    {
        $id=$this->uri->segment(3);
        $data=array('status'=>'2');
        $q=$this->Adminmodel->doctorreject($data,$id);
        if($q)
        {
            echo"<script>alert('Rejected')</script>";
            redirect('Admin/admindoctordataview','refresh');

        }
        else
        {
            echo"<script>alert('Reject unsuccess')</script>";
            redirect('Admin/admindoctordataview','refresh');

        }


    }
    public function hospitalaccept()
    {
        $id=$this->uri->segment(3);
        $data=array('status'=>'1');
        $q=$this->Adminmodel->hospitalaccept($data,$id);
        if($q)
        {
            echo"<script>alert('Approved')</script>";
            redirect('Admin/adminhospitaldataview','refresh');

        }
        {
            echo"<script>alert('Approved unsuccess')</script>";
            redirect('Admin/adminhospitaldataview','refresh');

        }


    }
    public function hospitalreject()
    {
        $id=$this->uri->segment(3);
        $data=array('status'=>'2');
        $q=$this->Adminmodel->hospitalreject($data,$id);
        if($q)
        {
            echo"<script>alert('Rejected')</script>";
            redirect('Admin/adminhospitaldataview','refresh');

        }
        else
        {
            echo"<script>alert('Reject unsuccess')</script>";
            redirect('Admin/adminhospitaldataview','refresh');

        }


    }
    // public function chuma()
    // {

    //     $this->load->view('chumma')  ;
    //   }


    public function adminnotification()
    {
        $this->load->view('adminheader');
        $this->load->view('adminnotification');

    }
    public function adminnotificationadd()
    {
        $date=date('y-m-d');
        $data=array('notification'=>$this->input->post('notification'),
    'date'=>$date);
        $a=$this->Adminmodel->notificationadd($data);
        if($a)
        {
            echo"<script>alert('Updated')</script>";
            redirect('Admin/adminview','refresh');

        }
        else
        {
            echo"<script>alert('Updation unsuccess')</script>";
            redirect('Admin/adminview','refresh');

        }
    }
    public function adminnotificationview()
    {
        $data["view"]=$this->Adminmodel->adminnotificationview();
        $this->load->view('adminheader');

        $this->load->view('adminnotificationview',$data);
    }



    public function editnotification()
    {
        $nid=$this->uri->segment(3);
        // echo $id;exit;
        $data["view"]=$this->Adminmodel->adminnotificationupdate($nid);
        $this->load->view('updatenotification',$data);


    }
    public function updatenot()
    {
        $nid=$this->input->post('nid');
        $date=date('y-m-d');
        $data=array('notification'=>$this->input->post('notification'),
    'date'=>$date);
    $a=$this->Adminmodel->notificationupdate($data,$nid);
    if($a)
        {
            echo"<script>alert('Updated')</script>";
            redirect('Admin/adminnotificationview','refresh');

        }
        else
        {
            echo"<script>alert('Updation unsuccess')</script>";
            redirect('Admin/adminnotificationview','refresh');

        }


    }
    public function deletenotification()
    {
        $nid=$this->uri->segment(3);
        $a=$this->Adminmodel->deletenotification($nid);
        if($a)
        {
            echo"<script>alert('Deleted')</script>";
            redirect('Admin/adminnotificationview','refresh');

        }
        else
        {
            echo"<script>alert('Deletion unsuccess')</script>";
            redirect('Admin/adminnotificationview','refresh');

        }



    }
    public function admincomplaintview()
    {
        $data["view"]=$this->Adminmodel->admincomplaintview();
        $this->load->view('adminheader');
        $this->load->view('admincomplaintview',$data);
    }
    public function admincomplaintreply()
    {
        $comid['comid']=$this->uri->segment(3);
        $coid=$this->uri->segment(3);
      
        $comid['view']=$this->Adminmodel->adminreplayview($coid);
        $this->load->view('adminheader');
        $this->load->view('admincomplaintreply',$comid);
    }
    public function adminreplayadd()
    {
        $comid=$this->input->post('comid');
       // $comid=$this->uri->segment(3);
        // echo $comid;exit;
        $data=array('reply'=>$this->input->post('reply'));
        $a=$this->Adminmodel->addreply($comid,$data);
        if($a)
        {
            echo"<script>alert('Reply added')</script>";
            redirect('Admin/admincomplaintview','refresh');

        }
        else
        {
            echo"<script>alert('Replay added unsuccess')</script>";
            redirect('Admin/admincomplaintview','refresh');

        }
    }
    public function home()
    {
        $data['nouser']=$this->Adminmodel->nouser();
        $data['nodoctor']=$this->Adminmodel->nodoctor();
        $data['nohospital']=$this->Adminmodel->nohospital();
        $data['nolab']=$this->Adminmodel->nolab();
        $this->load->view('home',$data);
    }
    
    public function adminheader()
    {
        $this->load->view('adminheader');
    }
    public function logout()
    {
        //$data= new stdclass();
        if(isset($_SESSION['logined']) && $_SESSION['logined']===true)
        {
            foreach($_SESSION as $key => $value)
            {
                unset($_SESSION[$key]);
            }
            $this->session->set_flashdata('logout notification','logged_out');
            redirect('Admin/home','refresh');
            }
        else
        {
            redirect('/');
        }
    }
}