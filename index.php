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

      <header id="application-header">
        <a href="index.html" class="logo">
          <img src="assets/logo.jpg" alt="Jepti">
          <span class="logo-type">Jepti</span>
        </a>
        <input name="searchField" type="search">
      </header>

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