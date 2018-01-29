<?php include("connexion.php");
             $msg="";
             if (isset($_GET['id'])) {
                 $update="SELECT * FROM codeuses WHERE id=".$_GET['id'];
                 $result=mysqli_query($link,$update);
                  $datas=mysqli_fetch_array($result);
             }   
    if (isset($_POST['btnValider'])){
        if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name'])){
            echo "image upload";}
            if (isset($_GET['id'])) {
                $sql="UPDATE codeuses SET 
                      email='".$_POST['email']."',
                      password='".$_POST['password']."',
                      nom='".$_POST['nom']."',
                      prenom='".$_POST['prenom']."' WHERE id=".$_GET['id'];
            }else{
            $sql= "INSERT INTO codeuses (nom,prenom,datenaissance,description,email,telephone,password,image)
             VALUES ('".mysqli_real_escape_string($link,$_POST['nom'])."',
                    '".mysqli_real_escape_string($link,$_POST['prenom'])."',
                    '".mysqli_real_escape_string($link,$_POST['datenaissance'])."',
                    '".mysqli_real_escape_string($link,$_POST['description'])."',
                    '".mysqli_real_escape_string($link,$_POST['email'])."', 
                    '".mysqli_real_escape_string($link,$_POST['telephone'])."',
                    '".mysqli_real_escape_string($link,md5($_POST['password']))."',             
                     '".mysqli_real_escape_string($link,$_FILES['image']['name'])."')";
                 }
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

     <title>MODIFICATION</title>
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
                                    <li><a href="cv.php">CREER CV</a></li>
                                    <li><a href="experience.php">EXPERIENCES</a></li>
                                    <li><a href="diplome.php">DIPLOMES</a></li>
                                    <li><a href="centreinteret.php">CENTRESINTERETS</a></li>
                                    </ul>-->
                                </li>
        
                            </ul>
                        </div>

                    </div>
                </nav>
                <br><br><br><br><br><br>  

         <nav class="navbar navbar1-default">
<div class="container">
    <div class="row">
        <div class="col-lg-3">
        <ol>
            <h5><a href="modification.php?id=<?php echo $_SESSION['variable']; ?>">Modifierprofil</a><br><br><br>
            <a href="cv.php?id=<?php echo $_SESSION['variable']; ?>">Creer cv</a><br><br><br>
            <a href="consultercv.php?id=<?php echo $_SESSION['variable']; ?>">Afficher votre cv</a><br><br><br>
            <a href="experience.php?id=<?php echo $_SESSION['variable']; ?>">Ajouter experience</a><br><br><br>
            <a href="diplome.php?id=<?php echo $_SESSION['variable']; ?>">Ajouter diplome</a><br><br><br>
            <a href="centreinteret.php?id=<?php echo $_SESSION['variable']; ?>">Ajouter centres interets</a></h5>
        </ol>
    </div>
    <div class="col-lg-3 col-offset-3"></div>
        <div class="col-lg-6">
              <form method="POST" enctype="multipart/form-data" class="form-group">
                <fieldset><legend style="color:blue ;"><h2>MODIFIER_PROFIL</h2></legend>
                     <label class="control-label">nom</label><br>
                    <input type="text" name="nom" class="form-control" id="" value="<?php if(isset($_GET['id'])) echo $datas['nom'];?>" placeholder="nom" required>
                    <label class="control-label">prenom</label><br>
                    <input type="text" name="prenom" class="form-control" id="" value="<?php if(isset($_GET['id'])) echo $datas['prenom'];?>" placeholder="prenom" required>
                    <label class="control-label">datenaissance</label><br>
                    <input type="date" name="datenaissance" class="form-control" id="" value="<?php if(isset($_GET['id'])) echo $datas['datenaissance'];?>" placeholder="" required>
                    <label class="control-label" class="form-control">resume</label><br>
                    <input type="text" name="description" class="form-control" id=""  value="<?php if(isset($_GET['id'])) echo $datas['description'];?>" placeholder="description" required>
                    <label class="control-label">email</label><br>
                    <input type="email" name="email" class="form-control" id=""  value="<?php if(isset($_GET['id'])) echo $datas['email'];?>" placeholder="email" required>
                    <label class="control-label" class="form-control">telephone</label><br>
                    <input type="text" name="telephone" class="form-control" id=""  value="<?php if(isset($_GET['id'])) echo $datas['telephone'];?>" placeholder="contact" required>
                    <label class="control-label"> password</label><br>
                    <input type="password" name="password" class="form-control" id="" value="<?php if(isset($_GET['id'])) echo $datas['password'];?>" placeholder="password" required>  
                    <label class="control-label" class="form-control">photo</label><br>
                   <input type="file" name="image" class="form-control" id="" value="<?php if(isset($_GET['id'])) echo $datas['image'];?>" placeholder="image" required><br>
                   <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>

               </fieldset> 
                               
         </form></div></div>
      </div>
    </nav>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
