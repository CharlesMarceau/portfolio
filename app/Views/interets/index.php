<div class="container">
	<h1>Intérêts</h1>
	<p class="max-750 txt-align-ctr sm-padding">
		Je fais aussi autres choses que des sites Web ! Voici certains trucs que j'aime faire.
	</p>

	<div class="row">

	<?php foreach ($categories as $category) : ?>

		<div class="category col-xs-12 col-sm-6 col-md-3">

			<h2><?= $category->title; ?></h2>

			<ul class="list">

				<?php foreach ($interets as $interet) : ?>

					<?php if( $category->title === $interet->category ) : ?>

						<li><?= $interet->name; ?></li>
					
					<?php endif; ?>

				<?php endforeach; ?>

			</ul>

		</div>

	<?php endforeach; ?>

	</div>
</div>