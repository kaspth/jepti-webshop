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
  <?php echo article_for_category($category); ?>

  <section class="products">
    <?php foreach($products as $product) { ?>
      <?php include 'includes/_product.php'; ?>
    <?php } ?>
  </section>

</body>
</html>