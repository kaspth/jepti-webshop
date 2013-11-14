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
    <link href="assets/styles_chosen_product.css" rel="stylesheet" type="text/css">
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

        <section class="description">
          <header>
            <h3 class="subtitle">Beskrivelse</h3>
          </header>
          <p><?php echo $product['description']; ?></p>
        </section>

        <div class="list-information">
          <ul class="list_under_picture">
            <li><a href="http://maps.google.com">Vis på kort</a></li>
            <li><?php echo $product['city']; ?></li>
            <li><?php echo $product['price_per_day']; ?> kr./dag</li>
          </ul>

          <ul class="list_under_picture">
            <a class="user-link right" href="user.php?id=<?php echo $user['id'] ?>">
              <li><h3>Uploadet af <?php echo $user['first_name'] ?></h3></li>
              <li><?php echo $user['last_name'] ?></li>
            </a>
          </ul>
        </div>
      </section>
      
      <!-- <input type="submit" name="submit" value="Forespørg udlejning"/> -->
    </section>

    <?php include 'includes/scripts.php'; ?>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>