<div class="container">
	<br/>
	<h3>Api Akses</h3>
	<br/>
  <?php if(!($error == '')){ ?>
    <div class="notice marker-on-bottom bg-darkRed fg-white">
            <div class="">Maaf, <?php echo $error; ?></div>
        </div>
  <?php } ?>
	<table class="table striped" id="table">
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th></th>
        <?php if($this->session->userdata('simpeg_api_user')){ ?>
				<th>
            <div class="place-right">
              <button id="tambah" class="button info icon-plus-2"><font style="font-family:calibri">&nbsp;Tambah</font></button>
            </div>
         </th>
         <?php } ?>
			</tr>
			<tr>
				<th>NO.</th>
				<th>APLIKASI</th>
				<th>METHOD</th>
        <?php if($this->session->userdata('simpeg_api_user')){ ?>
				<th>MODIFIKASI</th>
        <?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php
				//for ($j=0; $j<$api_akses->num_rows ; $j++) { 
				$j=0;
				foreach ($api_akses->result() as $app) {
			?>
				<tr>
					<td><?php echo $j+1; ?></td>
					<td><?php echo $nama_app[$j]; ?></td>
					<td><?php echo $nama_method[$j]; ?></td>
          <?php if($this->session->userdata('simpeg_api_user')){ ?>
					<td>
        		<div class="place-right">
                <button class="delete button danger icon-remove" id="delete_<?php echo $app->id_api_akses; ?>"><font style="font-family:calibri"> Hapus</font></button>
            </div>
        	</td>
          <?php } ?>
				</tr>
			<?php
					$j++;
				}
			?>
		</tbody>
	</table>
	<br/>
	<br/>
</div>

<script type="text/javascript">
    $(document).ready(function() {
       $('#table').dataTable();
    });

    $("#tambah").on('click', function(){
      $.Dialog({
      overlay: true,
      shadow: true,
      flat: true,
      title: 'Form API Akses',
      content: '',
      width:500,
      padding: 10,
      onShow: function(_dialog){
      var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Api_akses_admin/tambah_api_akses">' +
                    '<label>Aplikasi</label>' +
                    '<div class="input-control select"><select name="jenis_app"><?php foreach($all_app->result() as $app_db){ ?><option value="<?php echo $app_db->id_aplikasi; ?>"><?php echo $app_db->nama_aplikasi; ?></option><?php } ?></select></div>' +
                    '<label>Method</label>'+
                    '<div class="input-control select"><select name="jenis_method"><?php foreach($all_method->result() as $method_db){ ?><option value="<?php echo $method_db->id_method; ?>"><?php echo $method_db->nama_method; ?></option><?php } ?></select></div>' +
                    '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                    '<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
                    '</form>';
                    $.Dialog.title("Form API Akses");
                    $.Dialog.content(content);
                                }
                            });
                        }); 

    $(".delete").on('click', function(){
          $.Dialog({
          overlay: true,
          shadow: true,
          flat: true,
          title: 'Form API Akses',
          content: '',
          width:500,
          padding: 10,
          onShow: function(_dialog){
          var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Api_akses_admin/hapus_api_akses">' +
                        '<input type="text" id="id_hapus" name="id_hapus" hidden>' +
                        '<label>Apakah anda yakin menghapus data ini?</label><br/><br/>'+
                        '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                        '<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
                        '</form>';
                        $.Dialog.title("Form API Akses");
                        $.Dialog.content(content);
                     }
                });
                var id = this.id.substr(7);
                $("#id_hapus").val(id);
             });  
</script>