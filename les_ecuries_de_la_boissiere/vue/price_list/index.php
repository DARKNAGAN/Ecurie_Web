<!--Header-->
<?php
include("./vue/header.php")
?>
<body>
  <div class="container-fluid">
<!--==============================content================================-->
<section id="content" class="page-content">
  <div class="container_12 padcontent">
    	<div class="grid_9">
        	<center><h2>Tarifs 2016-2017</h2></center><br>
          <!--Affichage Flèche de direction-->
     <a class="prev" onclick="plusSlides(-1)">❮</a>
     <a class="next" onclick="plusSlides(1)">❯</a>
     <!--Affichage Bouton position -->
    <div style="text-align:center">
      <span class="dot" title="Cotisations" onclick="currentSlide(1)"></span> 
      <span class="dot" title="Leçons"  onclick="currentSlide(2)"></span> 
      <span class="dot" title="Coût pour propriétaire"  onclick="currentSlide(3)"></span> 
      <span class="dot" title="Cavaliers de passage"  onclick="currentSlide(4)"></span> 
      <span class="dot" title="Stage d’équitation"  onclick="currentSlide(5)"></span> 
    </div>
    <br>
    <!--Affichage Tarif-->
    <div class="slideshow-container">

          <div class="mySlides fade-tarif">
            <div class="numbertext">1 / 5</div>
            <center><img src="./images/price_list/Tarif1.jpg" class="img-tarif"></center>
            <div class="text"> 
            <p class="colorbold marg3 pad1"">Cotisations</p>
          <p class="text-7price pad6"><br>
          • Baby poney de 2 à 4 ans  ..................................offerte <br>
          • Moins de 16 ans................................................125 €<br>
          • Adultes..........................................................158 €<br>
          • Famille (parents + enfant(s) -18ans)......................280 €<br>
          • Baby poney de 2 à 4 ans ..................................offerte<br>
          </p>
          <p class="colorbold marg3 pad1">Licence Fédéral</p>
          <p class="text-7price pad6"><br>
          • Né(e) en 1997 & après.........................................25 €<br>
          • Né(e) en 1996 & avant.........................................36 €<br>
          </p>
          <p class="colorbold marg3 pad1">Licence Compétition </p>
          <p class="text-7price pad6"><br>
          • Compétition PRO..............................................330 €<br>
          • Compétition Amateur.........................................80 €<br>
          • Compétition Club........................................Gratuite<br>
          </p>
              <p class="colorbold marg3 pad1">Compétition :</p> 
          <p class="text-7price pad6"><br>
          • Engagement................................................variable<br>
          • Forfait Concours interne.......22 € + prix de l'engagement<br>
          • Forfait Concours externe ...... 56€ + pris de l'engagement
          </p><br></div>
          </div>


          <div class="mySlides fade-tarif">
            <div class="numbertext">2 / 5</div>
           <center><img src="./images/price_list/Tarif2.jpg" class="img-tarif"></center>
            <div class="text">
            <p class="colorbold marg3 pad1">Leçons</p> 
          <p class="text-7price pad6"><br>
          <b>Membre non propriétaire d'un équidé :<br><br></b>
          • Carte 10h cheval/poney................................183 €<br>
          Comprenant le droit d'accès à 122€ et l'enseignement de 10 leçons à 61€<br>
          • Carte 10h pour les - de 8 ans..........................168 €<br>
          Comprenant le droit d'accès à 112€ et l'enseignement de 10 leçons à 56€<br>
          • Carte baby poney valable 3 mois ....................113 €<br>
          Comprenant le droit d'accès à 75€ et l'enseignement de 10 leçons à 38€<br>
          • Leçon particulière.............................2h de carte<br><br>
          <b> Membre Propriétaire d'un équidé :<br><br></b>
          • Cartes 10h.......................................136 €<br>
          Comprenant le droit d'accès à 90€ et l'enseignement de 10 leçons à 45€<br>
          • Leçon particulière............2h de carte<br>
          Forfait de 15 leçons valable 15 semaines dont 2 séances offertes :<br>
          • Forfait Cheval/ Poney ................................241 €<br>
          Comprenant le droit d'accès à 160€ et l'enseignement de 10 leçons à 81€<br>
          • Forfait pour les - de 8 ans ...........................219 €<br>
          Comprenant le droit d'accès à 146€ et l'enseignement de 10 leçons à 73€<br>
          • Forfait 3 h de cours par semaine..........................291€/mois
          </p><br></div>
          </div>


          <div class="mySlides fade-tarif">
            <div class="numbertext">3 / 5</div>
            <center><img src="./images/price_list/Tarif3.jpg" class="img-tarif"></center>
            <div class="text">
            <p class="colorbold marg3 pad1">Coût global mensuel pour un propriétaire</p>
          <p class="text-7price pad6"><br>
          <b>Chevaux:<br><br></b>
          • Formule box classique.................................498€/mois<br>
          - Formule box sorties luxe..............................528€/mois <br>
          • Formule box grand lux copeaux + sorties.........558€/mois <br>
          • Formule box sérénité..................................331€/mois <br><br>
          <b>Poney:<br><br></b>
          • Formule box.............................................446€/mois<br>
          • Formule box + sorties.................................476€/mois<br><br>
          <b>Paddock<br><br></b>
          • Formule paddock détente............................270€/mois<br>
          • Formule paddock détente plus......................300€/mois<br><br>
          <b>Champmotteux:<br><br></b>
          • Formule Pré évasion ..................................240€/mois<br>
          • Formule Pré évasion confort ........................350€/mois
          </p><br>
          </div>
          </div>


          <div class="mySlides fade-tarif">
            <div class="numbertext">4 / 5</div>
            <center><img src="./images/price_list/Tarif4.jpg" class="img-tarif"></center>
            <div class="text">
              <p class="colorbold marg3 pad1">Cavaliers de Passage </p>
          <p class="text-7price pad6"><br>
          • 1h Cheval / Poney..............................................30 €<br>
          • 1h Poney Shetland..............................................26 €<br>
          • Leçon particulière: Cheval / Poney........................52 €<br>
          • Pension box Cheval......................................29€/jour<br>
          • Pension box Poney.......................................22€/jour<br>
          • Promenade en main 1/2h.....................................11 €<br>
          • Promenade en main 1h........................................16 €<br>
          </p>
            </div>
          </div>


          <div class="mySlides fade-tarif">
            <div class="numbertext">5 / 5</div>
            <center><img src="./images/price_list/Tarif5.jpg" class="img-tarif"></center>
            <div class="text">
            <p class="colorbold marg3 pad1">Stage d’Equitation</p><br>
          <p class="text-7price pad6">
          <b>Adhérents: <br><br></b>
          • 1 semaine.......................................................282 €<br>
          • 1 journée (1/2 pension).......................................62 €<br>
          • 1/2 journée......................................................45 €<br><br>
          <b>Cavalier de Passage:<br><br></b>
          • 1 semaine.......................................................307 €<br>
          • 1/2 pension......................................................69 €<br>
          • 1/2 journée......................................................52 €
          </p><br>
            </div>
          </div>

    </div>

    <!--Open Begin Page & initialisation--> 
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>

          <!--Div Format-->
         <div class="clear"></div> 
        </div>
   <div class="clear"></div>
  </div>
</section>
</div>
</body>
<!--Footer-->
<?php
include("./vue/footer.php")
?>