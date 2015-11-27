<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php wp_title (); ?>
</title>
<!--<link rel="profile" href="http://gmpg.org/xfn/11" />-->
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700italic,700,300italic,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />-->


<?php
	/* 
	 * 	Add this to support sites with sites with threaded comments enabled.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
	
	//wp_get_archives('type=monthly&format=link');

	 $parent = array();
              $menu_name = 'Menu 1';
              if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name]))
              {
                $menu = wp_get_nav_menu_object($locations[$menu_name]);
                $menu_items = wp_get_nav_menu_items($menu->term_id);
                
                $parent_id = 0;

                foreach((array)$menu_items as $key => $menu_item) 
                {
                  
                  if($menu_item->menu_item_parent == 0)
                  { 
                    $parent_id = $menu_item->db_id;
                    $title = $menu_item->title;
                    $url = $menu_item->url;
                    array_push($parent, array("title" => $title, "url" => $url, "child" => array()));
                  }
                  else if($menu_item->menu_item_parent == $parent_id)
                  {
                    $title = $menu_item->title;
                    $url = $menu_item->url;
                    array_push($parent[count($parent) - 1]["child"], array("title" => $title, "url" => $url));
                  }
                  else{}
                }
              }


?>

</head>
<body>
<main class="main">

<ul class="nav navbar-nav">
    <?php
      foreach ($parent as $key => $value) 
      {
        if(empty($value["child"]))
        {
          echo "<li><a href='" . $value["url"] . "'>" . $value["title"] . "</a></li>";
        }
        else
        {
          echo '<li class="dropdown"><a href="' . $value["url"] . '" class="dropdown-toggle" data-toggle="dropdown">' . $value["title"] . ' <b class="caret"></b></a><ul class="dropdown-menu">';
          foreach ($value["child"] as $key => $value) 
          {
            echo '<li><a href="' . $value["url"] . '">' . $value["title"] . '</a></li>';
          }
          echo '</ul></li>';
        }
      }
    ?>
</ul>

<header class="header hidden-xs hidden-sm">
	<nav class="sub-navigation">
		<div class="container">
			<ul class="sign-in" href="">
				<li><?php wp_loginout( $redirect ); ?></li>
				<li><a href="<?php echo wp_registration_url(); ?>">register</a></li>
			</ul>
			<ul class="social" href="">
				<li><a target="_blank" href="https://www.facebook.com/pages/Top-Tennis-Trainingnet/204888079544795">facebook</a></li>
				<li><a target="_blank" href="https://twitter.com/tennis_training">twitter</a></li>
				<li><a target="_blank" href="https://www.youtube.com/user/TopTennisTrainingNet">youtube</a></li>
			</ul>
		</div>
	</nav>
	<nav class="navigation clearfix">
		<div class="container">
			<a href="<?php echo get_option('home'); ?>" class="logo-container"><div class="logo"></div>Top Tennis Training</a>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'menu', 'theme_location' => 'primary-menu' ) ); ?>
		</div>
		<div class="sub-nav"></div>
	</nav>
</header>

  


