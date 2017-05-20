<div class="container">
<?php foreach($posts as $post) :?>
	<h3 class="green-text text-darken-2"><?php echo $post['title']; ?></h3>
	<div class="row">
		<small>Postado em: <?php echo $post['created_at']; ?> por <strong> Admin </strong></small> <br>

		<?php echo word_limiter($post['body'], 70); ?>
		<p><a href="#" class="waves-effect waves-light btn">Ler Mais...</a></p>
	</div>
<?php endforeach; ?>
</div>

