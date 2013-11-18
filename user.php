<?php
  include_once 'helpers/users_helper.php';
  include_once 'helpers/products_helper.php';

  $user_id = $_GET['id'];
  if (!isset($user_id))
    header('Location: index.php');

  $user = fetch_user_by_id($user_id);
  $user_title = pluralize($user) . " profil";
  $products = fetch_products_for_user_id($user_id);
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/head.php'; ?>
  <title><?php echo $user_title ?> - Jepti</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <?php if (!isset($user)) { ?>
      <?php header("Vi kunne ikke finde nogen bruger.", true, 404); ?>
  <?php } else { ?>
    <section class="user">
      <header class="info crop">
        <?php echo image_tag_for_user($user) ?><br>

        <div class="background dark">
          <div class="first name"><?php echo $user['first_name'] ?></div>
          <div class="last name"><?php echo $user['last_name'] ?></div>
        </div>
      </header>

      <section class="products">
        <?php if (!isset($products)) { ?>

          <section class="center-section">
            <h3 class="subtitle"><?php echo $user['first_name'] ?> har ingen produkter.</h3>
          </section>

        <?php } else { ?>
          <header>
            <h3 class="subtitle"><?php echo pluralize($user) ?> produkter</h3>
          </header>

          <?php foreach ($products as $product) { ?>
            <?php include 'includes/_product.php'; ?>
          <?php } ?>
        <?php } ?>
      </section>
    </section>
  <?php } ?>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
</html>
