<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/head.php'; ?>
    <title>Tilmeld dig</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <section class="signup">
    <h1 class="title">Tilmeld dig</h1>

    <form class="formular" method="post" action="sign_up.php">
      <label for="first_name">Fornavn:</label><br>
      <input type="text" id="first_name" /><br>
      <label for="last_name">Efternavn:</label><br>
      <input type="text" id="last_name" /><br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" /><br>
      <label for="password">Password</label><br>
      <input type="password" id="password" /><br>

      <label for="phone_number">Telefonnummer:</label><br>
      <input type="tel" id="phone_number" name="phone_number" /><br>

      <label for="city">By:</label><br>
      <input type="text" id="city" name="city" /><br>
      <label for="area_code">Postnummer:</label><br>
      <input type="number" id="area_code" name="area_code" /><br>

      <input type="submit" name="submit" value="Tilmeld"/>
    </form>
  </section>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
</html>