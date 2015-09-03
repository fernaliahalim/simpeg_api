<div class="container">
	<br/>
	<h3>Selamat Datang <?php echo $this->session->userdata('simpeg_api_uname') ?>!</h3>
	<br/>
	<?php if(!($error == '')){ ?>
		<div class="notice marker-on-bottom bg-darkRed fg-white">
            <div class="">Maaf, <?php echo $error; ?></div>
        </div>
	<?php } ?>
	<legend>Profil Anda</legend>
	<table class="table">
		<tbody>
			<?php
				foreach ($user->result() as $user_db) {
			?>
			<tr>
				<td><h5>Informasi Umum</h5></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $user_db->nama; ?>
					<input type="hidden" id="nama_<?php echo $user_db->id_user; ?>" value="<?php echo $user_db->nama; ?>"/>
				</td>
				<td>
					<div class="place-right">
						<button class="edit_nama button info icon-pencil" id="edit_<?php echo $user_db->id_user; ?>"><font style="font-family:calibri"> Edit</font></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<?php echo $user_db->username; ?>
					<input type="hidden" id="username_<?php echo $user_db->id_user; ?>" value="<?php echo $user_db->username; ?>"/>
				</td>
				<td>
					<div class="place-right">
						<button class="edit_username button info icon-pencil" id="edit_<?php echo $user_db->id_user; ?>"><font style="font-family:calibri"> Edit</font></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="password" value="<?php echo $user_db->password; ?>" readonly style="border:none" />
					<input type="hidden" id="password_<?php echo $user_db->id_user; ?>" value="<?php echo $user_db->password; ?>"/>
				</td>
				<td>
					<div class="place-right">
						<button class="edit_password button info icon-pencil" id="edit_<?php echo $user_db->id_user; ?>"><font style="font-family:calibri"> Edit</font></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<?php echo $user_db->email; ?>
					<input type="hidden" id="email_<?php echo $user_db->id_user; ?>" value="<?php echo $user_db->email; ?>"/>
				</td>
				<td>
					<div class="place-right">
						<button class="edit_email button info icon-pencil" id="edit_<?php echo $user_db->id_user; ?>"><font style="font-family:calibri"> Edit</font></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td>:</td>
				<td>
					<?php echo $user_db->no_telp; ?>
					<input type="hidden" id="telp_<?php echo $user_db->id_user; ?>" value="<?php echo $user_db->no_telp; ?>"/>
				</td>
				<td>
					<div class="place-right">
						<button class="edit_telp button info icon-pencil" id="edit_<?php echo $user_db->id_user; ?>"><font style="font-family:calibri"> Edit</font></button>
					</div>
				</td>
			</tr>
			<?php
				}
			?>
			<tr>
				<td><h5>Informasi Aplikasi</h5></td>
				<td></td>
				<td></td>
				<td>
					<!--<?php if($user_app->num_rows < $row_app){ ?>
					<div class="place-right">
						<button class="tambah_app button info icon-plus-2" id="edit_<?php echo $user_db->id_user; ?>"><font style="font-family:calibri"> Tambah</font></button>
					</div>
					<?php } ?>-->
				</td>
			</tr>
			<tr>
				<td>Aplikasi</td>
				<td>:</td>
				<td>
				<?php //for($i=0; $i<$user_app->num_rows(); $i++){ ?>
					<?php //echo $app[$i] . "<br/>"; ?>
				<?php //} ?>
				<?php
					if($user_app->num_rows > 0){
						echo $app[0];
					}
					else{
				?>
					Permohonan API KEY Anda belum di konfirmasi oleh admin.
				<?php
					}
				?>
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Api Key</td>
				<td>:</td>
				<td>
				<?php //for($i=0; $i<$user_app->num_rows(); $i++){ ?>
					<?php //echo $app_key[$i] . "<br/>"; ?>
				<?php //} ?>
				<?php
					if($user_app->num_rows > 0){
						echo $app_key[0];
					}
					else{
				?>
					Permohonan API KEY Anda belum di konfirmasi oleh admin.
				<?php
					}
				?>
				</td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<br/>
	<br/>
</div>

<script>   
	$(".edit_nama").on('click', function(){
	      $.Dialog({
	      overlay: true,
	      shadow: true,
	      flat: true,
	      title: 'Form Profil',
	      content: '',
		  width:500,
	      padding: 10,
	      onShow: function(_dialog){
	      var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Profil/ubah_nama">' +
	                    '<input type="text" id="id_edit" name="id_user_edit" hidden>' +
	                    '<label>Nama</label>'+
	                    '<div class="input-control text"><input type="text" id="nama_edit" name="nama_edit" required><button class="btn-clear" tabindex="-1" type="button"></button></div>' +
	                    '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                    '<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
	                    '</form>';
						$.Dialog.title("Form Profil");
	                    $.Dialog.content(content);
	                 }
				});
				var id = this.id.substr(5);
				$("#id_edit").val(id);
				$("#nama_edit").val($("#nama_"+ id).val() );
	         });      		

	$(".edit_username").on('click', function(){
	      $.Dialog({
	      overlay: true,
	      shadow: true,
	      flat: true,
	      title: 'Form Profil',
	      content: '',
		  width:500,
	      padding: 10,
	      onShow: function(_dialog){
	      var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Profil/ubah_username">' +
	                    '<input type="text" id="id_edit" name="id_user_edit" hidden>' +
	                    '<label>Username</label>'+
	                    '<div class="input-control text"><input type="text" id="username_edit" name="username_edit" required><button class="btn-clear" tabindex="-1" type="button"></button></div>' +
	                    '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                    	'<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
	                    '</form>';
						$.Dialog.title("Form Profil");
	                    $.Dialog.content(content);
	                 }
				});
				var id = this.id.substr(5);
				$("#id_edit").val(id);
				$("#username_edit").val($("#username_"+ id).val() );
	         });      						             

	$(".edit_password").on('click', function(){
	      $.Dialog({
	      overlay: true,
	      shadow: true,
	      flat: true,
	      title: 'Form Profil',
	      content: '',
		  width:500,
	      padding: 10,
	      onShow: function(_dialog){
	      var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Profil/ubah_password">' +
	                    '<input type="text" id="id_edit" name="id_user_edit" hidden>' +
	                    '<label>Password</label>'+
	                    '<div class="input-control password"><input type="password" id="password_edit1" name="password_edit1" required><button class="btn-reveal" tabindex="-1" type="button"></button></div>' +
	                    '<label>Ulang Password</label>'+
	                    '<div class="input-control password"><input type="password" id="password_edit2" name="password_edit2" required><button class="btn-reveal" tabindex="-1" type="button"></button></div>' +
	                    '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                    	'<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
	                    '</form>';
						$.Dialog.title("Form Profil");
	                    $.Dialog.content(content);
	                 }
				});
				var id = this.id.substr(5);
				$("#id_edit").val(id);
	         });   
	
	$(".edit_email").on('click', function(){
	      $.Dialog({
	      overlay: true,
	      shadow: true,
	      flat: true,
	      title: 'Form Profil',
	      content: '',
		  width:500,
	      padding: 10,
	      onShow: function(_dialog){
	      var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Profil/ubah_email">' +
	                    '<input type="text" id="id_edit" name="id_user_edit" hidden>' +
	                    '<label>Email</label>'+
	                    '<div class="input-control text"><input type="email" id="email_edit" name="email_edit" required></div>' +
	                    '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                    	'<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
	                    '</form>';
						$.Dialog.title("Form Profil");
	                    $.Dialog.content(content);
	                 }
				});
				var id = this.id.substr(5);
				$("#id_edit").val(id);
				$("#email_edit").val($("#email_"+ id).val() );
	         });

	$(".edit_telp").on('click', function(){
	      $.Dialog({
	      overlay: true,
	      shadow: true,
	      flat: true,
	      title: 'Form Profil',
	      content: '',
		  width:500,
	      padding: 10,
	      onShow: function(_dialog){
	      var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Profil/ubah_telp">' +
	                    '<input type="text" id="id_edit" name="id_user_edit" hidden>' +
	                    '<label>No. Telepon</label>'+
	                    '<div class="input-control text"><input type="text" id="telp_edit" name="telp_edit" required></div>' +
	                    '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                    	'<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
	                    '</form>';
						$.Dialog.title("Form Profil");
	                    $.Dialog.content(content);
	                 }
				});
				var id = this.id.substr(5);
				$("#id_edit").val(id);
				$("#telp_edit").val($("#telp_"+ id).val() );
	         });

	$(".tambah_app").on('click', function(){
	      $.Dialog({
	      overlay: true,
	      shadow: true,
	      flat: true,
	      title: 'Form Profil',
	      content: '',
		  width:500,
	      padding: 10,
	      onShow: function(_dialog){
	      var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Profil/tambah_app">' +
	                    '<input type="text" id="id_edit" name="id_user_edit" hidden>' +
	                    '<label>Aplikasi</label>'+
	                    '<div class="input-control select"><select name="jenis_app"><?php foreach ($all_apps->result() as $app) { ?><option value="<?php echo $app->id_aplikasi; ?>"><?php echo $app->nama_aplikasi; ?></option><?php } ?></select></div>' +
	                    '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                    	'<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
	                    '</form>';
						$.Dialog.title("Form Profil");
	                    $.Dialog.content(content);
	                 }
				});
	         });
</script>

<script type="text/javascript">
	$(document).ready(function(e) {
		$("#password_edit2").keyup(function(){
			var pw1 = $("#password_edit1").val();
			var pw2 = $("#password_edit2").val();

			if(pw1 == pw2){
				$("#lbl_status").val("Sip");
			}
			else{
				$("#lbl_status").val("Salah");
			}
		});
	});
</script>