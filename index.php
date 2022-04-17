<!DOCTYPE html>
<html lang="fr">
<head>
 <!--  Meta Link  -->
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>PortFolio V.2.0</title>
 <!--  CSS Files  -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
  <!-- <hr>header -->
<header class="row bg-02">
  <nav class="navbar navbar-expand-md navbar-light bg-02">
    <div class="container-fluid">
      <div class="logo col-1"><img src="images/zozor_logo.png" alt=""></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#about">Présentation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#level">Mes Competences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Mes Realisations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


  <!-- <hr> Bandeau -->
  <div class="row bandeau bg-01">   
    <img src="https://cdn.infosec-ups.com/media/Solutions/02-reseaux-et-serveurs/01-environnement-virtuel/header-env-virtuel-2220x680px72dpi.jpg" alt="">
  </div>


  <!-- <hr>A Propos -->
  <section class="row about bg-01" id="about">   
    <div class="col">
      <h1>Hello,<br>
        Je suis Eléazar<br>
        Developeur web.</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis exercitationem, sit iure, rem, beatae assumenda molestias nam soluta ad officia aliquam repellendus laboriosam sapiente consequuntur a dignissimos consectetur maxime atque.<br>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis exercitationem, sit iure, rem, beatae assumenda molestias nam soluta ad officia aliquam repellendus laboriosam sapiente consequuntur a dignissimos consectetur maxime atque.</p>
    </div>
<div class="row">
    <div class="col avatar">
      <img src="data:image/jpeg;base64,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" alt="">
    </div>
    <div class="col">
      <p>Bienvenue sur mon site web. Je suis lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    </div></div>
  </section>


  <!-- <hr> Front end  -->
  <section class="row level-front bg-02" id="level">
    <div class="title"><h3>Mes Compétences Front</h3></div>
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

  
  <!-- <hr>Back end -->
  <section class="row level-back bg-01" id="level">
    <div class="title"><h3>Mes Compétences Back</h3></div>
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

  <!-- <hr>PortFolio -->
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
  
  
  <!-- <hr> Contacts -->
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

  <!-- <hr> Footer -->
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