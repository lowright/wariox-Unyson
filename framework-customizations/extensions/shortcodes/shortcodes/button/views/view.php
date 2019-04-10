<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $color_class = !empty($atts['color']) ? "fw-btn-{$atts['color']}" : ''; ?>
<?php $custom_class = !empty($atts['custom_class']) ? $atts['custom_class'] : '';?>
<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="fw-btn fw-btn-1  <?php echo esc_attr($color_class); ?>  <?php print( $custom_class ) ?>">
	<span><?php echo $atts['label']; ?></span>
</a>