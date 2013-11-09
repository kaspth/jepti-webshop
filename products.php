<?php
  include_once 'helpers/categories_helper.php';
  include_once 'helpers/products_helper.php';

  $category_id = $_GET['category_id'];
  if (!isset($category_id))
    header("Location: index.php");

  $category = fetch_category_by_id($category_id);
  $products = fetch_products_for_category_id($category_id);

?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/head.php'; ?>
  <title>Produkter for <?php echo $category['title']; ?></title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
  <?php include 'includes/_category.php'; ?>

  <section class="products">
    <?php if (!isset($products)) { ?>
      <section class="center-section">
        <h3 class="subtitle">Der er ingen produkter i denne kategori.</h3>
        <a class="back-redirect" href="index.php">Gå tilbage</a>
      </section>
    <?php } else { ?>
      <?php foreach($products as $product) { ?>
        <?php include 'includes/_product.php'; ?>
      <?php } ?>
    <?php } ?>
  </section>

  <?php include 'includes/scripts.php'; ?>
  <?php include 'includes/footer.php'; ?>
</body>
</html>