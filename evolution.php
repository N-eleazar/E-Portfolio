<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Mon PortFolio</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <div class="container-fluid">

      <header>
        <div class="row">
         <!--  <div class="col">
            <img 
              src="https://picsum.photos/1800/600" 
              alt="BANNIERE"
              >
          </div> -->
        </div>
      </header>

      <nav>
        <div class="row">
          <div class="bandeau">
            <div class="col-4">
              <div class="logo">
                <img 
                  src="/images/zozor_logo.png" 
                  alt="Logo+Title">
              </div>
            </div>

            <div class="col-xl-8 col-6">
              <div class="navbar navbar-expand-xl navbar-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Menu</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="roadmap.php">RoadMap</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="evolution.php">Evolution</a>
                      </li>
                    </ul>
                    <!-- <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <section>
        <article>
            <?php 
                require 'valeurs.php'; 
                require 'mon_evolution.php'; 
            ?>
        </article>
      </section>

      <footer>
        <div class="row">
          <div class="col">
            <div class="evolution">
              <div class="row">
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>   <!-- Fin Container -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
