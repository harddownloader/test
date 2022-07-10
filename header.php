<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


global $redux_demo;

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title>Kultpara</title>

	<script src="/wp-content/themes/twentyfifteen/js/jquery-3.6.0.min.js"></script>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="/wp-content/themes/twentyfifteen/image/kultpara_phone.ico" rel="shortcut icon" type="image/x-icon" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<!-- icons -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- end icons -->

	<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Russo+One" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<meta name="MobileOptimized" content="640">
	<meta name="apple-mobile-web-app-capable" content="yes">


<!-- Global Site Tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107578858-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-107578858-1');
</script>
<!--/ Google Analytics -->

<style>
/*убираем отображ стандартных иконок*/
/*#mega-menu-wrap-primary #mega-menu-primary li.mega-menu-item a[class^='dashicons']:before {
    /*content: "\f100";
    content: close-quote;
}*/

#mega-menu-wrap-primary #mega-menu-primary li.mega-menu-item a.mega-menu-link:before{
	color: rgba(255, 0, 0, 0) !important;
}
/*спомощью сгенерированых меню классами вешаем свои*/

.dashicons-admin-appearance:before{
	background: transparent url(/wp-content/themes/twentyfifteen/image/ohm-48.png) center center no-repeat;
	padding-right: 18px;
}

.dashicons-admin-comments:before{
	background: transparent url(/wp-content/themes/twentyfifteen/image/eliq1-48.png) center right no-repeat;
	padding-right: 18px;
}

.dashicons-admin-links:before{
	background: transparent url(/wp-content/themes/twentyfifteen/image/ecig3-48.png) center center no-repeat;
	padding-right: 18px;
}

.dashicons-admin-settings:before{
	background: transparent url(/wp-content/themes/twentyfifteen/image/kanthal3-48.png) center center no-repeat;
	padding-right: 18px;
}

.dashicons-align-center:before{
	background: transparent url(/wp-content/themes/twentyfifteen/image/percent-32.png) center center no-repeat;
	padding-right: 18px;
}

</style>

<!-- owl -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/owlcarousel/owl.theme.default.min.css">
</head>

<body <?php body_class(); ?>>
<div id="primary-wrapp">

 	<div id="primary">

		<!--up menu block-->
		<div class="up_block">
			<ul class="up_block_ul">
				<li>
					<a href="javascript:PopUpShow5()" class="up_block_a_mesto" aria-label="Расположение"><!--nashe mesto-polojenie--></a>
				</li>
				<li>
					<a href="javascript:PopUpShow1()" class="up_block_a_skidki" aria-label="Скидки"><!--skidki--></a>
				</li>
				<li>
					<a href="javascript:PopUpShow2()" class="up_block_a_dostavka" aria-label="Доставка"><!--dostavka--></a>
				</li>
				<li>
					<a href="javascript:PopUpShow6()" class="up_block_a_telefon" aria-label="Телефон"><!--telefons--></a>
				</li>
				<li class="wp_block_ul_li-cart">
					<?php cart_link(); ?>
				</li>
			</ul>
		</div>

		<!--up menu block end-->
		<div id="header" class="visible-md visible-lg">
			<div class="left_block">
				<span onclick="javascript:PopUpShow5()" >
					<div style="" class="address_block hover-shadow hover_tooltip" data-title="Kultpara">
						<div class="title" style="font-family: Arial !important;">Vapeshop "Kultpara"</div>
					</div>
				</span>
				
				<a data-title="Скидочная система" class="card hover-shadow hover_tooltip" data-toggle="modal" data-target="#sale_system" href="javascript:PopUpShow1()" title="Скидочная система" ></a>
				<div id="separator"></div>
				<a data-title="Служба доставки" class="car hover-shadow hover_tooltip" data-toggle="modal" data-target="#delivery" href="javascript:PopUpShow2()" title="Доставка" ></a>
			</div>
		    <div class="m_b">
				<a title="Kultpara" href="/" class="mid_block">
					<div class="m_b_in"></div>
				</a>
			</div>
			<div class="right_block" style="font-family: Arial !important;">
				<div class="title_phone" style="font-family: Arial !important;">Kyivstar</div>
				<div class="phone hover-shadow"><span></span><a href="callto:+380960616279" style="font-family: Arial !important;" >+(38)096061-6279</a></div>
				<div class="title_phone" style="font-family: Arial !important;">Lifecell</div>
				<div class="phone hover-shadow"><span></span><a href="callto:+380935753403" style="font-family: Arial !important;" >+(38)093575-3403</a></div>
				<div class="bot">
					<div id="separator"></div>
					<div class="ajax_basket">
						<div id="bx_basket1" class="bx-basket bx-opener">
							<div class="basket">
								<a href="/?page_id=102" title="Оформить заказ" class="order_link"><!--link-->
									<div class="menu-item cart-punkt" ><?php cart_link(); ?><?php the_widget( 'WC_Widget_Cart', 'title=' ); ?></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--menu-->
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		<!--search-->
		<?php get_product_search_form();?>
		<!--slider-->

		<?
		if( ! empty( $redux_demo['opt-slides'] ) ) {
				if( is_front_page() ) {
		?>

		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/owlcarousel/owl.carousel.min.js"></script>
		<div id='wrapper'>
			<div class='stage-wrapper clearfix'>
				<div class='stage clearfix'>
					<div class='stage-container'>
						<div class="owl-carousel">
							<? #var_dump($redux_demo); ?>
							<?php foreach ( $redux_demo['opt-slides'] as $key => $kult_opt_item ) { ?>
								<a aria-label='<?php echo $kult_opt_item['title'];?>' target='_blank' rel='noopener' href='<?php echo $kult_opt_item['url'];?>'><!--ссылка-->
									<img src='<?php echo $kult_opt_item['image'];?>' alt='<?php echo $kult_opt_item['title'];?>'><!--картинка-->
								</a>
							<? } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type='text/javascript'>
		jQuery(document).ready(function() {
			jQuery(".owl-carousel").owlCarousel({
				items: 1,
				loop:true,
				margin:10,
				nav:false,
				dots: false,
				autoplay:true,
				autoplayTimeout:3000
			});

			// Go through each carousel on the page  (for SEO - Accessibility)
			$('.owl-carousel').each(function() {
				// Find each set of dots in this carousel
				$(this).find('.owl-dot').each(function(index) {
					//Add one to index so it starts from 1
					$(this).attr('aria-label', index + 1);
				});
				// Find each set of navs in this carousel
				$(this).find('.owl-nav').each(function(index) {
					//Add one to index so it starts from 1
					$(this).attr('aria-label', index + 1);
				});
			});
		});
		</script>
<?php } } ?>
