<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" /> 
	      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/datatables/dataTables.min.css" /> 

	      <script src="//code.jquery.com/jquery.js"></script> 
	      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	      <script src="<?php echo base_url()?>assets/js/plugins/datatables/dataTables.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/diagram.css" /> 
    <script src="<?php echo base_url()?>assets/js/diagram.js"></script> 


	</head>

	<script type="text/javascript">
    $(document).ready(function() {
    $('#peminjaman').DataTable();
} );
</script>

	

	<body>

		<h2>Data Peminjaman :</h2>	
		<table class="table table-hover" id="peminjaman">
			<thead>
				<tr>
					<th>Id Transaksi</th>
					<th>NIS</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Kembali</th>
					<th>Id Petugas</th>
                    <th>Denda</th>
					<th></th>
				</tr>

			</thead>
			<tbody>
			<?php foreach ($peminjaman as $key) {?>
				<tr>
					<td><?php echo $key->id_transaksi?></td>
					<td><?php echo $key->nis?></td>
					<td><?php echo $key->tanggal_pinjam?></td>
					<td><?php echo $key->tanggal_kembali?></td>
					<td><?php echo $key->status?></td>
                    <td><?php echo $key->keterangan?></td>
					<td><a href="<?php echo site_url('buku/edit_kategori/'.$key->id_transaksi);?>"><i class="glyphicon glyphicon-edit"></i></a></i></a></td>

				</tr>
			<?php } ?>	
			</tbody>
		</table>

		
	</body>
</html>
