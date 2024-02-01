<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Usermodel extends CI_model
{
    // public function reg($data)
    // {
    //     return $this->db->insert('register_123',$data);
    // }
    // public function app($data1)
    // {
    //     return $this->db->insert('appreg',$data1);
    // }
    // public function display()
    // {
    //     $this->db->select('*');
    //     $this->db->from('register_123');
    //     $query=$this->db->get();
    //     return $query->result();
    // }
    // public function play()
    // {
    //     $this->db->select('*');
    //     $this->db->from('appreg');
    //     $qry=$this->db->get();
    //     return $qry->result();
    // }
    // public function delqry($id)
    // {
    //     $this->db->where('regid',$id);
    //     return $qry=$this->db->delete('register_123');
    // }
    // public function newdel($id)
    // {
    //     $this->db->where('id',$id);
    //     return $qry=$this->db->delete('appreg');
    // }
    // public function editview($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('register_123');
    //     $this->db->where('regid',$id);
        
    //     $qry=$this->db->get();
    //     return $qry->result();
    // }
    // public function update($id,$data)
    // {
    //     $this->db->where('regid',$id);
    //     return $qry=$this->db->update('register_123',$data);
    // }
    // public function neweditview($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('appreg');
    //     $this->db->where('id',$id);
    //     $qry=$this->db->get();
    //     return $qry->result();
    // }
    // public function updateqry($id,$data1)
    // {
    //     $this->db->where('id',$id);
    //     return $qry=$this->db->update('appreg',$data1);
    // }
    // public function password($pass)
    // {
    //     return password_hash($pass,PASSWORD_BCRYPT);
    // }
    // public function checklogin($email,$password)
    // {
    //     $this->db->select('password');
    //     $this->db->from('register_123');
    //     $this->db->where('email',$email);
    //     $tablepass=$this->db->get()->row('password');
    //     return $this->verifypassword($password,$tablepass);
    // }
    // public function verifypassword($password,$tablepass)
    // {
    //     return password_verify($password,$tablepass);
    // }
    // public function getuserid($email)
    // {
    //     $this->db->select('regid');
    //     $this->db->from('register_123');
    //     $this->db->where('email',$email);
    //     return $this->db->get()->row('regid');
    // }
    // public function getuserdetail($password)
    // {
    //     $this->db->select('*');
    //     $this->db->from('register_123');
    //     $this->db->where('password',$password);
    //     return $this->db->get()->row();
    // }
}