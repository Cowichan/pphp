<?php

include "db.php";
include "functions.php";

// showAllData();


?>
  </p>
  <!-- <p><a href="login_update.php">Update again</a></p> -->

<?php include "includes/header.php"; ?>

<div class="container">

    <div class="col-sm-6">
    <pre>
      <?php readRows(); ?>
    </pre>

    </div>

<?php include "includes/footer.php"; ?>

