<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/head.php'; ?>
  <title>Kontakt Jepti</title>
  <link href="assets/style_contact.css" rel="stylesheet" type="text/css">
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <section class="fade-on-submit sheet">
    <h1 class="title">Kontakt os</h1>
      <form class="contact" method="post" action="contact.php">

        <label for="email">Email:</label><br>
        <input class="contact-field" type="text" id="email" name="email" /><br>

        <label for="message">Besked:</label><br>
        <textarea class="contact-field" id="message" name="message" rows="5"></textarea><br>

        <input type="submit" name="submit" value="Send besked"/>
      </form>
  </section>

  <section class="hidden receipt">
    <h1 class="title">Tak for din besked</h1>
    <p>Det betyder meget for os.</p>
  </section>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
</html>