<?php

/* 
	Plugin Name: Plugin ModalInfo
	Description: Un pluggin perettant d'afficher des fenetres modales avec un shortcode de type : [modalWindow title="" content="" ]
	Versions: 0.0.2
	Author: Fred MAS
 */

//add script
add_action( "wp_enqueue_scripts", "add_modal_info_scripts" );
function add_modal_info_scripts(){

	wp_enqueue_script( "modalInfo_script", plugin_dir_url('./').'modal/assets/scripts.js', array( 'jquery' ), true);

	wp_enqueue_style( 'styles', plugin_dir_url( './' )."modal/assets/styles.css" );
}


add_shortcode( "modalWindow", "displayModalInfoShortcode" );
function displayModalInfoShortcode( $atts ){

	$modalTitle = $atts["title"];
	$modalContent = $atts["content"];

	$modal = '<div class="modalBlock">';
	$modal .= '<div class="modal-content">';
	$modal .= '<div class="modal-header">';
	$modal .= '<span class="close">&times;</span>';
	$modal .= '<h2>'.$modalTitle.'</h2>';
	$modal .= '</div>';
	$modal .= '<div class="modal-body">';
	$modal .= '<p>'.$modalContent.'</p>';
	$modal .= '</div>';
	$modal .= '</div>';
	$modal .= '</div>';	
	
	return $modal;
}



