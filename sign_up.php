<!DOCTYPE html>
<html>
<head>
    <? include 'helpers/head.php'; ?>
    <title>Tilmeld dig</title>
</head>
<body>
  <? include 'helpers/header.php'; ?>

  <section class="signup">
    <h1 class="title">Tilmeld dig</h1>

    <form class="formular" method="post" action="<?# find suitable action ?>">
      <label for="name">Fornavn:</label><br>
      <input type="text" id="first_name" /><br>
      <label for="efternavn">Efternavn:</label><br>
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

  <? include 'helpers/scripts.php'; ?>
  <? include 'helpers/footer.php'; ?>
</body>
</html>