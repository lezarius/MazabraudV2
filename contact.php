<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="BootStrap/css/bootstrap.css">
	<link rel="stylesheet" href="BootStrap/css/menu.css" />
	<script src="js/jquery.js"></script>
	<script src="js/navigation.js"></script> 
	<script src="js/typed.js" type="text/javascript"></script>
	<title>SweetHome</title>
</head>
<body>

<?php include 'menu.php'; ?>
<div align="left" >
<div id="push"> <a href="#" class="btn btn btn-info btn-lg">Afficher le Menu</a> </div>
</div>

<div class="container">

<div>
<?php
//If the form is submitted
if(isset($_POST['submit'])) {

  //Check to make sure that the name field is not empty
  if(trim($_POST['contactname']) == '') {
    $hasError = true;
  } else {
    $name = trim($_POST['contactname']);
  }

  //Check to make sure that the phone field is not empty
  if(trim($_POST['phone']) == '') {
    $hasError = true;
  } else {
    $phone = trim($_POST['phone']);
  }

  //Check to make sure that the name field is not empty
  if(trim($_POST['weburl']) == '') {
    $hasError = true;
  } else {
    $weburl = trim($_POST['weburl']);
  }

  //Check to make sure that the subject field is not empty
  if(trim($_POST['subject']) == '') {
    $hasError = true;
  } else {
    $subject = trim($_POST['subject']);
  }

  //Check to make sure sure that a valid email address is submitted
  if(trim($_POST['email']) == '')  {
    $hasError = true;
  } else if (!filter_var( trim($_POST['email'], FILTER_VALIDATE_EMAIL ))) {
    $hasError = true;
  } else {
    $email = trim($_POST['email']);
  }

  //Check to make sure comments were entered
  if(trim($_POST['message']) == '') {
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $comments = stripslashes(trim($_POST['message']));
    } else {
      $comments = trim($_POST['message']);
    }
  }

  //If there is no error, send the email
  if(!isset($hasError)) {
    $emailTo = 'remy.mazabraud@gmail.com'; // Put your own email address here
    $body = "Name: $name \n\nEmail: $email \n\nPhone Number: $phone \n\nSubject: $subject \n\nComments:\n $comments";
    $headers = 'From: Contact Pro  <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

    mail($emailTo, $subject, $body, $headers);
    $emailSent = true;
  }
}
?>

  <div class="row" id="contact">

    <div class="row">
      <div class="col-md-6 col-md-push-3">
      <div class="">
        <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
          <fieldset>
            <legend>Me contacter :</legend>

            <?php if(isset($hasError)) { //If errors are found ?>
              <p class="alert alert-danger">Verifiez les champs que vous avez remplis. Merci.</p>
            <?php } ?>

            <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
              <div class="alert alert-success">
                <p><strong>Message envoyé !</strong></p>
                <p>Merci pour le petit mot, <strong><?php echo $name;?></strong>! Votre message m'a bien été transmis !</p>
              </div>
            <?php } ?>

            <div class="form-group">
              <label for="name">Votre Nom/Prénom<span class="help-required">*</span></label>
              <input title="ContactName" type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
            </div>

            <div class="form-group">
              <label for="phone">Votre numéro de téléphone<span class="help-required">*</span></label>
              <input type="text" name="phone" id="phone" value="" class="form-control required" role="input" aria-required="true" />
            </div>


            <div class="form-group">
              <label for="email">Votre Email<span class="help-required">*</span></label>
              <input type="text" name="email" id="email" value="" class="form-control required email" role="input" aria-required="true" />
            </div>

            <div class="form-group">
              <label for="weburl">Votre Site Web<span class="help-required">*</span></label>
              <input type="text" name="weburl" id="weburl" value="" class="form-control required url" role="input" aria-required="true" />
            </div>


            <div class="form-group">
              <label for="subject">Sujet<span class="help-required">*</span></label>
              <select name="subject" id="subject" class="form-control required" role="select" aria-required="true">
                <option></option>
                <option>Me contacter</option>
                <option>Un projet ?</option>
                <option>Un contrat ?</option>
                <option>Autre?</option>
              </select>
            </div>

            <div class="form-group">
              <label for="message">Message<span class="help-required">*</span></label>
              <textarea rows="8" name="message" id="message" class="form-control required" role="textbox" aria-required="true"></textarea>
            </div>

            <div class="actions">
              <input type="submit" value="Envoyer le message" name="submit" id="submitButVotre" class="btn btn-primary" title="Click here to submit your message!" />
              <input type="reset" value="Netoyer le formulaire" class="btn btn-danger" title="Remove all the data from the form." />
            </div>
          </fieldset>
        </form>
        </div>
        <br><br>
      </div><!-- col -->
 

<br><br>



</div>
</body>
</html>