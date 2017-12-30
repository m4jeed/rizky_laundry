
<div class="col-md-50">  
  <div class="box box-danger">
<div class="box-header with-border">
    <h3 class="box-title">Form Tambah Barang</h3>
  </div>
  <!-- <?php //echo validation_errors(); ?> -->
  <form class="form-horizontal" method="post" action="<?php echo base_url();?>barang/simpan">
      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2 control-label">Kode</label>
          <div class="col-sm-1">
            <input type="text" name="kode" id="kode" class="form-control"  placeholder="kode" >
          </div>
          <div class="col-sm-6"><?php echo form_error('kode'); ?></div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Barang</label>
          <div class="col-sm-3">
            <input type="text" name="nama_barang" id="nama_barang" class="form-control"  placeholder="silahkan isi nama barang">
          </div>
          <div class="col-sm-6"><?php echo form_error('nama_barang'); ?></div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Kategori</label>
          <div class="col-sm-3">
            <select id="kategori" name="kategori" class="form-control">
              <option value=""></option>
              <?php
              foreach ($kat_brg as $k) {
                echo "<option value='$k->id_kategori'>$k->nama_kategori</option>";
              }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Harga</label>
          <div class="col-sm-3">
            <input type="text" name="harga" id="harga" class="form-control" placeholder="silahkan isi harga">
          </div><div class="col-sm-6"><?php echo form_error('harga'); ?></div>
        </div>

        <div class="modal-footer">
          <div class="col-sm-offset-2 col-sm-10">
            <!-- <a href="<?php //echo base_url('Barang');?>" class="btn btn-warning pull-right"><i class="fa fa-repeat"></i> Batal</a> -->
            <button type="submit" id="submit" data-action="<?php echo base_url();?>barang/valid_ajax" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <button type="" class="btn btn-warning pull-right"><a href="<?php echo base_url('Barang');?>" style="color:white;"><i class="fa fa-repeat"></i> Kembali</a></button>
            
          </div>
        </div>
      </div>
  </form>
  </div>
  </div>
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(#submit).click (function() {
    var kode = $('#kode').val();

    $.ajax({
      url : $(this).data('action'),
      type : 'post',
      data :{
        kode:kode
      },
      success: function(data)
      {
        alert (data);
      },
      error function(){
        alert ('data ada yang salah')
      }
    })
  });
</script>
