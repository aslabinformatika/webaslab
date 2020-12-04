<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class JarkomModels extends CI_Model
{
    // Fungsi untuk menampilkan semua data
    public function view()
    {
        return $this->db->get('lab_jarkom')->result();
    }

    // Fungsi untuk menampilkan data  berdasarkan id nya 
    public function view_by($id_jarkom)
    {
        $this->db->where('id_jarkom', $id_jarkom);
        return $this->db->get('lab_jarkom')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, id_user tidak harus divalidasi
        // Jadi id_user di validasi hanya ketika menambah data  saja
        if ($mode == "save")
        $this->form_validation->set_rules('namabarang_jarkom', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang_jarkom', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuanbarang_jarkom', 'Satuan Barang', 'required');
        $this->form_validation->set_rules('tanggalupdate_jarkom', 'Tanggal Update', 'required');
        $this->form_validation->set_rules('kondisi_jarkom', 'Kondisi Barang', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel
    public function save()
    {
        $data = array(
            "namabarang_jarkom" => $this->input->post('namabarang_jarkom'),
            "jumlahbarang_jarkom" => $this->input->post('jumlahbarang_jarkom'),
            "satuanbarang_jarkom" => $this->input->post('satuanbarang_jarkom'),
            "tanggalupdate_jarkom" => $this->input->post('tanggalupdate_jarkom'),
            "kondisi_jarkom" => $this->input->post('kondisi_jarkom'),

        );

        $this->db->insert('lab_jarkom', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data berdasarkan id_user
    public function edit($id)
    {
        // $id = $this->input->post('id_jarkom');
        $data = array(
            "namabarang_jarkom" => $this->input->post('namabarang_jarkom'),
            "jumlahbarang_jarkom" => $this->input->post('jumlahbarang_jarkom'),
            "satuanbarang_jarkom" => $this->input->post('satuanbarang_jarkom'),
            "tanggalupdate_jarkom" => $this->input->post('tanggalupdate_jarkom'),
            "kondisi_jarkom" => $this->input->post('kondisi_jarkom'),

        );

        $this->db->where('id_jarkom', $id);
        $this->db->update('lab_jarkom', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data berdasarkan id_user
    public function delete($id_jarkom)
    {
        $this->db->where('id_jarkom', $id_jarkom);
        $this->db->delete('lab_jarkom'); // Untuk mengeksekusi perintah delete data
    }
}
