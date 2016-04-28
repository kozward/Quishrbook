<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, minimum-scale=1.0, initial-scale=1.0, user-scalable=0">
	<title><?php bloginfo('name'); ?></title>
	<meta itemprop="name" content="Quishrbook - Coffee Notebook">
	<meta itemprop="description" content="A daily coffee making notes">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700|Roboto+Mono:400,500' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/modal.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/quishrbook.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"> 
</head>
<body>
	<header id="site-header">
		<div id="sticky">
			<div class="title">Quishrbook</div>
			<div id="filterPanel">
				<div class="table" id="titlerow">
					<div class="tr">
						<div class="grid-wrapper">
							<div class="td coffee" name="coffee">Coffee / Roaster</div>
							<div class="td method" name="method">Method</div>
							<div class="td grounds" name="grounds">Grounds(g)</div>
							<div class="td water" name="water">Water(g)</div>
							<div class="td time" name="time">Time</div>
							<div class="td maker" name="water">Maker</div>
							<div class="td tastagood" name="tastegood"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>