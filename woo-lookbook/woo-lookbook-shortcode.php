<?php
/**
 * Shortcode Template Lookbook
 *
 */
function lookbook_template($atts) {
    extract(shortcode_atts(array(
        'id' => '1'
    ), $atts));

	getlookbook($atts["id"]);
	getglobalstyle();		    
 }

/**
 * Generate Template Lookbook
 */
function getlookbook($id) {
	$data = get_option('lookbook_options');
	
	$bg = $data['look_'.$id.'_background_color'];
	echo '<style>'.
			'#lookbook-wrapper {background-color: '.$bg.'; }'.
		 '</style>';

	$style1_1 = array( 'width' => 461, 'height' => 615 );
	$style1_2 = array( 'width' => 790, 'height' => 1053 );
	$style1_3 = array( 'width' => 519, 'height' => 389 );
	$style1_4 = array( 'width' => 0, 'height' => 0 );
	$style1_5 = array( 'width' => 0, 'height' => 0 );

	$style2_1 = array( 'width' => 796, 'height' => 1061 );
	$style2_2 = array( 'width' => 378, 'height' => 504 );
	$style2_3 = array( 'width' => 378, 'height' => 504  );
	$style2_4 = array( 'width' => 615, 'height' => 461  );
	$style2_5 = array( 'width' => 0, 'height' => 0  );

	$style3_1 = array( 'width' => 375, 'height' => 500 );
	$style3_2 = array( 'width' => 762, 'height' => 1016 );
	$style3_3 = array( 'width' => 463, 'height' => 617  );
	$style3_4 = array( 'width' => 424, 'height' => 565  );
	$style3_5 = array( 'width' => 408, 'height' => 409  );

	$style4_1 = array( 'width' => 473, 'height' => 631 );
	$style4_2 = array( 'width' => 1161, 'height' => 871 );
	$style4_3 = array( 'width' => 448, 'height' => 597  );
	$style4_4 = array( 'width' => 0, 'height' => 0  );
	$style4_5 = array( 'width' => 0, 'height' => 0  );

	$style5_1 = array( 'width' => 1245, 'height' => 934 );
	$style5_2 = array( 'width' => 593, 'height' => 790 );
	$style5_3 = array( 'width' => 0, 'height' => 0  );
	$style5_4 = array( 'width' => 0, 'height' => 0  );
	$style5_5 = array( 'width' => 0, 'height' => 0  );

	$style6_1 = array( 'width' => 931, 'height' => 698 );
	$style6_2 = array( 'width' => 583, 'height' => 437 );
	$style6_3 = array( 'width' => 0, 'height' => 0  );
	$style6_4 = array( 'width' => 0, 'height' => 0  );
	$style6_5 = array( 'width' => 0, 'height' => 0  );

	$style7_1 = array( 'width' => 533, 'height' => 710 );
	$style7_2 = array( 'width' => 1101, 'height' => 826 );
	$style7_3 = array( 'width' => 0, 'height' => 0  );
	$style7_4 = array( 'width' => 0, 'height' => 0  );
	$style7_5 = array( 'width' => 0, 'height' => 0  );

	$style8_1 = array( 'width' => 799, 'height' => 599 );
	$style8_2 = array( 'width' => 760, 'height' => 570 );
	$style8_3 = array( 'width' => 478, 'height' => 637  );
	$style8_4 = array( 'width' => 481, 'height' => 361  );
	$style8_5 = array( 'width' => 0, 'height' => 0  );

	$style9_1 = array( 'width' => 831, 'height' => 1108 );
	$style9_2 = array( 'width' => 472, 'height' => 624 );
	$style9_3 = array( 'width' => 404, 'height' => 538  );
	$style9_4 = array( 'width' => 0, 'height' => 0  );
	$style9_5 = array( 'width' => 0, 'height' => 0  );
	
	//var_dump($data);

		foreach ((array)$data['re'.$id.'_'] as $key=>$arr) {
			echo'<div class="look_blok lookblok_'.$key.' '.$arr['look_'.$id.'_select_field_id'].'">';

				// get title and description
			    if ( $arr['look_'.$id.'_checkbox_field_id']  != 'on') {
			    	echo '<div class="lookbook-photo div_look_title">';
					echo '<div class="look_title">'.$arr['look_'.$id.'_title'].'</div>';
					echo '<div class="look_description">'.$arr['look_'.$id.'_description'].'</div>';
					echo '</div><!-- end title-->';
				}
			
				// get image
				if (!empty($arr['look_'.$id.'_image_field_id_1']['src'])) {
				echo '<div class="lookbook-photo div_look_img1"><img src="'. bfi_thumb( $arr['look_'.$id.'_image_field_id_1']['src'] , ${$arr['look_'.$id.'_select_field_id'].'_1'} ) .'" class="lookbook-photo-img look_img1"></div>';
				}
				if (!empty($arr['look_'.$id.'_image_field_id_2']['src'])) {
				echo '<div class="lookbook-photo div_look_img2"><img src="'. bfi_thumb( $arr['look_'.$id.'_image_field_id_2']['src'] , ${$arr['look_'.$id.'_select_field_id'].'_2'} ) .'" class="lookbook-photo-img look_img2"></div>';
				}
				if (!empty($arr['look_'.$id.'_image_field_id_3']['src'])) {
				echo '<div class="lookbook-photo div_look_img3"><img src="'. bfi_thumb( $arr['look_'.$id.'_image_field_id_3']['src'] , ${$arr['look_'.$id.'_select_field_id'].'_3'} ) .'" class="lookbook-photo-img look_img3"></div>';
				}
				if (!empty($arr['look_'.$id.'_image_field_id_4']['src'])) {
				echo '<div class="lookbook-photo div_look_img4"><img src="'. bfi_thumb( $arr['look_'.$id.'_image_field_id_4']['src'] , ${$arr['look_'.$id.'_select_field_id'].'_4'} ) .'" class="lookbook-photo-img look_img4"></div>';
				}
				if (!empty($arr['look_'.$id.'_image_field_id_5']['src'])) {
				echo '<div class="lookbook-photo div_look_img5"><img src="'. bfi_thumb( $arr['look_'.$id.'_image_field_id_5']['src'] , ${$arr['look_'.$id.'_select_field_id'].'_5'} ) .'" class="lookbook-photo-img look_img5"></div>';
				}

				// get link for product
				echo '<div class="lookbook-textelement">';
					if ( ($arr['look_'.$id.'_posts_field_id_1']) != none ) {
					$price1 = get_post_meta( $arr['look_'.$id.'_posts_field_id_1'], '_regular_price', true);
					echo '<p><a href="'. get_permalink($arr['look_'.$id.'_posts_field_id_1']) .'">'.get_the_title($arr['look_'.$id.'_posts_field_id_1']).' &nbsp; '. $price1 .' '. get_woocommerce_currency_symbol().'</a></p>';

					}
					if ( ($arr['look_'.$id.'_posts_field_id_2']) != none ) {
					$price2 = get_post_meta( $arr['look_'.$id.'_posts_field_id_2'], '_regular_price', true);
					echo '<p><a href="'. get_permalink($arr['look_'.$id.'_posts_field_id_2']) .'">'.get_the_title($arr['look_'.$id.'_posts_field_id_2']).' &nbsp; '. $price2 .' '. get_woocommerce_currency_symbol().'</a></p>';
					}
					if ( ($arr['look_'.$id.'_posts_field_id_3']) != none ) {
					$price3 = get_post_meta( $arr['look_'.$id.'_posts_field_id_3'], '_regular_price', true);
					echo '<p><a href="'. get_permalink($arr['look_'.$id.'_posts_field_id_3']) .'">'.get_the_title($arr['look_'.$id.'_posts_field_id_3']).' &nbsp; '. $price3 .' '. get_woocommerce_currency_symbol().'</a></p>';
					}
				echo '</div><!-- end text element-->';

			echo'</div><!-- end look blok -->';
	  	}
}

/**
 * Generate Style from Global Options
 */
function getglobalstyle() {
$data = get_option('lookbook_options');
	$str_title = $data['look_title_typography_field_id']['size'];
	$str_description = $data['look_description_typography_field_id']['size'];
	$str_main_title = $data['main_title_typography_field_id']['size'];
	$size = filter_var($str_title, FILTER_SANITIZE_NUMBER_INT);
	$size1 = filter_var($str_description, FILTER_SANITIZE_NUMBER_INT);
	$size2 = filter_var($str_main_title, FILTER_SANITIZE_NUMBER_INT);

	echo '<style>'.
  		'.lookbook-textelement a, .lookbook-textelement a:visited {'.
  			'font-family: ' . $data['look_price_typography_field_id']['face'] . ';'.
  		 	'font-size: ' . $data['look_price_typography_field_id']['size'] . ';'.
  		 	'color: ' . $data['look_price_typography_field_id']['color'] . ';'.
  		 	'font-style: ' . $data['look_price_typography_field_id']['style'] . ';'.
			'}'.
			'.look_title {'.
  			'font-family: ' . $data['look_title_typography_field_id']['face'] . ';'.
  		 	'font-size: ' . $size . 'px;'.
  		 	'color: ' . $data['look_title_typography_field_id']['color'] . ';'.
  		 	'font-style: ' . $data['look_title_typography_field_id']['style'] . ';'.
			'}'.
			'@media screen and (max-width: 1035px) {'.
			'.look_title {'.
				'font-size: '.$size*0.9 .'px;'.
			'}'.
		'}'.
		'@media screen and (max-width: 960px) {'.
			'.look_title {'.
				'font-size: '.$size*0.8 .'px;'.
			'}'.
		'}'.
		'.look_description {'.
  			'font-family: ' . $data['look_description_typography_field_id']['face'] . ';'.
  		 	'font-size: ' . $data['look_description_typography_field_id']['size'] . ';'.
  		 	'color: ' . $data['look_description_typography_field_id']['color'] . ';'.
  		 	'font-style: ' . $data['look_description_typography_field_id']['style'] . ';'.
		'}'.
		'@media screen and (max-width: 1035px) {'.
			'.look_description {'.
				'font-size: '.$size1*0.85 .'px;'.
			'}'.
		'}'.
		'@media screen and (max-width: 960px) {'.
			'.look_description {'.
				'font-size: '.$size1*0.75 .'px;'.
			'}'.
		'}'.
		'.main_look_title {'.
  			'font-family: ' . $data['main_title_typography_field_id']['face'] . ';'.
  		 	'font-size: ' . $data['main_title_typography_field_id']['size'] . ';'.
  		 	'color: ' . $data['main_title_typography_field_id']['color'] . ';'.
  		 	'font-style: ' . $data['main_title_typography_field_id']['style'] . ';'.
  		 	'font-weight: ' . $data['main_title_typography_field_id']['weight'] . ';'.
		'}'.
		'@media screen and (max-width: 1035px) {'.
			'.main_look_title {'.
				'font-size: '.$size2*0.9 .'px;'.
			'}'.
		'}'.
		'@media screen and (max-width: 960px) {'.
			'.main_look_title {'.
				'font-size: '.$size2*0.8 .'px;'.
			'}'.
		'}'.
		'</style>';
}

add_shortcode('lookbook','lookbook_template');

