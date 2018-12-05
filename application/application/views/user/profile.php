<?php foreach ($profile as $user) {?>		

	<div class="table-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>NIS</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Tempat Tanggal Lahir</th>
					<th>Kelas</th>
					<th>Buku yang dipinjam</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $user->nis;?></td>
					<td><?php echo $user->nama;?></td>
					<td><?php echo $user->jk;?></td>
					<td><?php echo $user->ttl;?></td>
					<td><?php echo $user->kelas;?></td>
					<td><?php echo $buku[0]->judul;?></td>

					



				</tr>
			</tbody>
		</table>
	</div>
<?php } ?>