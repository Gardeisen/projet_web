<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Ma plongée</title>
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
                        <h1><u>Les Détails de Ma Plongée</u></h1>
                    </div>
                    
                    <div class="col-xs-8">
                        <div class="box-content">
                            <div class="card">
                                <h3 class="page-header">Ma plongée du <?php echo $plongee[0]->dateplongee ?></h3>
					<p>
						<h4>Profondeur : <?php echo $plongee[0]->profondeur ?> mètres</h4> 
						<h4>Condition de plongée du jour : <?php echo $plongee[0]->conditionplongee ?> </h4> 
                                                
					</p>
                            </div>
                            
                            <div class="card">
                                <h3 class="page-header">Mon Moniteur</h3>
					<p>
						<h4>Nom : <?php echo $plongee[0]->nommono ?></h4> 
						<h4>Prénom : <?php echo $plongee[0]->prenommono ?> </h4> 
                                                <h4>Niveau : <?php echo $plongee[0]->niveauplongeem ?> </h4> 
                                                
					</p>
                            </div>
                            
                            <div class="card">
                                <h3 class="page-header">Le Spot Exploré</h3>
					<p>
						<h4>Nom : <?php echo $plongee[0]->nomsite ?></h4> 
						<h4>Localisation: <?php echo $plongee[0]->positiongeo ?> </h4> 
                                                <h4>Description : <?php echo $plongee[0]->descriptionsite ?> </h4> 
                                                
					</p>
                            </div>
                            
                            <div class="card">
                                <h3 class="page-header">La Faune observée (cliquez sur les liens pour se remémorer)</h3>
					<p>
						<?php foreach ($plongee as $item) {
                                                $lien = "https://www.google.com/search?q=google+image+poisson+$item->nomfaune";   
                                                    echo "<h4><a href=$lien target=_blank>$item->nomfaune</a></h4>";
                                                   
                                                }
                                                ?>
                                             
					</p>
                            </div>
                            
                            <div class="card">
                                <h3 class="page-header">La Flore observée (cliquez sur les liens pour se remémorer)</h3>
					<p>
						<?php foreach ($plongee as $item) {
                                                $lien = "https://www.google.com/search?q=google+image+$item->nomflore+flore+sous+marine";   
                                                    echo "<h4><a href=$lien target=_blank>$item->nomflore</a></h4>";
                                                   
                                                }
                                                ?>
                                             
					</p>
                            </div>
                            <?php $idP = $plongee[0]->idplongee;?>
                            <div class="col-sm-9 col-sm-offset-3">
                                <?php  $lien = site_url("Plongee/delete/$idP");?>
                                <a href="<?php echo $lien?>" 
                                <button type="submit" class="btn btn-primary btn-danger btn-lg">- Supprimer Cette Plongée-</button>
                                </a>
                                <a href="<?php echo site_url("Plongee/affichermesplongees")?>" 
                                <button class="btn btn-primary btn-primary btn-lg">- Retour-</button>
                                </a>
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
