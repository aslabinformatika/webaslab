<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jarkom extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    $this->load->model('JarkomModels'); // Load JarkomModels ke controller ini
  }

  public function jaringan_komputer()
  {
    if ($this->session->userdata('akses') == '1') {
      $data['lab_jarkom'] = $this->JarkomModels->view();
      $this->load->view('jarkom_v', $data);
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
      if ($this->JarkomModels->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->JarkomModels->save(); // Panggil fungsi save() yang ada di JarkomModels.php
        redirect('jarkom/jaringan_komputer');
      }
    }

    $this->load->view('tambahdata_v');
  }

  public function ubah($id_jarkom)
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->JarkomModels->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->JarkomModels->edit($id_jarkom); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('jarkom/jaringan_komputer');
      }
    }

    $data['lab_jarkom'] = $this->JarkomModels->view_by($id_jarkom);
    $this->load->view('ubahdata_v', $data);
  }

  public function hapus($id_jarkom)
  {
    if ($this->session->userdata('akses') == '1') {
      $this->JarkomModels->delete($id_jarkom); // Panggil fungsi delete() yang ada di JarkomModels.php
      redirect('jarkom/jaringan_komputer');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
