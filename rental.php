<?php
  include_once 'helpers/rentals_helper.php';
  include_once 'helpers/users_helper.php';

  if (current_user_exists()) {
    $renter = current_user();
    $user_rented_from = fetch_user_by_id($_POST["user_id"]);

    $rental = build_rental((int)$_POST["product_id"], $renter["id"]);
    add_rental_to_user($user_rented_from, $rental);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include 'includes/head.php'; ?>
    <title>Tak for din forespørgsel - Jepti</title>
  </head>
  <body>
    <?php include 'includes/header.php'; ?>

    <section class="center-section">
      <header>
        <?php if (current_user_exists()) { ?>
          <h1 class="title">Tak skal du have, <?php echo $renter["first_name"]; ?>.</h1>
          <p class="subtitle">Vi har sendt en mail til <?php echo $user_rented_from["first_name"]; ?> med din forespørgsel.</p>
        <?php } else { ?>
          <h1 class="title">Hej person vi ikke kan huske.</h1>
          <p class="subtitle">Du er nødt til at være logget ind for at leje produkter.</p>
          <a href="login.php">Log ind her</a>
        <?php } ?>
      </header>
    </section>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
  </body>
</html>