<?
include_once 'helpers/categories_helper.php';

$categories = fetch_categories();
?>
<!DOCTYPE html>
<html>
  <head>
    <? include 'includes/head.php'; ?>
    <title>Jepti</title>
  </head>
  <body>
    <? include 'includes/header.php'; ?>

    <section class="introduction">
      <img class="hero" src="assets/hero.jpg">
      <a href="mission.php">Vores mission</a>
      <a href="login.php">Log ind</a>
    </section>

    <section class="categories">
      <? foreach($categories as $category) { ?>
        <? $id = $category['id'] ?>
        <a href="products.php?category_id=<?= $id ?>">
          <?= article_for_category($category) ?>
        </a>
      <? } ?>
    </section>

    <? include 'includes/scripts.php'; ?>
    <? include 'includes/footer.php'; ?>
  </body>
</html>