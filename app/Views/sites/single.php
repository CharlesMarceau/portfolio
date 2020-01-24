<div class="container single">
	<p>
		<a href="<?= BASE_URL; ?>sites/" class="button">&#9756;&nbsp;Tous les sites</a>
	</p>
	<h1><?= $single_site->title; ?></h1>

	<p class="experience max-750 txt-align-ctr">
		<?= $single_site->experience; ?>
	</p>

	<div class="site row">
		<div class="col-xs-12 col-sm-8">

			<img class="desktop-model" src="<?= IMAGES; ?>iMac.png">
			<img class="desktop-img" src="<?= IMAGES . $single_site->img_desktop; ?>">

		</div>
		<div class="col-xs-12 col-sm-4">

			<img class="mobile-model" src="<?= IMAGES; ?>iphone-7.png">
			<img class="mobile-img" src="<?= IMAGES . $single_site->img_mobile; ?>">

		</div>
	</div>



	<p class="txt-align-ctr">
		<a href="<?= $single_site->web; ?>" class="button" target="_blank">Voir le site</a>
	</p>


</div>