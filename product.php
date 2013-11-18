<?php
  include_once 'helpers/products_helper.php';
  include_once 'helpers/users_helper.php';
  
  $product_id = $_GET['id'];
  if (!isset($product_id))
    header('Location: index.php');
  
  $product = fetch_product_by_id($product_id);
  $user = fetch_user_by_id($product['user_id']);
  $uploaded_by_current_user = current_user_exists() && current_user()["id"] == $user["id"];
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include 'includes/head.php'; ?>
    <title><?php echo $product['name']; ?></title>
  </head>
  <body>
    <?php include 'includes/header.php'; ?>

    <h1 class="title"><?php echo $product['name']; ?></h1>

    <section class="product-image">
      <?php echo image_tag_for_product($product); ?>
    </section>

    <section class="product">
      <?php if ($uploaded_by_current_user) { ?>
        <a class="right-link" href="rentals.php">Se forespørgsler</a>
      <?php } else { ?>
        <a class="right-link" href="user.php?id=<?php echo $user['id'] ?>">
          <h3>Uploadet af <?php echo $user['first_name'] ?></h3>
          <div><?php echo $user['last_name'] ?></div>
        </a>
      <?php } ?>

      <section class="list-information">
        <a href="http://maps.google.com">Vis på kort</a>
        <div><?php echo $product['city']; ?></div>
        <div><?php echo $product['price_per_day']; ?> kr./dag</div>
      </section>

      <section class="description">
        <header>
          <h3 class="subtitle">Beskrivelse</h3>
        </header>
        <p><?php echo $product['description']; ?></p>
      </section>
    </section>

    <?php if (current_user_exists()) { ?>
      <?php if (!$uploaded_by_current_user) { ?>
        <section class="rental">
          <section class="timeline-container">
            <img class="replaceable" src="assets/timeline_images/1.jpg" alt="">
          </section>

          <form action="rental.php" method="post">
            <input name="product_id" type="hidden" value="<?php echo $product_id; ?>">
            <input name="user_id" type="hidden" value="<?php echo $user["id"]; ?>">

            <input type="submit" value="Forespørg udlejning">
          </form>
        </section>
      <?php } ?>
    <?php } else { ?>
      <section class="center-section">
        <a href="login.php">Log ind for at leje</a>
      </section>
    <?php } ?>

    <?php include 'includes/scripts.php'; ?>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>