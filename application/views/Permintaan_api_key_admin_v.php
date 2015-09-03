<div class="container">
	<br/>
    <h3>Permintaan API KEY</h3>
    <br/>
    <table class="table striped" id="table">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <?php if($this->session->userdata('simpeg_api_user')){ ?>
                <th></th>
                <?php } ?>
            </tr>
            <tr>
            	<th>NO.</th>
              <th>User</th>
              <th>Aplikasi</th>
              <?php if($this->session->userdata('simpeg_api_user')){ ?>
              <th>MODIFIKASI</th>
              <?php } ?>
            </tr>
        </thead>
        <tbody>
        	<?php
            if($data == null){
            }
            else{
          		$i = 1;
              $j = 0;
          		foreach ($data->result() as $data_db) { 
        	?>
        		<tr>
        			<td><?php echo $i++; ?></td>
        			<td>
        				<?php echo $nama_user[$j]; ?>
        				<input type="hidden" id="user_<?php echo $data_db->id; ?>" value="<?php echo $data_db->id_user; ?>"/>
        			</td>
        			<td>
        				<?php echo $nama_aplikasi[$j]; ?>
        				<input type="hidden" id="app_<?php echo $data_db->id; ?>" value="<?php echo $data_db->id_aplikasi; ?>"/>
        			</td>
              <?php if($this->session->userdata('simpeg_api_user')){ 
                      if($cek[$j] == 0){
              ?>
        			<td>
        				<div class="place-right">
                    <button class="approve button info icon-checkmark" id="approve_<?php echo $data_db->id; ?>"><font style="font-family:calibri"> Approve</font></button>
                </div>
        			</td>
              <?php   
                      }
                      else{
              ?>
              <td>
                <div class="place-right">
                    <button class="approve button bg-gray icon-checkmark" disabled="true" id="approve_<?php echo $data_db->id; ?>"><font style="font-family:calibri"> Approve</font></button>
                </div>
              </td>
              <?php
                      }
                    } 
              ?>
        		</tr>
        	<?php
              $j++;
        		}
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

    
  	$(".approve").on('click', function(){
            $.Dialog({
            overlay: true,
            shadow: true,
            flat: true,
            title: 'Form Persetujuan API KEY',
            content: '',
            width:500,
            padding: 10,
            onShow: function(_dialog){
            var content = '<form class="user-input" method="post" action="<?php echo base_url();?>Permintaan_api_key_admin/approve">' +
                          '<label>Apakah Anda yakin akan menyetujui Akun ini?</label>' +
    	                    '<div class="input-control hidden" id="id_req"><input type="hidden" name="id" id="id" readonly></div>' +
    	                    '<div class="input-control hidden"><input type="hidden" name="user" id="user"></div>' +
                          '<div class="input-control hidden"><input type="hidden" name="app" id="app"></div>' +
                          '<button class="button primary icon-thumbs-up"><font style="font-family:calibri"> OK</font></button>&nbsp;'+
                          '<button class="button icon-cancel" type="button" onclick="$.Dialog.close()"><font style="font-family:calibri"> Cancel</font></button> '+
                          '</form>';
                          $.Dialog.title("Form Persetujuan API KEY");
                          $.Dialog.content(content);
                       }
                  });
                  var id = this.id.substr(8);
                  $("#id").val(id);
                  $("#user").val($("#user_"+ id).val() );
                  $("#app").val($("#app_"+ id).val() );
               });  
</script>