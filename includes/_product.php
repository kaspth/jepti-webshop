<a class="product-link" href="product.php?id=<?php echo $product['id']; ?>">
  <article class="product">
    <?php echo image_tag_for_product($product); ?>
    <h4><?php echo $product['name']; ?></h4>

    <a href="http://maps.google.com">Vis på kort</a>
    <span><em>By:</em> <?php echo $product['city']; ?></span>
    <span><em>Pris:</em> <?php echo $product['price_per_day']; ?></span>
  </article>
</a>