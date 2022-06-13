<?php require_once 'index.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Dashboard</title>
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
      <h1>Panneau de contrôle</h1>
    </nav>

    <div class="container">
      <form action="dashboard.php" method="post">
        <div class="cards">
          <div class="card">
            <?php getName($conn, 1); ?>
            <div class="title">
              <div class="changeTitle">
                Changer titre
              </div>
              <input type="text" name="title1" id="title1" placeholder="Nouveau titre">
            </div>

            <div class="toShow">
              Afficher l'item 1
              <?php checkButton($conn, 1); ?>
            </div>
          </div>

          <div class="card">
            <?php getName($conn, 2); ?>
            <div class="title">
              <div class="changeTitle">
                Changer titre
              </div>
              <input type="text" name="title2" id="title2" placeholder="Nouveau titre">
            </div>

            <div class="toShow">
              Afficher l'item 2
              <?php checkButton($conn, 2); ?>
            </div>
          </div>

          <div class="card">
            <?php getName($conn, 3); ?>
            <div class="title">
              <div class="changeTitle">
                Changer titre
              </div>
              <input type="text" name="title3" id="title3" placeholder="Nouveau titre">
            </div>

            <div class="toShow">
              Afficher l'item 3
              <?php checkButton($conn, 3) ?>
            </div>
          </div>
        </div>
        <input name="submit" id="submit" type="submit" value="Enregistrer">
        <?php update($conn); ?>
      </form>
    </div>
  </body>
  <script src="menu.js"></script>
</html>