<div class="container">
	<br/>
    <h3>Aplikasi</h3>
    <br/>
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
                <th>NAMA APLIKASI</th>
                <th>API KEY</th>
                <?php if($this->session->userdata('simpeg_api_user')){ ?>
                <th>MODIFIKASI</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
        	<?php
        		$i = 1;
        		foreach ($all_app->result() as $app) { 
        	?>
        		<tr>
        			<td><?php echo $i++; ?></td>
        			<td>
        				<?php echo $app->nama_aplikasi; ?>
        				<input type="hidden" id="nama_<?php echo $app->id_aplikasi; ?>" value="<?php echo $app->nama_aplikasi; ?>"/>
        			</td>
        			<td>
        				<?php echo $app->api_key; ?>
        				<input type="hidden" id="key_<?php echo $app->id_aplikasi; ?>" value="<?php echo $app->api_key; ?>"/>
        			</td>
              <?php if($this->session->userdata('simpeg_api_user')){ ?>
        			<td>
        				<div class="place-right">
                            <button class="edit button info icon-pencil" id="edit_<?php echo $app->id_aplikasi; ?>"><font style="font-family:calibri"> Edit</font></button>
                            <button class="delete button danger icon-remove" id="delete_<?php echo $app->id_aplikasi; ?>"><font style="font-family:calibri"> Hapus</font></button>
                        </div>
        			</td>
              <?php } ?>
        		</tr>
        	<?php
        		}
        	?>
        </tbody>
        <tfoot>
        </tfoot>
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
      title: 'Form Aplikasi',
      content: '',
      width:500,
      padding: 10,
      onShow: function(_dialog){
      var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Aplikasi_admin/tambah_aplikasi">' +
                    '<label>Nama Aplikasi</label>' +
                    '<div class="input-control text" id="nama_app"><input type="text" name="nama_app"></div>' +
                    '<label>Api Key</label>'+
                    '<div class="input-control text"><input type="text" name="api_key"></div>' +
                    '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                    '<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
                    '</form>';
                    $.Dialog.title("Form Aplikasi");
                    $.Dialog.content(content);
                                }
                            });
                        });  

	$(".edit").on('click', function(){
          $.Dialog({
          overlay: true,
          shadow: true,
          flat: true,
          title: 'Form Method API',
          content: '',
          width:500,
          padding: 10,
          onShow: function(_dialog){
          var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Aplikasi_admin/update_aplikasi">' +
                        '<input type="text" id="id_edit" name="id_edit" hidden>' +
                        '<label>Nama Aplikasi</label>' +
	                    '<div class="input-control text" id="nama_app"><input type="text" name="nama_app" id="nama_edit"></div>' +
	                    '<label>Api Key</label>'+
	                    '<div class="input-control text"><input type="text" name="api_key" id="key_edit"></div>' +
                        '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                        '<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
                        '</form>';
                        $.Dialog.title("Form Method API");
                        $.Dialog.content(content);
                     }
                });
                var id = this.id.substr(5);
                $("#id_edit").val(id);
                $("#nama_edit").val($("#nama_"+ id).val() );
                $("#key_edit").val($("#key_"+ id).val() );
             });  

    $(".delete").on('click', function(){
          $.Dialog({
          overlay: true,
          shadow: true,
          flat: true,
          title: 'Form Method API',
          content: '',
          width:500,
          padding: 10,
          onShow: function(_dialog){
          var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Aplikasi_admin/hapus_aplikasi">' +
                        '<input type="text" id="id_hapus" name="id_hapus" hidden>' +
                        '<label>Anda akan menghapus semua data ini di tabel lain. Apakah anda yakin akan menghapus data ini?</label><br/><br/>'+
                        '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                        '<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
                        '</form>';
                        $.Dialog.title("Form Method API");
                        $.Dialog.content(content);
                     }
                });
                var id = this.id.substr(7);
                $("#id_hapus").val(id);
             });   
</script>