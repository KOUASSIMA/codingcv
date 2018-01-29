<?php
include('connexion.php');
 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LOGIN</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
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

				<div class="col-md-3"> 
				</div>
				<div class="col-md-3">

					<form action="" method="POST" role="form">
						<legend>Se connecter</legend>

						<div class="form-group">
							<label for="">EMAIL</label>
							<input type="email" name="email" class="form-control" id="" placeholder="Exemple@email.com">
						</div>

						<div class="form-group">
							<label for="">MOT DE PASSE</label>
							<input type="password" name="password" class="form-control" id="" placeholder="Saisir le mot de passe">
						</div>
					
						<button type="submit" name="btnValider" class="btn btn-primary">Submit</button>
					</form>
					<?php if (isset($_POST['btnValider']) ){
								$sql="SELECT * FROM codeuses WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."' AND password='".mysqli_real_escape_string($link, md5($_POST['password']))."' LIMIT 0,1";
								$req= mysqli_query($link, $sql);
								if (mysqli_num_rows($req)>0) {
									$data= mysqli_fetch_array($req);
									$_SESSION['variable']=$data['id'];
									header('location:accueil.php');
								}else{
									echo "identifiants incorrects";
								}
						} ?>
					<br>
						<span>Vous n'avez pas encore de compte? inscrivez-vous </span><a href="inscription.php"> <button type="submit" class="btn btn-warning"> S'inscrire </button></a>
				</div>
				<div class="col-md-3"></div>

			</div>

		</div>

		<!-- jQuery -->
		<script src=""></script>
		<!-- Bootstrap JavaScript -->
		<script src=""></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>