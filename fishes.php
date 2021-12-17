<?php

$poissons = [
    [
        "nom" => "colin",
        "description" => "c'est un poisson gentil",
        "prix" => 42,
        "image" => "colin.jpg",
        "eau" => "mer",
        "protege" => false
    ],

    [
        "nom" => "carpe",
        "description" => "un bon poisson mais un peu con",
        "prix" => 13,
        "image" => "carpe.jpg",
        "eau" => "douce",
        "protege" => false
    ],

    [
        "nom" => "cabillaud",
        "description" => "le roi des poissons surgelés",
        "prix" => 13,
        "image" => "cabillaud.jpg",
        "eau" => "mer",
        "protege" => false
    ],

    [
        "nom" => "truite",
        "description" => "presque aussi bon que le saumon",
        "prix" => 16,
        "image" => "truite.jpg",
        "eau" => "douce",
        "protege" => false
    ],

    [
        "nom" => "artichaut",
        "description" => "oups !",
        "prix" => 0.2,
        "image" => "artichaut.jpg",
        "eau" => "douce",
        "protege" => false
    ],

    [
        "nom" => "dauphin",
        "description" => "joue au flipper",
        "prix" => 5648,
        "image" => "dauphin.jpg",
        "eau" => "mer",
        "protege" => true
    ],

    [
        "nom" => "requin-marteau",
        "description" => "roi du bricolage",
        "prix" => 68433,
        "image" => "requinmarteau.jpg",
        "eau" => "mer",
        "protege" => true
    ]
];


$type = false;

if (isset($_GET['type'])) {
    $type = $_GET['type'];
}

$page = "";

foreach ($poissons as $poisson) {
    $templateCard = "<div class='card col-4 mt-5 mx-3' style='width: 20rem'>
        <img src='img/{$poisson['image']}' class='card-img-top fishPic' alt='...' />
          <div class='card-body'>
          <h5 class='card-title'>{$poisson['nom']}</h5>
          <p class='card-text'>{$poisson['description']}</p>
          <p class='card-text'>{$poisson['prix']}€/kilo</p>
          <a href='#' class='btn btn-primary'>Acheter</a>
        </div>
      </div>";
    if ((!$type || $type == $poisson['eau']) && (!$poisson['protege'])) {
        $page .= $templateCard;
    } elseif ($isLoggedIn && $poisson['protege']) {
        $page .= $templateCard;
    }
}
