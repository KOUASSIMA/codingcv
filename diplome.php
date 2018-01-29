<?php include('connexion.php');

	 
	$msg="";
	if (isset($_POST['btnValider'])){
		
			$sql= "INSERT INTO diplomes (dateobtention,libelle,etablissement)
			 VALUES ('".($_POST['dateobtention'])."',
			        '".($_POST['libelle'])."',			        
			 		 '".($_POST['etablissement'])."')";
			$result=mysqli_query($link,$sql);
			if ($result) {
				$msg='Insertion reussie';
			}else{
				$msg=mysqli_error($link);
			}
		}




 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>diplome</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
                <div class="container" style="background-color: #FFCCFF;">

	<div class="col-lg-2">
		<ol>
			<h5><a href="modifierpp.php">Modifier profil</a><br><br><br>
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
				<fieldset><legend>Ajouter Diplome</legend><span>tous les champs sont obligatoires</span></fieldset>
	     <label>dateobtention</label>
	     <input type="date" name="dateobtention" class="form-control">
	     <label>libelle</label>
	     <input type="text" name="libelle" class="form-control" id="" placeholder="libelle" >
	     <label>etablissement</label>
	     <input type="text" name="etablissement" class="form-control" id="" placeholder="etablissement" >
	     <br>
         <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
        
		</form>
	</div>
</div>
<div class="row">
				<table class="table" >
					<thead>
						<tr>
							<th>Numero</th>
							<th>dateobtention</th>
							<th>libelle</th>
							<th>etablissement</th>
							<th>Modifier</th>
						    <th>Supprimer</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$n=1;
							$list=" SELECT * FROM diplomes";
							$res= mysqli_query($link,$list);
							while ($data = mysqli_fetch_array($res))
								{ ?>
							<tr>
								<td><?php echo $n; ?> </td>
								<td><?php echo $data['dateobtention']; ?></td>
								<td><?php echo $data['libelle']; ?></td>
								<td><?php echo $data['etablissement']; ?></td>
								<td><a href="?id=<?php echo $data['id']; ?>">Modifier</a></td>
							<td><a href="?sup=<?php echo $data['id']; ?>">Supprimer</a></td>
							</tr>
							<?php $n++;
						} ?>
					</tbody>
				</table>

			</div>
</div>


<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>