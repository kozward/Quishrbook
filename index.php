<?php get_header(); ?>


<div id="main-table">
	
	<?php /* The coffee note entry loop */ ?>
	<?php while ( have_posts() ) : the_post() ?>

	<a id="index-<?php the_ID(); ?>" class="tr coffee-row trigger" data="<?php the_permalink(); ?>">
		<div class="grid-wrapper">
			<div class="td coffee">
				<div class="coffee-name"><?php the_title(); ?> / <span class="coffee-roaster"><?php echo get_post_meta($post->ID, 'Roaster', true); ?></span></div>
				<!-- <div class="coffee-roaster">Sighglass Coffee</div> -->
			</div>
			<div class="td method"><?php echo get_post_meta($post->ID, 'Method', true); ?></div>
			<div class="td grounds"><?php echo get_post_meta($post->ID, 'Grounds', true); ?> <span class="unit"></span></div>
			<div class="td water"><?php echo get_post_meta($post->ID, 'Water', true); ?> <span class="unit"></span></div>
			<div class="td time"><?php echo get_post_meta($post->ID, 'Time', true); ?></span></div>
			<div class="td maker"><?php the_author(); ?></div>
			<div class="td tastegood">
			<?php 
				if (get_post_meta($post->ID, 'Taste', true) == "good") {
					echo '<i class="material-icons">favorite</i>';
				}
			?>
			</div>
		</div>
	</a>

	<?php endwhile; ?>

</div>

<div class="modal" id="coffee-detail" style="display: none">
	<!-- <header id="detail-header">
		<div class="detail-coffee">Finca Orizol, Julio Roberto Rojas</div>
		<div class="detail-roaster">Sighglass Coffee</div>
		<div class="detail-group">
			<div class="group-item">
				<i class="material-icons">local_cafe</i> <div class="group-item-method">Espresso</div>
			</div>
			<div class="group-item">
				<i class="material-icons">grain</i> <div class="group-item-method">17.3g medium coars</div>
			</div>
			<div class="group-item">
				<i class="material-icons">local_drink</i> <div class="group-item-method">150g water</div>
			</div>
			<div class="group-item">
				<i class="material-icons">alarm</i> <div class="group-item-method">34 seconds</div>
			</div>
		</div>
	</header>
	<article id="detail-content">
		<p>The Central Asociados Productores de Cafe is made up of 85 active farmers (as of 2006,) and primarily produces Typica and Caturra varieties at elevations ranging from 1,400 - 1,700 masl. The acidity of this coffee is characterized by focused apricot and nectarine stone fruit, complemented by soft graham and honey flavors. A touch of butterscotch in the finish rounds out the cup for a very rich and satisfying profile.</p>
	</article>
	<div id="detail-author">
		<img src="img_profile_002.jpg" class="author-profile">
		<div class="author-info">
			<div class="author-name">Kevin Chang</div>
			<div class="post-time">made on 3/14/2016</div>
		</div>
	</div> -->
</div>

<?php get_sidebar('user-slide-out'); ?>

<?php get_footer(); ?>