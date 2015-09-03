<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       
		<title>SIMPEG API</title>
    	<link href="<?php echo base_url();?>assets/css/metro-bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/metro-bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/iconFont.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/docs.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/js/prettify/prettify.css" rel="stylesheet">
	
	<!--Akhir body-->
        <!-- Load JavaScript Libraries -->
        <script src="<?php echo base_url();?>assets/js/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery/jquery.widget.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery/jquery.mousewheel.js"></script>
        <script src="<?php echo base_url();?>assets/js/prettify/prettify.js"></script>

        <!-- Metro UI CSS JavaScript plugins -->
        <script src="<?php echo base_url();?>assets/js/metro/metro-loader.js"></script>
        <script src="<?php echo base_url();?>assets/js/metro.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/metro-hint.js"></script>
        <script src="<?php echo base_url();?>assets/js/metro-times.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery/jquery.dataTables.js" type="text/javascript"></script>

        <!-- Local JavaScript -->
        <script src="<?php echo base_url();?>assets/js/docs.js"></script>
        <script src="<?php echo base_url();?>assets/js/github.info.js"></script>		
        <script src="<?php echo base_url();?>assets/js/hitua.js"></script>

        <!--Favicon-->
        <link rel="icon" type="image/png" href="<?php base_url(); ?>assets/img/bkpp.png">
    </head>
    <body class="metro">
        <nav class="navigation-bar bg-darkCobalt">
            <nav class="navigation-bar-content">
                <div style="margin-left:7%; margin-right:7%">
                        <a class="element brand" href="<?php echo base_url();?>Aplikasi_admin">
                            <span>Aplikasi</span>
                        </a>

                        <a class="element brand" href="<?php echo base_url();?>Method_admin">
                            <span>Method API</span>
                        </a>

                        <a class="element brand" href="<?php echo base_url();?>Api_akses_admin">
                            <span>API Akses</span>
                        </a>
						
						<a class="element brand" href="<?php echo base_url();?>Request_status_admin">
                            <span>Request Status</span>
                        </a>
						
						<a class="element brand" href="<?php echo base_url();?>Permintaan_api_key_admin">
                            <span>Permintaan API KEY</span>
                        </a>

                    <div class="element place-right">
                        <?php
                            if($this->session->userdata('simpeg_api_uname') == ''){
                        ?>
                        <a href="<?php echo base_url(); ?>Admin_login">
                            <font color="#FFFFFF">
                                <span class="icon-enter"></span>
                                <span>Login</span>
                            </font>
                        </a>
                        <?php
                            }
                            else{
                        ?>
                        <a href="<?php echo base_url(); ?>Admin_login/Logout">
                            <font color="#FFFFFF">
                                <span class="icon-enter"></span>
                                <span>Logout</span>
                            </font>
                        </a>  
                        <?php
                            }
                        ?>
                    </div>

                    <div class="element place-right">
                        <?php
                            if($this->session->userdata('simpeg_api_uname') == ''){
                        ?>
                    
                        <?php
                            }
                            else{
                        ?>
                        <a href="<?php echo base_url(); ?>Profil">
                            <font color="#FFFFFF">
                                <span class="icon-user"></span>
                                <span><?php echo $this->session->userdata('simpeg_api_uname'); ?></span>
                            </font>
                        </a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </nav>
        </nav>