<link href="assets/styles_products.css" rel="stylesheet" type="text/css">
<a class="product-link" href="product.php?id=<?php echo $product['id']; ?>">
  <article class="product-listing">
    <div class="crop">
      <?php echo image_tag_for_product($product); ?>
    </div>

    <div class="background dark inset">
      <h4><?php echo $product['name']; ?></h4>
      <div class="price"><?php echo $product['price_per_day']; ?> kr./dag</div>
      <div class="product-location"><?php echo $product['city']; ?></div>
    </div>
  </article>
</a>