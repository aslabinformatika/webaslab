<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class RplModels extends CI_Model
{
    // Fungsi untuk menampilkan semua data
    public function view()
    {
        return $this->db->get('lab_rpl')->result();
    }

    // Fungsi untuk menampilkan data  berdasarkan id nya 
    public function view_by($id_rpl)
    {
        $this->db->where('id_rpl', $id_rpl);
        return $this->db->get('lab_rpl')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, id_user tidak harus divalidasi
        // Jadi id_user di validasi hanya ketika menambah data  saja
        if ($mode == "save")
        $this->form_validation->set_rules('namabarang_rpl', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang_rpl', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuanbarang_rpl', 'Satuan Barang', 'required');
        $this->form_validation->set_rules('tanggalupdate_rpl', 'Tanggal Update', 'required');
        $this->form_validation->set_rules('kondisi_rpl', 'Kondisi Barang', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel
    public function save()
    {
        $data = array(
            "namabarang_rpl" => $this->input->post('namabarang_rpl'),
            "jumlahbarang_rpl" => $this->input->post('jumlahbarang_rpl'),
            "satuanbarang_rpl" => $this->input->post('satuanbarang_rpl'),
            "tanggalupdate_rpl" => $this->input->post('tanggalupdate_rpl'),
            "kondisi_rpl" => $this->input->post('kondisi_rpl'),

        );

        $this->db->insert('lab_rpl', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data berdasarkan id_user
    public function edit($id)
    {
        // $id = $this->input->post('id_rpl');
        $data = array(
            "namabarang_rpl" => $this->input->post('namabarang_rpl'),
            "jumlahbarang_rpl" => $this->input->post('jumlahbarang_rpl'),
            "satuanbarang_rpl" => $this->input->post('satuanbarang_rpl'),
            "tanggalupdate_rpl" => $this->input->post('tanggalupdate_rpl'),
            "kondisi_rpl" => $this->input->post('kondisi_rpl'),

        );

        $this->db->where('id_rpl', $id);
        $this->db->update('lab_rpl', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data berdasarkan id_user
    public function delete($id_rpl)
    {
        $this->db->where('id_rpl', $id_rpl);
        $this->db->delete('lab_rpl'); // Untuk mengeksekusi perintah delete data
    }
}
