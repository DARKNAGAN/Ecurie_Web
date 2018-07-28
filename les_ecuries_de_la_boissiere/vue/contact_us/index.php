<!--Header-->
<?php
include("./vue/header.php")
?>
<body>
  <div class="container-fluid">
<!--==============================content================================-->
<section id="content" class="page-content">
  <div class="container_12 padcontent">
  <!--Information de contact-->
  	<div class="grid_5">
    	<h2>Trouvez nous</h2>
        <div class="map image-border">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.700501475971!2d2.296194451504442!3d48.443087679147055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5c68657aaa85f%3A0xbbe2b815619dc1e!2sLes+%C3%89curies+de+la+Boissi%C3%A8re!5e0!3m2!1sfr!2sfr!4v1476032117547" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <dl>
        <dd class="text-4">Les Ecuries de la Boissiere<br>
                          Route de la Ferte-Alais / D 145<br>
                          91590 ORVEAU</dd>
        <dd><span>Telephone:</span>01.64.57.58.77</dd>
        <dd><span>Mobile :</span>06.72.00.55.65</dd>
        <dd>E-mail: <a href="mailto:ecuriesboissiere@gmail.com" class="link2">ecuriesboissiere@gmail.com</a></dd>
      </dl>
    </div>
    <!--Formulaire Contact-->
	<div class="grid_7">
    	<h2>Entrer en contact</h2>
          <form id="form" method="post" action="contact_us.php">
        <fieldset>
          <label class="name">
            <input type="text" name="subject" value="<?php if (isset($_POST['subject'])){echo $_POST['subject'];} ?>" id="name" required placeholder="Nom:">
            <span class="error error-empty" style="display: none;">*Ce n'est pas un nom valide .</span><span class="empty error-empty" style="display: none;">*Ce champ est requis.</span> </label>
          <label class="email">
            <input type="email" name="email" value="<?php if (isset($_POST['email'])){echo $_POST['email'];} ?>" id="email" required placeholder="Email:">
            <span class="error error-empty" style="display: none;">*Cette adresse email n'est pas valide.</span><span class="empty error-empty" style="display: none;">*Ce champ est requis.</span> </label>
          <label class="phone">
            <input type="tel" name="numphone" value="<?php if (isset($_POST['numphone'])){echo $_POST['numphone'];} ?>" id="phone" required placeholder="Téléphone:">
            <span class="error error-empty" style="display: none;">*Ce n'est pas un numéro de téléphone valide.</span><span class="empty error-empty" style="display: none;">*Ce champ est requis.</span> </label>
          <label class="message">
            <textarea name="messages" id="message" required placeholder="Message"><?php echo @$_POST['messages']; ?></textarea>
            <span class="error" style="display: none;">*Le message est trop court .</span> <span class="empty" style="display: none;">*Ce champ est requis.</span> 
            </label>

        </fieldset>  
            <button type="submit" value="Envoyer"  class="button-3" onclick="Alerte()">Envoyer </button> 
                    <div class="success" >Formulaire de contact envoyé! <strong>Nous serons en contact bientot.</strong> </div>
      </form><br>
    </div>
    <!--Div Format-->
  <div class="clear"></div>
  </div>
</section>
</div>
</body>
<!--Footer-->
<?php
include("./vue/footer.php")
?>