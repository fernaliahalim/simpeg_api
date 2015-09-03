<div class="container">
	<br />
	<h3>List Method <?php echo $val; ?></h3>
	<br />
	<table class="table striped" id="table">
		<thead>
			<tr style="text-align:left">
				<th>No.</th>
				<th>Daftar Method</th>
				<th>Detail</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i=1;
				foreach ($all_method->result() as $method) {
					$id[] = $method->id_method;
					$nama[] = $method->nama_method;
				}

				for($k=0; $k<count($nama); $k++){
					if(strstr($nama[$k], '/', true) == $val){
						$list_nm[] = $nama[$k];
						$list_id[] = $id[$k];
					}
				}

				for($l=0; $l<count($list_nm); $l++){
			?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $list_nm[$l]; ?></td>
					<td>
						<form action="<?php echo base_url();?>Method_api/detail/<?php echo $list_id[$l] ?>">
							<button class="info">Detail</button>
						</form>
					</td>
				</tr>
			<?php 
				}
			?>
		</tbody>
		<tfoot>
		</tfoot>
	</table>
	<br />
	<br />
	<br />
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#table').dataTable();
	});
</script>