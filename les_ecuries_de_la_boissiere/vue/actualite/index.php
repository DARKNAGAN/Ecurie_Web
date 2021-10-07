<body>
<div class="container-fluid">
	<section id="content" class="page-content">
		<div class="container">
			<br><center><h2>Dernières nouvelles</h2></center><hr>
				<ul class="list-unstyled">
				<?php foreach($event1 as $event){ ?>
					<li class="media m-3 border border-secondary rounded p-2">
						<div class="numbox img-indent3">
							<span><?php setlocale (LC_TIME, 'fr_FR.utf-8','fra');echo utf8_encode(strftime("%b", strtotime($event['dateevent']))); ?></span>
							<strong><?php echo utf8_encode(strftime("%#d", strtotime($event['dateevent']))); ?></strong>
						</div>
						<div class="media-body">
							<h4 class="card-title"><?php echo $event['nomevent']; ?></h4>
							<?php echo $event['descriptionevent']; ?><br><br>
							<!--<p class="blockquote-footer">Posté par Admin <span>46 Commentaire(s)</span></p>-->
						</div>
					</li>
				<?php } ?>
				</ul>
		</div>
	</section>
</div>