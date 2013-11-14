<?php
include_once 'helpers/rentals_helper.php';
include_once 'helpers/users_helper.php';

$renter = current_user();
$user_rented_from = fetch_user_by_id($_POST["user_id"]);

$rental = build_rental((int)$_POST["product_id"], $renter["id"]);
add_rental_to_user($user_rented_from, $rental);
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
        <h1 class="title">Tak skal du have, <?php echo $renter["first_name"]; ?>.</h1>
        <p class="subtitle">Vi har sendt en mail til <?php echo $user_rented_from["first_name"]; ?> med din forespørgsel.</p>
      </header>
    </section>

    <?php include 'includes/scripts.php'; ?>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>