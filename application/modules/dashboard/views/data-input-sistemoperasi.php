<!-- FORM NAMA MULAI -->
<div class="form-group">
    <label for="namabarang_sistemoperasi">
        Nama Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="namabarang_sistemoperasi" type="text">
    <?php echo $this->input->post('namabarang_sistemoperasi'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('namabarang_sistemoperasi'); ?></span>
</div>
<!-- FORM NAMA BUYAR -->
<!-- FORM jumlah barang MULAI -->
<div class="form-group">
    <label for="jumlahbarang_sistemoperasi">
        Jumlah Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="jumlahbarang_sistemoperasi" type="text">
    <?php echo $this->input->post('jumlahbarang_sistemoperasi'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('jumlahbarang_sistemoperasi'); ?></span>
</div>
<!-- FORM jumlah barang BUYAR -->

<!-- FORM satuan barang MULAI -->
<div class="form-group">
    <label for="satuanbarang_sistemoperasi">
        Satuan Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="satuanbarang_sistemoperasi" type="text">
    <?php echo $this->input->post('satuanbarang_sistemoperasi'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('satuanbarang_sistemoperasi'); ?></span>
</div>
<!-- FORM satuan barang BUYAR -->

<!-- FORM TANGGAL update MULAI -->
<div class="form-group">
    <label for="tanggalupdate_sistemoperasi">
        Tanggal Update
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="tanggalupdate_sistemoperasi" type="date">
    <?php echo $this->input->post('tanggalupdate_sistemoperasi'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('tanggalupdate_sistemoperasi'); ?></span>
</div>
<!-- FORM TANGGAL update BUYAR -->
<!-- FORM kondisi barang MULAI -->
<div class="form-group">
    <label for="kondisi_sistemoperasi">
        Kondisi Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="kondisi_sistemoperasi" type="text">
    <?php echo $this->input->post('kondisi_sistemoperasi'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('kondisi_sistemoperasi'); ?></span>
</div>
<!-- FORM kondisi barang BUYAR -->
<div class="border-top">
    <div class="card-body">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
        <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
    </div>
</div>