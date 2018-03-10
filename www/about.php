<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
      <meta name="author" content="Alessandro Vaprio">
    <title>M.Y Web Deisgn | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/wow-alert.css">
    <!--<link rel="stylesheet" href="./css/header.css">-->
    <script src="./jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="./scripts/wow-alert.js"></script>
  </head>
  <body>
  <header>
    <?php include ('header.html'); ?>
    </header>

    <!--<section id="newsletter">
      <div class="container">
        <h1>Subscribe To Our Newsletter</h1>
        <form>
          <input type="email" placeholder="Enter Email...">
          <button type="submit" class="button_1">Subscribe</button>
        </form>
      </div>
    </section>-->

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Su di noi</h1>
          <p>
            Siamo un'azienda Tech, politecnica, specializzata nel mondo IT.
          </p>
          <p class="dark">
            Siamo fieri di poter dire di essere all'avanguardia e di costruire soluzioni su "su misura". Ci consideriamo dei sarti hi-tech in grado di valutare le soluzioni e i prodotti migliori per l'esigenze di ogni cliente. Nel nostro percorso abbiamo affrontato sfide importanti, che ci hanno permesso di acquisire molta esperienza.
            Possiamo vantare clienti provenienti da grosse realtà e dalla pubblica amministrazione. Ogni esigenza per noi è un dovere.  
          </p>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Come lo facciamo</h3>
            <p>Crediamo molto nei giovani, investiamo sulla loro continua formazione e crediamo fortemente nel pair-programming. Ci ispiriamo ai grandi colossi IT pur rimanendo con l'animo Italiano.</p>
          </div>
        </aside>
      </div>
    </section>
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
