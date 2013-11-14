<?php $id = $category['id']; ?>
<a class="category-link" href="products.php?category_id=<?php echo $id; ?>">
  <article class="category" id="<?php echo $id; ?>">
    <img src="assets/category_images/<?php echo $id; ?>.jpg">
    <span class="background"><h3 class="category-title"><?php echo $category['title'] ?></h3></span>
  </article>
</a>