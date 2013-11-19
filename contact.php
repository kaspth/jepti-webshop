<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/head.php'; ?>
  <title>Kontakt Jepti</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <section class="fade-on-submit sheet">
    <h1 class="title">Kontakt os</h1>
      <form class="contact" method="post" action="contact.php">

        <label for="email">Email:</label>
        <div class="input_field">
          <input type="text" id="email" name="email" /><br>
        </div>

        <label for="message">Besked:</label>
        <div class="input_field">
          <textarea id="message" name="message"></textarea>
        </div>

        <div class="submit_field">
          <input type="submit" name="submit" value="Send besked"/>
        </div>
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