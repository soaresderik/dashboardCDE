<div class="container">
<?php foreach($posts as $post) :?>
	<h3 class="green-text text-darken-2"><?php echo $post['title']; ?></h3>
	<div class="row">
		<i class="tiny material-icons">today</i> <small><?php echo $post['created_at']; ?>   <i class="tiny material-icons">perm_identity</i><strong> Admin </strong></small> <br>

		<?php echo word_limiter($post['body'], 70); ?>
		<p><a href="#" class="waves-effect waves-light btn">Ler Mais...</a></p>
	</div>
<?php endforeach; ?>
</div>

