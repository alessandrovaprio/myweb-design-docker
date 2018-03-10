<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Alessandro Vaprio">
    <title>M.Y Web Deisgn | Services</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slider.css">
    <!--<link rel="stylesheet" href="./css/header.css">-->
    <script src="./jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="./scripts/readProducts.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="./scripts/wow-alert.js"></script>
    

  </head>
  <body>
      
    <header>
    <?php include ('header.html'); ?>
    
    </header>
    <h1 id="h1_product">I Nostri Prodotti</h1>

    <div class="slider" id="main-slider"><!-- principale container  -->
	
  <div class="slider-wrapper" id="products" style="left: 0px;"><!-- wrapper element -->
  <script>
    //creo uno slider
    CreateSlider();
    //dichiaro asincrona CreateSlider in modo che aspetti che tag img siano caricati    
        async function CreateSlider(){
          //aspetto che i tag img vengano creati
          await readProducts("products");
          var slider = new Slideshow("#main-slider");
          
        }
        //Mi ricavo la descrizione dei prodotti e la carico sotto lo slider sfruttando l'indice
    function ShowProductDescription(ind){
      //prendo tutte le slide
      var l_slides = this.document.querySelectorAll(".slide");
      //prendo la slide corrente
      var l_slide=l_slides[ind];
      //dentro l'attributo alt dell'imagine ho salvato il nome e descrizione divisi da ';'
      var nameanddesc=l_slide.alt;
      var split= nameanddesc.split(";");
      //creo altri attributi per mostrare i valori
      var htmlproddescr="<h2 id=\"h2_product\">"+split[0]+"</h2>";
      //controllo se esiste anche la descrizione e creo un altro tag
      if(split.length>1){
        htmlproddescr+="<h3 id=\"h3_product\">"+split[1]+"</h3>";
      }
      //inserisco l'html, non uso il metodo append altrimenti a ogni passaggio aumenteranno gli elementi
      $("#descriptions").html(htmlproddescr);
      

    };

	function Slideshow(element) {
    
		this.el = document.querySelector(element);
		this.init();
	}

	Slideshow.prototype = {
		init: function() {
			/*preso spunto dall'esercitazioni per creare una galleria slider*/
			this.wrapper = this.el.querySelector(".slider-wrapper");
			this.slides = this.el.querySelectorAll(".slide");
			this.previous = this.el.querySelector(".slider-precedente");
			this.next = this.el.querySelector(".slider-successiva");
			this.index = 0;
      this.total = this.slides.length;
      ShowProductDescription(this.index);
			this.actions();
		},
		_slideTo: function(slide) {
			var currentSlide = this.slides[slide];
      this.wrapper.style.left = "-" + currentSlide.offsetLeft + "px";
      ShowProductDescription(slide);
		},
		actions: function() {
			var self = this;
			self.next.addEventListener("click", function() {
				self.index++;
				self.previous.style.display = "block";
				if (self.index == self.total - 1) {
					self.index = self.total - 1;
					self.next.style.display = "none";
				}
				self._slideTo(self.index);
			}, false);
			self.previous.addEventListener("click", function() {
				self.index--;
				self.next.style.display = "block";
				if (self.index == 0) {
					self.index = 0;
					self.previous.style.display = "none";
				}
				self._slideTo(self.index);
			}, false);
		}
	};
	
document.addEventListener("DOMContentLoaded", function() {
		/*quando la pagina è caricata creo uno Slider*/
    CreateSlider();
	});
        
    </script>
      
    </div>
  <div class="slider-nav"><!-- "Previous" and "Next" actions -->
      <button type="button" class="slider-precedente" >Previous</button>
      <button type="button" class="slider-successiva" >Next</button>
    </div>
  </div>

    <div class="container" id="descriptions">
    <section id="boxes">
        <div  id="products">

        </div>
    </section>
    
    </div>
    <!--sezione che al click button va alla pagina contatti-->
    <section id="info">
      <div class="container">
        <h1>I nostri sono i prodotti migliori</h1>
        <p>il giusto prezzo per i migliori prodotti, chiedi un preventivo.</p>
        <button onclick="window.location.href='contatti.php';">Click per maggiori informazioni</button>
        
      </div>
    </section>
    <footer>
        <?php include ('footer.html'); ?>
    </footer>
  </body>