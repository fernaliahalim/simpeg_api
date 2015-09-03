<div class="container">
	<br/>
	<div class="grid fluid">
		<div class="row">
			<div class="span3">
			</div>
			<div class="span6">
				<div class="panel">
			    <div class="panel-header">
			        <h3><span class="icon-enter"></span> Login</h3>
			    </div>
			    <div class="panel-content">
			       <form action="<?php echo base_url(); ?>Admin_login/signup" method="post">
						<fieldset>
							Username:
							<?php
								if(!empty($data)){
									if(element('status_uname', $data) == "error_uname"){
							?>
							<div class="input-control text error-state">
							    <input type="text" placeholder="Username Salah" name="username" required/>
							    <button class="btn-clear"></button>
							</div>
							<?php
									}
								}
								else{
							?>
							<div class="input-control text">
							    <input type="text" placeholder="Username" name="username" required/>
							    <button class="btn-clear"></button>
							</div>
							<?php
							   	}
							 ?>
							Password:
							<?php
								if(!empty($data)){
									if(element('status_password', $data) == "error_password"){
							?>
							<div class="input-control password error-state">
							    <input type="password" value="" placeholder="Password Salah" name="passwd" required/>
							    <button class="btn-reveal"></button>
							</div>
							<?php
									}
								}
								else{
							?>
							<div class="input-control password">
							    <input type="password" value="" placeholder="Password" name="passwd" required/>
							    <button class="btn-reveal"></button>
							</div>
							<?php
							   	}
							 ?>
						</fieldset>
						<fieldset>
							<div class="place-right">
								<button class="info"><span class="icon-enter"></span> Login</button>
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

	<br/>
	<br/>
</div>