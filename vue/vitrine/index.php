<section id="content" class="page-content">
	<div>
		<br><h2 class="text-center">Boutique</h2><hr>	
		<h6 class="text-center">Pour tout renseignement ou achat contacter le Club</h6>
		<div class="border border-secondary rounded text-center bg-white">
		<p>Une très large gamme de produits destinés à la pratique de l’équitation 
		afin de pratiquer ce noble sport de la manière la plus efficace possible.
		La performance lors d’un entraînement de montage ou lors d’un concours de saut d’obstacles 
		dépend également de l’équipement choisi par le cavalier.</p><br>
		<p> Il n’y a rien de mieux que des selles d’équitation ou des sangles de dressage adapté à votre animal ainsi que des équipements 
		qui sauront vous apporter confort et optimisation et également de nombreux produits destinés à l’équipement du cheval au travail.</p>
		</div><hr>
		<h2 class="text-center">Produit actuellement en vente</h2><br>
		<div class="card-deck p-3 border border-secondary rounded">
			<?php foreach($articlesCav as $cle => $article){ ?>
				<div class="card my-1">
					<img class="card-img-top px-5" src=".<?php echo $article['imagearticle'];?>" alt="">
					<div class="card-body">
						<h5 class="card-title font-weight-normal"><?php echo $article['libelle'] ?></h5>
						<p class="card-text font-weight-light"><?php echo substr($article['description'], 0, 150).'...';?></p>
					<h5 class="card-title font-weight-bold"><?php echo $article['prix'] ?> €</h5>
					</div>
				</div>
				<?php if ($cle==2||$cle==5||$cle==8||$cle==11||$cle==14||$cle==17||$cle==20||$cle==23||$cle==26||$cle==29||$cle==32) {
					echo "<div class='w-100 d-none d-md-block'></div>";}?>
			<?php } ?>
		</div>
	</div><br>
</section>