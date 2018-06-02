<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Accueil</title>
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
					<a href="<?php echo site_url("Plongee/affichermesplongees")?>" class="ajax-link">
						
						<span class="hidden-xs">Mes Plongées </span>
					</a>
				</li>
                                <li>
					<a href="<?php echo site_url("Plongee/ajouterplongee")?>" class="ajax-link">
						
						<span class="hidden-xs">Ajouter une plongée </span>
					</a>
				</li>
                                
                                <li>
					<a href="<?php echo site_url("User/deconnexion")?>" class="ajax-link">
						
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
                                <h1><u>Bienvenue !</u></h1>
                                <br>  
                            </div>
                    <div class="centered" style="text-align: center">        
                    <p>
                        <br>
                    <h4>
                        Voici votre carnet de bord en ligne ! <br> Vous avez tendance à oublier votre carnet ou à le perdre ? <br>
                        Plus de soucis utilisez votre carnet de bord en ligne gardez un historique de vos plongées ainsi que  plein de souvenirs ! 
                        
                    </h4>
                    <br>
                    </p>
                                
                                <div class="form-group">
                                    <a href="<?php echo site_url("Plongee/affichermesplongees")?>">
                                        <button type="button" class="btn btn-primary btn-xs btn-primary btn-block" />- Voir mes plongées -</button>
                                    </a>
                                    <br>
                                    <a href="<?php echo site_url("User/affichermonprofil")?>">
                                        <button type="button" class="btn btn-primary btn-xs btn-info btn-block" />- Voir mon profil -</button>
                                    </a>
                                    <br>
                                    <a href="<?php echo site_url("Plongee/ajouterplongee")?>">
                                        <button type="button" class="btn btn-primary btn-xs btn-success btn-block" />- Ajouter une plongée -</button>
                                    </a>
                                    <br>
							
                                </div>
                    <h1 style="color:darkslategrey;"> Mon Carnet de Bord en Ligne </h1>
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
