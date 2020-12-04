<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SOModels extends CI_Model
{
    // Fungsi untuk menampilkan semua data
    public function view()
    {
        return $this->db->get('lab_sistemoperasi')->result();
    }

    // Fungsi untuk menampilkan data  berdasarkan id nya 
    public function view_by($id_sistemoperasi)
    {
        $this->db->where('id_sistemoperasi', $id_sistemoperasi);
        return $this->db->get('lab_sistemoperasi')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, id_user tidak harus divalidasi
        // Jadi id_user di validasi hanya ketika menambah data  saja
        if ($mode == "save")
        $this->form_validation->set_rules('namabarang_sistemoperasi', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang_sistemoperasi', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuanbarang_sistemoperasi', 'Satuan Barang', 'required');
        $this->form_validation->set_rules('tanggalupdate_sistemoperasi', 'Tanggal Update', 'required');
        $this->form_validation->set_rules('kondisi_sistemoperasi', 'Kondisi Barang', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel
    public function save()
    {
        $data = array(
            "namabarang_sistemoperasi" => $this->input->post('namabarang_sistemoperasi'),
            "jumlahbarang_sistemoperasi" => $this->input->post('jumlahbarang_sistemoperasi'),
            "satuanbarang_sistemoperasi" => $this->input->post('satuanbarang_sistemoperasi'),
            "tanggalupdate_sistemoperasi" => $this->input->post('tanggalupdate_sistemoperasi'),
            "kondisi_sistemoperasi" => $this->input->post('kondisi_sistemoperasi'),

        );

        $this->db->insert('lab_sistemoperasi', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data berdasarkan id_user
    public function edit($id)
    {
        // $id = $this->input->post('id_sistemoperasi');
        $data = array(
            "namabarang_sistemoperasi" => $this->input->post('namabarang_sistemoperasi'),
            "jumlahbarang_sistemoperasi" => $this->input->post('jumlahbarang_sistemoperasi'),
            "satuanbarang_sistemoperasi" => $this->input->post('satuanbarang_sistemoperasi'),
            "tanggalupdate_sistemoperasi" => $this->input->post('tanggalupdate_sistemoperasi'),
            "kondisi_sistemoperasi" => $this->input->post('kondisi_sistemoperasi'),

        );

        $this->db->where('id_sistemoperasi', $id);
        $this->db->update('lab_sistemoperasi', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data berdasarkan id_user
    public function delete($id_sistemoperasi)
    {
        $this->db->where('id_sistemoperasi', $id_sistemoperasi);
        $this->db->delete('lab_sistemoperasi'); // Untuk mengeksekusi perintah delete data
    }
}
