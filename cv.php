<?php include("connexion.php");


     
     
	$msg="";
	if (isset($_POST['btnValider'])){
		
			$sql= "INSERT INTO cv (facebook,twitter,github,specialisation)
			 VALUES ('".($_POST['facebook'])."',
			        '".($_POST['twitter'])."',
			        '".($_POST['github'])."',
			 		 '".($_POST['specialisation'])."')";
			$result=mysqli_query($link,$sql);
			if ($result) {
				$msg='Insertion reussie';
			}else{
				$msg=mysqli_error($link);
			}
		}




 ?>

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

	 <title>CV</title>
	 <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">

	
</head>
<body>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
                    <div class="container-fluid">

                     <div class="navbar navbar-left">
                        <a class="navbar-brand" href="index.php">Sheisthecode Cv</a><br> 
                        </div>

                        <div class="navbar navbar-right">
                            <ul class="nav navbar-nav">

                                 <li>
                                    <a href="http://www.sheisthecode.org">A Propos</a>
                                </li>
                                     <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Users
									<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
									<li><a href="cv.php?id=<?php echo $_GET['id']; ?>">CREER CV</a></li>
									<li><a href="experience.php?id=<?php echo $_GET['id']; ?>">EXPERIENCES</a></li>
									<li><a href="diplome.php?id=<?php echo $_GET['id']; ?>">DIPLOMES</a></li>
									<li><a href="centreinteret.php?id=<?php echo $_GET['id']; ?>">CENTRESINTERETS</a></li>
									</ul>-->
								</li>
		
                            </ul>
                        </div>

                    </div>
                </nav>
                <br><br><br><br><br><br>  

<div class="container" class="navbar1-default">
	          <br><br><br><br><br><br>
                <div class="container" style="background-color: #FFCCFF;">

	<div class="col-lg-2">
		<ol>
			<h5><a href="modification.php">Modifierprofil</a><br><br><br>
			<a href="cv.php?id=<?php echo $_SESSION['variable']; ?>">Creer cv</a><br><br><br>
			<a href="consultercv.php?id=<?php echo $_SESSION['variable']; ?>">Afficher votre cv</a><br><br><br>
			<a href="experience.php?id=<?php echo $_SESSION['variable']; ?>">Ajouter experience</a><br><br><br>
			<a href="diplome.php?id=<?php echo $_SESSION['variable']; ?>">Ajouter diplome</a><br><br><br>
			<a href="centreinteret.php?id=<?php echo $_SESSION['variable']; ?>">Ajouter centres interets</a></h5>
		</ol>
	</div>
	<div class="col-lg-2 col-offset-2"></div>
	<div class="col-lg-8">
		<div class="col-lg-8">
			<form method="POST">
				<fieldset><legend>CREER CV</legend><span>tous les champs sont obligatoires</span></fieldset>
				
	     <label>FACEBOOK</label>
	     <input type="text" name="facebook" class="form-control" id="" placeholder="compte facebook" >
	     <label>TWITTER</label>
	     <input type="text" name="twitter" class="form-control" id="" placeholder="compte twitter" > 
	     <label>GITHUB</label>
	     <input type="text" name="github" class="form-control" id="" placeholder="compte github" >
	     <label>SPECIALISATION</label>
	     <input type="text" name="specialisation" class="form-control" id="" placeholder="specialisation" >
	     <br>
         <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
         <br>
        
		</form>
      </div>
     </div>
 </div>    
</div>


<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

