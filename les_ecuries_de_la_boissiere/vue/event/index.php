<!--Header-->
<?php
include("./vue/header.php")
?>
<body>
  <div class="container-fluid">
<!--==============================content================================-->
<section id="content" class="page-content">
  <div class="container_12 padcontent">
    <!--Div Trie-->
    <div class="grid_3">

      <h2>Trier</h2>
        <ul class="list2 margpad3">
          <li><a class="onglet_0 onglet" id="onglet_tous" onclick="javascript:change_onglet('tous');">Tous les événements</a></li>
          <li><a class="onglet_0 onglet" id="onglet_decembre" onclick="javascript:change_onglet('decembre');">Décembre 2017</a></li>
          <li><a class="onglet_0 onglet" id="onglet_novembre" onclick="javascript:change_onglet('novembre');"">Novembre 2017</a></li>
          <li><a class="onglet_0 onglet" id="onglet_octobre" onclick="javascript:change_onglet('octobre');">Octobre 2017</a></li>
          <li><a class="onglet_0 onglet" id="onglet_septembre" onclick="javascript:change_onglet('septembre');">Septembre 2017</a></li>
          <li><a class="onglet_0 onglet" id="onglet_aout" onclick="javascript:change_onglet('aout');"">Août 2017</a></li>
          <li><a class="onglet_0 onglet" id="onglet_juillet" onclick="javascript:change_onglet('juillet');"">Juillet 2017</a></li>
          <li><a class="onglet_0 onglet" id="onglet_juin" onclick="javascript:change_onglet('juin');"">Juin 2017</a></li>
          <li><a class="onglet_0 onglet" id="onglet_mai" onclick="javascript:change_onglet('mai');"">Mai 2017</a></li>
          <li><a class="onglet_0 onglet" id="onglet_avril" onclick="javascript:change_onglet('avril');"">Avril 2017</a></li>
          <li><a class="onglet_0 onglet" id="onglet_mars" onclick="javascript:change_onglet('mars');">Mars 2017</a></li>
          <li><a class="onglet_0 onglet" id="onglet_fevrier" onclick="javascript:change_onglet('fevrier');">Février 2017</a></li>
          <li><a class="onglet_0 onglet" id="onglet_janvier" onclick="javascript:change_onglet('janvier');">Janvier 2017</a></li>
        </ul>
    </div>
  <!--Affichage Event-->
      <div class="grid_9E">
            <div class="contenu_onglets">

                <!--Filtre Tous-->           
                <div class="contenu_onglet" id="contenu_onglet_tous">
                  <h2>Evénements à venir</h2>

                    <!--Titre--> 
                    <div class="wrap marg21">
                      <p class="colorbold pad1">Event1</p>
                      <div class="event-lieu">
                      <p class="text-17">Organisé à Orveau-    
                      </div>
                      <div class="event-date">
                      <p class="text-17">'2017-07-13 17:00:00'</p>
                      </div>
                    </div>
                    <!--Description--> 
                    <div class="wrap ">
                      <img src='./images/event/Event_img32.jpg' alt="" class="image-border img-indent4">
                      <div class="extra-wrap box-6">

                      <p class="text-7 pad13">BlablaEvent</p>
                        <!--<a href="event.php#" class="button-1 style" style="color:red">Participer</a>-->
                      </div>
                    </div>
                </div>

                    


               <!--Filtre Janvier-->  
              <div class="contenu_onglet" id="contenu_onglet_janvier">
                <h2>Evénements en janvier</h2>

              </div>

          <!--Filtre Fevrier--> 
              <div class="contenu_onglet" id="contenu_onglet_fevrier">
                <h2>Evénements en février</h2>

              </div>

               <!--Filtre Mars-->  
              <div class="contenu_onglet" id="contenu_onglet_mars">
                <h2>Evénements en mars</h2>

              </div>  

               <!--Filtre Avril-->  
              <div class="contenu_onglet" id="contenu_onglet_avril">
                <h2>Evénements en avril</h2>

              </div>

               <!--Filtre Mai-->  
              <div class="contenu_onglet" id="contenu_onglet_mai">
                <h2>Evénements en mai</h2>

              </div>

               <!--Filtre Juin-->  
              <div class="contenu_onglet" id="contenu_onglet_juin">
                 <h2>Evénements en juin</h2>

              </div>

               <!--Filtre Juillet-->  
              <div class="contenu_onglet" id="contenu_onglet_juillet">
                  <h2>Evénements en juillet</h2>

              </div>

              <!--Filtre Aout-->  
              <div class="contenu_onglet" id="contenu_onglet_aout">
                <h2>Evénements en août</h2>

              </div>

               <!--Filtre Septembre-->  
              <div class="contenu_onglet" id="contenu_onglet_septembre">
                <h2>Evénements en septembre</h2>

              </div>

              <!--Filtre Octobre-->  
              <div class="contenu_onglet" id="contenu_onglet_octobre">
                <h2>Evénements en octobre</h2>

              </div>

              <!--Filtre Novembre-->  
              <div class="contenu_onglet" id="contenu_onglet_novembre">
                <h2>Evénements en novembre</h2>

              </div>

              <!--Filtre Décembre-->  
              <div class="contenu_onglet" id="contenu_onglet_decembre">
                <h2>Evénements en décembre</h2>

              </div> 

          </div>
      <!--Div Format-->
      <div class="clear"></div> 
      </div>
  <div class="clear"></div>
  </div>
</section>
</div>
<!--Open Begin Page--> 
    <script type="text/javascript">
                var anc_onglet = 'tous';
                change_onglet(anc_onglet);
    </script>
<!--Footer--> 
<?php
include("./vue/footer.php")
?>