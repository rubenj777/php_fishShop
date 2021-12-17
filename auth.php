<?php

$users = [
    [
        "username" => "julien",
        "password" => "f4585a3138607b53b00eb8cf0b1a27d1"
    ],
    [
        "username" => "abdel",
        "password" => "9f6cf82deb99289e14aea9dcc24e54cb"
    ],
    [
        "username" => "marie",
        "password" => "3e68052c6a8d5ebdf5f5b98c805b508f"
    ],
    [
        "username" => "gislain",
        "password" => "f8d5337cb3047dc21f6342c6f21ca0a4"
    ],
    [
        "username" => "thomas",
        "password" => "3f0cff1d3cc4642e15835d7304d453cc"
    ]
];

$salt = "45sdfç6za_r-6s*dq!66pqémmà)894fsd;f";
$error = "";
$isLoggedIn = false;
$emptyField = "<p class='text-center error' style='color:red'>veuillez renseigner tous les champs</p>";
$unknownUser = "<p class='text-center error' style='color:red'>user inconnu</p>";
$wrongPass = "<p class='text-center error' style='color:red'>mauvais password</p>";



if ((isset($_POST['username']) && isset($_POST['password'])) && (!empty($_POST['username']) && !empty($_POST['password']))) {
    $userExists = false;
    $password;
    foreach ($users as $user) {
        if ($_POST['username'] == $user['username']) {
            $secret = "<h2 class='text-center'>salut " . $user['username'] . " !</h2>";
            $userExists = true;
            $password = ($user['password'] . $salt);
        }
    }
    if ($userExists) {
        if ($password == md5($_POST['password']) . $salt) {
            $isLoggedIn = true;
        } else {
            $error = $wrongPass;
        }
    } else {
        $error = $unknownUser;
    }
} else {
    $error = $emptyField;
}
