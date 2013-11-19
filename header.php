
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="nl" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>
	<?php
		if (is_home()) {
			bloginfo('name');
			wp_title( '|', true, 'left');
		} else {
			wp_title( '|', true, 'right');
			bloginfo('name');
		}
	?>
  </title>


  <link rel="stylesheet" href="stylesheets/app.css">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="outerWrap">
		<header class="row" role="banner">
			<div id="bannerWrap" class="row">
				<div id="topQuote" class="large-8 columns quote">
					Boeken hebben, net als mensen, hun succes vaak aan hun titel te danken.
					<footer>- Peter Sirius</footer>
				</div><!--  end topQuote  -->
				<div id="logo" class="small-4 columns image_wrap">
					<img src="<?php echo THEMEPATH; ?>/images/logo.png" alt="De Witte Merel">
				</div><!--  end logo  -->
			</div><!--  end bannerWrap  -->
			<div id="mainMenuWrap" class="row">
				<?php
					   /**
						* Displays a navigation menu
						* @param array $args Arguments
						*/
						$args = array(
							'theme_location' => 'header_menu',
							'menu' => 'Header Menu',
							'container' => 'nav',
							'container_class' => '',
							'container_id' => '',
							'menu_class' => 'small-12 columns',
							'menu_id' => 'topMenu',
							'echo' => true,
							'fallback_cb' => 'wp_page_menu',
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth' => 0,
							'walker' => ''
						);

						wp_nav_menu( $args );
				?>
			</div><!--  end mainMenuWrap  -->
			<div id="headerImageWrap" class="row image_wrap">
				<img src="<?php echo THEMEPATH; ?>/images/banner.jpg" alt="Banner De Witte Merel" class="large-12 columns">
				<div id="headerQuote" class="quote">
					Logica brengt je van A naar B, verbeelding brengt je overal.
					<footer>- Albert Einstein</footer>
				</div><!--  end headerQuote  -->
			</div><!--  end headerImageWrap  -->
		</header>
		<div id="mainContentWrap" class="row">