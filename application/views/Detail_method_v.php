<div class="container">
	<br />
	<?php foreach ($detail_method->result() as $dm) { ?>
	<h3><?php echo $dm->nama_method; ?></h3>
	<?php } ?>
	<br />
	<table class="table">
		<tbody>
			<tr>
				<td>Aplikasi</td>
				<td>:</td>
				<td>
		<?php for($i=0; $i<$detail_akses->num_rows(); $i++){?>
				<?php echo $nama_aplikasi[$i] . "<br />"; ?>
		<?php } ?>
				</td>
				<td></td>
			</tr>
		<?php foreach ($detail_method->result() as $dm) { ?>
			<tr>
				<td>Parameter</td>
				<td>:</td>
				<td><?php echo $dm->parameter; ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Output</td>
				<td>:</td>
				<td><?php echo $dm->output; ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Method</td>
				<td>:</td>
				<td><?php echo $dm->method_request; ?></td>
				<td></td>
			</tr>
			<tr>
				<td>
					<div class="grid">
					    <div class="row">
					        <div class="span3">
					        	Deskripsi Method
					        </div>
					    </div>
					</div>
				</td>
				<td>
					<div class="grid">
					    <div class="row">
					        <div class="span1">
					        	:
					        </div>
					    </div>
					</div>
				</td>
				<td>
					<div class="grid">
					    <div class="row">
					        <div class="span9">
					        	<?php echo $dm->deskripsi; ?>
					        </div>
					    </div>
					</div>
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Permintaan REST</td>
				<td>:</td>
				<td><?php echo "http://bkpp.kotabogor.go.id:8080/". $dm->nama_method; ?></td>
				<td></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<br />
</div>