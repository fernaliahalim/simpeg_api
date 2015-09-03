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
                <div style="margin-left:7%; margin-top:1%; margin-right:6%">
                    <span>
                        <img src="<?php echo base_url();?>assets/img/bkpp2.png" width="31%">
                    <span>

                    <div class="place-right" style="margin-top:2%;">
                        <div class="times" data-role="times" style="font-size:150%" data-style-background="bg-darkCobalt" data-style-foreground="fg-white" data-style-divider="fg-white"></div>
                    </div>
                </div>

                <div style="margin-left:7%; margin-top:1%; margin-right:7%">
                        <a class="element brand" href="<?php echo base_url();?>">
                            <span class="icon-home"> </span>
                        </a>

                    <div class="element place-left">
                        <a class="dropdown-toggle" href="#">
                            <span>Panduan API </span>
                        </a>
                        <ul class="dropdown-menu place-left" data-role="dropdown">
                            <li><a href="<?php echo base_url();?>Pengantar">Pengantar</a></li>
                            <li><a href="<?php echo base_url();?>Autentikasi_user">Autentikasi Pengguna</a></li>
                            <li><a href="<?php echo base_url();?>Permohonan_rest">Permohonan REST</a></li>
                        </ul>
                    </div>

                        <a class="element brand" href="<?php echo base_url();?>Method_api">
                            <span>Method API</span>
                        </a>

                    <div class="element place-right">
                        <?php
                            if($this->session->userdata('simpeg_api_uname') == ''){
                        ?>
                        <a href="<?php echo base_url(); ?>Login">
                            <font color="#FFFFFF">
                                <span class="icon-enter"></span>
                                <span>Login</span>
                            </font>
                        </a>
                        <?php
                            }
                            else{
                        ?>
                        <a href="<?php echo base_url(); ?>Logout">
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
                        <a href="<?php echo base_url(); ?>Daftar">
                            <font color="#FFFFFF">
                                <span class="icon-user"></span>
                                <span>Daftar</span>
                            </font>
                        </a>
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

<script type="text/javascript">
    $("#componennt_id").times({
    style: {
        background: string, //existing class for digit background color
        foreground: string  //existing class for digit foreground color
        divider: string  //existing class for divider foreground color
    },
    blink: true, // blink divider
    alarm: {h:..., m:..., s:...},
    ontick: function(h, m, s){...},
    onalarm: function(){...},
    });
</script>