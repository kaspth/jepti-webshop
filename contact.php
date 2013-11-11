<?php
// ********** Del 1: OpsÃ¦tning af PHP-miljÃ¸ **********
  ERROR_REPORTING(E_ALL);
  ini_set("display_errors", "1");

// ********** Del 2: OpsÃ¦tning af fÃ¦lles data **********

// ********** Del 3: IndsÃ¦ttelse af funktionsbiblioteker mv. **********

// ********** Del 4: Modtagelse af inddata fra brugeren **********
   
// ********** Del 5: Databehandling **********

// ********** Del 6: Lagring af visse data om besÃ¸get *********

// ********** Del 7: Opbygning af uddata til brugeren **********
    
// ********** Del 8: HTML-resultatet **********
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/head.php'; ?>
  <title>Kontakt Jepti</title>
  <link href="assets/style_contact.css" rel="stylesheet" type="text/css">
</head>
<body> 
  <?php include 'includes/header.php'; ?> 

  <section class="sheet-contact">
    <?php
      if (isset($_POST['email']))
      {
        //if "email" is filled out, send email
        $username = $_POST['username'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = "From: {$username}\r\nMessage:\r\n" . $_POST['message'];

        mail("masechka1983@mail.ru", $subject, $message); 
    ?>
      <section class="receipt">
        <h1 class="title">Tak for din besked, <?php echo $username; ?></h1>
        <p>Det betyder meget for os.</p>
      </section>
    <?php } else { ?>
      <h1 class="title">Kontakt os</h1>

      <form class="contact" method="post" action="contact.php">
        <label class="input_description" for="name">Fornavn:</label><br>
        <input class="fill_up" name="username" type="text"><br>

        <label class="input_description" for="email">Email:</label><br>
        <input class="fill_up" name="email" type="email"><br>

        <label class="input_description" for="subject">Emne:</label><br>
        <input class="fill_up" name="subject" type="text"><br>

        <label class="input_description" for="message">Besked:</label><br>
        <textarea name="message" id="message" rows="10" cols="40"></textarea><br>
        <input type="submit" name="submit" value="Send">
      </form>
    <?php } ?>
  </section>

  <!--<section class="fade-on-submit-sheet-contact">
    <h1 class="title">Kontakt os</h1>

    <form class="contact" method="post" action="">
      <div class="input_description">
        <label for="username">Name:</label>
      </div>

      <div class="input_description">
        <input type="text" id="name" name="username" /><br>
      </div>

      <div class="input_description">
        <label for="email">Email:</label>
      </div>

      <div class="input_description">
        <input type="text" id="email" name="email" /><br>
      </div>

      <div class="input_description">
        <label for="message">Besked:</label>
      </div>

      <div class="input_description">
        <textarea id="message" name="message"></textarea>
      </div>

      <div class="confirm">
        <input type="submit" name="submit" value="Send besked"/>
      </div>
      
    </form>
  </section>-->

  <?php include 'includes/scripts.php'; ?>
  <?php include 'includes/footer.php'; ?>     
</body>
</html>

