<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LabServer extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    $this->load->model('ServerModels'); // Load ServerModels ke controller ini
  }

  public function server()
  {
    if ($this->session->userdata('akses') == '1') {
      $data['lab_server'] = $this->ServerModels->view();
      $this->load->view('server_v', $data);
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
      if ($this->ServerModels->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->ServerModels->save(); // Panggil fungsi save() yang ada di ServermModels.php
        redirect('labserver/server');
      }
    }

    $this->load->view('tambahdata_v');
  }

  public function ubah($id_server)
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->ServerModels->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->ServerModels->edit($id_server); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('labserver/server');
      }
    }

    $data['lab_server'] = $this->ServerModels->view_by($id_server);
    $this->load->view('ubahdata_v', $data);
  }

  public function hapus($id_server)
  {
    if ($this->session->userdata('akses') == '1') {
      $this->ServerModels->delete($id_server); // Panggil fungsi delete() yang ada di serverModels.php
      redirect('labserver/server');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
