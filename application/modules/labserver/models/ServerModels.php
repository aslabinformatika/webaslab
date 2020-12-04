<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ServerModels extends CI_Model
{
    // Fungsi untuk menampilkan semua data
    public function view()
    {
        return $this->db->get('lab_server')->result();
    }

    // Fungsi untuk menampilkan data  berdasarkan id nya 
    public function view_by($id_server)
    {
        $this->db->where('id_server', $id_server);
        return $this->db->get('lab_server')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, id_user tidak harus divalidasi
        // Jadi id_user di validasi hanya ketika menambah data  saja
        if ($mode == "save")
        $this->form_validation->set_rules('namabarang_server', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang_server', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuanbarang_server', 'Satuan Barang', 'required');
        $this->form_validation->set_rules('tanggalupdate_server', 'Tanggal Update', 'required');
        $this->form_validation->set_rules('kondisi_server', 'Kondisi Barang', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel
    public function save()
    {
        $data = array(
            "namabarang_server" => $this->input->post('namabarang_server'),
            "jumlahbarang_server" => $this->input->post('jumlahbarang_server'),
            "satuanbarang_server" => $this->input->post('satuanbarang_server'),
            "tanggalupdate_server" => $this->input->post('tanggalupdate_server'),
            "kondisi_server" => $this->input->post('kondisi_server'),

        );

        $this->db->insert('lab_server', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data berdasarkan id_user
    public function edit($id)
    {
        // $id = $this->input->post('id_server');
        $data = array(
            "namabarang_server" => $this->input->post('namabarang_server'),
            "jumlahbarang_server" => $this->input->post('jumlahbarang_server'),
            "satuanbarang_server" => $this->input->post('satuanbarang_server'),
            "tanggalupdate_server" => $this->input->post('tanggalupdate_server'),
            "kondisi_server" => $this->input->post('kondisi_server'),

        );

        $this->db->where('id_server', $id);
        $this->db->update('lab_server', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data berdasarkan id_user
    public function delete($id_server)
    {
        $this->db->where('id_server', $id_server);
        $this->db->delete('lab_server'); // Untuk mengeksekusi perintah delete data
    }
}
