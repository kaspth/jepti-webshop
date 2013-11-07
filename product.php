<?php
include_once 'helpers/products_helper.php';

$product_id = $_GET['id'];
if (!isset($product_id))
  header('Location: index.php');

$product = fetch_product_by_id($product_id);
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

        <section class="list-information">
          <a href="http://maps.google.com">Vis på kort</a>
          <span><em>By:</em> <?php echo $product['city']; ?></span>
          <span><em>Pris per dag:</em> <?php echo $product['price']; ?></span>
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