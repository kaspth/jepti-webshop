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
    <link href="assets/styles_chosen-product.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php include 'includes/header.php'; ?>

    <section class="product">
      <header class="information">
        <h1 class="title"><?php echo $product['name']; ?></h1>
      </header>
      
      <section class="under_picture">

        <div class="picture_of_product">
        <?php echo image_tag_for_product($product); ?>
        </div>

        <?php if ($uploaded_by_current_user) { ?>
          <a class="right-link" href="rentals.php">Se forespørgsler</a>
        <?php } else { ?>
          <a class="right-link" href="user.php?id=<?php echo $user['id'] ?>">
            <h3>Uploadet af <?php echo $user['first_name'] ?></h3>
            <div><?php echo $user['last_name'] ?></div>
          </a>
        <?php } ?>

          <ul>
            <a class="user-link right" href="user.php?id=<?php echo $user['id'] ?>">
              <li><h3>Uploadet af <?php echo $user['first_name'] ?></h3></li>
              <li><?php echo $user['last_name'] ?></li>
            </a>
          </ul>
        </section>
      </section>
      
      <section class="description">
        <header>
          <h3 class="subtitle">Beskrivelse</h3>
        </header>
        <p><?php echo $product['description']; ?></p>
      </section>

      <?php if (current_user_exists()) { ?>
        <?php if (!$uploaded_by_current_user) { ?>
          <section class="timeline-container">
            <img class="replaceable" src="assets/timeline_images/1.jpg" alt="">
          </section>

          <section class="rental center-section">
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
    </section>

    <?php include 'includes/scripts.php'; ?>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>