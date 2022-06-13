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
      <div class="cards">
        <div class="card">
          <h2>Item 1</h2>
          <div class="title">
            <div class="changeTitle">
              Changer titre
            </div>
            <input type="text" id="title" name="title" placeholder="titre">
          </div>
  
          <div class="toShow">
            Afficher l'item 1
            <label class="switch">
              <input type="checkbox" />
              <span class="slider round"></span>
            </label>
          </div>
        </div>
  
        <div class="card">
          <h2>Item 2</h2>
          <div class="title">
            <div class="changeTitle">
              Changer titre
            </div>
            <input type="text" id="title" name="title" placeholder="titre">
          </div>
  
          <div class="toShow">
            Afficher l'item 2
            <label class="switch">
              <input type="checkbox" />
              <span class="slider round"></span>
            </label>
          </div>
        </div>
  
        <div class="card">
          <h2>Item 3</h2>
          <div class="title">
            <div class="changeTitle">
              Changer titre
            </div>
            <input type="text" id="title" name="title" placeholder="titre">
          </div>
  
          <div class="toShow">
            Afficher l'item 3
            <label class="switch">
              <input type="checkbox" />
              <span class="slider round"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="menu.js"></script>
</html>
