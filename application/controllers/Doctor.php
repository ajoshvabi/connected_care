<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library(array('session','form_validation','email'));
        $this->load->model('Doctormodel');
    }
    public function doctorreg()
	{
        // $this->load->view('homeheader');
		$this->load->view('doctorreg');
	}
    public function login()
    {
        $doctorid=$this->input->post('doctorid');
        $rdoc=$this->Doctormodel->rdoc($doctorid);
        if($rdoc)
        {
            $pass=$this->input->post('password');
            $newpassword=$this->Doctormodel->password($pass);
            $data=array('email'=>$this->input->post('email'),
            'password'=>$newpassword,
            'usertype'=>'2'
            );

            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|jpg|png|jpg|jpeg';
            $config['max_size'] = '100000';
            $config['max_width'] = '10240';
            $config['max_height'] = '7680';
            $this->load->library('upload', $config);
      
		    if ($this->upload->do_upload('photo')) {
			    $img = $this->upload->data();
                $image = $img['file_name'];
		    }else{
			    $error = array('error' => $this->upload->display_errors());
                $image =   $this->input->post('photo');
		    }




            $data1=array('name'=>$this->input->post('name'),
            'address'=>$this->input->post('address'),
            'pincode'=>$this->input->post('pincode'),
            'district'=>$this->input->post('district'),
            'city'=>$this->input->post('city'),
            'gender'=>$this->input->post('gender'),
            'dob'=>$this->input->post('dob'),
            'specialization'=>$this->input->post('spe'),
            'photo'=>$image,
            'contactno'=>$this->input->post('contact')
             );

            $a=$this->Doctormodel->doctorreg($data,$data1);
            
            if($a)
            {
            echo"<script>alert('registration success')</script>";
            redirect('Admin/loginview','refresh');
            }
            else
            {
            echo"<script>alert('registration unsuccess')</script>";
            redirect('Doctor/doctorreg','refresh');
            }
        }
        else
        {
            echo"<script>alert('Invalid doctor')</script>";
            redirect('Admin/home','refresh');
        }
        
    }
    public function doctorheader()
	{
		$this->load->view('doctorheader');
	}
    public function doctorhome()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
            $data['nouser']=$this->Doctormodel->nouser();
            $data['nodoctor']=$this->Doctormodel->nodoctor();
            $data['nohospital']=$this->Doctormodel->nohospital();
            $data['nolab']=$this->Doctormodel->nolab();
		$this->load->view('doctorhome',$data);
        }
        else
        {
            redirect('Admin/loginview','refresh');
        }
	}
    public function doctorconsultation()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $id['id']=$this->uri->segment(3);
        $this->load->view('doctorheader');
		$this->load->view('doctorconsultation',$id);
        }
        else
        {
        redirect('Admin/loginview','refresh');
         }
	}
    public function doctorconsultdata()
	{
        $id=$this->input->post('id');
        $did=$this->session->userid;
        $data["view"]=$id;
		$data=array('fee'=>$this->input->post('fee'),
        'day'=>$this->input->post('time'),
         'hid'=>$id,
        'did'=>$did);
        $x=$this->Doctormodel->doctorcon($data);
        if($x)
        {
        echo"<script>alert('Success')</script>";
        redirect('Doctor/doctorhospitalconsultation','refresh');
        }
        else
        {
        echo"<script>alert('Unsuccess')</script>";
        redirect('Doctor/doctorhospitalconsultation','refresh');

        }
	}
    // public function doctorhospitalconsultation()
	// {
	// 	$this->load->view('doctordishospital');
	// }
    public function doctorhospitalconsultation()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        
        $data["view"]=$this->Doctormodel->doctorconhospital();
        
        $this->load->view('doctorheader');
        $this->load->view('doctordishospital',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
         }
	}
    public function doctorprofileview()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $id=$this->session->userid;
        $data["view"]=$this->Doctormodel->doctorprofileview($id);
        // $this->load->view('doctorheader');
        $this->load->view('doctorheader');

		$this->load->view('doctorprofileview',$data);
        $this->load->view('userfooter');



        }
        else
        {
        redirect('Admin/loginview','refresh');
         }
	}
    public function updatedoctorprofile()
    {
        $id=$this->session->userid;

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpg|jpeg';
        $config['max_size'] = '100000';
        $config['max_width'] = '10240';
        $config['max_height'] = '7680';
        $this->load->library('upload', $config);
      
		if ($this->upload->do_upload('photo')) {
			$img = $this->upload->data();
            $image = $img['file_name'];
		}else{
			$error = array('error' => $this->upload->display_errors());
            $image =   $this->input->post('photo');
		}



        $data=array('name'=>$this->input->post('name'),
        'address'=>$this->input->post('address'),
        'pincode'=>$this->input->post('pincode'),
        'district'=>$this->input->post('district'),
        'city'=>$this->input->post('city'),
        'gender'=>$this->input->post('gender'),
        'dob'=>$this->input->post('dob'),
        'specialization'=>$this->input->post('spe'),
        'photo'=>$image,
        'contactno'=>$this->input->post('contact')
         );
         $data1=array('email'=>$this->input->post('email'));
         $a=$this->Doctormodel->updateprofile($data,$data1,$id);
         if($a)
         {
         echo"<script>alert('Updation success')</script>";
         redirect('Doctor/doctorprofileview','refresh');
         
         }
         else
         {
         echo"<script>alert('Updation unsuccess')</script>";
         redirect('Doctor/doctorprofileview','refresh');
         }


    }
    public function doctorbookview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $did=$this->session->userid;
        // $data["testdata"]=$this->Doctormodel->addtest($did);
        // echo $did;exit;
        // $data["labtestcount"]=$this->Doctormodel->labtestcount($did);
        // print_R($data['labtestcount']);exit;
        $data["view"]=$this->Doctormodel->doctorbookdataview($did);
        //123 $data1["labresult"]=$this->Doctormodel->doctorlabreport($did);



        $this->load->view('doctorheader');

        $this->load->view('doctorbookview',$data);
        $this->load->view('userfooter');
    }
    else
    {
    redirect('Admin/loginview','refresh');
     }
        
    }
    public function doctoraddprescription()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $id['id']=$this->uri->segment(3);
        $this->load->view('doctorheader');

        $this->load->view('doctoraddprescription',$id);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        
        }

        

    }
    public function addpresc()
    {
        $bid=$this->input->post('uid');
        // $uid=$this->post->input('id');
        // echo $uid;exit;
        $data=array('presc'=>$this->input->post('presc'));

        $a=$this->Doctormodel->addpresc($bid,$data);
        // echo $a;exit;
        if($a)
        {
        echo"<script>alert('prescription added')</script>";
        redirect('Doctor/doctorbookview','refresh');
        }
        else
        {
        echo"<script>alert('Prescription add failed')</script>";
        redirect('Doctor/doctorbookview','refresh');
        }
    }
    public function doctorprescriptionview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $bid=$this->uri->segment(3);
        // $id['id']=$this->uri->segment(3);
        // echo $bid;
        // echo $id;exit;
        $this->load->view('doctorheader');

        
        $data['view']=$this->Doctormodel->viewprescription($bid);
        $this->load->view('doctorprescriptionview',$data);
        $this->load->view('userfooter');
        }
            else
        {
        redirect('Admin/loginview','refresh');
        }



    }
    public function updatepresc()
    {
        $bookid=$this->input->post('bid');
    //    echo $bookid;exit;
    $data=array('presc'=>$this->input->post('presc'));
    $a=$this->Doctormodel->updatepres($bookid,$data);
    if($a)
    {
    echo"<script>alert('prescription updated')</script>";
    redirect('Doctor/doctorbookview','refresh');
    }
    else
    {
    echo"<script>alert('Prescription updation failed')</script>";
    redirect('Doctor/doctorbookview','refresh');
    }

    }
    
    public function doctorhospital()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $did=$this->session->userid;
        $data['view']=$this->Doctormodel->doctorhospital($did);
        $this->load->view('doctorheader');
        $this->load->view('doctorhospital',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
         }
    }
    public function doctorleave()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {

        $hid['hid']=$this->uri->segment(3);
        $this->load->view('doctorheader');

        $this->load->view('doctorleave',$hid);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function doctorleavedata()
    {
        $hid=$this->input->post('hid');
        // echo $hid;exit;
        $did=$this->session->userid;
        $cdate=date('Y-m-d');
        // echo $cdate;exit;

        $data=array('myleave'=>$this->input->post('leave'),
        'noday'=>$this->input->post('day'),
        'description'=>$this->input->post('description'),
        'cudate'=>$cdate,
        'did'=>$did,
        'hid'=>$hid
         );
         $a=$this->Doctormodel->adddoctorleave($data);
         if($a)
         {
         echo"<script>alert('Leave request added')</script>";
         redirect('Doctor/doctorleavereq','refresh');
         }
         else
         {
         echo"<script>alert('Request failed')</script>";
         redirect('Doctor/doctorleavereq','refresh');
         }

    }
    public function doctorleavereq()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $did=$this->session->userid;
        $data['view']=$this->Doctormodel->myleavereq($did);
        // print_r($data);exit;
        $this->load->view('doctorheader');

        $this->load->view('doctorleavereq',$data);
        $this->load->view('userfooter');
         }
        else
        {
         redirect('Admin/loginview','refresh');
        }

    }
    public function deleteleavereq()
    {
        // $lid=$this->session->userid;
        $lid=$this->uri->segment(3);
        $a=$this->Doctormodel->myleavedel($lid);
        if($a)
         {
         echo"<script>alert('Leave request deleted')</script>";
         redirect('Doctor/doctorleavereq','refresh');
         }
         else
         {
         echo"<script>alert('Deletion failed')</script>";
         redirect('Doctor/doctorleavereq','refresh');
         }
    }
    public function labtest()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $bookid=$this->uri->segment(3);
        $data['view']=$this->Doctormodel->selectdochospital($bookid);
        // print_r($data);exit;
        $data['bid']=$bookid;
        $this->load->view('doctorheader');
        $this->load->view('testtype',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function addtestdata()
    {
        $bid=$this->input->post('bid');
        // echo $bid;exit;
        $did=$this->session->userid;
        $ids=$this->Doctormodel->select_cid_uid($bid);
        // print_R($ids[0]->cid);exit;
        $cdate=date('Y-m-d');
        // print_r($ids);exit;
        
        $data=array('test'=>$this->input->post('tests'),'labid'=>$this->input->post('lab'),
    '   cid'=>$ids[0]->cid,'did'=>$did,'cdate'=>$cdate,'bookid'=>$bid);
            // print_r($data);exit;
            $a=$this->Doctormodel->addtestdata($data);
            if($a)
            {
                $data1=array('labstatus'=>'1');
                $this->Doctormodel->labstatus($data1,$bid);
            echo"<script>alert('Request for lab report')</script>";

            redirect('Doctor/labtestview/'.$bid,'refresh');
            }
            else
            {
            echo"<script>alert('process failed')</script>";
            // redirect('Doctor/dchat/'.$hid,'refresh');
            }



    }
    public function labtestview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $bookid=$this->uri->segment(3);
        $data['lab']=$this->Doctormodel->selectdoclab($bookid);
        $data['testdata']=$this->Doctormodel->selectdoctest($bookid);
        // echo $bookid;exit;
        // $data['bid']=$bookid;
        // $data['slab']=$this->Doctormodel->selectdoclab1($bookid);
        // print_r($data['testdata']);exit;
        $this->load->view('doctorheader');
        $this->load->view('testchange',$data);
        $this->load->view('userfooter');
         }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function updatetestdata()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $tid=$this->input->post('tid');
        // echo $tid;exit;
        $cdate=date('Y-m-d');
        $data=array('test'=>$this->input->post('tests'),'labid'=>$this->input->post('lab'),
        'cdate'=>$cdate);
        $a=$this->Doctormodel->updatetestdata($data,$tid);
        if($a)
         {
         echo"<script>alert('Lab test updated')</script>";
         redirect('Doctor/doctorbookview','refresh');
         }
        
    }
    else
    {
    redirect('Admin/loginview','refresh');
    }
    }
    public function downloadreport()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $bookid=$this->uri->segment(3);
        // echo $bookid;exit;
        // $this->Doctormodel->reportdownload();
        
        $data["labresult"]=$this->Doctormodel->doctorlabreport($bookid);
        // print_r($data);exit;
        $this->load->view('doctorheader');
        $this->load->view('reportdownload',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function dchat()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='2')
	    {
        $hid=$this->uri->segment(3);
        $did=$this->session->userid;
        $v=array('vstatus'=>'1');
        $data['doctorid']=$did;
        $data['hospitalname12']=$this->Doctormodel->hospitalname();
        $data['hospitalname']=$this->Doctormodel->hospitalname1($did);
        $data['hospitalid']=$this->uri->segment(3);
        $data['vstatus1']=$this->Doctormodel->vstatus($did);
        // $data1['count']=$this->Doctormodel->chatcount($did,$hid);
        // print_r($data['vstatus1']);exit;
        $data['doctordata']=$this->Doctormodel->doctordata($did);
        $data['hospitaldata']=$this->Doctormodel->hospitaldata($hid);
        $data['message']=$this->Doctormodel->message($did,$hid,$v);
        $this->load->view('chatdoctor',$data);
         }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function sndmsg()
    {
        $date=date('Y-m-d');
        $time=date("h:i:sa");
        $did=$this->session->userid;
        $hid=$this->input->post('hid');
        $msg=array('message'=>$this->input->post('msg'),'sid'=>$did,'date'=>$date,'time'=>$time,'rid'=>$hid);
        $a=$this->Doctormodel->addmsg($msg);
        if($a)
         {
        //  echo"<script>alert('Leave request deleted')</script>";
         redirect('Doctor/dchat/'.$hid,'refresh');
         }
         else
         {
        //  echo"<script>alert('Deletion failed')</script>";
         redirect('Doctor/dchat/'.$hid,'refresh');
         }
    }
   
    
    
}