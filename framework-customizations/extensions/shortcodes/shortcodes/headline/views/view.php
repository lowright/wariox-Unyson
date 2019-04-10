<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */

 $headline_style = "";
 if( ! empty($atts['headline_style']) AND ! empty($atts['alignment'])){
	$font_size = 'font-size:'.$atts['headline_style']['size'].'px';
	$font_family = 'font-family:'.$atts['headline_style']['family'];
	$font_weight = 'font-weight:'.$atts['headline_style']['variation'];
	$font_color = 'color:'.$atts['headline_style']['color'];
	$text_align = 'text-align:'.current($atts['alignment']);
	$line_height = 'line-height:'.$atts['headline_style']['line-height'].'px';
 }
 $headline_style = "$font_size; $font_family; $font_style; $font_weight; $font_color; $text_align; $line_height";
 
 $paddings = "";
 if( ! empty($atts['padding'])){
	$pt = $atts['padding']['padding-top'].'px';
	$pr = $atts['padding']['padding-right'].'px';
	$pb = $atts['padding']['padding-bottom'].'px';
	$pl = $atts['padding']['padding-left'].'px';
 }
 $paddings = "padding: $pt $pr $pb $pl;";

 $margins = "";
 if( ! empty($atts['margin'])){
	$mt = $atts['margin']['margin-top'].'px';
	$mr = $atts['margin']['margin-right'].'px';
	$mb = $atts['margin']['margin-bottom'].'px';
	$ml = $atts['margin']['margin-left'].'px';
 }
 $margins = "margin: $mt $mr $mb $ml;";
 
?>
<div class="custom-headline" >
	<?php $heading = "<{$atts['heading']}  style='$headline_style; $paddings $margins'>{$atts['headline_text']}</{$atts['heading']}>"; ?>
	<?php echo $heading; ?>
</div>
