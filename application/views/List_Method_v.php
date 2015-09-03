<div class="container">
	<br />
	<h3>Daftar Method</h3>
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
					$val[] = strstr($method->nama_method, '/', true);
				}

				for($k=0; $k<count($val); $k++){
					if($k == 0){
						$variance[] = $val[$k];
					}
					else if($val[$k-1] != $val[$k]){
						$variance[] = $val[$k];
					}
				}

				for($l=0; $l<count($variance); $l++){
			?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $variance[$l]; ?></td>
					<td>
						<form action="<?php echo base_url();?>Method_api/list_method/<?php echo $variance[$l]; ?>">
							<button class="info">Lihat Daftar Method</button>
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