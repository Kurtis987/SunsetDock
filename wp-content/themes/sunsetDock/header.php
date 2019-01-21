<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="wp-content/themes/caliTheme/js/myscript.js"></script>
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
	<style>

	#book-hr {
  		background-color: <?php echo get_theme_mod('hr_bg_color')?>;
  	}
  	.btn {
  		background-color: <?php echo get_theme_mod('button_bg_color')?>;
  		color: <?php echo get_theme_mod('button_font_color')?>;
	}
	.discount {
		background-color: <?php echo get_theme_mod('section3_bg_color')?>;
		color: <?php echo get_theme_mod('section3_font_color')?>;
	}
	#discount-header {
		color: <?php echo get_theme_mod('section3_heading_color')?>;
	}
	#exclusive { 
  		background:linear-gradient(0deg, rgba(21,21,21,0.65), rgba(21,21,21,0.65)), url(<?php echo get_theme_mod('Exclusive', get_bloginfo('template_url').'images/fishingboat2.jpg')?>) center no-repeat ;
	   background-size: cover;
	}
	#header-img {
    	background-image: url(<?php echo get_theme_mod('background_img', get_bloginfo('template_url').'/images/sunset.jpeg')?>);
    }
    .name {
 	 color: <?php echo get_theme_mod('section4_names_color')?>;
	}
    .navbar-inverse {
    	background-color: <?php echo get_theme_mod('navbar_bg_color')?>;
    }
	#standard {  
	   background: linear-gradient(0deg, rgba(21,21,21,0.65), rgba(21,21,21,0.65)), url(<?php echo get_theme_mod('standard', get_bloginfo('template_url').'images/fishingboat1.jpg')?>) center no-repeat ;
	   background-size: cover;
	} 
	.reviews {
 		 background-color: <?php echo get_theme_mod('section4_inner_color')?>;
	}
	.reviews-heading {
  		color: <?php echo get_theme_mod('section4_heading_color')?>;
  	}
  	.reviews-inner-wrapper{
  		background-color: <?php echo get_theme_mod('section4_wrapper_color')?>; 
	}
	.reviews-wrapper {
  		background-color: <?php echo get_theme_mod('section4_bg_color')?>;
	}
	.stats {
		background-color: <?php echo get_theme_mod('section2_bg_color')?>;
	}
	.stats-numbers {
  		color: <?php echo get_theme_mod('stats_color')?>; 
	}
	.stats-labels {
		color: <?php echo get_theme_mod('descriptions_color')?>;
	}
	.testimonial {
		color : <?php echo get_theme_mod('section4_reviews_color')?>;
	}
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

	<div class="blog-masthead">
		<div class="container-fluid">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
       				<span class="icon-bar"></span>        </button>

			      <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>"><img src="<?php echo get_theme_mod('logo', get_bloginfo('template_url').'/images/logo.png')?>" width="100px" height="50px"></a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav">
			     
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			       <li><a href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a></li>
			       <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/?page_id=31">Blog</a></li>
			       <li><a href="<?php echo get_bloginfo( 'wpurl' );?>#boats"><?php echo get_theme_mod('link1', 'Boats')?></a></li>
			       <li><a href="<?php echo get_bloginfo( 'wpurl' );?>#stats"><?php echo get_theme_mod('link2', 'Stats')?></a>
			       <li><a href="<?php echo get_bloginfo( 'wpurl' );?>#reviews"><?php echo get_theme_mod('link3', 'Reviews')?></a></li>
			       
			       </li> 
			    </ul>
			  </div>
			</nav>

			<div id="header-img">
				
			</div><!-- /header-img -->
			
			
		</div>
	</div>
	
	<div class="container-fluid">

		