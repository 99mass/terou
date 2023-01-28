<?php
	require_once('model/model1.php');

		function home(){

			require_once('views/home.php');
		}
		function chambre(){

			require_once('views/localeChambre.php');
		}
		function appart(){

			require_once('views/localeApparte.php');
		}
		function maison(){

			require_once('views/localeMaison.php');
		}
		function hotel(){

			require_once('views/localeHotel.php');
		}

		// ------------------------------------------------------METHODE DES FORMULAIRE------------------------------------

		function formChambre(){

			require_once('views/demande/validerC.php');
		}
		function formAppart(){

			require_once('views/demande/validerAp.php');
		}
		function formMaison(){

			require_once('views/demande/validerM.php');
		}
		function formHotel(){

			require_once('views/demande/validerH.php');
		}

		//------------------------formulaire de demande

		function demande(){

			require_once('views/poste/poster.php');
		}