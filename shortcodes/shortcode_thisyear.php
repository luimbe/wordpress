// Add Shortcode
function shortcode_thisyear( $atts ) {
	$yeartext = '';
	$yeartext = date('Y');
	return $yeartext;
}
add_shortcode( 'thisyear', 'shortcode_thisyear' );