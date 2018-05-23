<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Ajouter de la flore</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url() ?>devoops-master/plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Righteous" rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url() ?>devoops-master/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/plugins/select2/select2.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/css/style_v1.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/plugins/chartist/chartist.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

        <!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="<?php echo site_url("plongee/affichermesplongees")?>">Mon carnet de plongées</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						
						<ul class="nav navbar-nav pull-right ">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                                                                    <h3><span>Mon Profil</span></h3>
									
								</a>
								
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="<?php echo site_url("plongee/affichermesplongees")?>" class="ajax-link">
						
						<span class="hidden-xs">Mes Plongées </span>

					</a>
				</li>
                                <li>
					<a href="<?php echo site_url("plongee/ajouterplonger")?>" class="ajax-link">
						
						<span class="hidden-xs">Ajouter une plongée </span>
					</a>
				</li>
                                
                                <li>
					<a href="<?php echo site_url("user/deconnexion")?>" class="ajax-link">
						
						<span class="hidden-xs">Déconnexion</span>
					</a>
				</li>
				
				
				
				
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
            
   
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
                  
                 
			<div id="about">
				<div class="about-inner">
					<h4 class="page-header">Open-source admin theme for you</h4>
					<p>DevOOPS team</p>
					<p>Homepage - <a href="http://devoops.me" target="_blank">http://devoops.me</a></p>
					<p>Email - <a href="mailto:devoopsme@gmail.com">devoopsme@gmail.com</a></p>
					<p>Twitter - <a href="http://twitter.com/devoopsme" target="_blank">http://twitter.com/devoopsme</a></p>
					<p>Donate - BTC 123Ci1ZFK5V7gyLsyVU36yPNWSB5TDqKn3</p>
				</div>
			</div>
<div class="container-fluid" >
   
  			
                            
            <div class="row">
                 <div class="col-xs-12 col-sm-8">
                    
                     
			
			<div class="box-content">
				<form id="defaultForm" method="post" action="validators.html" class="form-horizontal">
					<fieldset>
						<legend>Ajouter de la flore</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Champs 1</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="username" />
							</div>
						</div>
                                                <div class="form-group">
							<label class="col-sm-3 control-label">Champs 2</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="username" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Champs 3</label>
							<div class="col-sm-5">
                                                            <textarea type="text" class="form-control" name="username" ></textarea>
							</div>
						</div>
                                                
						
					</fieldset>
					
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		
	</div>
	
</div>   
                            
                            
                            
                            
                            
                            
                            
			</div>
			<div id="ajax-content"></div>
                    
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->
        

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<!--<script src="<?php echo base_url() ?>devoops-master/plugins/jquery/jquery.min.js"></script>-->
<script src="<?php echo base_url() ?>devoops-master/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url() ?>devoops-master/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>devoops-master/plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
<script src="<?php echo base_url() ?>devoops-master/plugins/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url() ?>devoops-master/plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="<?php echo base_url() ?>devoops-master/js/devoops.js"></script>
</body>
</html>
