<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <meta name="description" content="">
     <meta name="author" content="">
     <link rel="icon" href="img/favicon.ico">

	 <title>DASHBOARD</title>
	 <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">

	
	</head>
	<body style="background-color: wheat">



<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
                    <div class="container-fluid">

                     <div class="navbar navbar-left">
                        <a class="navbar-brand" href="index.php">Sheisthecode Cv</a><br> 
                        </div>

                        <div class="navbar navbar-right">
                            <ul class="nav navbar-nav">

                               
                                 <li>
                                    <a href="#">A Propos</a>
                                </li>
                                     <li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown">Users
									<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
									<li><a href="cv.php">CREER CV</a></li>
									<li><a href="experience.php">EXPERIENCES</a></li>
									<li><a href="diplome.php">DIPLOMES</a></li>
									<li><a href="centreinteret.php">CENTRESINTERETS</a></li>
									</ul>
								</li>
		
                            </ul>
                        </div>

                    </div>
                </nav>
                <br><br><br><br><br>

          <div class="container" id="menu_en_tete"><p>
                	<div class="row">
                		<div class="col-md-2" >
                			
                			<ol>
								<h4><a href="modifierpp.php" >Modifierprofil</a><br><br>
								<a href="cv.php?id=<?php echo $_GET['id']; ?>">Creer cv</a><br><br>
								<a href="consultercv.php?id=<?php echo $_GET['id']; ?>">Afficher votre cv</a><br><br>
								<a href="experiences.php?id=<?php echo $_GET['id']; ?>">Ajouter experience</a><br><br>
								<a href="diplomes.php?id=<?php echo $_GET['id']; ?>">Ajouter diplome</a><br><br>
								<a href="centresinteret.php?id=<?php echo $_GET['id']; ?>">Ajouter centres interets</a></h4>
					       </ol>
					       </div>
                		
                		<div class="col-md-2 col-offset-2"></div>
                		<div class="col-md-2">
                		<h4>Kouassi A Marie</h4>
                		<h4>Nee le 	25/12/1986</h4>
                		<h4>Vavou</h4>
                		  <h4>57629941</h4>
                		  <h4>celibataire sans enfant</h4>
                	     </div>
                	     <div class="col-md-2 col-offset-2"></div>
                		<div class="col-md-2">
                			Resume de la codeuse<br><br><br><br><br><br><br><br><br><br>
                              <h4>Mes Diplomes</h4>
                              <h4>Mes Experiences</h4>
                              <h4>Mes Centres d'Interets</h4>
                              
                		</div>
                		 <div class="col-md-2 col-offset-2"></div>
                		<div class="col-md-2" style="text-align: right;">
                        
                			 <img src="img/marie.jpg" class="avatar-grand">
                             <h3 style="text-align: right;">Codeuse</h3>
                		</div>
                	</div>
                	<div class="row"></div>
                	</p>
                </div>






    </body>  
</html> 
