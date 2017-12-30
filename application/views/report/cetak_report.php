<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/admin.jpeg');?>">
<head>
  <style>
    table{
        border-collapse: collapse;
        width: 100%;
        margin: 0 auto;
    }
    table th{
        border:1px solid #000;
        padding: 3px;
        font-weight: bold;
        text-align: center;
    }
    table td{
        border:1px solid #000;
        padding: 3px;
        vertical-align: top;
    }
  </style>
</style>
<body>
  <p style="text-align: center">Report Pelanggan</p>
  <table>
    <tr>
      <th width="5px">No</th>
      <th width="5px">Pelanggan</th>
      <th width="5px">Alamat</th>
      <th width="5px">Tanggal Terima</th> 
      <th width="5px">Tanggal Keluar</th>
      <th width="5px">Jumlah Barang</th>
      <th width="5px">harga</th>
      <!-- <th width="5px">Harga Total</th> -->
    </tr>
    <tr>
      <?php 
      $no=1;
        foreach ($datacetak as $c) {
      ?>
      <td><center><?php echo $no++ ?></center></td>
      <td><?php echo $c->pelanggan ?></td>
      <td><?php echo $c->alamat ?></td>
      <td><?php echo $c->tgl_terima ?></td>
      <td><?php echo $c->tgl_keluar ?></td>
      <td><?php echo $c->jml_barang ?></td>
      <td><?php echo $c->harga ?></td>
      <!-- <td><?php echo $c->harga_total ?></td> -->
      <!-- <td>
        <center><a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        <a class="btn btn-danger" href="<?php //echo base_url(); ?>Pelanggan/hapus/<?php //echo $p->id_pelanggan;?>" onclick="return confirm('Anda yakin akan menghapus data ini.');"><i class="fa fa-trash"></i></a></center> 
      </td> -->

    </tr>
      <?php } ?>
    </table>
</body>

<!-- $mpdf = new mPDF();
$drawPerPage = 50;
$html = getStyle();
$html .= '<body><div class="body">';
$html .= getHtml($result, $title);
$html .= '</div></body>';
$mdf->WriteHTML($html);
$mpdf->Output();

function getHTML($result, $title){
  $html = '<div>content</div>';
  return $html;
} -->

