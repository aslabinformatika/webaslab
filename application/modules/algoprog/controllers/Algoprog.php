<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Algoprog extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    $this->load->model('AlgoprogModels'); // Load AlgoprogModels ke controller ini
  }

  public function algo_prog()
  {
    if ($this->session->userdata('akses') == '1') {
      $data['lab_algoprog'] = $this->AlgoprogModels->view();
      $this->load->view('algoprog_v', $data);
      // var_dump($this->session->userdata('akses'));
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function tambah()
  {
    if ($this->session->userdata('akses') == '1') {
      $this->load->view('tambahdata_v');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function tambah_data()
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->AlgoprogModels->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->AlgoprogModels->save(); // Panggil fungsi save() yang ada di AlgoprogModels.php
        redirect('algoprog/algo_prog');
      }
    }

    $this->load->view('tambahdata_v');
  }

  public function ubah($id_algoprog)
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->AlgoprogModels->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->AlgoprogModels->edit($id_algoprog); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('algoprog/algo_prog');
      }
    }

    $data['lab_algoprog'] = $this->AlgoprogModels->view_by($id_algoprog);
    $this->load->view('ubahdata_v', $data);
  }

  public function hapus($id_algoprog)
  {
    if ($this->session->userdata('akses') == '1') {
      $this->AlgoprogModels->delete($id_algoprog); // Panggil fungsi delete() yang ada di AlgoprogModels.php
      redirect('algoprog/algo_prog');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
