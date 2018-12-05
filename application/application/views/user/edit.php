<legend>Profile User</legend>
<?php echo form_open('client/edit'); ?>
<?php echo form_hidden('nis',$anggota[0]->nis); ?>

<table>
    <tr><td>NIM</td><td><?php echo form_input('',$anggota[0]->nis,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama',$anggota[0]->nama);?></td></tr>
    <tr><td>Tempat Tanggal Lahir</td><td><?php echo form_input('tgl',$anggota[0]->ttl);?></td></tr>

    <tr><td>Kelas</td><td><?php echo form_input('kelas',$anggota[0]->kelas);?></td></tr>
    <!-- form input parameternya adalah name dan value -->
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('client','Kembali');?></td></tr>
</table>
<?php 
echo form_close();?>