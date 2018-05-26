 <html>
<head>
                <meta charset="utf-8">
		<title>Projet Web Connexion</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url() ?>/plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url() ?>/css/style_v1.css" rel="stylesheet">
                <meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url() ?>devoops-master/plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url() ?>devoops-master/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/plugins/select2/select2.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>devoops-master/plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
                <link href="<?php echo base_url() ?>devoops-master/css/style_v1.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url() ?>devoops-master/plugins/chartist/chartist.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
                <style>
                    body {
                       
                        background-image: url('<?php echo base_url() ?>backgroundCo.jpg');
                    }
                </style>      
               



</head>
<body>
<?php echo form_open('User/inscriptionvalid'); ?>
<form name="form" onSubmit="return verify(this.password, this.passconf)">

<div class="text-center">
    <h2 class="page-header">Inscription</h2>
</div>
<div class="form-group">
    <label class="control-label">Nom Utilisateur</label>
    <input type="text" class="form-control" name="NomUtilisateur" value="<?php echo set_value('NomUtilisateur'); ?>" size="30" required/> 
         <?php echo form_error('NomUtilisateur'); ?>
</div>
<div class="form-group">
    <label class="control-label">Nom</label>
    <input type="text" class="form-control" name="Nom" value="<?php echo set_value('Nom'); ?>" size="30" required/>
    <?php echo form_error('Nom'); ?>
</div>
                                        
<div class="form-group">
    <label class="control-label">Prenom</label>
    <input type="text" class="form-control" name="Prenom" value="<?php echo set_value('Prenom'); ?>" size="30" required/> 
    <?php echo form_error('Prenom'); ?>
</div>    
    
<div class="col-sm-12">
    <label class="control-label">Niveau de Plongée</label>
            <select class="form-control" name="NiveauPlongee">
		<option value="1">1</option>
		<option value="2">2</option>
                <option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
                                                        
	</select>
</div>
    
<div class="form-group">
    <label class="control-label">Mot de passe</label>
	<input type="text" class="form-control" name="password" value="<?php echo set_value('password'); ?>" size="50" />
        <?php echo form_error('passworld'); ?>
</div>
                                    
<div class="form-group">
    <label class="control-label">Confirmation du Mot de passe</label>
	<input type="password" class="form-control" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
              <?php echo form_error('passconf'); ?>
	</div>



<div class="text-center">
    <input class="btn btn-primary btn-success btn-block" type="submit" value="submit" />
</div>

<div class="text-center">
    <br>
        <h1 style="color:darkslategrey; " > Mon Carnet de Bord en Ligne </h1>
 </div>
</form>

</body>

<script type="text/javascript">

function verify(element1, element2)
// La fonction reçois en paramètre les 2 éléments
 {
  var passed=false;
// On va donner à la variable passed la valeur false (fausse).

   if (element1.value!==element2.value)
/* Si les valeurs des 2 éléments ne sont pas égales (on utilise donc l'opérateur
  de comparaison d'inégalité != */
   {
    alert("Les deux mots de passe ne correspondent pas");
    
   }

   else {
   passed=true;
   return passed;
   }
 }
// fin du script -->
</script>
</html> 