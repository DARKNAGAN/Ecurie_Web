<section id="content" class="page-content">
	<div>
	<br><h2 class="text-center">Tous les évenements du club</h2><hr>
	<ul class="list-unstyled">
		<?php foreach($eventsAll as $event){ ?>
			<li class="border border-secondary rounded p-2 m-3 bg-white">
				<img class="img-thumbnail rounded m-2" src=".<?php echo $event['imageevent']; ?>" alt="">
				<div class="media-body">
					<h4 class="card-title"><?php echo $event['nom']; ?><br>
					<small class="text-muted">Le <?php setlocale (LC_TIME, 'fr_FR.utf-8','fra');echo strftime(" %e %B %Y", strtotime($event['dateevent'])); ?> à <?php echo $event['lieu'];?></small><br>
					<!--<a href="event.php#" class="button-1 style" style="color:red">Participer</a>-->
					</h4>
					<p><?php echo $event['description']; ?></p>
				</div>
			</li>
		<?php } ?>
	</ul>
	</div><hr>
</section>