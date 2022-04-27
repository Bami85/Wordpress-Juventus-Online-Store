<?php
/*
Plugin name: myplugin
*/


add_action ( 'wp_footer','la_mia_prima_funzione' );



function la_mia_prima_funzione () {
echo '<div style="width:100%; height:50px; line-height:50px; text-align:center; background:#ff0000;">';
echo '<span style="color:#ffffff; font-size:15px; font-weight:bold;">All the content of a website is protected by copyrigh</span>';
echo '</div>';
}









