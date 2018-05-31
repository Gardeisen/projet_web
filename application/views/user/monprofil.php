<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Mes plongées</title>
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

<header class="navbar">
	<div class="container-fluid expanded-panel ">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2 ">
				<a href="<?php echo site_url("plongee/affichermesplongees")?>">Mon carnet de plongées</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10 ">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
                                            <ul class="nav navbar-nav pull-right ">
                                                    <li class="dropdown">
								<a href="<?php echo site_url("user/affichermonprofil")?>" class="dropdown-toggle account" data-toggle="dropdown">
                                                                    <h3><span>Profil <?php echo $this->encryption->decrypt(get_cookie('nom_utilisateur'));?></span></h3>
									
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
					<a href="<?php echo site_url("plongee/ajouterplongee")?>" class="ajax-link">
						
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
			
			
                            <div class="text-center">
                                <h1><u>Mon profil</u></h1>
                                <br>
                                <br>
                               
                            </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="box box-pricing">
                            <div class="box-header">
				<div class="box-name">
                                    <h3><span>Plongeur<br/><?php echo $this->encryption->decrypt(get_cookie('nom_utilisateur'));?></span></h3>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content no-padding">
				<div class="row-fluid centered">
					<div class="col-sm-12"><h4> Nom : <?php echo $utilisateur[0]->nom ?></h4></div>
					<div class="col-sm-12"><h4> Prénom : <?php echo $utilisateur[0]->prenom ?></h4></div>
					<div class="col-sm-12"><h4> Niveau de Plongée : <?php echo $utilisateur[0]->niveaudeplongee ?></h4></div>
                                        <div class="col-sm-12"><h4> Nombre de Plongées : <?php echo $utilisateur[0]->nbplongee ?></h4></div>
					<div class="clearfix"></div>
				</div>
				<div class="row-fluid bg-default">
					
					<div class="col-sm-9 col-sm-offset-3">
                                            <a href="<?php echo site_url("User/modifiermonprofil")?>">
                                            <button class="btn btn-primary btn-warning btn-lg">- Modifier  le  Profil -</button>
                                            </a>
                                            <a href="<?php echo site_url("Plongee/affichermesplongees")?>">
                                            <button class="btn btn-primary btn-primary btn-lg">-Voir mes plongées-</button>
                                            </a>
                                        </div>
                                    
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
                   
                   
        </div>
</div>

</div>
<!--End Container-->

        
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
