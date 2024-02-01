<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library(array('session','form_validation','email'));
        $this->load->model('Usermod');
    }
    public function userreg()
	{
		$this->load->view('userreg');
        
	}
    public function userheader()
    {
        $this->load->view('userheader');
    }
    public function login()
    {
        $pass=$this->input->post('password');
        $newpassword=$this->Usermod->password($pass);
        $data=array('email'=>$this->input->post('email'),
            'password'=>$newpassword,
            'usertype'=>'1'
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
        'age'=>$this->input->post('age'),
        'photo'=>$image,
        'contactno'=>$this->input->post('contact')
         );
        $a=$this->Usermod->userreg($data,$data1);
        if($a)
        {
        echo"<script>alert('registration success')</script>";
        redirect('Admin/loginview','refresh');
        }
        else
        {
        echo"<script>alert('registration unsuccess')</script>";
        redirect('User/userreg','refresh');
        }
    }
    public function userhome()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
            $data['nouser']=$this->Usermod->nouser();
            $data['nodoctor']=$this->Usermod->nodoctor();
            $data['nohospital']=$this->Usermod->nohospital();
            $data['nolab']=$this->Usermod->nolab();
		$this->load->view('userhome',$data);
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
	}
    public function userdoctorview()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $data["view"]=$this->Usermod->userdoctorview();
        $this->load->view('userheader');
        
        $this->load->view('userdoctorview',$data);
		$this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
	}
    public function userprofileview()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $id=$this->session->userid;
        
       
       $data["view"]=$this->Usermod->userprofileview($id);
       $this->load->view('userheader');
    
		$this->load->view('userprofileview',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
	}
    public function updateuserprofile()
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
        // 'gender'=>$this->input->post('gender'),
        'age'=>$this->input->post('age'),
        'photo'=>$image,
        'contactno'=>$this->input->post('contact')
         );

         $data1=array('email'=>$this->input->post('email'));
         $a=$this->Usermod->updateuserprofile($data,$data1,$id);
        if($a==1)
        {
        echo"<script>alert('Updation success')</script>";
        redirect('User/userprofileview','refresh');
        
        }
        else
        {
        echo"<script>alert('Updation unsuccess')</script>";
        redirect('User/userprofileview','refresh');
        }

       
	}




























    public function usersearchview()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
         $data["view"]=null;
      

		$this->load->view('usersearch',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
        
	}
    
    public function usersearch()
	{
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $search=$this->input->post('search');
        //echo $search;exit;
        $data["view"]=$this->Usermod->usersearch($search);
        $this->load->view('userheader');

        $this->load->view('usersearch',$data);
        $this->load->view('userfooter');
            }
        else
        {
        redirect('Admin/loginview','refresh');
        }

	}
    
    public function doctorbooking()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $id['id']=$this->uri->segment(3);
        $id['doctorid']=$this->uri->segment(4);


        
        
        // $d=$this->Usermod->doctordate($id);
        // // echo 
        




         $this->load->view('userheader');

        $this->load->view('doctorbooking',$id);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function doctorbookingdata()
    {
        $uid=$this->session->userid;
        $did=$this->input->post('did');
        $cid=$this->input->post('did');
        $doctorid=$this->input->post('doctorid');
        
        $cdate=date('y-m-d');
        $data=array('date'=>$this->input->post('date'),
        'time'=>$this->input->post('time'),
        'uid'=>$uid,
        'cid'=>$did,
        'currentdate'=>$cdate
         );
         $bid=$this->Usermod->doctorbooking($data);
        if($bid)
        {
        redirect('User/paymentview/'.$cid.'/'.$bid,'refresh');
        }
        else
        {
        echo"<script>alert('Booking fails')</script>";
        redirect('User/doctorbooking','refresh');

        }

    }


    public function userbookdataview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $id=$this->session->userid;
        $book["data"]=$this->Usermod->userbookeddata($id);
        $this->load->view('userheader');
        $this->load->view('userbookdataview',$book);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function editbookdata()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $bookid=$this->uri->segment(3);
        $book['id']=$this->uri->segment(3);
        $book["data"]=$this->Usermod->usereditbook($bookid);
        $this->load->view('userheader');
        $this->load->view('usereditbookdata',$book);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }

    }
    public function updatebookdata()
    {
        $bookid=$this->input->post('bookid');
        $data=array('date'=>$this->input->post('date'),
        'time'=>$this->input->post('time')
    );
    $q=$this->Usermod->updatebook($bookid,$data);
    if($q)
        {
        echo"<script>alert('Booking updated')</script>";
        redirect('User/userbookdataview','refresh');

        
        }
        else
        {
        echo"<script>alert('Booking updation fails')</script>";
        redirect('User/userbookdataview','refresh');

        }
    }
    public function deletebook()
    {
        $bookid=$this->uri->segment(3);
        $a=$this->Usermod->deletebook($bookid);
        if($a)
        {
        echo"<script>alert('booking cancelled')</script>";
        redirect('User/userbookdataview','refresh');
        }
        else
        {
        echo"<script>alert('Cancellation failed')</script>";
        redirect('User/userbookdataview','refresh');
        }
    }
    public function useraddcomplaint()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $this->load->view('userheader');
        $this->load->view('useraddcomplaint');
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function addcomplaint()
    {
        $id=$this->session->userid;
        $date=date('y-m-d');
        $data=array('subject'=>$this->input->post('subject'),
        'complaint'=>$this->input->post('complaint'),
        'loginid'=>$id,
         'date'=>$date);
        $a=$this->Usermod->addcomplaint($data,$id);
        if($a)
        {
        echo"<script>alert('Complaint added')</script>";
        redirect('User/usercomplaintview','refresh');
        
        }
        else
        {
        echo"<script>alert('failed')</script>";
        redirect('User/addcomplaint','refresh');

        }
    }

    public function usercomplaintview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $data["view"]=$this->Usermod->viewcomplaint();
        $this->load->view('userheader');
        $this->load->view('usercomplaintview',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function usereditcomplaint()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $comid=$this->uri->segment(3);
        $data["view"]=$this->Usermod->editcomplaint($comid);
        $this->load->view('userheader');
        $this->load->view('usereditcomplaint',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function updatecomplaint()
    {
        $comid=$this->input->post('comid');
        $date=date('y-m-d');
        $data=array('subject'=>$this->input->post('subject'),
        'complaint'=>$this->input->post('complaint'),
         'date'=>$date);
         $a=$this->Usermod->updatecomplaint($data,$comid);
        if($a)
        {
        echo"<script>alert('Complaint updated')</script>";
        redirect('User/usercomplaintview','refresh');
        }
        else
        {
        echo"<script>alert('updation failed')</script>";
        redirect('User/usereditcomplaint','refresh');

        }

      
    }
    public function deletecomplaint()
    {
        $comid=$this->uri->segment(3);



    $a=$this->Usermod->deletecomplaint($comid);
        if($a)
        {
        echo"<script>alert('Complaint deleted')</script>";
        redirect('User/usercomplaintview','refresh');
        }
        else
        {
        echo"<script>alert('Deletion failed')</script>";
        redirect('User/usereditcomplaint','refresh');
        }
    }



    public function paymentview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $cid['cid']=$this->uri->segment(3);
    //    print_r($cid);exit;

        $cid['bid']=$this->uri->segment(4);
    //    print_r($bid);exit;

        $this->load->view('payment',$cid);
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function paymentdata()
    {
        // print_R($this->input->post('cid'));exit;
        $cid=$this->input->post('cid');
        $bid=$this->input->post('bid');
        // echo $bid;exit;

        $id=$this->session->userid;
        $cardno=$this->input->post('cardno');
        $cvv=$this->input->post('cvv');
        $name=$this->input->post('name');
        $expdate=$this->input->post('expdate');
        $a=$this->Usermod->checkpaymentdata($cardno,$cvv);
       if($a!=null)
       {
        $a=$this->Usermod->paymentfee($cid,$id);
        $fee = $a[0]->fee;
        $b=$this->Usermod->bankamount($id);
        $tamount = $b[0]->totalamount;
        $bankamount=$tamount-$fee;
        if($bankamount>0)
        {
        $data=array('totalamount'=>$bankamount);
        $uau=$this->Usermod->bankamountupdate($cardno,$data);
        $date=date('y-m-d');
        $dataa=array('nameoncard'=>$name,'cardno'=>$cardno,'cvv'=>$cvv,'expdate'=>$expdate,'amount'=>$fee,'loginid'=>$id,'cdate'=>$date);
        $d=$this->Usermod->addpaymentdata($dataa);
        // echo $d;exit;


        $c=$this->Usermod->finddoctorbank($cid);
        // print_r($c);exit;
        // echo $c;exit;

        $contactno = $c[0]->contactno;
        // echo $contactno;exit;
        $dam=$this->Usermod->selectdoctoramount($contactno);
        $damount = $dam[0]->totalamount;
        // echo $damount;exit;
        $tdamount=$damount+$fee;
        $data=array('totalamount'=>$tdamount);
        $dfu=$this->Usermod->updatedoctorfee($contactno,$data);
        $tok=rand('999','9999');
        $data=array('token'=>$tok);

        $this->Usermod->tokengen($bid,$data);
        if($uau and $dfu)
        {
            echo"<script>alert('Payment success')</script>";
            $dat=array('pstatus'=>'1');
            $this->Usermod->updatepstatus($d,$dat);
            redirect('User/userbookdataview','refresh');
        }
        
        else
        {
            echo"<script>alert('Insufficient balance')</script>";
            redirect('User/paymentview/'.$cid,'refresh');
        }
        }
        else
        {
            echo"<script>alert('wrong cardnumber or cvv')</script>";
            redirect('User/paymentview/'.$cid,'refresh');


        }

        
        



       


        
    }
}
    public function testresult()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $uid=$this->session->userid;
        $data['view']=$this->Usermod->testresult($uid);
        // print_r($data);exit;
        $this->load->view('userheader');
        $this->load->view('testresult',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function donationreg()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $uid=$this->session->userid;
        $this->load->view('userheader');
        $a=$this->Usermod->checkreg($uid);
        if($a)
        {
        echo"<script>alert('You are already registered')</script>";
        $data['view']=$this->Usermod->viewdonation($uid);
        // $this->load->view('userheader');
        $this->load->view('donationview',$data);
        
        }
        else
        {
            $this->load->view('donationreg');
            // $this->load->view('userfooter');
        }
        $this->load->view('userfooter');
        // $this->load->view('donationreg');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function donationregdata()
    {
        $uid=$this->session->userid;
        $data=array('bloodgroup'=>$this->input->post('bloodgroup'),'uid'=>$uid,'drugs'=>$this->input->post('duse'),
        'previous'=>$this->input->post('pbh'));
        // print_r($data);exit;
        $a=$this->Usermod->adddonationdata($data);
        if($a)
        {
        echo"<script>alert('Data added')</script>";
        redirect('User/userhome','refresh');
        }
        else
        {
        echo"<script>alert('Failed')</script>";
        // redirect('User/usereditcomplaint','refresh');
        }

    }
    public function donationupdate()
    {
        $uid=$this->session->userid;
        $data=array('bloodgroup'=>$this->input->post('bloodgroup'),'drugs'=>$this->input->post('duse'),
        'previous'=>$this->input->post('pbh'));
        $a=$this->Usermod->updatedonationdata($data,$uid);
        if($a)
        {
        echo"<script>alert('Data updated')</script>";
        redirect('User/userhome','refresh');
        }
        else
        {
        echo"<script>alert('Updation Failed')</script>";
        redirect('User/donationregdata','refresh');
        }
    }
    public function dsearch()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $this->load->view('userheader');
        $data['view']=null;
        $this->load->view('donationsearch',$data);
        $this->load->view('userfooter');

        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }


    // public function dearchview()
	// {
    //      $data["view"]=null;
      

	// 	$this->load->view('usersearch',$data);
        
	// }
    public function donationsearch()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $dsearch=$this->input->post('search');
        // echo $dsearch;exit;
        $uid=$this->session->userid;
        $data['view']=$this->Usermod->dsearch($dsearch,$uid);
        $this->load->view('userheader');
        $this->load->view('donationsearch',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
        // print_r($data);exit;
    }

    public function contactdonerview()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $data['donerid']=$this->uri->segment(3);
        $this->load->view('userheader');
        $this->load->view('contactdonerdata',$data);
        $this->load->view('userfooter');
        }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    public function contactdonner()
    {
        $uid=$this->session->userid;
        $donerid=$this->input->post('doid');
        // echo $donerid;exit;
        $data=array('vdate'=>$this->input->post('date'),
        'vtime'=>$this->input->post('time'),'vplace'=>$this->input->post('place'),'donerid'=>$donerid,'uid'=>$uid);
        // print_r($data);exit;
        $a=$this->Usermod->addreqdoner($data);
        if($a)
        {
        echo"<script>alert('Request added')</script>";
        redirect('User/mydonationreq','refresh');
        }
        else
        {
        echo"<script>alert('Request Failed')</script>";
        redirect('User/dsearch','refresh');
        }

    }
    public function donationreq()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $uid=$this->session->userid;
        $this->load->view('userheader');
        $data['view']=$this->Usermod->donationdata($uid);
        // print_r($data);exit;
        $this->load->view('donerreq',$data);
        $this->load->view('userfooter');
        }
        else
         {
        redirect('Admin/loginview','refresh');
         }
    }
    public function dreqaccept()
    {
        $bdid=$this->uri->segment(3);
        // echo $bdid;exit;
        $data=array('dstatus'=>'1');
        $a=$this->Usermod->dreqaccept($data,$bdid);
        if($a)
        {
        echo"<script>alert('Request for donation')</script>";
        redirect('User/donationreq','refresh');
        }
        else
        {
        echo"<script>alert('Request Failed')</script>";
        redirect('User/donationreq','refresh');
        }

    }
    public function mydonationreq()
    {
        if(isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['usertype']==='1')
	    {
        $uid=$this->session->userid;
        $this->load->view('userheader');
        $data['view']=$this->Usermod->mydonationreq($uid);
        $this->load->view('myreq',$data);
        $this->load->view('userfooter');
         }
        else
        {
        redirect('Admin/loginview','refresh');
        }
    }
    
    public function dreqreject()
    {
        $bdid=$this->uri->segment(3);
        // echo $bdid;exit;
        $data=array('dstatus'=>'2');
        $a=$this->Usermod->dreqreject($data,$bdid);
        if($a)
        {
        echo"<script>alert('Request rejected')</script>";
        redirect('User/donationreq','refresh');
        }
        else
        {
        echo"<script>alert('Rejection Failed')</script>";
        redirect('User/donationreq','refresh');
        }

    }





}



