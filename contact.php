<!DOCTYPE html>
<html>
<head>
  <? include 'helpers/head.php'; ?>
  <title>Kontakt Jepti</title>
</head>
<body>
  <? include 'helpers/header.php'; ?>

  <section class="fade-on-submit sheet contact">
    <h1 class="title">Kontakt os</h1>

    <form class="contact" method="post" action="">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email"/>

      <label for="message">Besked:</label>
      <textarea id="message" name="message"></textarea>

      <input type="submit" name="submit" value="Send besked"/>
    </form>
  </section>

  <section class="hidden receipt">
    <h1 class="title">Tak for din besked</h1>
    <p>Det betyder meget for os.</p>
  </section>

  <? include 'includes/scripts.php'; ?>
  <? include 'includes/footer.php'; ?>
</body>
</html>