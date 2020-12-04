<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SistemOperasi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    $this->load->model('SOModels'); // Load SOModels ke controller ini
  }

  public function sistem_operasi()
  {
    if ($this->session->userdata('akses') == '1') {
      $data['lab_sistemoperasi'] = $this->SOModels->view();
      $this->load->view('sistem_operasi_v', $data);
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
      if ($this->SOModels->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->SOModels->save(); // Panggil fungsi save() yang ada di SOModels.php
        redirect('sistemoperasi/sistem_operasi');
      }
    }

    $this->load->view('tambahdata_v');
  }

  public function ubah($id_sistemoperasi)
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->SOModels->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->SOModels->edit($id_sistemoperasi); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('sistemoperasi/sistem_operasi');
      }
    }

    $data['lab_sistemoperasi'] = $this->SOModels->view_by($id_sistemoperasi);
    $this->load->view('ubahdata_v', $data);
  }

  public function hapus($id_sistemoperasi)
  {
    if ($this->session->userdata('akses') == '1') {
      $this->SOModels->delete($id_sistemoperasi); // Panggil fungsi delete() yang ada di SOModels.php
      redirect('sistemoperasi/sistem_operasi');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
