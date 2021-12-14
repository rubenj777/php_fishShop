<?php

$poissons = [
  [
    "nom" => "colin",
    "description" => "c'est un poisson gentil",
    "prix" => 42,
    "image" => "colin.png"
  ],

  [
    "nom" => "carpe",
    "description" => "un bon poisson mais un peu con",
    "prix" => 13,
    "image" => "carpe.png"
  ],

  [
    "nom" => "cabillaud",
    "description" => "le roi des poissons surgelés",
    "prix" => 13,
    "image" => "cabillaud.png"
  ],

  [
    "nom" => "piranha",
    "description" => "bonjour le poisson",
    "prix" => 1654,
    "image" => "piranha.png"
  ]
];

$templateCard = "";

foreach ($poissons as $poisson) {

  $templateCard .= "<div class='card col-4 mt-5' style='width: 20rem'>
        <img src='img/{$poisson['image']}' class='card-img-top' alt='...' />
        <div class='card-body'>
          <h5 class='card-title'>{$poisson['nom']}</h5>
          <p class='card-text'>{$poisson['description']}</p>
          <p class='card-text'>{$poisson['prix']}€/kilo</p>
          <a href='#' class='btn btn-primary'>Acheter</a>
        </div>
      </div>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Poissonnerie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Poisson frais</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Boutique
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Poissons</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row justify-content-between">
      <?php
      echo $templateCard;
      ?>
    </div>
  </div>
</body>

</html>