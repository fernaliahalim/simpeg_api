<div class="container">
	<br />
	<h3>List Method SIMPEG API</h3>
	<br />
	<table class="table striped" id="table">
		<thead>
			<tr style="text-align:left">
				<th>No.</th>
				<th>Nama Method</th>
				<th>Detail</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i=1;
				foreach ($all_method->result() as $method) {
			?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $method->nama_method; ?></td>
					<td>
						<form action="<?php echo base_url();?>Method_api/detail/<?php echo $method->id_method ?>">
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