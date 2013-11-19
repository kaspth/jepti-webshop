<?php $id = $category['id']; ?>
<a class="category-link" href="products.php?category_id=<?php echo $id; ?>">
  <article class="category" id="<?php echo $id; ?>">
    <div class="crop">
      <img src="assets/category_images/<?php echo $id; ?>.jpg" alt="<?php echo $category['title']; ?>">
    </div>
    <div class="background"><h3 class="category-title"><?php echo $category['title'] ?></h3></div>
  </article>
</a>