
                                    <!-- FORM NAMA MULAI -->
                                        <div class="form-group">
                                            <label for="namabarang_itsupport">
                                                Nama Barang
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="namabarang_itsupport" type="text">
                                                <?php echo $this->input->post('namabarang_itsupport'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('namabarang_itsupport');?></span>
                                        </div>
                                    <!-- FORM NAMA BUYAR -->
                                    <!-- FORM jumlah barang MULAI -->
                                        <div class="form-group">
                                            <label for="jumlahbarang_itsupport">
                                               Jumlah Barang
                                                <span class="text-danger">*</span>
                                                </label>
                                            <input class="form-control" name="jumlahbarang_itsupport" type="text">
                                                <?php echo $this->input->post('jumlahbarang_itsupport'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('jumlahbarang_itsupport');?></span>
                                        </div>
                                    <!-- FORM jumlah barang BUYAR -->

                                     <!-- FORM satuan barang MULAI -->
                                        <div class="form-group">
                                            <label for="satuanbarang_itsupport">
                                               Satuan Barang
                                                <span class="text-danger">*</span>
                                                </label>
                                            <input class="form-control" name="satuanbarang_itsupport" type="text">
                                                <?php echo $this->input->post('satuanbarang_itsupport'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('satuanbarang_itsupport');?></span>
                                        </div>
                                    <!-- FORM satuan barang BUYAR -->
                       
                                    <!-- FORM TANGGAL update MULAI -->
                                        <div class="form-group">
                                            <label for="tanggalupdate_itsupport">
                                                Tanggal Update 
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <input class="form-control" name="tanggalupdate_itsupport" type="date">
                                                    <?php echo $this->input->post('tanggalupdate_itsupport'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('tanggalupdate_itsupport');?></span>
                                        </div>
                                    <!-- FORM TANGGAL update BUYAR -->
                                    <!-- FORM status barang MULAI -->
                                        <div class="form-group">
                                            <label for="statusbarang_itsupport">
                                                Status Barang
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <input class="form-control" name="statusbarang_itsupport" type="text">
                                                    <?php echo $this->input->post('statusbarang_itsupport'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('statusbarang_itsupport');?></span>
                                        </div>
                                    <!-- FORM status barang BUYAR -->
                                    <div class="border-top">
                                            <div class="card-body">
                                                <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
                                                    <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
                                            </div>
                                        </div>
                                   