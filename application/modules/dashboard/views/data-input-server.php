<!-- FORM NAMA MULAI -->
<div class="form-group">
    <label for="namabarang_server">
        Nama Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="namabarang_server" type="text">
    <?php echo $this->input->post('namabarang_server'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('namabarang_server'); ?></span>
</div>
<!-- FORM NAMA BUYAR -->
<!-- FORM jumlah barang MULAI -->
<div class="form-group">
    <label for="jumlahbarang_server">
        Jumlah Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="jumlahbarang_server" type="text">
    <?php echo $this->input->post('jumlahbarang_server'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('jumlahbarang_server'); ?></span>
</div>
<!-- FORM jumlah barang BUYAR -->

<!-- FORM satuan barang MULAI -->
<div class="form-group">
    <label for="satuanbarang_server">
        Satuan Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="satuanbarang_server" type="text">
    <?php echo $this->input->post('satuanbarang_server'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('satuanbarang_server'); ?></span>
</div>
<!-- FORM satuan barang BUYAR -->

<!-- FORM TANGGAL update MULAI -->
<div class="form-group">
    <label for="tanggalupdate_server">
        Tanggal Update
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="tanggalupdate_server" type="date">
    <?php echo $this->input->post('tanggalupdate_server'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('tanggalupdate_server'); ?></span>
</div>
<!-- FORM TANGGAL update BUYAR -->
<!-- FORM kondisi barang MULAI -->
<div class="form-group">
    <label for="kondisi_server">
        Kondisi Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="kondisi_server" type="text">
    <?php echo $this->input->post('kondisi_server'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('kondisi_server'); ?></span>
</div>
<!-- FORM kondisi barang BUYAR -->
<div class="border-top">
    <div class="card-body">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
        <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
    </div>
</div>