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
			<div class="stat-item">
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
			</div>
		</div>
	</div>
</div>