<?php include('connexion.php');
	 
	$msg="";
	if (isset($_POST['btnValider'])){
		
			$sql= "INSERT INTO centreinteret (centre interet,description)
			 VALUES ('".($_POST['centre interet'])."',
			           '".($_POST['description'])."')";
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
	<title>centre d'interet</title>
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
									</ul>-->
								</li>
		
                            </ul>
                        </div>

                    </div>
                </nav>
                <br><br><br><br><br><br><br>
                <div class="container" style="background-color:#FFCCFF; ">

	<div class="col-lg-3">
		<ol><h4>
			<a href="modification.php">Modifierprofil</a><br><br>
			<a href="cv.php?id=<?php echo $_SESSION['variable']; ?>">Creer cv</a><br><br>
			<a href="consultercv.php?id=<?php echo $_SESSION['variable']; ?>">Afficher votre cv</a><br><br>
			<a href="experience.php?id=<?php echo $_SESSION['variable']; ?>">Ajouter experience</a><br><br>
			<a href="diplome.php?id=<?php echo $_SESSION['variable']; ?>">Ajouter diplome</a><br><br>
			<a href="centreinteret.php?id=<?php echo $_SESSION['variable']; ?>">Ajouter centres interets</a><br></h4>
		</ol>
	</div>
	<div class="col-lg-2 col-offset-2"></div>
	<div class="col-lg-7">
		<div class="col-lg-7">
	<form method="POST" class="form-group">
	<fieldset><legend>Ajouter Centres interets</legend><span> <?php echo $msg; ?> </span>
	<label class="control-label">centre d'interet</label><br>
	<input type="text" name="centre interet" class="form-control" id="" placeholder="centre interet" >
    <br>	
	<label class="control-label">Description</label><br>
	<input type="text" name="description" class="form-control" id="" placeholder="description" >
    <br>
	<button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
	</fieldset>

	</div>
</div>
<div class="row">
				<table class="table" >
					<thead>
						<tr>
							<th>Numero</th>
							<th>centre interet</th>
							<th>decription</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$n=1;
							$list=" SELECT * FROM centreinteret";
							$res= mysqli_query($link,$list);
							while ($data = mysqli_fetch_array($res))
								{ ?>
							<tr>
								<td> <?php echo $n; ?> </td>
								<td><?php echo $data['description']; ?></td>
								<td><?php echo $data['centre interet']; ?></td>

								<td>
								<a href="?id=<?php echo $data['id']; ?>">Modifier</a>
								<a href="?sup=<?php echo $data['id']; ?>">Supprimer</a>
							</td>
							</tr>
							<?php $n++;
						} ?>
					</tbody>
				</table>

			</div>
			


<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>