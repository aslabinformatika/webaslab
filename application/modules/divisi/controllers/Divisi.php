<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Divisi extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    
    $this->load->model('DivisiModel'); // Load DivisiModel ke controller ini
  }
  
  public function it_support(){
    if($this->session->userdata('akses')=='1'){
    $data['div_itsupport'] = $this->DivisiModel->view();
    $this->load->view('it_support_v.php', $data);
    // var_dump($this->session->userdata('akses'));
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function tambah(){
    if($this->session->userdata('akses')=='1'){
    $this->load->view('tambahdata_v');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  
  public function tambah_data(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->DivisiModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->DivisiModel->save(); // Panggil fungsi save() yang ada di DivisiModel.php
        redirect('divisi/it_support');
      }
    }
    
    $this->load->view('tambahdata_v');
  }
  
  public function ubah($id_itsupport){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->DivisiModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->DivisiModel->edit($id_itsupport); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('divisi/it_support');
      }
    }
    
    $data['div_itsupport'] = $this->DivisiModel->view_by($id_itsupport);
    $this->load->view('ubahdata_v', $data);
  }
  
  public function hapus($id_itsupport){
    if($this->session->userdata('akses')=='1'){
    $this->DivisiModel->delete($id_itsupport); // Panggil fungsi delete() yang ada di DivisiModel.php
    redirect('divisi/it_support');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}