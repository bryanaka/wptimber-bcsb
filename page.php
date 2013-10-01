<?php
use Timber as Timber;
use Biosciences as Biosciences;

$pago = new Biosciences\Base();

$menus = array('primary', 'footer_left', 'footer_center', 'footer_right');
$pago->find_menus($menus);

$pago->get_current_page();

$pago->context['main_sidebar'] = Timber::get_widgets('main_sidebar');

if (is_front_page()) {
	$postCount = 5;
	$pago->find_posts("numberposts={$postCount}");
	$pago->render_page('home.twig');
} else {
	$pago->render_page('pages/single-full.twig');
}