<?php
	global $current_user;
	get_currentuserinfo();
?>

<div id="slide-out">
	<header id="slide-out-header">
		<div class="user-basic">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?>
			<div class="name"><?php echo $current_user->user_login; ?></div>
			<div class="email"><?php echo $current_user->user_email; ?></div>
		</div>
	</header>
	<div id="slide-out-content">
		<div class="coffee-stats">
			<div class="title">My top coffee method</div>

			<?php 
				if ( is_user_logged_in() ) {
					$user_id = get_current_user_id();
					$query = new WP_Query( array( 'author' => $user_id, 'meta_key' => 'Method') );
   					$posts = $query->get_posts();
   					$my_methods = array();

   					foreach($posts as $post) {
						$method = get_post_meta($post->ID, 'Method', true);
						array_push($my_methods, $method);
					}

					$method_count = array_count_values($my_methods);
					$top_methods = array_slice($method_count, 0, 3);
					$total_entry = array_sum($method_count);
					arsort($top_methods);

					foreach ($top_methods as $key => $value) {
						echo '
						<div class="stat-item">
							<div class="stat-titel">'.$key.'</div>
							<div class="stat-bar-bg" data-count='.$value/$total_entry.'><div class="stat-bar"></div></div>
						</div>
						';
					}
				}
			?>

			<!-- <div class="stat-item">
				<div class="stat-title">Espresso (12/35)</div>
				<div class="stat-bar"></div>
			</div>
			<div class="stat-item">
				<div class="stat-title">Hario V60</div>
				<div class="stat-bar"></div>
			</div>
			<div class="stat-item">
				<div class="stat-title">Chemex</div>
				<div class="stat-bar"></div>
			</div>
			<div class="stat-item">
				<div class="stat-title">Others</div>
				<div class="stat-bar"></div>
			</div> -->
		</div>
	</div>
</div>