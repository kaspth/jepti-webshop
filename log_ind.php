<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/head.php'; ?>
  <title>Log ind</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <section class="mission">
  	<h1 class="title">Log ind</h1>

		<form class="formular" action="log_ind.php" method="post">
      <label for="email">Indtast din email</label><br>
      <input type="email" id="email"/><br>
      <label for="password">Password</label><br>
      <input type="password" name="password"/><br>
      <input type="submit" name="submit" value="Log ind"/>
    </form>
    <p>Log ind med facebook</p>
      <a href=""></a><!-- search how it linkes to user's facebook  -->
    <form class="formular" action="tilmeld_dig.php">
      <input type="submit" name="submit" value="Tilmeld dig"/>
    </form>
  </section>

  <?php include 'includes/footer.php'; ?>
</body>
</html>