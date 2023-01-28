<?php 

$nom = $_POST['nom'];
$tel = $_POST['tel'];
$localite = $_POST['choix'];
$mail = $_POST['mail'];
$typeDelocal = $_POST['choixTL'];

$header="MIM-version: 1.0\r\n";
$header.='From:Client<support@terou.biz>'."\n";
$header.='content-Type:text/html; charset="utf-8"'."\n";
$header.='content-Transfer-Encoding: 8bit';

$message='
<html>
<body>
	<div aligne="center">
		DEMANDE DE CHAMBRE DU VISITEUR:  
	</div>
</body>
</html>
'.$nom.' <html>
<body style="background-image= url(img/h.jpg)">
	<div aligne="center">
		DE SON ADDRESS MAIL:   
	</div>
</body>
</html>'.$mail.'<html>
<body>
	<div aligne="center">
		POUR LA LOCALITE:   
	</div>
</body>
</html>'.$localite;

mail("blaize.gomis@uvs.edu.sn", "demande", $message, $header);


?>
<!-- ----------------------------------------------------------PARTIE HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/retourPostNormal.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 1280px)" href="style/retourPost.css">
    <title>DEMANDE RECU</title>
</head>
    <body style="background-image: url(img/tof.jpg);  background-repeat: no-repeat; background-size: 100%;">
        <img src="img/l1.png" width="150" >
        <a href="index.php" style="float: right; border: 2px solid orangered; box-shadow: 5px 5px 10px orangered;"><button style="width: 200px; height: 100px; background-color: transparent; color: white;">
        RETOURNER A L'ACCUEIL</button></a>
        
        <div class="div-gerneral">
         <div class="sousG" style=" border: 2px solid white; text-align: center; background-color: white;">
            <?php echo $typeDelocal?> DEMANDER<br> PAR Mr/Mm <?php echo $nom ?><br>MERCI DE VOTRE VISITE<br>ET VEILLEZ RESTER A L'ECOUTE
         </div>
      </div>
    </body>
</html> 