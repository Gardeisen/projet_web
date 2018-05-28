<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Ajouter une plongée</title>
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
								<a href="<?php echo site_url("user/affichermonprofil")?>" class="dropdown-toggle account" data-toggle="dropdown">
                                                                    <h3><span>Mon Profil <?php echo get_cookie('nom_utilisateur');?></span></h3>
									
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
                    
                  
                    
                    
                    
<div class="container-fluid" >
   <div class="row">
                 <div class="col-xs-12 col-sm-8">
                   <div class="box-content">
				<form id="defaultForm" method="post" action="validators.html" class="form-horizontal">
					<fieldset>
                                            <legend>Ajouter une nouvelle plongée</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Date de la Plongée</label>
							<div class="col-sm-5">
								<input type="date" class="form-control" name="username" />
							</div>
						</div>
                                                <div class="form-group">
							<label class="col-sm-3 control-label">Profondeur</label>
							<div class="col-sm-5">
                                                            <input type="float" class="form-control" name="profondeur" required />
                                                            <?php echo form_error('profondeur'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Condition de Plongée</label>
							<div class="col-sm-5">
                                                            <textarea type="text" class="form-control" name="username" ></textarea>
							</div>
						</div>
                                            <div class="form-group">
							<label class="col-sm-3 control-label">Nom Moniteur </label> 
                                                        <a href="<?php echo site_url("moniteur/ajoutermoniteur")?>">
                                                        <button type="button" class="btn btn-primary btn-xs" />nouveau</button>
                                                        </a>
							<div class="col-sm-5">
                                                            <select class="form-control" name="idmoniteur" >
                                                            
                                                                <?php
                                                                      
                                                                    foreach ($moniteur as $item) {
                                                                      
                                                                        echo "<option value = $item->idmoniteur>$item->nommono </option>";
                                                                    }
                                                                    ?>
                                                                
                                                            </select>
							</div>
                                                        
						</div>
                                                <div class="form-group">
							<label class="col-sm-3 control-label">Nom du site</label>
                                                        <a href="<?php echo site_url("site/ajoutersite")?>">
                                                        <button type="button" class="btn btn-primary btn-xs" />nouveau</button>
                                                        </a>
							<div class="col-sm-5">
                                                            <select class="form-control" name="idsite">
                                                              <?php
                                                                      
                                                                    foreach ($site as $item) {
                                                                      
                                                                        echo "<option value = $item->idsite>$item->nom </option>";
                                                                    }
                                                                    ?>
                                                           
                                                        
                                                            </select>
							</div>
						</div>
                                           
				<div class="row form-group">
                                    <label class="col-sm-3 control-label">La Faune vue</label>
                                    <a href="<?php echo site_url("faune/ajouterfaune")?>">
                                        <button type="button" class="btn btn-primary btn-xs" />nouvelle faune</button>
                                    </a>
                                            
                                            <div class="col-sm-5">
                                                
						<?php foreach ($faune as $item) {
                                                    
                                                    echo"<div class='checkbox'><input type='checkbox' value=$item->idfaune->$item->nom</input></div> ";
                                                   
                                                }
                                                ?>
                                            </div>
                                </div>
                                            
                                            <div class="row form-group">
                                    <label class="col-sm-3 control-label">La Flore vue</label>
                                    <a href="<?php echo site_url("flore/ajouterflore")?>">
                                        <button type="button" class="btn btn-primary btn-xs" />nouvelle flore</button>
                                    </a>        
                                            <div class="col-sm-5">
                                                
						<?php foreach ($flore as $item) {
                                                    
                                                    echo"<div class='checkbox'><label><input type='checkbox' value=$item->idflore->$item->nom</input><i class='fa fa-square-o small'></i></label></div> ";
                                                   
                                                }
                                                ?>
                                            </div>
                                </div>
                                            </div>
                 </div>
   </div>
</div>
               
						
					</fieldset>
					
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary btn-success">Submit</button>
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
<!-- script src="http://code.jquery.com/jquery.js"></script>
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
