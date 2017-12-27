<!doctype html>
<html>
	<head>
		<?php $url = get_template_directory_uri(); ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Teste - Isabella Cacélia</title>
		<link rel="stylesheet" href="<?=$url;?>/css/style.css">
		<link rel="stylesheet" href="<?=$url;?>/css/reset.css">
		<link rel="stylesheet" href="<?=$url;?>/css/font-awesome.css">
	</head>
	<body>
		<header>
			<div class="container">
				<div class="logo">
					<img src="<?php bloginfo('template_url'); ?>/images/logo-header.png" alt="Logo Empiricus">
				</div>
				<div class="txtright">
					<?php 
						$args = array (
							'theme_location' => 'header-menu'
						);
						wp_nav_menu($args); 
					?></div>
			</div>
		</header>