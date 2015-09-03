<div class="container">
    <br/>
    <h3>Method API</h3>
    <br/>
    <table class="table striped" id="table">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
				<th></th>
                <th></th>
                <?php if($this->session->userdata('simpeg_api_user')){ ?>
                <th><button id="tambah" class="button info icon-plus-2"><font style="font-family:calibri">&nbsp;Tambah</font></button></th>
                <?php } ?>
            </tr>
            <tr>
                <th>NO.</th>
                <th>NAMA METHOD</th>
                <th>PARAMETER</th>
				<th>METHOD REQUEST</th>
                <th>OUTPUT</th>
                <th>DESKRIPSI</th>
                <?php if($this->session->userdata('simpeg_api_user')){ ?>
                <th>MODIFIKASI</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                foreach ($method->result() as $method_db) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td>
                        <?php echo $method_db->nama_method; ?>
                        <input type="hidden" id="nama_<?php echo $method_db->id_method; ?>" value="<?php echo $method_db->nama_method; ?>"/>
                    </td>
                    <td>
                        <?php echo $method_db->parameter; ?>
                        <input type="hidden" id="param_<?php echo $method_db->id_method; ?>" value="<?php echo $method_db->parameter; ?>"/>
                    </td>
					<td>
                        <?php echo $method_db->method_request; ?>
                        <input type="hidden" id="mr_<?php echo $method_db->id_method; ?>" value="<?php echo $method_db->method_request; ?>"/>
                    </td>
                    <td>
                        <?php echo $method_db->output; ?>
                        <input type="hidden" id="output_<?php echo $method_db->id_method; ?>" value="<?php echo $method_db->output; ?>"/>
                    </td>
                    <td>
                        <?php echo $method_db->deskripsi; ?>
                        <input type="hidden" id="desc_<?php echo $method_db->id_method; ?>" value="<?php echo $method_db->deskripsi; ?>"/>
                    </td>
                    <?php if($this->session->userdata('simpeg_api_user')){ ?>
                    <td>
                        <div class="place-right">
                            <button class="edit button info icon-pencil" id="edit_<?php echo $method_db->id_method; ?>"><font style="font-family:calibri"> Edit</font></button>
                            <button class="delete button danger icon-remove" id="delete_<?php echo $method_db->id_method; ?>"><font style="font-family:calibri"> Hapus</font></button>
                        </div>
                    </td>
                    <?php } ?>
                </tr>    
            <?php
                }
            ?>
        </tbody>
        <tfoot></tfoot>
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
      title: 'Form Method API',
      content: '',
      width:500,
      padding: 10,
      onShow: function(_dialog){
      var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Method_admin/tambah_method">' +
                    '<label>Nama Method</label>' +
                    '<div class="input-control text" id="nama_method"><input type="text" name="nama_method"></div>' +
                    '<label>Parameter</label>'+
                    '<div class="input-control text"><input type="text" name="parameter"></div>' +
					'<label>Method Request</label>'+
                    '<div class="input-control text"><input type="text" name="method_req"></div>' +
                    '<label>Output</label>'+
                    '<div class="input-control text"><input type="text" name="output"></div>' +
                    '<label>Deskripsi</label>'+
                    '<div class="input-control textarea"><textarea type="text" name="deskripsi" width="100%"></textarea></div>' +
                    '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                    '<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
                    '</form>';
                    $.Dialog.title("Form Method API");
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
          var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Method_admin/update_method">' +
                        '<input type="text" id="id_edit" name="id_edit" hidden>' +
                        '<label>Nama Method</label>' +
                        '<div class="input-control text" id="nama_method"><input type="text" name="nama_method" id="nama_edit"></div>' +
                        '<label>Parameter</label>'+
                        '<div class="input-control text"><input type="text" name="parameter" id="param_edit"></div>' +
                        '<label>Method Request</label>'+
						'<div class="input-control text"><input type="text" name="method_req" id="mr_edit"></div>' +
						'<label>Output</label>'+
                        '<div class="input-control text"><input type="text" name="output" id="output_edit"></div>' +
                        '<label>Deskripsi</label>'+
                        '<div class="input-control textarea"><textarea type="text" name="deskripsi" id="desc_edit" width="100%"></textarea></div>' +
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
                $("#param_edit").val($("#param_"+ id).val() );
				$("#mr_edit").val($("#mr_"+ id).val() );
                $("#output_edit").val($("#output_"+ id).val() );
                $("#desc_edit").val($("#desc_"+ id).val() );
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
          var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Method_admin/hapus_method">' +
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