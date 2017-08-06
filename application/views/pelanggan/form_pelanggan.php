<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">

<div class="col-md-50">  
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Form Data Pelanggan</h3>
    </div>
  <!-- /.box-header -->
  <!-- form start -->
      <form class="form-horizontal" method="post" action="<?php echo base_url();?>pelanggan/simpan">
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Pelanggan</label>
              <div class="col-sm-3">
                <input type="text" name="pelanggan" id="pelanggan" class="form-control"  placeholder="silahkan isi nama pelanggan">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-3">
                <textarea name="alamat" id="alamat" class="form-control"  placeholder="silahkan isi alamat"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Pilih Opsi</label>
              <div class="col-sm-3">
                <select id="form_selector" name="nama_opsi" class="form-control">
                  <option value="Paketan">Kiloan/Kg</option>
                  <option value="satuan">Satuan/Pcs</option>
                  
                </select>
                <div id="result"></div>
              </div>
            </div>

            <div class="form-group" id="hide" style="display:none">
              <label class="col-sm-2 control-label">Jumlah Barang</label>
              <div class="col-sm-2">
                <input type="text" name="jml_qty" id="qty" class="form-control"  placeholder="silahkan isi jumlah">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Barang</label>
              <div class="col-sm-3">
                <input type="text" name="jml_barang" class="form-control testing" placeholder="silahkan isi barang">
              </div>
            </div> 

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Terima</label>
              <div class="col-sm-3">
                <input type="text" name="tgl_terima" id="tanggal" class="form-control" data-date-format="dd/mm/yyyy" placeholder="silahkan isi tanggal terima">
              </div>
            </div>

            <div class="form-group">

              <label class="col-sm-2 control-label">Tanggal Keluar</label>
              <div class="col-sm-3">
                <input type="text" name="tgl_keluar" id="tgl_keluar" class="form-control" data-date-format="dd/mm/yyyy" placeholder="silahkan isi tanggal keluar">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Harga</label>
              <div class="col-sm-3">
                <input type="text" name="harga" id="harga" type="search" class="form-control" placeholder="silahkan isi harga" readonly >
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="modal-footer">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
              <button type="" class="btn btn-warning pull-right"><a href="<?php echo base_url('Pelanggan');?>" ><i class="fa fa-repeat"></i> Kembali</a></button>
            </div>
          </div>

        <!-- /.box-footer -->
      </form>
  </div>
</div>

<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#form_selector').change(function(){
       $(this).val() == "satuan" ? $('#hide').show() : $('#hide').hide();
     });
  });
</script>

<script type="text/javascript" charset="utf-8" async defer>
  $('#form_selector').on('change', function(){
    var selector = $("#form_selector");
    var selected = selector.val();
    $.ajax({
      url : "<?php echo base_url('pelanggan/select') ?>",
      type: "POST",
      data: {vals:selected},
      async: false,
      success: function(response){

      }
    });

  });
  //$(document).ready(function(){
    //  $('#opsi').change(function(){
      //    $(this).val() == "Satuan" ? $('#hide').show() : $('#hide').hide();
      //});
    //});
</script>

<script type='text/javascript'>
  var site = "<?php echo base_url();?>";
  $(function(){
      $('.testing').autocomplete({

          // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
          serviceUrl: site+'/pelanggan/search',
          // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
          onSelect: function (suggestion) {
            $('#nama_barang').val(''+suggestion.nama_barang); // membuat id 'jml_barang' untuk ditampilkan
            //$('#nama_barang').val(''+suggestion.nama_barang);
            $('#harga').val(''+suggestion.harga); // membuat id 'harga' untuk ditampilkan
          }
      });
  });
</script>

<script type="text/javascript">
    //Date picker
    $('#tanggal').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      startDate: '-3d'
    });
</script>

<script type="text/javascript">
    //Date picker
    $('#tgl_keluar').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      startDate: '-3d'
    });
</script>
