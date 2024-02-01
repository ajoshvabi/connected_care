<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library(array('session','form_validation','email'));
        $this->load->model('Usermodel');
    }
    
    public function fun1()
	{
		$this->load->view('reg');
	}
    public function regfun()
    {
        $pass=$this->input->post('password');
        $newpassword=$this->Usermodel->password($pass);
        $data=array(
            'name'=>$this->input->post('name'),
            'address'=>$this->input->post('address'),
            'gender'=>$this->input->post('gender'),
            'email'=>$this->input->post('email'),
            'password'=>$newpassword
        );
        $a=$this->Usermodel->reg($data);
        if($a)
        {
        echo"<script>alert('registration success')</script>";
        }
        else
        {
        echo"<script>alert('registration unsuccess')</script>";
        }
    }
    public function fun2()
    {
        $this->load->view('app');
    }
    public function appfun()
    {
        $data1=array(
            'fname'=>$this->input->post('fname'),
            'address'=>$this->input->post('address'),
            'gender'=>$this->input->post('gender'),
            'dob'=>$this->input->post('dob'),
            'contact'=>$this->input->post('contact'),
            'district'=>$this->input->post('district'),
            'email'=>$this->input->post('email')
        );
        $a=$this->Usermodel->app($data1);
        if($a)
        {
        echo"<script>alert('reg success')</script>";
        redirect('Registration/fun2','refresh'); 
        }
        else
        {
        echo"<script>alert('reg unsuccess')</script>";
        redirect('Registration/fun2','refresh');
        }
    }
    public function fun3()
    {
        $result["view"]=$this->Usermodel->display();
        $this->load->view('viewtable',$result);
    }
    public function fun4()
    {
       $delta["hello"]=$this->Usermodel->play();
       $this->load->view('newreg',$delta);
    }
    public function table_del()
    {
        $id=$this->uri->segment(3);
        $result=$this->Usermodel->delqry($id);
        if($result)
        {
            echo"<script>alert('deletion successful')</script>";
            redirect('Registration/fun3','refresh');
            }
            else
            {
            echo"<script>alert('deletion unsuccessful')</script>";
            redirect('Registration/fun3','refresh');
            }
    }
    public function newdel()
    {
        $id=$this->uri->segment(3);
        $result=$this->Usermodel->newdel($id);
        if($result)
        {
            echo"<script>alert('deletion successful')</script>";
            redirect('Registration/fun4','refresh');
            }
            else
            {
            echo"<script>alert('deletion unsuccessful')</script>";
            redirect('Registration/fun4','refresh');
            }
    }
    public function edittab()
    {
        $id=$this->uri->segment(3);
        $data["view"]=$this->Usermodel->editview($id);
        $this->load->view('edit',$data);
    }
    public function updatetab()
    {
        $data=array(
            'name'=>$this->input->post('name'),
            'address'=>$this->input->post('address'),
            'gender'=>$this->input->post('gender'),
            'email'=>$this->input->post('email')
        );
        $id=$this->input->post('id');
        $result=$this->Usermodel->update($id,$data);
        if($result)
        {
            echo"<script>alert('updation successful')</script>";
            redirect('Registration/fun3','refresh');
            }
            else
            {
            echo"<script>alert('updation unsuccessful')</script>";
            redirect('Registration/fun3','refresh');
            }
    }



    public function newed()
    {
        $id=$this->uri->segment(3); 
        $data["editv"]=$this->Usermodel->neweditview($id);
        $this->load->view('newedit',$data);

    }
    public function newupdate()
    {
        $data1=array(
            'fname'=>$this->input->post('fname'),
            'address'=>$this->input->post('address'),
            'gender'=>$this->input->post('gender'),
            'dob'=>$this->input->post('dob'),
            'contact'=>$this->input->post('contact'),
            'district'=>$this->input->post('district'),
            'email'=>$this->input->post('email')
            
        );
        $id=$this->input->post('id');
        $a=$this->Usermodel->updateqry($id,$data1);
        if($a)
        {
        echo"<script>alert('updation success')</script>";
        redirect('Registration/fun4','refresh');
        }
        else
        {
        echo"<script>alert('updation unsuccess')</script>";
        redirect('Registration/fun4','refresh');
        }
    }
    public function loginview()
    {
        $this->load->view('login');
    }
    public function login()
    {
        $this->load->helper('security');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        if($this->Usermodel->checklogin($email,$password))
        {
            $id=$this->Usermodel->getuserid($email);
            $alldetail=$this->Usermodel->getuserdetail($id);
            $this->session->set_userdata(array('userid'=>$id,
            'logined'=>(bool)true));
           if(isset($_SESSION['logined'])AND($_SESSION['logined']==true))
           {
            redirect('Registration/fun3','refresh');
           }
           else
           {
            redirect('Registration/loginview','refresh');
           }

        }
        else{
            echo"<script>alert('Invalid user')</script>";
            redirect('Registration/loginview','refresh');
        }
        
    }
    public function logout()
    {
        if (isset($_SESSION['logined'])&& $_SESSION['logined']===true)       
        {
            foreach ($_SESSION as $key =>$value) {
                unset($_SESSION['$key']);
            }
            $this->session->set_flashdata('logout_notification','logged_out');
            redirect('Registration/loginview','refresh');
        }
        else{
            redirect('/');
        }
    }
        
    

}
