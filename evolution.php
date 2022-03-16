<?php 
include 'include/header.html';
require 'valeurs.php'; 
?>

  <section>
<<<<<<< Updated upstream
    <article>
      <?php 
        require 'valeurs.php'; 
        require 'mon_evolution.php'; 
      ?>
  </article>
    </section>
    <footer></footer>
    </div>   <!-- Fin Container -->
=======
    <article id="evolution">
    <?php
  require 'valeurs.php';
?>

<div class="row">
  <div class="col">
    <div class="evolution">
      <aside class="row">
      <div class="col-10">
        <h4>Mise à Niveau</h4>
        <?php
            $count = count($update);
            for ($i = 0; $i < $count; $i++) {
            ?>
            <ul><?php echo $update[$i][0];?></ul>
            <div class="progress">
            <div class="progress-bar <?php echo $update[$i][1];?>"
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
      <aside class="row">
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
      <aside class="row"> 
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
      <aside class="row"> 
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
    </article>
  </section>
    
  
  <footer></footer>
  </div>   <!-- Fin Container -->
>>>>>>> Stashed changes
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
