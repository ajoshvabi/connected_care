<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library(array('session','form_validation','email'));
        $this->load->model('Labmodel');
    }
    // public function labreg()
    // {
    //     $this->load->view('labreg');
    // }
    public function login()
    {
        $pass=$this->input->post('password');
        $newpassword=$this->Labmodel->password($pass);
        $data=array('email'=>$this->input->post('email'),
            'password'=>$newpassword,
            'usertype'=>'4'
        );
        // print_r($data);exit;

        $data1=array('labname'=>$this->input->post('name'),
        'labaddress'=>$this->input->post('address'),
        'labpin'=>$this->input->post('pincode'),
        'labdistrict'=>$this->input->post('district'),
        'labdistrict'=>$this->input->post('district'),
        'labcontactno'=>$this->input->post('contact'),
        'hid'=>$this->input->post('hid')
         );
        //  print_r($data1);exit;
        

        $a=$this->Labmodel->labreg($data,$data1);
        if($a)
        {
        echo"<script>alert('Lab registration success')</script>";
        redirect('Hospital/hospitalhome','refresh');
        }
        else
        {
        echo"<script>alert('registration unsuccess')</script>";
        redirect('Hospital/labreg','refresh');
        }
        
    }
    public function labhome()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='4')
	    {
            $data['nouser']=$this->Labmodel->nouser();
            $data['nodoctor']=$this->Labmodel->nodoctor();
            $data['nohospital']=$this->Labmodel->nohospital();
            $data['nolab']=$this->Labmodel->nolab();
        $this->load->view('labhome',$data);
        }
         else
        {
            redirect('Admin/loginview','refresh');
        }
    }
    public function profileview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='4')
	    {
        $labid=$this->session->userid;
        // echo $labid;exit;
        $data['view']=$this->Labmodel->selectprofiledata($labid);
        // print_r($data);exit;
        $this->load->view('labheader');
        $this->load->view('labprofile',$data);
        $this->load->view('userfooter');
        }
        else
        {
            redirect('Admin/loginview','refresh');
        }
    }
    public function labupdateprofile()
    {
        $labid=$this->session->userid;
        $data=array('labname'=>$this->input->post('name'),
        'labaddress'=>$this->input->post('address'),
        'labpin'=>$this->input->post('pincode'),
        'labdistrict'=>$this->input->post('district'),
        'labcontactno'=>$this->input->post('contact')
         );
         $data2=array('email'=>$this->input->post('email'));
         $a=$this->Labmodel->labprofileupdate($data,$data2,$labid);
         if($a)
        {
        echo"<script>alert('Lab profile update success')</script>";
        redirect('Lab/profileview','refresh');
        }
        else
        {
        echo"<script>alert('Lab profile update unsuccess')</script>";
        redirect('Hospital/profileview','refresh');
        }
    }
    public function testview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='4')
	    {
        
        $labid=$this->session->userid;
        $data['view']=$this->Labmodel->testview($labid);
        // print_r($data);exit;
        
        $this->load->view('labheader');
        $this->load->view('testview',$data);
        }   
        else
        {
            redirect('Admin/loginview','refresh');
        }
    }
    public function labresult()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='4')
	    {
        $data['tid']=$this->uri->segment(3);
        $data['bid']=$this->uri->segment(4);
        // echo $tid;exit;
        $this->load->view('labheader');
        $this->load->view('addres',$data);
        }
        else
        {
             redirect('Admin/loginview','refresh');
        }
    }
    public function addlabresult()
    {
        $tid=$this->input->post('tid');
        $bid=$this->input->post('bid');
        // echo $bid;exit;

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpg|jpeg|pdf|docx';
        $config['max_size'] = '100000';
        $config['max_width'] = '10240';
        $config['max_height'] = '7680';
        $this->load->library('upload', $config);
      
		if ($this->upload->do_upload('treport')) {
			$img = $this->upload->data();
            $image = $img['file_name'];
		}else{
			$error = array('error' => $this->upload->display_errors());
            $image =   $this->input->post('treport');
		}
        $data=array('testreport'=>$image);
        $a=$this->Labmodel->addreport($data,$tid);
        if($a)
        {
            $data1=array('reportstatus'=>'1');
            $this->Labmodel->reportstatus($data1,$bid);
        echo"<script>alert('Test report added')</script>";
        redirect('Lab/testview','refresh');
        }
        else
        {
        echo"<script>alert('Process failed')</script>";
        redirect('Hospital/profileview','refresh');
        }
    }

}