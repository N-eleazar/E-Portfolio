<?php include_once 'tableau_evolution/valeur.php'; ?>

<div class="col-10 col-md-5">
    <h4>Le développement Back-End</h4>
    <?php
    for ($number = 0; $number <= 4; $number++) { ?>
        <li><?php echo $backEnd[$number]['title'] ?></li>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $backEnd[$number]['color']; ?>" role="progressbar" style="width:<?php echo $backEnd[$number]['valeur']; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <br />
    <?php
    }
    ?>
</div>