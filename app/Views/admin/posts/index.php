<div class="container admin-list">
	
	<h1>Gérez les articles </h1>

	<p>
		<a href="?p=admin/posts/add" class="button right">Ajouter</a>
	</p>

	<table class="table">
		
		<thead>
			
			<tr>
				<td>Ordre</td>
				<td>Titre</td>
				<td>Actions</td>
			</tr>

		</thead>

		<tbody>
			
			<?php foreach( $posts as $index => $post ) : ?>

				<tr>
					<td><?= $index+1; ?></td> 
					<td><?= $post->title; ?></td> 
					<td>
						<a href="?p=admin/posts/edit&id=<?= $post->id; ?>" class="button">Éditer</a>
		
						<form action="?p=admin/posts/delete" method="post" style="display: inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer cet article ?');">
							<input type="hidden" name="id" value="<?= $post->id; ?>">
							<button type="submit" class="button alert right">Supprimer</button>

						</form>

					</td> 
				</tr>

			<?php endforeach; ?>
		</tbody>

	</table>

</div>

