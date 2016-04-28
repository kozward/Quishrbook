<?php $post = get_post($_POST['']); ?>

<div id="coffee-detail-content post-<?php the_ID(); ?>">

	<?php while (have_posts()) : the_post(); ?>

	<header id="detail-header">
		<div class="detail-coffee"><?php the_title(); ?></div>
		<div class="detail-roaster"><?php echo get_post_meta($post->ID, 'Roaster', true); ?></div>
		<div class="detail-group">
			<div class="group-item">
				<i class="material-icons">local_cafe</i> <div class="group-item-method"><?php echo get_post_meta($post->ID, 'Method', true); ?></div>
			</div>
			<div class="group-item">
				<i class="material-icons">grain</i> <div class="group-item-method"><?php echo get_post_meta($post->ID, 'Grounds', true); ?></div>
			</div>
			<div class="group-item">
				<i class="material-icons">local_drink</i> <div class="group-item-method"><?php echo get_post_meta($post->ID, 'Water', true); ?></div>
			</div>
			<div class="group-item">
				<i class="material-icons">alarm</i> <div class="group-item-method"><?php echo get_post_meta($post->ID, 'Time', true); ?></div>
			</div>
		</div>
	</header>
	<article id="detail-content">
		<?php the_content();?>
	</article>
	<div id="detail-author">
		<!-- <img src="img_profile_002.jpg" class="author-profile"> -->
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
		<div class="author-info">
			<div class="author-name"><?php the_author(); ?></div>
			<div class="post-time">made on <?php the_date(); ?></div>
		</div>
	</div>

	<?php endwhile;?> 

</div>