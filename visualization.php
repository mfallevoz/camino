<?php require_once 'index.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Visualization</title>
</head>
<body>
    <nav class="navbar" role="navigation">
      <ul class="navbar__links">
        <li class="navbar__link"><a href="dashboard.php">Dashboard</a></li>
        <li class="navbar__link"><a href="visualization.php">Visualization</a></li>
      </ul>
      <button class="burger">
        <span class="bar"></span>
      </button>
      <h1>Visualisation</h1>
    </nav>

    <div class="container">
        <div class="visualizer">
          <?php getNames($conn) ?>
        </div>
    </div>
</body>
<script src="menu.js"></script>
</html>