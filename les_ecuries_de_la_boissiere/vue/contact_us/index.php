<body>
	<div class="container-fluid">
		<section id="content" class="page-content">
			<div class="container">
				<div><h2>Trouvez nous</h2></div><br>
				<div class="row">
					<div class="col">
						<div class="map-responsive">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.700501475971!2d2.296194451504442!3d48.443087679147055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5c68657aaa85f%3A0xbbe2b815619dc1e!2sLes+%C3%89curies+de+la+Boissi%C3%A8re!5e0!3m2!1sfr!2sfr!4v1476032117547" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col"><dl><dd>
					Coordonnées GPS :<br>
					Lat: 48.442 433 Long: 2.299016
					</dd>
					<dd>
					Les Ecuries de la Boissiere<br>
					Route de la Ferte-Alais / D 145<br>
					91590 ORVEAU
					</dd>
					<dd>
					Telephone : 01.64.57.58.77<br>
					Mobile : 06.72.00.55.65<br>
					E-mail : <a href="mailto:ecuriesboissiere@gmail.com" class="link2">ecuriesboissiere@gmail.com</a>
					</dd></dl></div>
				</div>
				<!--Formulaire Contact-->
				<br><div><h2>Entrer en contact</h2></div><br>
				<form class="needs-validation" onsubmit="return verifierMail(this.elements['Email']); return Verifier_Numero_Telephone(this.elements['Téléphone'])"  method='post' name="formulaire" novalidate>
					<div class="form-row">
						<div class="col-md-3 mb-3">
							<label for="validationCustom01">Nom</label>
							<input type="text" class="form-control" id="validationCustom01" placeholder="Nom" required>
							<div class="invalid-feedback">Veuillez fournir un nom valide.</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationCustom02">Email</label>
							<input type="mail" class="form-control" id="validationCustom02" placeholder="Email" required>
							<div class="invalid-feedback">Veuillez fournir un mail valide.</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationCustom05">Téléphone</label>
							<input type="tel" class="form-control" id="validationCustom03" placeholder="Téléphone" required>
							<div class="invalid-feedback">Veuillez fournir un numéro valide.</div>
						</div>
					</div>
					<div class="form-row">  
						<div class="col-md-9 mb-3">
							<label for="exampleFormControlTextarea1">Message</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>	
					</div>
					<button class="btn btn-primary" type="submit">Envoyer</button>
				</form><br>
			</div>
		</section>
	</div>
</body>