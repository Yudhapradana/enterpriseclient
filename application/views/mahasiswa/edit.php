<?php echo form_open('mahasiswa/edit'); ?>
<?php echo form_hidden('nim',$mahasiswa[0]->nim); ?>

<table>
	<tr><td>NIM</td><td><?php echo form_input('',$mahasiswa[0]->nim,"disabled");?></td></tr>
	<tr><td>NAMA</td><td><?php echo form_input('nama',$mahasiswa[0]->nama);?></td></tr>
	<tr><td>JURUSAN</td><td>
		<select name="jurusan">
			<option>-- Pilih Jurusan --</option>
			<?php 
				$connection = mysqli_connect("localhost", "root", "") or die(mysqli_error());
				mysqli_select_db($connection, "akademik") or die(mysqli_error());
				$sql = mysqli_query($connection,'SELECT * FROM jurusan ORDER BY id_jurusan ASC;');
			?>
			<?php 
			if (mysqli_num_rows($sql) !=0) {?>
				<?php 
				while ($row = mysqli_fetch_array($sql)) { 
					?>
					<option value="<?php echo $row['id_jurusan'] ?>">
						<?php echo $row['nama_jurusan'] ?>
						
					</option>
			<?php } ?>
			<?php } ?>
		</select>
	</td></tr>
	<tr><td>ALAMAT</td><td><?php echo form_input('alamat',$mahasiswa[0]->alamat);?></td></tr>
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?>
		<?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>

<?php 
echo form_close();?>