<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>DEMANDE LOCAL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/posteStyle.css">
  <link rel="stylesheet" media="screen and (max-width: 1280px)" href="style/XpetitPost.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<!-------------------------------------------------------HEEEEAAAAAAADERRRRR----------------------------------------->
<header class="he bg-dark">
         <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <img src="img/l1.png" width="100px" height="100px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2">
        <li class="nav-item">
          <a class="nav-link" href="index.php">ACCUEIL</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            L'équipe
          </a>
          <ul class="dropdown-menu ms-auto" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">AÏSSATA</a></li>
            <li><a class="dropdown-item" href="#">SAMBA</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">NDEYE MAREME</a></li>
            <li><a class="dropdown-item" href="#">CHEIKH</a></li>
            <li><a class="dropdown-item" href="#">MAÏMOUNA</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">BLAIZE</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            NOUS CONTACTER
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">786056981</a></li>
            <li><a class="dropdown-item" href="#">777375541</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">779259926</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<marquee><h1>BIENVENUE CHEZ NOUS!!! TROUVE TON LOCALE EN QUELQUE CLIQUE</h1></marquee>
</header>
<!-------------------------------------------------------SECCCCCCTIONNNN----------------------------------------->
<section style="background-image: url('img/h.jpg'); background-repeat: no-repeat; background-size:100% 500px; height: 500px;">
    <div id="orde" style="width: 100%;">
      <div class="contenue">
      <span class="text">
        TOUT NOS LOCAUX SONT OCCUPES.<br>
    MERCI DE LAISSER VOTRE DEMANDE<br>
    ON VOUS CONTACTERA UNE FOIS UN LOCAL LIBRE
      </span>
      </div>
      <div class="contenue">
        <span class="text">
          

          <form method="POST" action="index.php" style="border: 2px solid transparent; box-shadow: 5px 5px 10px orangered;">
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">PRENOM</label>
          <input type="text" class="form-control" name="nom" id="exampleInputName" aria-describedby="emailHelp" style="background-color: transparent; color: white;" >
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ADRESSE MAIL</label>
          <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PAS OBLIGATOIRE" style="background-color: transparent; color: white;">
        </div>
        <div class="mb-3">
          <label for="exampleInputTel" class="form-label">TELEPHONE</label>
          <input type="tel" class="form-control" name="tel" id="exampleInputTel" style="background-color: transparent; color: white;" required="mettez un numero svp">
        </div>
        <div class="input-group">
                    <select style="width: 190px;" name="choixTL">   <!-- TL= Type de Local-->
                        <option value="localité">type de Local</option>
                        <option value="CHAMBRE">CHAMBRE</option>
                        <option value="APPARTEMENT">APPARTEMENT</option>
                        <option value="STUDIOT">STUDIOT</option>
                        <option value="MAISON">MAISON</option>
                    </select> 
                </div>
        <div class="input-group">
                    <select style="width: 190px;" name="choix">
                        <option value="localité">Localités</option>
                        <option value="Guediawaye">Guédiawaye</option>
                        <option value="Pikine">Pikine</option>
                        <option value="PA">Parcelle</option>
                        <option value="KM">Keur Massar</option>
                        <option value="Touwn">Ville</option>
                    </select> 
                </div><br>
                <button type="submit" class="btn btn-primary" name="POSTER" style="float: left;">DEMANDE</button>
      </form>



        </span>
      </div>
    </div>
</section>
<!-----------------------------------------------FOOOOOOOTEEEEEERRRRRR----------------------------------------->
<hr style="background-color: transparent;">
<hr style="background-color: transparent;">
<hr style="background-color: transparent;">
<hr style="background-color: transparent;">

<footer>
  <div class="container">

    <div class="dff">
      <a href="#">
      Retrouver nous sur Twitter pour partager avec nous vos commentaires sur nos differents services
      </a>
    </div class="dff">

    <div class="dff">
      <a href="#">Retrouver nous sur facebook pour partager avec nous vos avis sur nos differents activités
      autour de l'idéation et de l'innovation des differents secteurs de developpement 
      </a>  
    </div>

    <div class="dff">
      <a href="#">
        Retrouver nous sur Instagram pour suivre et vivre avec nous tout les moments
        immortalisés de l'équipe Térou
      </a>
    </div>

  </div>
  <a href="index.php"><button class="bout">ACCUEIL</button></a> 
</footer>
<!--------------------------------------------Aîssata---------------------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!--------------------------------------------my scripte---------------------->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

<!--    

--->
