<?php

require_once "auth.php";
require_once "fishes.php";

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
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-center">
    <div class="container-fluid">
      <a class="navbar-brand" href="/poissonnerie">Poisson frais</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Connection
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <form action="" method="post" class="form-group p-2">
                  <input type="text" name="username" class="mb-2">
                  <input type="password" name="password" class="mb-2">
                  <button type="submit" class="btn btn-primary mb-2">Se connecter</button>
                  <?= $error; ?>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="mt-5 d-flex">
      <form><button type="submit" name="type" value="douce" class="btn btn-primary m-1">eau douce</button></form>
      <form><button type="submit" name="type" value="mer" class="btn btn-secondary m-1">eau de mer</button></form>
      <a class="btn btn-info m-1" href="/poissonnerie">tous les poissons</a>
    </div>

    <div class="row">
      <?php echo $page; ?>
    </div>

  </div>
</body>

</html>