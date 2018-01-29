
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

	 <title> CV</title>
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
									</ul>
								</li>
		
                            </ul>
                        </div>

                    </div>
                </nav>
                <br><br><br><br><br>

       <div class="row"><!--Presentation de la codeuse -->
			<h1 class="text-center">CV</h1>
		</div>
			<div class="container-fluid"><div class="col-lg-1"></div>
			<div class="col-md-10 col-xs-12">
				<table>
					<?php
						$cod=1;
						$sql="SELECT o.*, specialisation FROM codeuses o INNER JOIN cv v ON o.id=v.id_codeuses WHERE o.id=".$_GET['id'];
						//$sql="SELECT * FROM codeuses";
						$res=mysqli_query($link, $sql);
						while($data=mysqli_fetch_array($res)){?>
							<tr>
								<td><?php echo $data['nom']." ".$data['prenom'];?><br><?php echo "Née le : ".$data['datenaissance'];?></td>
								<td style="text-align: center;"><?php echo $data['description']; ?></td>
								<td><img src="upload/<?php echo $data['image'];?>" alt="Photo de la codeuse" class="avatar"><br><?php echo "<strong>".$data['specialisation']."</strong>"; ?><br>
								<a href="<?php echo $data['facebook'] ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="<?php echo $data['twitter']; ?>"><i class="fa fa-twitter"></i></a>
								<a href="<?php echo $data['github']; ?>"><i class="fa fa-github"></i></a>
								</td>
							</tr>
						<?php	
						$cod++;
						}

					?>
				</table>
			
				<h2>Mes expériences</h2><!-- Listes des experiences -->
				<table>
				<?php
						$cod=1;
						$sql="SELECT o.*, datedeb, datefin, poste FROM codeuses o INNER JOIN experiences e ON o.id=e.id_codeuses WHERE o.id=".$_GET['id'];
						//$sql="SELECT * FROM codeuses";
						$res=mysqli_query($link, $sql);
						while($data=mysqli_fetch_array($res)){?>
							<tr>
								<td>
									<?php echo "<strong>Du ".$data['datedeb']." au ".$data['datedeb']."</strong>"; ?></td>
								<td><?php echo $data['poste']; ?></td>
							</tr>
						<?php	
						$cod++;
						}

					?>
				</table>
				<h2>Mes Diplômes</h2><!-- Listes des diplomes obtenus -->
				<table>
				<?php
						$cod=1;
						$sql="SELECT o.*, annee, libelle, ecole FROM codeuses o INNER JOIN diplomes d ON o.id=d.id_codeuses WHERE o.id=".$_GET['id'];
						//$sql="SELECT * FROM codeuses";
						$res=mysqli_query($link, $sql);
						while($data=mysqli_fetch_array($res)){?>
							<tr>
								<td style="text-align: center;"><?php echo "<strong>".$data['annee']."</strong>"; ?></td>
								<td><?php echo $data['libelle']; ?></td>
								<td><?php echo $data['ecole']; ?></td>
							</tr>
						<?php	
						$cod++;
						}

					?>
				</table>
				<h2>Mes centres d'intérêt</h2><!-- Listes des centres d'interet -->
				<ol>
				<?php
						$sql="SELECT o.*, titre, description FROM codeuses o INNER JOIN interet i ON o.id=i.id_codeuses WHERE o.id=".$_GET['id'];
						$res=mysqli_query($link, $sql);
						while($data=mysqli_fetch_array($res)){?>
								<li><?php echo $data['titre']." : ".$data['description']; ?></li>
						<?php	
						$cod++;
						}

					?>
				</ol>
			</div>
		</div>	


    </body>  
</html> 
