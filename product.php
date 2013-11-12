<?php
include_once 'helpers/products_helper.php';
include_once 'helpers/users_helper.php';

$product_id = $_GET['id'];
if (!isset($product_id))
  header('Location: index.php');

$product = fetch_product_by_id($product_id);
$user = fetch_user_by_id($product['user_id']);
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include 'includes/head.php'; ?>
    <title><?php echo $product['name']; ?></title>
  </head>
  <body>
    <?php include 'includes/header.php'; ?>

    <section class="product">
      <header class="information">
        <h1 class="title"><?php echo $product['name']; ?></h1>
        <?php echo image_tag_for_product($product); ?>

        <a class="user-link right" href="user.php?id=<?php echo $user['id'] ?>">
          <h3>Uploadet af <?php echo $user['first_name'] ?></h3>
          <div><?php echo $user['last_name'] ?></div>
        </a>

        <section class="list-information">
          <a href="http://maps.google.com">Vis på kort</a>
          <div><?php echo $product['city']; ?></div>
          <div><?php echo $product['price_per_day']; ?> kr./dag</div>
        </section>
      </header>

      <section class="description">
        <header>
          <h3 class="subtitle">Beskrivelse</h3>
        </header>
        <p><?php echo $product['description']; ?></p>
      </section>

      <section class="date-picker">
        <h4>Hvornår vil du leje?</h4>
        <!-- indsæt kalender her -->
      </section>

      <?php# <input type="submit" name="submit" value="Forespørg"/> ?>
    </section>

    <?php include 'includes/scripts.php'; ?>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>