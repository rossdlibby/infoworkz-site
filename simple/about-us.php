<?php

	/**
	 * Define content
	 */

	$header = '<title>About Infoworkz Solutions Group LLC</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
';

	$title = 'About us';
	$body = [
		'<p>Infoworkz Solutions Group is a "one stop shop" for all your business technologies. We offer equipment and services that keep you connected to your customers, suppliers and employees no matter where they are located.</p>',
		'<p>Our Objective is to develop long-term partnerships with our clients by providing exceptional networking expertise in orchestrating the development and maintenance of their computer network infrastructure.</p>',
		'<p>Our Goal is to be recognized as the premier composer of superior networking systems that provide the best value and reliability for our client\'s investment dollar.</p>',
		'<p>Our Mission is to provide a stable, secure environment for our team members to develop their professional skills in exercising a \'servant-like attitude\' in every contact with our valued customers.</p>'
	];
	$content = ['title' => $title, 'body' => $body];

	require_once('internal-page.php');
?>