<?
include_once 'helpers/categories_helper.php';

$categories = fetch_categories();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Jepti</title>
  </head>
  <body>
    <section class="introduction">
      <? include 'includes/header.php'; ?>

      <img class="hero" src="assets/hero.jpg">
      <a href="vision.php">Vores vision</a>
      <a href="login.php">Log ind</a>
    </section>

    <section class="categories">
      <? foreach($categories as $category) { ?>
        <? $id = $category['id'] ?>
        <a href="products.php?category_id=<?= $id ?>">
          <article class="category" id="<?= $id ?>">
            <img src="assets/category_images/<?= $id ?>.jpg">
            <span class="category-title"><?= $category['title'] ?></span>
          </article>
        </a>
      <? } ?>
    </section>

    <footer>
    </footer>
  </body>
</html>