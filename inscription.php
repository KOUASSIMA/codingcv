<?php include("connexion.php");

   
    
             $msg="";
	if (isset($_POST['btnValider'])){

		if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name'])) {
			echo "image upload";}
			$sql= "INSERT INTO codeuses (nom,prenom,datenaissance,description,email,telephone,password,image)
			 VALUES ('".mysqli_real_escape_string($link,$_POST['nom'])."',
			        '".mysqli_real_escape_string($link,$_POST['prenom'])."',
			        '".mysqli_real_escape_string($link,$_POST['datenaissance'])."',
			        '".mysqli_real_escape_string($link,$_POST['description'])."',
			        '".mysqli_real_escape_string($link,$_POST['email'])."',	
			        '".mysqli_real_escape_string($link,$_POST['telephone'])."',
			        '".mysqli_real_escape_string($link,md5($_POST['password']))."',		        
			 		 '".mysqli_real_escape_string($link,$_FILES['image']['name'])."')";


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

	 <title>INSCRIPTION</title>
	 <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">

</head>
<body>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
                    <div class="container-fluid">

                     <div class="navbar navbar-left">
                        <a class="navbar-brand" href="accueil.php">Sheisthecode Cv</a><br> 
                        </div>

                        <div class="navbar navbar-right">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="http://www.sheisthecode.org">A Propos</a>
                                </li>

                                 <li>
                                    <a href="inscription.php">S'Inscrire</a>
                                </li>

                                <li>
                                    <a href="login.php">Se Connecter</a>
                                </li>
    
                            </ul>
                        </div>

                    </div>
                    
                </nav>
    <br><br><br><br><br><br> 

         
<div class="container">
    <div class="row">
        
    <div class="col-lg-3 col-offset-3"></div>
        <div class="col-lg-6">
              <form method="POST" enctype="multipart/form-data" class="form-group">
                <fieldset><legend style="color:blue ;"><h2>INSCRIPTION</h2></legend><span>tous les champs sont obligatoires</span></fieldset>
                     <label class="control-label">nom</label><br>
                    <input type="text" name="nom" class="form-control"  id="" placeholder="Entrer le nom" required>
                    <label class="control-label">prenom</label><br>
                    <input type="text" name="prenom" class="form-control" id="" placeholder="Entrer le prenom" required>
                    <label class="control-label">datenaissance</label><br>
                    <input type="date" name="datenaissance" class="form-control" id="" placeholder="Entrer la datenaissance" required>
                    <label class="control-label" class="form-control">description</label><br>
                    <textarea name="description" value="" class="form-control" id="" placeholder="" rows="3"></textarea>
                    <label class="control-label">email</label><br>
                    <input type="email" name="email" class="form-control" id="" placeholder="Entrer email" required>
                    <label class="control-label" class="form-control">telephone</label><br>
                    <input type="text" name="telephone" class="form-control" id="" placeholder="contact" required>
                    <label class="control-label"> password</label><br>
                    <input type="password" name="password" class="form-control" id="" placeholder="password" required>  
                    <label class="control-label" class="form-control">image</label><br>
                   <input type="file" name="image" class="form-control" id="" placeholder="image" required><br>
                   <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>

                
                               
         </form>
       </div>
       
    </div>  
</div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

