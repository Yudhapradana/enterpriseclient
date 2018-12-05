<table id="example" class="table table-striped">
<thead>
	<tr>
		<th>Kode Buku</th>
		<th>Nis Peminjam</th>
		<th>Nama Pinjam</th>
		<th>Tanggal Kembali</th>
		<th>Keterangan</th>


	</tr>
</thead>
<tbody>
	<?php foreach ($transaksi as $key => $data): ?>	

	<tr>
		<td><?php echo $data->kode_buku ?></td>
		<td><?php echo $data->nis ?></td>
		<td><?php echo $data->tanggal_pinjam ?></td>
		<td><?php echo $data->tanggal_kembali ?></td>
		<?php if ($data->status=='N'){?>
			<td><?php echo "belum Dikembalikan" ?></td>
			<?php }else{ ?>
			<td><?php echo "Tuntas" ?></td>
	<?php } ?>
</tr>
<?php endforeach ?>
</tbody>
</table>


<?php echo $username; ?>
<a href="<?php echo site_url('client/profile/'.$username)?>"> peminjaman </a>
<a href="<?php echo site_url('client/edit/')?>">profile</a>