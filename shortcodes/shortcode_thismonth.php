// Add Shortcode
function shortcode_thismonth( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'isshort' => 'false',
		),
		$atts
	);

	
	$attIsShort = $atts["isshort"];
	$monthtext = '';
	
	switch ($attIsShort) {
	  case "true":
	    $monthtext = date('M');
	    break;
	  default:
	    $monthtext = date('F');
	}
	
	return $monthtext;

}
add_shortcode( 'thismonth', 'shortcode_thismonth' );