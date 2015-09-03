<div class="container">
	<br/>
	<h3>Pendaftaran Berhasil</h3>
	<br/>
	<div class="notice marker-on-bottom fg-white">
        <div class="">Anda sudah terdaftar, API KEY akan didapatkan setelah permintaan Anda disetujui oleh Admin. Silahkan login untuk melihat API KEY Anda.</div>
    </div>
	<table class="table">
		<tbody>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo element('nama', $user); ?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><?php echo element('username', $user); ?></td>
				</tr>
				<tr>
					<td>No. Telepon</td>
					<td>:</td>
					<td><?php echo element('no_telp', $user); ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><?php echo element('email', $user); ?></td>
				</tr>
			<?php foreach ($detail_app->result() as $app) { ?>
				<tr>
					<td>Aplikasi</td>
					<td>:</td>
					<td><?php echo $app->nama_aplikasi; ?></td>
				</tr>
				<!--<tr>
					<td>Api Key</td>
					<td>:</td>
					<td><?php echo $app->api_key; ?></td>
				</tr>-->
			<?php } ?>
			
		</tbody>
	</table>
	<br/>
	<br/>
</div>