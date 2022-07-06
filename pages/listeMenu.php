<?php
require '../fonction/functionsComplete.php';
$id=$_GET['id'];

$restaurant = getResto($id);

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8"/>
    <title>Menu</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="./fontawesome/css/all.min.css"/>
    <meta name="viewport" content="initial-scale=1"/>    
</head>

<body>
    <div class="header">
        <a href="index.html"><i class="fas fa-arrow-left fa-big"></i></a><div class="logo1"><img src="../images/logo/ohmyfood@2x.svg" alt="logo"/></div>        
    </div>
    <?php foreach($restaurant as $resto): ?>

    <figure class="img">
    <img src="../images/restaurants/<?= $resto['images']?>" alt="palettedugout"/>
        <figcaption><?= $resto['nom']?><div class="heart"><i class="far fa-heart"></i><i class="fas fa-heart"></i></div></figcaption>
    </figure>
    <?php 
    $menus= getMenu($resto['id']);
    foreach($menus as $menu): ?>
   <p>
       <?php echo $menu['libelle']?>
       <?php echo $menu['prix_total']?>
   </p>
   <?php endforeach ?>
   <?php endforeach ?>
    <footer>
        <div class="logo2"><?= $resto['nom']?></div>
        <ul>
            <li><a href="ajoutMenu.php"><i class="fas fa-utensils fa-xs"></i> Proposer un Menu</a></li>
            <li><a href="#"><i class="fas fa-hands-helping fa-xs"></i> Devenir Partenaire</a></li>     
            <li><a href="#">Mentions légales</a></li>
            <li><a href="mailto:ohmyfood@gmail.com">Contact</a></li>
        </ul>
    </footer>

</body>

</html>