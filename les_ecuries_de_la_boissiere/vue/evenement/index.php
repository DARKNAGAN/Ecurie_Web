<body>
<div class="container-fluid">
	<section id="content" class="page-content">
		<div class="container">
			<br><center><h2>Tous les évenements du club</h2></center><hr>
				<ul class="list-unstyled">
				<?php foreach($eventsAll as $event){ ?>
					<li class="media m-3 border border-secondary rounded p-2 bg-white">
						<img class="rounded m-2" src=<?php echo $event['imageevent']; ?> alt="">
						<div class="media-body">
							<h4 class="card-title"><?php echo $event['nomevent']; ?><br>
							<small class="text-muted">Le <?php setlocale (LC_TIME, 'fr_FR.utf-8','fra');echo utf8_encode(strftime(" %e %B %Y", strtotime($event['dateevent']))); ?> à <?php echo $event['lieuevent'];?></small><br>
							<!--<a href="event.php#" class="button-1 style" style="color:red">Participer</a>-->
							</h4>
							<?php echo $event['descriptionevent']; ?>
						</div>
					</li>
				<?php } ?>
				</ul>
		</div>
	</section>
</div>