<?php
  include_once 'helpers/categories_helper.php';

  $categories = fetch_categories();
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include 'includes/head.php'; ?>
    <title>Jepti</title>
  </head>
  <body>
    <?php include 'includes/header.php'; ?>

    <section class="introduction">
      <!-- <img class="hero" src="assets/hero.jpg"><br> -->
      <a class="button center" href="mission.php">Vores mission</a>
      <a class="button center" href="login.php">Log ind</a>
    </section>

    <section class="categories">
      <?php foreach($categories as $category) { ?>
        <?php include 'includes/_category.php'; ?>
      <?php } ?>
    </section>

    <?php include 'includes/scripts.php'; ?>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>