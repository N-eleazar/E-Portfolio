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

    <!--  Tailwind CSS  -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--  CSS Files  -->
    <link rel="stylesheet" href="css_files/style.css">
  </head>
  <body>
    
  <div class="container-fluid">

    <div class="scroll fixed bottom-5 right-5">
      <img src="images\scrollTop.png" 
      alt="bouton Scroll Top"
      width="40px">
    </div>

  <!--  HEADER  -->
  <!--  #TODO Reparer bug du menu defilant responsive  -->
  <header class="row flex justify-center">
    <nav class="navbar navbar-expand-md navbar-light bg-02"> 
      <div class="container-fluid">
        <div class="flex justify-center align-center col-1"><img src="images/zozor_logo.png" alt=""></div>
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

  <!-- BANDEAU -->
    <section class="row bg-02">
      <div class="carousel-item active">
        <img src="images/carousel.jpg" class="d-block w-100" alt="...">
      </div>
  </section>

  <!--  A PROPOS  -->
  <section class="row bg-01" id="about">   
      <h1 class="col text-red-800 text-5xl font-semibold text-center p-6">
      Hello,<br>
      Je suis Eléazar<br>
      Développeur web / Front End.</h1>

    <div class="row">
      <p class="col text-justify text-xl m-16">
        <img class="float-left p-4" src="images/avatar_icon.png" alt="">
        Bienvenue sur mon site web. Je suis lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis exercitationem, sit iure, rem, beatae assumenda molestias nam soluta ad officia aliquam repellendus laboriosam sapiente consequuntur a dignissimos consectetur maxime atque.<br>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis exercitationem, sit iure, rem, beatae assumenda molestias nam soluta ad officia aliquam repellendus laboriosam sapiente consequuntur a dignissimos consectetur maxime atque.</p>
    </div>
  </section>


  <!--  FRONT_END  -->
  <section class="row flex justify-center bg-02" id="level">
    <h3 class="text-red-800 pb-6">Mes Compétences Front</h3>
    <div class="parcours-wrapper grid grid-cols-5">
      <?php
        include_once 'database/valeurs.php';
        $count = count($frontEnd);
        for ($i = 0; $i < $count; $i++) {
      ?>
      <div class="panel">
        <div class="panel-heading h-3/5">
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
      <?php } ?>
    </div>
  </section>

  <!--  BACK_END  -->
  <section class="row flex justify-center bg-01">
  <h3 class="text-red-800 pb-6">Mes Compétences Back</h3>
    <div class="parcours-wrapper grid grid-cols-5">
      <?php
        $count = count($backEnd);
        for ($i = 0; $i < $count; $i++) {
      ?>
        <div class="panel">
        <div class="panel-heading h-3/5">
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
        <?php } ?>
    </div>
  </section>

  <!--  PORTFOLIO  -->
 <!-- TODO - effectuer l'affichage en responsive Mobile  -->
  <section class="row portfolio flex justify-center bg-02" id="portfolio">
    <h3 class="text-red-800 pb-6">Mes Réalisations</h3>
      <div class="display">
        <div class="desktop">
          <iframe id="desktop" title="responsiv" src=""></iframe>
       </div>
      </div>
      <div class="menuSite flex justify-center text-black">
        <button type="button" id="respBtn2" class="text-black btn btn-outline-secondary" onClick="displayProject('site2')">Cristal{ID}</button>
        <button type="button" id="respBtn3" class="text-black btn btn-outline-secondary" onClick="displayProject('site3')">Jacek jeznach</button>
        <button type="button" id="respBtn4" class="text-black btn btn-outline-secondary" onClick="displayProject('site4')">Lorem Photos</button>
      </div>
  </section>

  <!-- CONTACT -->
  <section class="row bg-01" id="contact">
    <h3 class="text-red-800 pb-6">Me Contacter</h3>
    <p class="text-xl font-semibold text-justify p-16">
      Je suis intéressé par les opportunités de freelance.<br> 
    Cependant, si vous avez d'autres demandes ou questions,<br>
    veuillez  me contacter par <a href="mailto:nabet.eleazar@gmail.com">e-mail.</a></p>
  </section>

  <!-- FOOTER -->
  <footer class="row flex text-center justify-around h-32 p-8 bg-02">
    <p class="copyright text-xl">Company Name © 2021</p>
  </footer>
</div>    


 <!--  JS Files  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js_files/main.js"></script>
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