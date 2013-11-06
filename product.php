<?
include_once 'helpers/products_helper';

$product_id = $_GET['id'];
if (!isset($product_id))
  header('Location: index.php');

$product = fetch_product_by_id($product_id);
?>
<!DOCTYPE html>
<html>
  <head>
    <? include 'includes/head.php'; ?>
    <title><?= $product['name'] ?></title>
  </head>
  <body>
    <? include 'includes/header.php'; ?>

    <section class="product">
      <header class="information">
        <h1 class="title"><?= $product['name'] ?></h1>
        <?= image_tag_for_product($product) ?>

        <section class="list-information">
          <a href="http://maps.google.com">Vis på kort</a>
          <span><em>By:</em> <?= $product['city'] ?></span>
          <span><em>Pris:</em> <?= $product['price'] ?></span>
          <span><em>Depositum:</em> <?= $product['deposit'] ?></span>
          <span><em>Betalingsmåde:</em> <?= payment_method_for_product($product) ?></span>
        </section>
      </header>

      <section class="description">
        <header>
          <h3 class="subtitle">Beskrivelse</h3>
        </header>
        <p>
          <?= $product['description'] ?>
        </p>
      </section>

      <section class="date-picker">
        <h4>Hvornår vil du leje?</h4>
        <!-- indsæt kalender her -->
      </section>

      <?# <input type="submit" name="submit" value="Forespørg"/> ?>
    </section>

    <? include 'includes/scripts.php'; ?>
    <? include 'includes/footer.php'; ?>
  </body>
</html>