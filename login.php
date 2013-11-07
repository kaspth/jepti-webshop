<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/head.php'; ?>
  <title>Log ind</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <section class="login">
    	<h1 class="title">Log ind</h1>

		<form class="login sheet" action="login.php" method="post">
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" /><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" /><br>

      <input type="submit" name="submit" value="Log ind"/>
    </form>
  </section>

  <?php include 'includes/scripts.php'; ?>
  <?php include 'includes/footer.php'; ?>
</body>
</html>