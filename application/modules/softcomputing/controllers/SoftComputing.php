<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SoftComputing extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    $this->load->model('SCModels'); // Load SCModels ke controller ini
  }

  public function soft_computing()
  {
    if ($this->session->userdata('akses') == '1') {
      $data['lab_softcomputing'] = $this->SCModels->view();
      $this->load->view('soft_computing_v', $data);
      //  var_dump($this->session->userdata('akses'));
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
      if ($this->SCModels->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->SCModels->save(); // Panggil fungsi save() yang ada di SCModels.php
        redirect('softcomputing/soft_computing');
      }
    }

    $this->load->view('tambahdata_v');
  }

  public function ubah($id_softcomputing)
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->SCModels->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->SCModels->edit($id_softcomputing); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('softcomputing/soft_computing');
      }
    }

    $data['lab_softcomputing'] = $this->SCModels->view_by($id_softcomputing);
    $this->load->view('ubahdata_v', $data);
  }

  public function hapus($id_softcomputing)
  {
    if ($this->session->userdata('akses') == '1') {
      $this->SCModels->delete($id_softcomputing); // Panggil fungsi delete() yang ada di SCModels.php
      redirect('softcomputing/soft_computing');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
