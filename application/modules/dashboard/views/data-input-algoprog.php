<!-- FORM NAMA MULAI -->
<div class="form-group">
    <label for="namabarang_algoprog">
        Nama Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="namabarang_algoprog" type="text">
    <?php echo $this->input->post('namabarang_algoprog'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('namabarang_algoprog'); ?></span>
</div>
<!-- FORM NAMA BUYAR -->
<!-- FORM jumlah barang MULAI -->
<div class="form-group">
    <label for="jumlahbarang_algoprog">
        Jumlah Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="jumlahbarang_algoprog" type="text">
    <?php echo $this->input->post('jumlahbarang_algoprog'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('jumlahbarang_algoprog'); ?></span>
</div>
<!-- FORM jumlah barang BUYAR -->

<!-- FORM satuan barang MULAI -->
<div class="form-group">
    <label for="satuanbarang_algoprog">
        Satuan Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="satuanbarang_algoprog" type="text">
    <?php echo $this->input->post('satuanbarang_algoprog'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('satuanbarang_algoprog'); ?></span>
</div>
<!-- FORM satuan barang BUYAR -->

<!-- FORM TANGGAL update MULAI -->
<div class="form-group">
    <label for="tanggalupdate_algoprog">
        Tanggal Update
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="tanggalupdate_algoprog" type="date">
    <?php echo $this->input->post('tanggalupdate_algoprog'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('tanggalupdate_algoprog'); ?></span>
</div>
<!-- FORM TANGGAL update BUYAR -->
<!-- FORM kondisi barang MULAI -->
<div class="form-group">
    <label for="kondisi_algoprog">
        Kondisi Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="kondisi_algoprog" type="text">
    <?php echo $this->input->post('kondisi_algoprog'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('kondisi_algoprog'); ?></span>
</div>
<!-- FORM kondisi barang BUYAR -->
<div class="border-top">
    <div class="card-body">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
        <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
    </div>
</div>