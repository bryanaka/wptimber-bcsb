<?php
use Timber as Timber;
use Biosciences as Biosciences;

$page = new Biosciences\Base();

$menus = array('primary', 'footer_left', 'footer_center', 'footer_right');

$page->find_menus($menus);
$page->get_current_page();

if (is_front_page()) {
	$postCount = 5;
	$page->find_posts("numberposts={$postCount}");
	$page->render_page('home.twig');
} else {
	$page->render_page('pages/single-full.twig');
}