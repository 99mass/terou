<?php
/*/*

// ini_set('Controller/controlle2.php', '/home/terou/php:' . ini_get('Controller/controlle2.php') );
	require_once('controller/controlle1.php');
	// require_once('Controller/controlle2.php');
	ini_set('Controller/controlle2.php','/home/terou/php:' . ini_get('Controller/controlle2.php'));
    //require_once('model1.php');
	 ini_set('model1.php','/home/terou/php:' . ini_get('model1.php'));
	// ini_set('model/modelX.php','/home/terou/php:' . ini_get('model/modelX.php'));
 	 require_once('model/modelX.php');

*/

//  	 ini_set('controller/controlle1.php', '/home/terou/php' .ini_get('controller/controlle1.php'));
        require_once('controller/controlle1.php');
 	 ini_set('controller/controlle2.php', '/home/terou/php' . ini_get('controller/controlle2.php'));
	 // require_once('Controller/controlle2.php');
	 //ini_set('model/model1.php', '/home/terou/php' . ini_get('model/model1.php'));
	require_once('model/model1.php');
	 require_once('model/modelX.php');


		if (isset($_GET['demande']) || isset($_POST['envoie'])|| isset($_GET['louer']) || isset($_POST['valider']) || isset($_POST["POSTER"])) {
				
				if (isset($_GET['demande'])) {
					if ($_GET['demande'] == 'c') {
					demande();  // chambre();
				}elseif ($_GET['demande'] == 'a') {
					demande();  // appart();
				}elseif ($_GET['demande'] == 'm') {
					demande();  // maison();
				}elseif ($_GET['demande'] == 'h') {
					demande();  // hotel();
				}
			}
			
//---------------------------------------SELECTIONDES LOCAL	---------------------------


			if (isset($_POST['choix'])) {
//-------------------------------------------------------------------------------KEUR MASSAR---------------------------
					if ($_POST['choix'] == 'keur_massar_C') {
					getKeurMassarChambre();
				}elseif ($_POST['choix'] == 'keur_massar_A') {
					getKeurMassarAppart();
				}elseif ($_POST['choix'] == 'keur_massar_M') {
					getKeurMassarMaison();
				}elseif ($_POST['choix'] == 'keur_massar_H') {
					getKeurMassarHotel();
//------------------------------------------------------------------------------GUEDIAWAYE----------------------------
				}elseif($_POST['choix'] == 'Guediawaye_C'){
					getGuediawayeChambre();
				}elseif($_POST['choix'] == 'Guediawaye_A'){
					getGuediawyeApparte();
				}elseif($_POST['choix'] == 'Guediawaye_M'){
					getGuediawyeMaison();
				}elseif($_POST['choix'] == 'Guediawaye_H'){
					getGuediawyeHotel();
//-----------------------------------------------------------------------------PIKINE----------------------------
				}elseif($_POST['choix'] == 'Pikine_A'){
					getPikineApparte();
				}elseif($_POST['choix'] == 'Pikine_C'){
					getPikineChambre();
				}elseif($_POST['choix'] == 'Pikine_M'){
					getPikineMaison();
				}elseif($_POST['choix'] == 'Pikine_H'){	
					getPikineHotel();
//--------------------------------------------------------------------------------PARCELLE----------------------------
				}elseif($_POST['choix'] == 'Parcelle_A'){
					getParcelleApparte();
				}elseif($_POST['choix'] == 'Parcelle_C'){
					getParcelleChambre();
				}elseif($_POST['choix'] == 'Parcelle_M'){
					getParcelleMaison();
				}elseif($_POST['choix'] == 'Parcelle_H'){
					getParcelleHotel();
//--------------------------------------------------------------------------------VILLE----------------------------
				}elseif($_POST['choix'] == 'Ville_A'){				
					getVilleApparte();
				}elseif($_POST['choix'] == 'Ville_C'){
					getVilleChambre();
				}elseif($_POST['choix'] == 'Ville_M'){
					getVilleMaison();
				}elseif($_POST['choix'] == 'Ville_H'){
					getvilleHotel();
				}
			}
			
//-----------------------------PARTI VALIDER SERVICE----------------------------------------------------------


				if (isset($_GET['louer'])) {
					if ($_GET['louer'] == 'ok_c') {
						formChambre();
					}elseif ($_GET['louer'] == 'ok_ap') {
						formAppart();
					}elseif ($_GET['louer'] == 'ok_m') {
						formMaison();
					}elseif ($_GET['louer'] == 'ok_h') {
						formHotel();
					}
				}

//-------------------------PARTI VALIDER SERVICE SUITE----------------------------------------------------------

		if (isset($_POST['nom'])&& isset($_POST['choixTL'])&& isset($_POST['tel'])&&isset($_POST['mail']) &&isset($_POST['choix'])) {
		
			$nom = $_POST['nom'];
			$tel = $_POST['tel'];
			$localite = $_POST['choix'];
			$typeDelocal = $_POST['choixTL'];							
			$mail = $_POST['mail'];

			recupererDemande($nom,$tel,$localite,$typeDelocal,$mail);
			// recupererDonnee($nom,$tel,$localite,$typeDelocal,$mail);

		}




		}else{
			home();
		}


