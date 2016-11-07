<?php
/*

Header to be edited later

*/
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<header id="main-header-wrapper" class="site-header" role="banner">
		  <div id="utility-nav-wrapper" class="clearfix">
		    <div class="container-wrapper">
		      <h4></h4> 
		      <ul id="utility-nav">
		        
		        <li><a href="/account/register" title="Register">Register</a></li>
		        <li>&nbsp;|&nbsp;</li>
		        <li><a href="/account/login" title="Account">Account</a></li>
		        
		        <li><a class="cart-button" href="/cart"><i class="fa fa-shopping-cart"></i> Cart (0)</a></li>
		      </ul><!--utility-nav-->
		        
		    </div><!--container-wrapper-->
		  </div><!--utility-nav-wrapper-->
		  <div id="main-header" class="container-wrapper clearfix">
		    <a id="logo-wrapper" href="/" title="Islands Miracle">
		      
		      <img src="/logo.png" id="logo" alt="NutraChamps">
		      
		    </a>
		    <div id="header-cta">
		      <div id="header-search">
		        <form class="search-form textile" action="/search" method="get">
		  <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="search" name="q" value="" class="search-input ui-autocomplete-input" placeholder="Search our store" autocomplete="off">
		  <button tabindex="2" class="search-button" type="submit">
		    <i class="fa fa-search"></i>
		  </button>
		</form>
		      </div><!--haeder-search-->
		      
		    </div><!--header-cta-->
		    <div id="call-us">
		      
		      <h3>Let Us Help You <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></h3>
		      <h4>999-999-9999</h4>
		      
		    </div>
		  </div><!--main-header-->
		  <nav id="main-nav-wrapper" class="clearfix">
		    <div class="container-wrapper">
		    	<?php
		    	wp_nav_menu(array('menu'=>'top-nav', 'menu_id'=>'main-nav','container'=>false));
		    	?>
		    </div><!--container-wrapper-->
		  </nav><!--nav-->
		</header>
			

		<div id="content" class="site-content">
