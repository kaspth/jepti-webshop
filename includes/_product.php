<a class="product-link" href="product.php?id=<?php echo $product['id']; ?>">
  <article class="product group">
    <?php echo image_tag_for_product($product); ?>

    <h4><?php echo $product['name']; ?></h4>
    <div class="location right"><?php echo $product['city']; ?></div>
    <div class="price"><?php echo $product['price_per_day']; ?></div>
  </article>
</a>