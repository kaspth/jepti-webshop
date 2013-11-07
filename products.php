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
  <meta charset="utf-8" />
  <title>Produkter for <?php echo $category['title']; ?></title>
</head>
<body>
  <?php echo article_for_category($category); ?>

  <section class="products">
    <?php foreach($products as $product) { ?>
      <a class="product-link" href="product.php?id=<?php echo $product['id']; ?>">
        <article class="product">
          <?php echo image_tag_for_product($product); ?>
          <h4><?php echo $product['name']; ?></h4>

          <a href="http://maps.google.com">Vis på kort</a>
          <span><em>By:</em> <?php echo $product['city']; ?></span>
          <span><em>Pris:</em> <?php echo $product['price']; ?></span>
        </article>
      </a>
    <?php } ?>
  </section>

</body>
</html>