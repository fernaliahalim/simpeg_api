<div class="container">
	<br/>
    <h3>Aplikasi</h3>
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
                <th>ID Status</th>
                <th>Status</th>
                <?php if($this->session->userdata('simpeg_api_user')){ ?>
                <th>MODIFIKASI</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
        	<?php
        		$i = 1;
        		foreach ($data->result() as $data_db) { 
        	?>
        		<tr>
        			<td><?php echo $i++; ?></td>
        			<td>
        				<?php echo $data_db->id_error; ?>
        				<input type="hidden" id="id_<?php echo $data_db->id_error; ?>" value="<?php echo $data_db->id_error; ?>"/>
        			</td>
        			<td>
        				<?php echo $data_db->status; ?>
        				<input type="hidden" id="status_<?php echo $data_db->id_error; ?>" value="<?php echo $data_db->status; ?>"/>
        			</td>
              <?php if($this->session->userdata('simpeg_api_user')){ ?>
        			<td>
        				<div class="place-right">
                            <button class="edit button info icon-pencil" id="edit_<?php echo $data_db->id_error; ?>"><font style="font-family:calibri"> Edit</font></button>
                            <button class="delete button danger icon-remove" id="delete_<?php echo $data_db->id_error; ?>"><font style="font-family:calibri"> Hapus</font></button>
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
      title: 'Form Request Status',
      content: '',
      width:500,
      padding: 10,
      onShow: function(_dialog){
      var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Request_status_admin/tambah_request_status">' +
                    '<label>ID Status</label>' +
                    '<div class="input-control text" id="id_status"><input type="text" name="id_status"></div>' +
                    '<label>Status</label>'+
                    '<div class="input-control text"><input type="text" name="status"></div>' +
                    '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                    '<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
                    '</form>';
                    $.Dialog.title("Form Request Status");
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
          var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Request_status_admin/update_request_status">' +
                        '<label>ID Status</label>' +
  	                    '<div class="input-control text" id="id_req"><input type="text" name="id_edit" id="id_edit" readonly></div>' +
  	                    '<label>Status</label>'+
  	                    '<div class="input-control text"><input type="text" name="status_edit" id="status_edit"></div>' +
                        '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                        '<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
                        '</form>';
                        $.Dialog.title("Form Method API");
                        $.Dialog.content(content);
                     }
                });
                var id = this.id.substr(5);
                $("#id_edit").val(id);
                $("#status_edit").val($("#status_"+ id).val() );
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
          var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Request_status_admin/hapus_request_status">' +
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