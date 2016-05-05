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

<div class="modal" id="coffee-detail" style="display: none"></div>

<div id="add-coffee-panel" class="full-page-modal" style="display: none">
	<div class="wrapper">
		<form method="post" name="new-coffee" id="new-coffee" action="">
			<div class="hero-input">
				<input type="text" id="submission-title" name="title" value="" placeholder="Coffee name">
			</div>
			<div class="detail-inputs">
				<div class="input-group">
					<label>Roaster</label>
					<input type="text" id="submission-roaster" name="roaster" value="" placeholder="Roaster's name">
					<label>Brewing method</label>
					<input type="text" id="submission-rmethod" name="method" value="" placeholder="Select your brewing method">
					<label>Grounds (g)</label>
					<input type="text" id="submission-grounds" name="grounds" value="" placeholder="How many grounds?">
					<label>Water (g)</label>
					<input type="text" id="submission-water" name="water" value="" placeholder="How much water do you use?">
					<label>Time</label>
					<input type="text" id="submission-time" name="time" value="" placeholder="How long does it takes?">
				</div>
				<div class="coffee-note">
					<textarea id="submission-note" name="note" placeholder="Write your note..."></textarea>
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<ul class="bottom-actions">
			<li><a id="cancel-new" class="white flat-button">Cancel</a></li>
			<li><a id="publish-new" class="white raised-button">Publish</a></li>
		</ul>
	</div>
</div>

<?php get_sidebar('user-slide-out'); ?>

<?php get_footer(); ?>