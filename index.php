<?php
  include_once 'helpers/categories_helper.php';
  include_once 'helpers/users_helper.php';

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

    <section class="center-section">
      <!-- <img class="hero" src="assets/hero.jpg"><br> -->
      <a class="button center" href="mission.php">Vores mission</a>

      <?php if (current_user()) { ?>
        <a class="button center" href="<?php echo current_user_path() ?>">Min side</a>
      <?php } else { ?>
        <a class="button center" href="login.php">Log ind</a>
      <?php } ?>
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