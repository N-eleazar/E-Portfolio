<!doctype html>
<html lang="fr">
  <head>
     <!--  Meta Link  -->
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>PortFolio V.2.0</title>
     
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--  CSS Files  -->
    <link rel="stylesheet" href="css_files/style.css">
  </head>
  <body>
  <div class="container-fluid">
    <div class="row scroll">
      <button id="button" class="btn">
        <img src="images\scrollTop.png" 
        alt="bouton Scroll Top"
        width="40px">
      </button>
    </div>
  <!--  HEADER  -->
  <!--  #TODO Reparer bug du menu defilant responsive  -->
  <header class="row bg-02">
    <nav class="navbar navbar-expand-md navbar-light bg-02"> 
      <div class="container-fluid">
        <div class="logo col-1"><img src="images/zozor_logo.png" alt=""></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <button class="btn btn-outline-secondary">
              <li class="nav-item">
                <a class="nav-link" href="#about">Présentation</a>
              </li>
            </button>
            <button class="btn btn-outline-secondary">
              <li class="nav-item">
                <a class="nav-link" href="#level">Mes Competences</a>
              </li>
            </button>
            <button class="btn btn-outline-secondary">
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Mes Realisations</a>
              </li>
            </button>
            <button class="btn btn-outline-secondary">
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </button>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- <hr> Bandeau -->
  <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.infosec-ups.com/media/Solutions/02-reseaux-et-serveurs/01-environnement-virtuel/header-env-virtuel-2220x680px72dpi.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.infosec-ups.com/media/Solutions/02-reseaux-et-serveurs/01-environnement-virtuel/header-env-virtuel-2220x680px72dpi.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.infosec-ups.com/media/Solutions/02-reseaux-et-serveurs/01-environnement-virtuel/header-env-virtuel-2220x680px72dpi.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>

  <!--  A PROPOS  -->
  <section class="row about bg-01" id="about">   
    <div class="col">
      <h1>Hello,<br>
      Je suis Eléazar<br>
      Developeur web / Front End.</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis exercitationem, sit iure, rem, beatae assumenda molestias nam soluta ad officia aliquam repellendus laboriosam sapiente consequuntur a dignissimos consectetur maxime atque.<br>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis exercitationem, sit iure, rem, beatae assumenda molestias nam soluta ad officia aliquam repellendus laboriosam sapiente consequuntur a dignissimos consectetur maxime atque.</p>
    </div>
    <div class="row myself">
      <div class="col">
        <p><img src="images/avatar_icon.png" alt="">Bienvenue sur mon site web. Je suis lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis exercitationem, sit iure, rem, beatae assumenda molestias nam soluta ad officia aliquam repellendus laboriosam sapiente consequuntur a dignissimos consectetur maxime atque.<br>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis exercitationem, sit iure, rem, beatae assumenda molestias nam soluta ad officia aliquam repellendus laboriosam sapiente consequuntur a dignissimos consectetur maxime atque.</p>
      </div>
    </div>
  </section>
  <!--  FRONT_END  -->
  <section class="row level-front bg-02" id="level">
    <h3>Mes Compétences Front</h3>
    <div class="parcours-wrapper">
      <?php
        include_once 'database/valeurs.php';
        $count = count($frontEnd);
        for ($i = 0; $i < $count; $i++) {
      ?>
      <div class="panel panel-front col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="panel-heading">
          <h4><?php echo $frontEnd[$i][0];?></h4>
        </div>
        <div class="panel-body">
          <div class="panel-body-img"></div>
        </div><hr>
        <div class="panel-module-footer">
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $frontEnd[$i][1];?>" 
              role="progressbar" 
              aria-valuenow="<?php echo $frontEnd[$i][2];?>" 
              aria-valuemin="0" 
              aria-valuemax="100" 
              style="width: <?php echo $frontEnd[$i][2];?>"></div>
          </div>
        </div>
      </div>
      <?php
          }
      ?>
    </div>
  </section>
  <!--  BACK_END  -->
  <section class="row level-back bg-01" id="level">
    <h3>Mes Compétences Back</h3>
    <div class="parcours-wrapper">
      <?php
        $count = count($backEnd);
        for ($i = 0; $i < $count; $i++) {
      ?>
        <div class="panel panel-front col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="panel-heading">
            <h4><?php echo $backEnd[$i][0];?></h4>
          </div>
          <div class="panel-body">
            <div class="panel-body-img"></div>
            </div><hr>
            <div class="panel-module-footer">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $backEnd[$i][1];?>" 
                  role="progressbar" 
                  aria-valuenow="<?php echo $backEnd[$i][2];?>" 
                  aria-valuemin="0" 
                  aria-valuemax="100" 
                  style="width: <?php echo $backEnd[$i][2];?>"></div>
              </div>
            </div>
          </div>
        <?php
            }
        ?>
    </div>
  </section>
  <!--  PORTFOLIO  -->
 <!-- TODO - effectuer l'affichage en responsive Mobile  -->
  <section class="row portfolio bg-02" id="portfolio">
    <div class="title"><h3>Mes Réalisations</h3></div>
    <div class="col">
      <div class="display">
        <div class="desktop">
          <iframe id="desktop" title="responsiv" src="">
          </iframe>
       </div>
      </div>
      <div class="menuSite">
        <button type="button" id="respBtn1" class="btn btn-secondary" onClick="displayProject('site1')">Portfolio</button>
        <button type="button" id="respBtn2" class="btn btn-secondary" onClick="displayProject('site2')">Cristal{ID}</button>
        <button type="button" id="respBtn3" class="btn btn-secondary" onClick="displayProject('site3')">Jacek jeznach</button>
        <button type="button" id="respBtn4" class="btn btn-secondary" onClick="displayProject('site4')">Lorem Photos</button>
        <button type="button" id="respBtn5" class="btn btn-secondary" onClick="displayProject('site5')"></button>
      </div>
    </div>
  </section>
  <!-- CONTACT -->
  <section class="row contact bg-01" id="contact">
    <div class="title"><h3>Me Contacter</h3></div>
    <div class="col col-4">
      <p>Je suis intéressé par les opportunités de freelance.<br> 
      Cependant, si vous avez d'autres demandes ou questions,<br>
      n'hésitez pas à utiliser le formulaire.</p>
    </div>
    <div class="col col-6">
      <div class="m-form">
        <form id="register-form">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="input-action">
            <button type="submit">Envoyer</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- FOOTER -->
  <footer class="row bg-02">
    <p class="copyright">Company Name © 2021</p>
  </footer>
</div>    
 <!--  JS Files  -->
<script src="js_files/scrollTop.js"></script>
<script src="js_files/responsiv.js"></script>
  <noscript>
    <p>Merci d'activer JavaScript afin de pouvoir bénéficier de toutes les fonctionnalités de notre site.</p>
  </noscript>
</body>
</html>
  </div>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>