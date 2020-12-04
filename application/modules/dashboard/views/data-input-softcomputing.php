<!-- FORM NAMA MULAI -->
<div class="form-group">
    <label for="namabarang_softcomputing">
        Nama Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="namabarang_softcomputing" type="text">
    <?php echo $this->input->post('namabarang_softcomputing'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('namabarang_softcomputing'); ?></span>
</div>
<!-- FORM NAMA BUYAR -->
<!-- FORM jumlah barang MULAI -->
<div class="form-group">
    <label for="jumlahbarang_softcomputing">
        Jumlah Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="jumlahbarang_softcomputing" type="text">
    <?php echo $this->input->post('jumlahbarang_softcomputing'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('jumlahbarang_softcomputing'); ?></span>
</div>
<!-- FORM jumlah barang BUYAR -->

<!-- FORM satuan barang MULAI -->
<div class="form-group">
    <label for="satuanbarang_softcomputing">
        Satuan Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="satuanbarang_softcomputing" type="text">
    <?php echo $this->input->post('satuanbarang_softcomputing'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('satuanbarang_softcomputing'); ?></span>
</div>
<!-- FORM satuan barang BUYAR -->

<!-- FORM TANGGAL update MULAI -->
<div class="form-group">
    <label for="tanggalupdate_softcomputing">
        Tanggal Update
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="tanggalupdate_softcomputing" type="date">
    <?php echo $this->input->post('tanggalupdate_softcomputing'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('tanggalupdate_softcomputing'); ?></span>
</div>
<!-- FORM TANGGAL update BUYAR -->
<!-- FORM kondisi barang MULAI -->
<div class="form-group">
    <label for="kondisi_softcomputing">
        Kondisi Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="kondisi_softcomputing" type="text">
    <?php echo $this->input->post('kondisi_softcomputing'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('kondisi_softcomputing'); ?></span>
</div>
<!-- FORM kondisi barang BUYAR -->
<div class="border-top">
    <div class="card-body">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
        <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
    </div>
</div>