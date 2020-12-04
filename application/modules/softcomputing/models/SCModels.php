<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SCModels extends CI_Model
{
    // Fungsi untuk menampilkan semua data
    public function view()
    {
        return $this->db->get('lab_softcomputing')->result();
    }

    // Fungsi untuk menampilkan data  berdasarkan id nya 
    public function view_by($id_softcomputing)
    {
        $this->db->where('id_softcomputing', $id_softcomputing);
        return $this->db->get('lab_softcomputing')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, id_user tidak harus divalidasi
        // Jadi id_user di validasi hanya ketika menambah data  saja
        if ($mode == "save")
        $this->form_validation->set_rules('namabarang_softcomputing', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang_softcomputing', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuanbarang_softcomputing', 'Satuan Barang', 'required');
        $this->form_validation->set_rules('tanggalupdate_softcomputing', 'Tanggal Update', 'required');
        $this->form_validation->set_rules('kondisi_softcomputing', 'Kondisi Barang', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel
    public function save()
    {
        $data = array(
            "namabarang_softcomputing" => $this->input->post('namabarang_softcomputing'),
            "jumlahbarang_softcomputing" => $this->input->post('jumlahbarang_softcomputing'),
            "satuanbarang_softcomputing" => $this->input->post('satuanbarang_softcomputing'),
            "tanggalupdate_softcomputing" => $this->input->post('tanggalupdate_softcomputing'),
            "kondisi_softcomputing" => $this->input->post('kondisi_softcomputing'),

        );

        $this->db->insert('lab_softcomputing', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data berdasarkan id_user
    public function edit($id)
    {
        // $id = $this->input->post('id_softcomputing');
        $data = array(
            "namabarang_softcomputing" => $this->input->post('namabarang_softcomputing'),
            "jumlahbarang_softcomputing" => $this->input->post('jumlahbarang_softcomputing'),
            "satuanbarang_softcomputing" => $this->input->post('satuanbarang_softcomputing'),
            "tanggalupdate_softcomputing" => $this->input->post('tanggalupdate_softcomputing'),
            "kondisi_softcomputing" => $this->input->post('kondisi_softcomputing'),

        );

        $this->db->where('id_softcomputing', $id);
        $this->db->update('lab_softcomputing', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data berdasarkan id_user
    public function delete($id_softcomputing)
    {
        $this->db->where('id_softcomputing', $id_softcomputing);
        $this->db->delete('lab_softcomputing'); // Untuk mengeksekusi perintah delete data
    }
}
