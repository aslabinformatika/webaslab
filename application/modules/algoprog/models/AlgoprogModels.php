<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AlgoprogModels extends CI_Model
{
    // Fungsi untuk menampilkan semua data
    public function view()
    {
        return $this->db->get('lab_algoprog')->result();
    }

    // Fungsi untuk menampilkan data  berdasarkan id nya 
    public function view_by($id_algoprog)
    {
        $this->db->where('id_algoprog', $id_algoprog);
        return $this->db->get('lab_algoprog')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, id_user tidak harus divalidasi
        // Jadi id_user di validasi hanya ketika menambah data  saja
        if ($mode == "save")
        $this->form_validation->set_rules('namabarang_algoprog', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang_algoprog', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuanbarang_algoprog', 'Satuan Barang', 'required');
        $this->form_validation->set_rules('tanggalupdate_algoprog', 'Tanggal Update', 'required');
        $this->form_validation->set_rules('kondisi_algoprog', 'Kondisi Barang', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel
    public function save()
    {
        $data = array(
            "namabarang_algoprog" => $this->input->post('namabarang_algoprog'),
            "jumlahbarang_algoprog" => $this->input->post('jumlahbarang_algoprog'),
            "satuanbarang_algoprog" => $this->input->post('satuanbarang_algoprog'),
            "tanggalupdate_algoprog" => $this->input->post('tanggalupdate_algoprog'),
            "kondisi_algoprog" => $this->input->post('kondisi_algoprog'),

        );

        $this->db->insert('lab_algoprog', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data berdasarkan id_user
    public function edit($id)
    {
        // $id = $this->input->post('id_algoprog');
        $data = array(
            "namabarang_algoprog" => $this->input->post('namabarang_algoprog'),
            "jumlahbarang_algoprog" => $this->input->post('jumlahbarang_algoprog'),
            "satuanbarang_algoprog" => $this->input->post('satuanbarang_algoprog'),
            "tanggalupdate_algoprog" => $this->input->post('tanggalupdate_algoprog'),
            "kondisi_algoprog" => $this->input->post('kondisi_algoprog'),

        );

        $this->db->where('id_algoprog', $id);
        $this->db->update('lab_algoprog', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data berdasarkan id_user
    public function delete($namabarang_algoprog)
    {
        $this->db->where('namabarang_algoprog', $namabarang_algoprog);
        $this->db->delete('lab_algoprog'); // Untuk mengeksekusi perintah delete data
    }
}
