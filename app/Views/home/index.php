<div class="container">

	<h1>Introduction</h1>

		<div class="max-750 txt-align-ctr sm-padding">
			<p>Ce site, à l'exception de l'utilisation des colonnes de <i>Bootstrap</i>, personnalisé, a pour but de présenter mes compétences en matière de codage pour la création de sites Web. Il présente quelques réalisations et ce que j'en ai appris. Il montre un visuel de chacun des sites mis en ligne en version bureau ainsi qu'en version mobile. Vous pourrez accèder aux sites directement.</p>
			<p>À noter que je n'ai fait aucun design de page Web. Les designs ont été conçus par <i>Triomphe</i>, <i>Agence&nbsp;Option</i> et <i>Larouche&nbsp;Marketing&nbsp;Communication</i>.</p>
		</div>

	<div class="clearfix row intro">

		<div class="col-xs-12 col-sm-4 txt-align-ctr">

			<h2>Connaîssances</h2>

			<p><i class="fa fa-laptop"></i></p>
			<p>Mes compétences acquises ainsi que ma motivation me stimulent à développer mes connaissances, à réaliser mes projets de carrière et me dépasser.</p>

		</div>

		<div class="col-xs-12 col-sm-4 txt-align-ctr">

			<h2>Évolution</h2>

			<p><i class="fa fa-signal"></i></p>
			<p>Internet est une technologie en constante évolution qui ouvre la porte à l’immagination et à la liberté de création. Je veux suivre le rythme de son expansion.</p>

		</div>

		<div class="col-xs-12 col-sm-4 txt-align-ctr">

			<h2>Ambition</h2>

			<p><i class="fa fa-code"></i></p>
			<p>Mon principal objectif est d'être un expert dans le développement de site internet, spécialement en programmation car c'est ce qui me fascine.</p>

		</div>

	</div>
	
</div>


<div class="sites">

	<h2>Quelques exemples</h2>

	<div class="clearfix row">

		<?php foreach ( $sites as $index => $site ) : ?>

			<div class="col-xs-12 col-sm-4">

				<div class="site">

					<?= $site->details; ?>

				</div>

			</div>

		<?php endforeach; ?>
	
	</div>

</div>

<div class="container">
	<div class="txt-align-ctr">
		<a href="<?= BASE_URL; ?>sites/" class="button">Voir tous les sites</a>
	</div>
</div>