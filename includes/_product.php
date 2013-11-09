<a class="product-link" href="product.php?id=<?php echo $product['id']; ?>">
  <article class="product group">
    <?php echo image_tag_for_product($product); ?>
    <h4><?php echo $product['name']; ?></h4>

    <section class="right">
      <a href="http://maps.google.com">Vis på kort</a>
      <div><em>By:</em> <?php echo $product['city']; ?></div>
      <div><em>Pris:</em> <?php echo $product['price_per_day']; ?></div>
    </section>
  </article>
</a>