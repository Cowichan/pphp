
<?php include "includes/header.php"; ?>

<div class="container">

  <div class="col-sm-6">
    <?php
      $password = "monzpasswordamoi";
      $salt = "1assssxcazcedvdvvf22xsxsz22";
      $password_encrypted = crypt($password, $salt);

      echo $password_encrypted . '<br>';
      echo "text md5";
      if (CRYPT_MD5 == 1) {
      echo 'MD5 :          ' . crypt('rasmuslerdorf', '$1$rasmusle$') . "\n";
  }
    ?>
  </div>

<?php include "includes/footer.php"; ?>

