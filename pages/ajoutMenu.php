<?php

require '../fonction/functionsComplete.php';

$restaurant = getAllresto();
    

	if((!empty($_POST))){

	 $result = false;
    
     @$name = $_POST['nom'];	 
     @$prix = $_POST['prix'];
     @$resto = $_POST['resto'];
   

 $result = addMenu($name,$prix,$resto);
	
		     if ($result) {
				# code...			
					
					header('Location:espaceadmin');
				    exit();
			 }else{
				 echo 'echec BD';
			 }

 //     if(in_array($extension,$extensions) && $size <= $maxSize && $error == 0){

	// 	// unicite du ficher uploader
	// 	@$unique =uniqid('',true);
	// 	@$photoName = $unique.".".$extension;
	
	// 	if (move_uploaded_file($tmpPhoto, './upload/'.$photoName)) {
	// 	     $result = addResto($name,$photoName,$addr,$proprietaire,$mail,$service,$autre);
	
	// 	     if ($result) {
	// 			# code...			
					
	// 				header('Location:../index.php');
	// 			    exit();
	// 		 }

	// 	}else {
	// 			# code...
	// 			// @$error = "une erreur s'est produit lors de l'ajout du restaurant";
	// 	}

	// 	}
	// }
	}	

	
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ajouter menu</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../css/ajoutresto/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('../images/logo/foodstore.png');">
			<div class="inner">
				<div class="image-holder">
					<img src="../images/logo/foodstore.png" alt="">
				</div>
				<form action="" method="POST" > 
					<h3>Ajouter un Menu</h>
					<div class="form-group">
						<input type="text" placeholder="Nom du Menu" class="form-control" name="nom">
						<input type="number" placeholder="Prix" class="form-control" name="prix">
					</div>
					
					<div class="form-wrapper">
                        
						<select name="resto" id="" class="form-control">
                        <?php foreach($restaurant as $resto): ?>
                            <option value="<?= $resto['id']?>" ><?= $resto['nom']?></option>
                        <?php endforeach ?>
							
							
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					
					<button>AJOUTER
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>