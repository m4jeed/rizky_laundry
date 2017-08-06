  <div class="box box-success">
      <div class="box-header">
      <h3 class="box-title">Data Barang Laundry</h3>
          <a href="<?php echo base_url();?>barang/tambah_barang" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah</a> 
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
    	      <tr>
    	        <th width="2%">No</th>
              <th width="2%">Kode Barang</th>
    	        <th>Nama Barang</th>
    	        <th>Kategori</th>
              <th>Harga</th>
    	        <th><center>Aksi</center></th>
    	      </tr>
          </thead>
          <tbody>
          <tr>
          <?php 
          $no=1;
          	foreach ($barang->result() as $b) {
          ?>
          <td><center><?php echo $no++ ?></center></td>
          <td><?php echo $b->kode_barang ?></td>
          <td><?php echo $b->nama_barang ?></td>
          <td><?php echo $b->nama_kategori ?></td>
          <td><?php echo $b->harga ?></td>
          <td>
          <!-- <a href="<?php //echo base_url(); ?>buku/buku_edit?id=<?php //echo $buku->id; ?>">Edit</a> --> 
          	<center><a href="<?php echo base_url();?>barang/edit?id_barang=<?php echo $b->id_barang; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
    				<a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a></center>
    		  </td>

          </tr>
          <?php } ?>
    			</tbody>
    		</table>
    	</div>
    </div>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>