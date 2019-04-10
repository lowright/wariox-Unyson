<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$margins = "";
if( ! empty($atts['margin'])){
	$mt = $atts['margin']['margin-top'].'px';
	$mb = $atts['margin']['margin-bottom'].'px';
	if( empty($atts['margin']['margin-right']) && empty($atts['margin']['margin-left'])){
		$m_auto = 'auto';
		$margins = "margin: $mt $m_auto $mb $m_auto;";
	}
	else{
		$mr = $atts['margin']['margin-right'].'px';
		$ml = $atts['margin']['margin-left'].'px';
		$margins = "margin: $mt $mr $mb $ml;";
	}
}


$divider_style = "";
if( ! empty($atts['style']['line'])){
	$dh = $atts['style']['line']['height'].'px';
	$dw = $atts['style']['line']['width'].'px';
	$dc = $atts['style']['line']['color'];
}
$divider_style = "height: $dh; width: $dw; background: $dc; $margins;";

if ( 'line' === $atts['style']['ruler_type'] ): ?>
	<div class="fw-divider-line" style="<?php echo $divider_style?>"></div>
<?php endif; ?>

<?php if ( 'space' === $atts['style']['ruler_type'] ): ?>
	<div class="fw-divider-space" style="padding-top: <?php echo $atts['style']['space']['height']; ?>px;"></div>
<?php endif; ?>
