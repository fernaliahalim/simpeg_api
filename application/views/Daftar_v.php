<div class="container">
	<br />
		<div class="grid fluid">
		<div class="row">
			<div class="span3">
			</div>
			<div class="span6">
				<?php if(!empty($data)){ ?>
					<div class="notice marker-on-bottom bg-darkRed fg-white">
                        <div class="">Username yang Anda masukkan sudah ada!</div>
                    </div>
				<?php } ?>
				<div class="panel">
			    <div class="panel-header">
			        <h3><span class="icon-user"></span> Daftar</h3>
			    </div>
			    <div class="panel-content">
					<form action="<?php echo base_url(); ?>Daftar/daftar_akun" method="get">
						<fieldset>
							Nama:
							<div class="input-control text">
							    <input type="text" placeholder="Nama" name="nama" required/>
							    <button class="btn-clear"></button>
							</div>
							Username:
							    <?php
									if(!empty($data)){
										if(element('status', $data) == "error_uname"){
									?>
									<div class="input-control text error-state">
										<input type="text" placeholder="Username Sudah Ada" name="uname" required/>
								    	<button class="btn-clear"></button>
								    </div>
								<?php
										}
									}
									else{
									?>
									<div class="input-control text">
										<input type="text" placeholder="Username" name="uname" required/>
								    	<button class="btn-clear"></button>
								    </div>
							    <?php
							    	}
							    ?>
							Password:
							<div class="input-control password">
							    <input type="password" value="" placeholder="Password" name="passwd" required/>
							    <button class="btn-reveal"></button>
							</div>
							Email:
							<div class="input-control text">
							    <input type="email" placeholder="Email" name="email" required/>
							    <button class="btn-clear"></button>
							</div>
							No.Telepon:
							<div class="input-control text">
							    <input type="text" placeholder="No.Telepon" name="no_telp" required/>
							    <button class="btn-clear"></button>
							</div>
							Jenis Aplikasi:
							<div class="input-control select">
							    <select name="jenis_app">
							    	<?php foreach ($all_apps->result() as $app) { ?>
							        <option value="<?php echo $app->id_aplikasi; ?>"><?php echo $app->nama_aplikasi; ?></option>
							        <?php } ?>
							    </select>
							</div>
						</fieldset>
						<fieldset>
							<div class="place-right">
								<button class="info"><span class="icon-enter"></span> Daftar</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
			</div>
			<div class="span4">
			</div>
		</div>
	</div>
	<br />
	<br />
</div>