<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library(array('session','form_validation','email'));
        $this->load->model('Hospitalmodel');
    }


    public function hospitalreg()
	{
        // $this->load->view('homeheader');
		$this->load->view('hospitalreg');
	}


    public function login()
    {
        $hospitalid=$this->input->post('hospitalid');
        $rhos=$this->Hospitalmodel->rdoc($hospitalid);
        if($rhos)
        {
            $pass=$this->input->post('password');
            $newpassword=$this->Hospitalmodel->password($pass);
            $data=array('email'=>$this->input->post('email'),
            'password'=>$newpassword,
            'usertype'=>'3'
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

            $data1=array('hospitalname'=>$this->input->post('hname'),
            'address'=>$this->input->post('address'),
            'pincode'=>$this->input->post('pincode'),
            'district'=>$this->input->post('district'),
            'city'=>$this->input->post('city'),
            'district'=>$this->input->post('district'),
            'contactno'=>$this->input->post('contact'),
            'photo'=>$image
            );

            $a=$this->Hospitalmodel->hospitalreg($data,$data1);
            if($a)
            {
            echo"<script>alert('registration success')</script>";
            redirect('Admin/loginview','refresh');
            }
            else
            {
            echo"<script>alert('registration unsuccess')</script>";
            redirect('Hospital/hospitalreg','refresh');
            }
        }
        else
        {
            echo"<script>alert('Invalid hospital')</script>";
            redirect('Admin/home','refresh');
        }
        
    }

    public function hospitalhome()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
            $data['nouser']=$this->Hospitalmodel->nouser();
            $data['nodoctor']=$this->Hospitalmodel->nodoctor();
            $data['nohospital']=$this->Hospitalmodel->nohospital();
            $data['nolab']=$this->Hospitalmodel->nolab();
		$this->load->view('hospitalhome',$data);
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
	}
    public function hospitaldoctorview()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $this->load->view('hospitalheader');
        $data["view"]=$this->Hospitalmodel->hospitaldoctorview();
        $this->load->view('hospitaldoctorview',$data);
        $this->load->view('userfooter');
		// $this->load->view('userdoctorview');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
	}



    public function hospitalprofileview()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $id=$this->session->userid;
        $this->load->view('hospitalheader');
        $data["view1"]=$this->Hospitalmodel->hospitalprofile($id);
		$this->load->view('hospitalprofileview',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
	}
    public function updateprofile()
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
        $data=array('hospitalname'=>$this->input->post('hname'),
        'address'=>$this->input->post('address'),
        'pincode'=>$this->input->post('pincode'),
        'district'=>$this->input->post('district'),
        'city'=>$this->input->post('city'),
        'district'=>$this->input->post('district'),
        'contactno'=>$this->input->post('contact'),
        'photo'=>$image);
        $data1=array('email'=>$this->input->post('email'));
        $m=$this->Hospitalmodel->updateprofile($data,$data1,$id);
        if($m==1)
        {
        echo"<script>alert('Updation success')</script>";
        redirect('Hospital/hospitalprofileview','refresh');
        
        }
        else
        {
        echo"<script>alert('Updation unsuccess')</script>";
        redirect('Hospital/hospitalprofileview','refresh');
        }
    }
    public function doctornotificationview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $data["view"]=$this->Hospitalmodel->adminnoti();
        $this->load->view('hospitalheader');

        $this->load->view('doctornotificationview',$data);
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function hospitaldoctordata()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $this->load->view('hospitalheader');
        $hid=$this->session->userid;
        $data["view"]=$this->Hospitalmodel->hospitaldoctordata($hid);
        $this->load->view('hospitaldoctordata',$data);
        $this->load->view('userfooter');
		// $this->load->view('userdoctorview');
        }
        else
        {
         redirect('Admin/loginview','refresh');
        }
	}
    public function hospitaldoctorbookview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $hid=$this->session->userid;
        // echo $hid;exit;
        $did=$this->uri->segment(3);
        // echo $did;exit;
        $data["view"]=$this->Hospitalmodel->doctorbookdataview($did,$hid);
        // print_R($data['view']);exit;
        $this->load->view('hospitalheader');

        $this->load->view('hospitaldoctorbookview',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function requstedleave()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $hid=$this->session->userid;
        $data['view']=$this->Hospitalmodel->requestedleave($hid);
        $this->load->view('hospitalheader');

        $this->load->view('leaverequestview.php',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    // public function hospitalserchview()
    // {
    //     $data['view']=null;
    //     $this->load->view('hospitalserchview',$data);
    // }
    public function doctorusersearch()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $search=$this->input->post('search');
        // echo $search;exit;
        $hid=$this->session->userid;
        $data['view']=$this->Hospitalmodel->selctsearchuser($search);
        // print_r($data);exit;
         $hid=$this->session->userid;
        $this->load->view('hospitalheader');
        $this->load->view('hospitalserchview',$data);
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function transfertohospital()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $data['uid']=$this->uri->segment(3);
        // echo $uid;exit;
        // $data['view']=$uid;
        $hid=$this->session->userid;
        $data['view']=$this->Hospitalmodel->allhospital($hid);
        $this->load->view('hospitalheader');
        $this->load->view('hospitaltransfer',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function addtrnsdata()
    {
        // $uid=$this->input->post('uid');
        // echo $uid;exit;
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpg|jpeg|pdf|docx';
        $config['max_size'] = '100000';
        $config['max_width'] = '10240';
        $config['max_height'] = '7680';
        $this->load->library('upload', $config);
      
		if ($this->upload->do_upload('report')) {
			$img = $this->upload->data();
            $image = $img['file_name'];
		}else{
			$error = array('error' => $this->upload->display_errors());
            $image =   $this->input->post('report');
		}
        $rhid=$this->input->post('hospital');
        $cuhid=$this->session->userid;
        $uid=$this->input->post('uid');
        $data=array('report'=>$image,'hid'=>$this->input->post('hospital'),'uid'=>$this->input->post('uid'),'loghid'=>$cuhid);
        $b=$this->Hospitalmodel->useremail1($uid);
        $useremail=$b[0]->email;
        $c=$this->Hospitalmodel->sendhos($cuhid);
        $sendhos=$c[0]->hospitalname;
        $d=$this->Hospitalmodel->rehos($rhid);
        $rehos=$d[0]->hospitalname;
        // echo($rehos);exit;



        
        $a=$this->Hospitalmodel->addreport($data);
        $e=$this->Hospitalmodel->mrid();
        $mrid=$e[0]->mrid;
        // echo($mrid);exit;
        if($a)
        {
        echo"<script>alert('Data transmission under patient confirmation stage')</script>";
        require "PHPMailer/PHPMailerAutoload.php";
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "connectedcareabgs@gmail.com";
        $mail->Password = "qyclhmxupzhowjby";
        $mail->From = "connectedcareabgs@gmail.com";
        $mail->FromName = "connectedcareabgs@gmail.com";
        $mail->AddAddress($useremail);
        $mail->Subject = "Data transfer confirmation";
        $mail->Body = "Your data need to be transfer from $sendhos to $rehos to confirm this transfer click the link  http://localhost/project/Hospital/searchconfirmation/$mrid";
        if(!$mail->Send()) 
        {
          echo "Mailer Error: " . $mail->ErrorInfo;
        } 
        else 
        {
          echo "Message has been sent";
          redirect('Hospital/hospitalhome','refresh');
        }

        
        }
        else
        {
        echo"<script>alert('Data transmission unsuccess')</script>";
        redirect('Hospital/transfertohospital','refresh');
        }

    }





    public function searchconfirmation()
    {
        $mrid=$this->uri->segment(3);
        // echo $mrid;exit;
        $data=array('approvestatus'=>'1');
        $a=$this->Hospitalmodel->searchtransferapproved($mrid,$data);

    }








    public function transferdataview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $hid=$this->session->userid;
        $data['view']=$this->Hospitalmodel->userdatatransferselect($hid);
        $this->load->view('hospitalheader');
        $this->load->view('usertransdataview',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    // public function transferdataview()
    // {
    //     if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	//     {
    //     $hid=$this->session->userid;
    //     $data['view']=$this->Hospitalmodel->userdatatransferselect($hid);
    //     $this->load->view('hospitalheader');
    //     $this->load->view('usertransdataview',$data);
    //     }
    //     else
    //     {
    //     redirect('Admin/loginview','refresh');
    //     }
    // }
    public function requestpatientdata()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $hid=$this->session->userid;
        $data['view']=$this->Hospitalmodel->allhospital($hid);
        $this->load->view('hospitalheader');
        $this->load->view('requestpatient',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }

    }
    public function reqpatientdata()
    {
        $hid=$this->session->userid;
        $rhid=$this->input->post('hospital');
        $u_cono=$this->input->post('contact');
        $data=array('reqhospitalname'=>$this->input->post('hospital'),
        'name'=>$this->input->post('name'),
        'contactno'=>$this->input->post('contact'),
        'gender'=>$this->input->post('gender'),
        'age'=>$this->input->post('age'),
        'hid'=>$hid
        );
        $a=$this->Hospitalmodel->addeqdata($data);
        // print_r($data);exit;
        // echo $rhid;exit;
        $b=$this->Hospitalmodel->reqhosname($hid);
        $c=$this->Hospitalmodel->sndhosname($rhid);
    
        $reqsndhos=$b[0]->hospitalname;
        $sndhosname=$c[0]->hospitalname;
        $d=$this->Hospitalmodel->useremail($u_cono);
        $useremail=$d[0]->email;
        // echo $useremail;exit;
        $e=$this->Hospitalmodel->rhid();
        // print_r($rhid);exit;
        $rhid=$e[0]->rhid;
        // echo $rhid;exit;



        if($a)
        {
     
       
        require "PHPMailer/PHPMailerAutoload.php";
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "connectedcareabgs@gmail.com";
        $mail->Password = "qyclhmxupzhowjby";
        $mail->From = "connectedcareabgs@gmail.com";
        $mail->FromName = "connectedcareabgs@gmail.com";
        $mail->AddAddress($useremail);
        $mail->Subject = "Data transfer confirmation";
        $mail->Body = " $reqsndhos is requested for your data from $sndhosname so you should be approve before data transfer click the link for approve http://localhost/project/Hospital/confirmation/$rhid";
        if(!$mail->Send()) 
        {
          echo "Mailer Error: " . $mail->ErrorInfo;
          redirect('Hospital/hospitalhome','refresh');
        } 
        else 
        {
          echo "Message has been sent";
          redirect('Hospital/hospitalhome','refresh');
        }













        
//             $this->load->library('email');

//             $config = array(
//             'protocol' => 'smtp',
//             'smtp_host' => 'smtp.gmail.com',
//             'smtp_port' => 587,
//             'smtp_user' => 'connectedcareabgs@gmail.com',
//             'smtp_pass' => 'abgsabgs',
//             // 'mailtype' => 'html',
//             'charset' => 'utf-8'
//             );
//             $this->email->initialize($config);

//             $email = 'myemilappuz@gmail.com';
//             $subject = 'Confirmation Email';
//             $message = 'Please confirm your email address by clicking on the link below: <a href="http://example.com/confirm">Confirm</a>';
// print_r($config);exit;
//             $this->email->to($email);
//             $this->email->subject($subject);
//             $this->email->message($message);

//             $this->email->send();
            





        
        }
        else
        {
        echo"<script>alert('Request data unsuccess')</script>";
        redirect('Hospital/requestpatientdata','refresh');
        }

    }
    public function confirmation()
    {
        $rhid=$this->uri->segment(3);
        // echo $rhid;exit;
        $data=array('approvestatus'=>'1');
        $a=$this->Hospitalmodel->transferapproved($rhid,$data);

    }




    public function requestdataview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $hid=$this->session->userid;
        $data['view']=$this->Hospitalmodel->userdatatransferselect2($hid);
        // print_r($data);exit;
        $this->load->view('hospitalheader');

        $this->load->view('requestpatientdata',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function addpreport()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $rhid['rhid']=$this->uri->segment(3);
        $cono=$this->uri->segment(4);
        // echo $cono;exit;
        $hid=$this->session->userid;

        $this->load->view('hospitalheader');
        $rhid['t']=$this->Hospitalmodel->checkpatientinhos($cono,$hid);
        // print_r($data);exit;
        $this->load->view('report',$rhid);
        $this->load->view('userfooter');

        
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function reportadd()
    {
        $rhid=$this->input->post('rhid');
        // echo $rhid;exit;
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpg|jpeg|pdf|docx';
        $config['max_size'] = '100000';
        $config['max_width'] = '10240';
        $config['max_height'] = '7680';
        $this->load->library('upload', $config);
      
		if ($this->upload->do_upload('report')) {
			$img = $this->upload->data();
            $image = $img['file_name'];
		}else{
			$error = array('error' => $this->upload->display_errors());
            $image =   $this->input->post('report');
		}
        $data=array('report'=>$image);

        $a=$this->Hospitalmodel->addreportes($data,$rhid);
        if($a)
        {
        echo"<script>alert('Patient report added')</script>";
        redirect('Hospital/requestdataview','refresh');
        
        }
        else
        {
        echo"<script>alert(' Unsuccess')</script>";
        redirect('Hospital/requestdataview','refresh');
        }
    }
    public function myrequest()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $hid=$this->session->userid;
        $data['view']=$this->Hospitalmodel->myreqview($hid);
        // print_r($data);exit;
        $this->load->view('hospitalheader');
        $this->load->view('myrequest',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function labreg()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $data['hid']=$this->session->userid;
        $this->load->view('hospitalheader');
        $this->load->view('labreg',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function labview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $hid=$this->session->userid;
        $data['view']=$this->Hospitalmodel->labview($hid);
        // print_r($data);exit;
        $this->load->view('hospitalheader');
        $this->load->view('hospitallabview',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function hchat()
    {
        
        $data['doctorid']=$this->uri->segment(3);
        $did=$this->uri->segment(3);
        $hid=$this->session->userid;
        // echo $hid;exit;
        $v=array('vstatus'=>'1');
        // $data=array('leavestatus'=>'1');
        $data['doctorname12']=$this->Hospitalmodel->doctorname1($hid);

        $data['doctorname']=$this->Hospitalmodel->doctorname($hid,$did);
         //print_r($data['doctorname']);exit;
         $data['vstatus1']=$this->Hospitalmodel->vstatus($hid);
        //    print_r($data['vstatus']);exit;
        $data['hospitalid']=$hid;
        $data['hospitaldata']=$this->Hospitalmodel->hospitaldata($hid);
        $data['doctordata']=$this->Hospitalmodel->doctordata($did);
        $data['message']=$this->Hospitalmodel->message($hid,$did,$v);
        $this->load->view('chathospital',$data);
    }
    public function sndmsg()
    {
        $date=date('Y-m-d');
        $time=date("h:i:sa");
        $hid=$this->session->userid;
        $did=$this->input->post('did');
        $msg=array('message'=>$this->input->post('msg'),'sid'=>$hid,'date'=>$date,'time'=>$time,'rid'=>$did);
        $a=$this->Hospitalmodel->addmsg($msg);
        if($a)
         {
        //  echo"<script>alert('Leave request deleted')</script>";
         redirect('Hospital/hchat/'.$did,'refresh');
         }
         else
         {
        //  echo"<script>alert('Deletion failed')</script>";
         redirect('Hospital/hchat/'.$did,'refresh');
         }
    }


    public function leaveapprove()
    {
        $lid=$this->uri->segment(3);
        // echo $lid;exit;
        $data=array('leavestatus'=>'1');
        $a=$this->Hospitalmodel->leaveapprove($lid,$data);
        if($a)
         {
         echo"<script>alert('Leave request approved')</script>";
         redirect('Hospital/requstedleave','refresh');
         }
         else
         {
         echo"<script>alert('failed')</script>";
         redirect('Hospital/requstedleave','refresh');
         }

    }
    public function leavereject()
    {
        $lid=$this->uri->segment(3);
        // echo $lid;exit;
        $data=array('leavestatus'=>'2');
        $a=$this->Hospitalmodel->leavereject($lid,$data);
        // if($a)
        //  {
        // //  echo"<script>alert('Leave request deleted')</script>";
        //  redirect('Hospital/hchat/'.$did,'refresh');
        //  }
        //  else
        //  {
        // //  echo"<script>alert('Deletion failed')</script>";
        //  redirect('Hospital/hchat/'.$did,'refresh');
        //  }

    }
    public function doctorsalaryadd()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $data['did']=$this->uri->segment(3);
        // print_r($data);exit;
        $this->load->view('hospitalheader');
        $this->load->view('doctorsalaryadd',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function adddoctorsalary()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='3')
	    {
        $data['did']=$this->input->post('did');
        $data['salary']=$this->input->post('amount');
        // $s=$this->input->post('amount');
        // echo $s;exit;
        $this->load->view('salarypay',$data);
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function addpayment()
    {
        $hid=$this->session->userid;
        $did=$this->input->post('did');
        $salary=$this->input->post('salary');
        $cardno=$this->input->post('cardno');
        $cvv=$this->input->post('cvv');
        $day=date('d');
        $month=date('m');
        $year=date('y');
        
        $a=$this->Hospitalmodel->checkhospitalaccount($hid,$cardno,$cvv);
        if($a)
        {
            $contactno=$a[0]->contactno;
            $data=$this->Hospitalmodel->checkhospitalbalance($hid);
            $htamount=$data[0]->totalamount;
            if($htamount>$salary)
            {
                $hcurrentamount=$htamount-$salary;
                $amount=array('totalamount'=>$hcurrentamount);
                $c=$this->Hospitalmodel->updatehamount($contactno,$amount);
                $d=$this->Hospitalmodel->finddocbank($did);
                $dtamount=$d[0]->totalamount;
                $dcontactno=$d[0]->contactno;
                $dtcurrentamount=$dtamount+$salary;
                $damount=array('totalamount'=>$dtcurrentamount);
                $e=$this->Hospitalmodel->updatedocamount($dcontactno,$damount);
                $sdata=array('did'=>$did,'hid'=>$hid,'salary'=>$salary,'day'=>$day,'month'=>$month,'year'=>$year);
                $f=$this->Hospitalmodel->salary($sdata);
                if($c and $e)
                {
                    echo"<script>alert('Payment success')</script>";
                   redirect('Hospital/hospitaldoctordata/','refresh');
                }

            }
            else
            {
                 echo"<script>alert('No sufficient balance')</script>";
                 redirect('Hospital/doctorsalaryadd/'.$did,'refresh');
            }
        }
        else
        {
            echo"<script>alert('In correct cvv or card number')</script>";
            redirect('Hospital/doctorsalaryadd/'.$did,'refresh');
        }

    }
    public function reqverification()
    {
        require "PHPMailer/PHPMailerAutoload.php";

$mail = new PHPMailer();

// Set mailer to use SMTP
$mail->IsSMTP();

// Specify main and backup server
$mail->Host = "smtp.gmail.com";

// set authentication
$mail->SMTPAuth = true;

// username
$mail->Username = "myemailappuz@gmail.com";

// password
$mail->Password = "";

// set From
$mail->From = "";

// set From Name
$mail->FromName = "";

// set To
$mail->AddAddress("");

// set Subject
$mail->Subject = "Test Mail using PHPMailer";

// set body
$mail->Body = "This is a test mail using PHPMailer";

// send mail
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent";
}
    }



    // public function hchat()
    // {
        
    //     $data['doctorid']=$this->uri->segment(3);
    //     $did=$this->uri->segment(3);
    //     $hid=$this->session->userid;
    //     // echo $hid;exit;
    //     $v=array('vstatus'=>'1');
    //     // $data=array('leavestatus'=>'1');
    //     $data['doctorname12']=$this->Hospitalmodel->doctorname1($hid);

    //     $data['doctorname']=$this->Hospitalmodel->doctorname($hid,$did);
    //     print_r($data['doctorname']);exit;
    //     $data['hospitalid']=$hid;
    //     $data['hospitaldata']=$this->Hospitalmodel->hospitaldata($hid);
    //     $data['doctordata']=$this->Hospitalmodel->doctordata($did);
    //     $data['message']=$this->Hospitalmodel->message($hid,$did,$v);
    //     $this->load->view('chathospital',$data);
    // }

    public function get_days_array() {
        $this->load->model('Hospitalmodel');
        $did = $this->input->post('did');
        // echo $did;exit;
        $days = $this->Hospitalmodel->get_days_array($did);
        echo json_encode($days);

    }
    // get_days_array_edit
    public function get_days_array_edit()
     {
        $this->load->model('Hospitalmodel');
        $bookid = $this->input->post('bookid');
        // echo $did;exit;
        $days = $this->Hospitalmodel->get_days_array_edit($bookid);
        echo json_encode($days);

    }

















    // public function get_days_array() {
    //     $this->load->model('Hospitalmodel');
    //     $did = $this->input->post('doctorid');
    //     // echo $did;exit;
    //     $days = $this->Hospitalmodel->get_days_array($did);
    //     echo json_encode($days);

    // }
}