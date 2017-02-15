<?php
/* Plugin Name: Multi Network Integrated Bar
Plugin Description: Just put it on mu-plugins of each wpmu install and configure e style it editing the single file php code, made to be simple and for programmers
Plugin URI: f5sites.com/multi-network-integrated-bar
Plugin Author: Francisco Matelli Matulovic
Author URI: franciscomat.com
Tags: mu-plugins, */

add_action("wp_footer", "mnib_activate");

function mnib_activate() {
	$active_links = array("grupof.com.br", "f5sites.com", "franciscomat.com", "pomodoros.com.br", "itapemapa.com.br", "redemapas.com.br", "focalizador.com.br", "projectimer.com", "ondeabrir.com.br", "cursowp.com.br", "treinamentoemfoco.com.br", "qrlink.com.br", "editoradeblogs.com.br");
	$a_style = 'style="color:#FFF;font-family: Open Sans,sans-serif;text-decoration:none;"';
	$div_style = 'style="background: #006599 !important;color:#FFF;font-family: Open Sans,sans-serif;z-index:9999;font-size: 10px;padding-top:5px;"';
	echo "<div ${div_style}'>"; 
	echo "F5 Sites Network ";
	foreach ($active_links as $link) :
		echo " | <a href=http://$link ${a_style}>$link</a>";
	endforeach;
	echo "</p>";
}
?>
