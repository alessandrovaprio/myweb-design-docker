<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Alessandro Vaprio">
    <title>M.Y Web Deisgn | Home</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/wow-alert.css">
    <!--<link rel="stylesheet" href="./css/header.css">-->
    <script src="./jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="./scripts/wow-alert.js"></script>

  </head>
  <body>
      <!--incluso header-->
    <header>
    <?php include ('header.html'); ?>
    </header>

    <section id="showcase">
      <div class="container">
        <h1>We Design your Dreams</h1>
        <p>Aiutiamo a scatenare il tuo potenziale con soluzioni e prodotti all'avanguardia.</p>
      </div>
    </section>

    <!--sezione per esporre ambiti-->
     <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/logo_html.png">
          <h3>Siti personalizzati</h3>
          <p>Sviluppiamo siti in base alle vostre esigenze con le migliori tecnologie disponibili.</p>
        </div>
        <div class="box">
          <img src="./img/logo_connectivity.jpg">
          <h3>Connettività</h3>
          <p>Soluzioni per tutte le necessità:Fibra,Wireless,Satellitare.</p>
        </div>
        <div class="box">
          <img src="./img/logo_server.jpg">
          <h3>Server e sicurezza</h3>
          <p>I migliori server e i dispositivi per la tua azienda.</p>
        </div>
      </div>
    </section>

    <!--rimando alla pagina contatti-->
    <section id="info">
      <div class="container">
        <h1>Sempre al tuo fianco</h1>
        <p>siamo il tuo partner perfetto, scopri come.</p>
        <button onclick="window.location.href='contatti.php';">Click per maggiori informazioni</button>
        
      </div>
    </section>
    
    <footer>
        <?php include ('footer.html'); ?>
    </footer>
  </body>
</html>
