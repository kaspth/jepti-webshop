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
    <title>Send mail</title>
    <?php include 'includes/head.php'; ?>
  <title>Kontakt Jepti</title>
  <link href="assets/style_contact.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <html>
<body> 
<?php include 'includes/header.php'; ?> 

<section class="fade-on-submit-sheet-contact">
    <h1 class="title">Kontakt os</h1>

<?php
  if (isset($_POST['email']))
  //if "email" is filled out, send email
    {
          
    //send email
    $username = $_POST['username'];
    $message = $_POST['message'] ;
    $email = $_POST['email'] ;
    $subject = $_POST['subject'] ;

    mail("masechka1983@mail.ru",$subject,"From : {$username}-" . " " . "{$email}." . " " . "Message is :" . $message);
    echo "Thank you" . " " . $username . " " . "for sending mail." . " " . "Det betyder meget for os.";
   
    
    }
  else
  //if "email" is not filled out, display the form
    {
    echo "<form method='post' action='contact_form.php'>
    <div class='input_description'>Username:</div>
    <input name='username' type='text'><br>
    <div class='input_description'>Email:</div>
    <input name='email' type='email'><br>
    <div class='input_description'>Subject:</div>
    <input name='subject' type='text'><br>
    <div class='input_description'>Message:</div>
    <textarea name='message' id='message' rows='10' cols='40'></textarea><br>
    <input type='submit' value='Send besked'>
    </form>";

    }
?>

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
      </div>-->
      
    </form>
  </section>

  <!--<section class="hidden_receipt">
    <h1 class="title">Tak for Jeres besked</h1>
    <p>Det betyder meget for os.<br>
       I får svar fra os så hurtigt som muligt</p>
  </section>-->

  <?php include 'includes/scripts.php'; ?>
  <?php include 'includes/footer.php'; ?>
      
  </body>
</html>

<!--

<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/head.php'; ?>
  <title>Kontakt Jepti</title>
  <link href="assets/style_contact.css" rel="stylesheet" type="text/css">
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <section class="fade-on-submit-sheet-contact">
    <h1 class="title">Kontakt os</h1>

    <form class="contact" method="post" action="">
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
  </section>

  <section class="hidden_receipt">
    <h1 class="title">Tak for Jeres besked</h1>
    <p>Det betyder meget for os.<br>
       I får svar fra os så hurtigt som muligt</p>
  </section>

  <?php include 'includes/scripts.php'; ?>
  <?php include 'includes/footer.php'; ?>
</body>
</html>-->