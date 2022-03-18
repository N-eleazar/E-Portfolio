<!DOCTYPE html>
<html lang="fr">
  <head>

    <!-- Meta Info  -->
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="shortcut icon" href="http://portfolio.fr.nf/sites/images/icon.png" type="image/vnd.microsoft.icon" />
    <meta name="description" content="Tout sur ..." />
    <meta name="robots" content="follow, index" />
    <meta name="keywords" content="..." />
    <meta name="news_keywords" content="..." />
    <meta name="generator" content="Drupal 7 (http://drupal.org)" />
    <link rel="canonical" href="http://portfolio.fr.nf/" />
    <meta name="rights" content="2021 - portfolio" />
    <link rel="shortlink" href="http://portfolio.fr.nf/" />
    <meta name="original-source" content="http://portfolio.fr.nf" />
    <meta property="fb:admins" content="eleazar.nabet" />
    <meta name="revisit-after" content="1 day" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="portfolio" />
    <meta property="og:url" content="http://portfolio.fr.nf/" />
    <meta property="og:title" content="portfolio" />
    <meta property="og:description" content="Tout sur ..." />
    <meta property="og:image" content="http://portfolio.fr.nf/sites/images/icon.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@portfolio" />
    <meta property="og:email" content="" />
    <meta name="twitter:image" content="http://portfolio.fr.nf/sites/images/icon.png" />
    <meta name="twitter:description" content="Tout sur ..." />
    <meta property="og:phone_number" content="" />
    <meta property="og:locale" content="fr_FR" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  
    <!--   CSS Files   -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Mon PortFolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css_files/style.css" />
    <link rel="stylesheet" href="/css_files/responsiv.css" />
  
    <!--   JS Files   -->
    <script src="/js_files/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/js_files/displayResponsiv.js"></script>
  
  </head>
  <body>
    <div class="container-fluid">
      <header>
      </header>

<?php require 'valeurs.php'; ?>

  <section>
    <article id="evolution">
      <div class="row">
        <div class="col">
          <aside>
    <div class="evolution">
      <aside class="row" aria-label="">
      <div class="col-10">
        <h4>Mise à Niveau</h4>
        <?php
            $count = count($update);
            for ($i = 0; $i < $count; $i++) {
            ?>
            <ul><?php echo $update[$i][0];?></ul>
            <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $update[$i][1];?>"
              role="progressbar"
              style="width: <?php echo $update[$i][2];?>"
              aria-valuenow="<?php echo $update[$i][2];?>"
              aria-valuemin="0"
              aria-valuemax="100">
            </div></div>
            <br />
        <?php
            }
        ?>
      </aside><br>
      <aside class="row" aria-label="">
        <div class="col-10">
        <h4>Le développement Front-End</h4>
        <?php
            $count = count($frontEnd);
            for ($i = 0; $i < $count; $i++) {
            ?>
            <ul><?php echo $frontEnd[$i][0];?></ul>
            <div class="progress">
            <div class="progress-bar <?php echo $frontEnd[$i][1];?>"
              role="progressbar"
              style="width: <?php echo $frontEnd[$i][2];?>"
              aria-valuenow="<?php echo $frontEnd[$i][2];?>"
              aria-valuemin="0"
              aria-valuemax="100">
            </div></div>
            <br />
        <?php
            }
        ?>
        </div>
        </aside><br>
      <aside class="row" aria-label=""> 
        <div class="col-10">
        <h4>Le développement Back-End</h4>
        <?php
            $count = count($backEnd);
            for ($i = 0; $i < $count; $i++) {
            ?>
            <ul><?php echo $backEnd[$i][0];?></ul>
            <div class="progress">
            <div class="progress-bar <?php echo $backEnd[$i][1];?>"
              role="progressbar"
              style="width: <?php echo $backEnd[$i][2];?>"
              aria-valuenow="<?php echo $backEnd[$i][2];?>"
              aria-valuemin="0"
              aria-valuemax="100">
            </div></div>
            <br />
        <?php
            }
        ?>       
        </div>
      </aside><br>
      <aside class="row" aria-label=""> 
        <div class="col-10">
        <h4>Légende</h4>
        <h6>Niveau 0 :</h6>
          <div class="progress">
            <div class="progress-bar bg-info"
              role="progressbar"
              style="width: 5%"
              aria-valuenow="5%"
              aria-valuemin="0"
              aria-valuemax="100">
            </div>
          </div>
            <br />
        <h6>Niveau 25 % :</h6>
        <div class="progress">
            <div class="progress-bar bg"
              role="progressbar"
              style="width: 25%"
              aria-valuenow="25%"
              aria-valuemin="0"
              aria-valuemax="100">
            </div></div>
            <br />
            
            <h6>Niveau 50 % :</h6>
            <div class="progress">
            <div class="progress-bar bg-danger"
              role="progressbar"
              style="width: 50%"
              aria-valuenow="50%"
              aria-valuemin="0"
              aria-valuemax="100">
            </div></div>
            <br />
            <h6>Niveau 75 % :</h6>
            <div class="progress">
            <div class="progress-bar bg-warning"
              role="progressbar"
              style="width: 75%"
              aria-valuenow="75%"
              aria-valuemin="0"
              aria-valuemax="100">
            </div></div>
            <br />
            <h6>Niveau 100 % :</h6>
            <div class="progress">
            <div class="progress-bar bg-success"
              role="progressbar"
              style="width: 100%"
              aria-valuenow="100%"
              aria-valuemin="0"
              aria-valuemax="100">
            </div></div>
            <br />
      </aside>
    </div>
  </div>
</div>
  
<footer>
              <article id="footer">
                <p class="copyright">Company Name © 2021</p>
              </article>
            </footer>
            
            </div>   <!-- Fin Container -->
                
            <!--   JS Files   -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            <script src="/js_files/script.js"></script>
            </body>
            </html>
            
            
            