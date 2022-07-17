<section id="content" class="page-content">
	<div>
	<br><h2 class="text-center">Dernières nouvelles</h2><hr>
	<ul class="list-unstyled">
		<?php foreach($event1 as $event){ ?>
			<li class="border border-secondary rounded p-2 m-3 bg-white">
				<div class="numbox img-indent3">
					<span><?php setlocale (LC_TIME, 'fr_FR.utf-8','fra');echo strftime("%b", strtotime($event['dateevent'])); ?></span>
					<strong><?php echo strftime("%#d", strtotime($event['dateevent'])); ?></strong>
				</div>
				<div class="media-body">
					<h4 class="card-title"><?php echo $event['nom']; ?></h4>
					<p><?php echo $event['description']; ?></p><br><br>
					<!--<p class="blockquote-footer">Posté par Admin <span>46 Commentaire(s)</span></p>-->
				</div>
			</li>
		<?php } ?>
	</ul>
	</div><hr>
</section>