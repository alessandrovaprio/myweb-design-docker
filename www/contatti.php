<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Alessandro Vaprio">
    <title>M.Y Web Deisgn | Contatti</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
    
  </head>
  <header>
  
  
  <?php include ('header.html'); ?>
  
  </header>
  <body>
  <div class="container">
    <!-- form di contatto-->
  <form id="contact" action="" method="post">
    <h3>Vuoi informazioni?</h3>
    <h4>Contattaci oggi, ti ricontatteremo entro 24 ore!</h4>
    <fieldset>
      <input placeholder="Nome" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Indirizzo Email" id="emailField" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Numero di telefono" id="phoneField" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Scrivi il tuo messaggio...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" onClick="CheckEmail()" data-submit="...Sending">Invia la tua richiesta</button>
    </fieldset>
  </form>
  </div>
  <!--includo la mappa-->
  <?php include ('map.html'); ?>
    
  <footer>
  <script>
    //funzione per validare il campo numero di telefono in modo che abbia solo numeri
    function CheckNumber(phoneFiled){
      var reg = new RegExp('^[0-9]+$');
      if (!reg.test(phoneFiled) || (phoneFiled == "") || (phoneFiled == "undefined")) {
        alert("Inserire un numero di telefono corretto.");
        $("#phoneField").select();
        return false;
      } 
    };

    function CheckMail(mailField){
      var reg = new RegExp('/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; ');
      if (!reg.test(mailField) || (mailField == "") || (mailField == "undefined")) {
        alert("Inserire una mail nel formato xx@xx.it.");
        $("#phoneField").select();
        return false;
      } 
    };
    //aggiunto l'evento alla modifica del campo telefono, gli altri campi hanno validazioni date dal loro tipo
  document.getElementById('phoneField').addEventListener('change',function () {
        var phoneField=$("#phoneField").val();
        CheckNumber(phoneField);
      });

  document.getElementById('emailField').addEventListener('change',function () {
        var mailField=$("#emailField").val();
        CheckMail(mailField);
      });
  </script>
        <?php include ('footer.html'); ?>
    </footer>
