<?php
  require 'valeurs.php';
?>

<div class="row">
  <div class="col">
    <h2 id="evolution">Mon évolution</h2>
    <div class="evolution">
      <aside class="row">
        <div class="col-10 col-md-5">
        <h4>Le développement Front-End</h4>
        <?php
            $count = count($frontEnd);
            for ($i = 0; $i < $count; $i++) {
            ?>
            <ul><?php echo $frontEnd[$i][0];?></ul>
            <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $frontEnd[$i][1];?>"
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
          
        <div class="col-10 col-md-5">
        <h4>Le développement Back-End</h4>
        <?php
            $count = count($backEnd);
            for ($i = 0; $i < $count; $i++) {
            ?>
            <ul><?php echo $backEnd[$i][0];?></ul>
            <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $backEnd[$i][1];?>"
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
      </aside>
    </div>
  </div>
</div>
