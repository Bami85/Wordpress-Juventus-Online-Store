<?php 

add_action( 'wp', 'remove_product_content' );

function remove_product_content() {

// Se il prodotto fa parte della categoria 'adidas'

if ( is_product() && has_term( 'New In', 'product_cat' ) ) {

//... Rimuovo l'immagine

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
}}



// add filter 

add_filter('the_title', 'woocamp_single_product_page_title',10,1);



function woocamp_single_product_page_title ($title){

if ((is_product()&& in_the_loop())) {

$title = '<span class ="filterad-title"> Most sold products</span> '.' - ' . $title;

return $title;



}

return $title;

}


// remove action 


remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
?>






