<?php
include_once 'helpers/rentals_helper.php';

$renter_id = $_POST["renter_id"];
$renter = fetch_user_by_id($renter_id);
$user = current_user();

$rental = build_rental($_POST["product_id"], $renter_id);
add_rental_to_user($user, $rental);
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
        <p>Vi har sendt en mail til <?php echo $user["first_name"]; ?> med din forespørgsel.</p>
      </header>
    </section>

    <?php include 'includes/scripts.php'; ?>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>