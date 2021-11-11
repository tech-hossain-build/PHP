<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD with Apache only</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container my-3">
      <?php require('action.php'); noblank(); ?>
      <form action="index.php" method="POST">
        <div class="mb-3">
          <label for="note" class="form-label">Note Title</label>
          <input type="form-text" class="form-control" id="title" name="title">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <textarea class="form-control" placeholder="Put Description here" id="desc" name="desc" rows="3"></textarea>
          <label for="desc">Note Description</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Note</button>
      </form>
    </div>

    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">S/N</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Time</th>
          </tr>
        </thead>
        <tbody>
        <?php

          $dir    = 'data';
          $files = scandir($dir);

          $files = array_diff($files, array('.', '..'));
          $files = array_values($files);
          $arr = count($files);

          for ($x = 0; $x < $arr; $x++) {
            //echo file_get_contents("data/".$files[$x])."<br>";
            $a = trim(str_replace(".txt","",$files[$x]));
            $b = file_get_contents("data/".$files[$x]);
            $c = $x+1;
        ?>

          <?php   echo "<tr>";
                  echo '<th scope="row">'.$c.'</th>';
                  echo "<td>".$a."</td>";
                  echo "<td>".$b."</td>";
                  echo "</tr>";
          } ?>

        </tbody>
      </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>