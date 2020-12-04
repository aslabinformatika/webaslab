<!-- FORM NAMA MULAI -->
<div class="form-group">
    <label for="namabarang_jarkom">
        Nama Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="namabarang_jarkom" type="text">
    <?php echo $this->input->post('namabarang_jarkom'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('namabarang_jarkom'); ?></span>
</div>
<!-- FORM NAMA BUYAR -->
<!-- FORM jumlah barang MULAI -->
<div class="form-group">
    <label for="jumlahbarang_jarkom">
        Jumlah Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="jumlahbarang_jarkom" type="text">
    <?php echo $this->input->post('jumlahbarang_jarkom'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('jumlahbarang_jarkom'); ?></span>
</div>
<!-- FORM jumlah barang BUYAR -->

<!-- FORM satuan barang MULAI -->
<div class="form-group">
    <label for="satuanbarang_jarkom">
        Satuan Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="satuanbarang_jarkom" type="text">
    <?php echo $this->input->post('satuanbarang_jarkom'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('satuanbarang_jarkom'); ?></span>
</div>
<!-- FORM satuan barang BUYAR -->

<!-- FORM TANGGAL update MULAI -->
<div class="form-group">
    <label for="tanggalupdate_jarkom">
        Tanggal Update
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="tanggalupdate_jarkom" type="date">
    <?php echo $this->input->post('tanggalupdate_jarkom'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('tanggalupdate_jarkom'); ?></span>
</div>
<!-- FORM TANGGAL update BUYAR -->
<!-- FORM kondisi barang MULAI -->
<div class="form-group">
    <label for="kondisi_jarkom">
        Kondisi Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="kondisi_jarkom" type="text">
    <?php echo $this->input->post('kondisi_jarkom'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('kondisi_jarkom'); ?></span>
</div>
<!-- FORM kondisi barang BUYAR -->
<div class="border-top">
    <div class="card-body">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
        <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
    </div>
</div>