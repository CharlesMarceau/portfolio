<div class="container">
	<h1>Compétences</h1>

	<div class="max-750 txt-align-ctr sm-padding">
		<p>Il existe plusieurs langages, outils et il est pratiquement impossible de tout connaître en tant que développeur Web, mais voici mes compétences dans le domaine. Déroulez l'accordéon pour connaitre les détails de mes compétences.</p>
	</div>
	

	<div class="clearfix max-750 row">

		<?php foreach ( $competences as $index => $competence ) : ?>

			<div class="col-xs-12 xs-no-padding">

				<div class="competence">

					<h2 class="close <?= ( $index % 2 ) ? 'even' : 'odd' ?>"><i class="fa <?= $competence->icon; ?> left"></i><?= $competence->title; ?><i class="fa fa-times right"></i></h2>
					<div class="accordion">
						<p class="xs-padding"><?= $competence->text; ?></p>
					</div>
					

				</div>

			</div>

		<?php endforeach; ?>
	
	</div>

</div>
