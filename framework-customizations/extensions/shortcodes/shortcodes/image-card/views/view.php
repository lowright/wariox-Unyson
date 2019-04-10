<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
*/

$btn_show_config = $atts['frst_multi_picker']['show'];
$button_style = array(
	'button_color' => $btn_show_config['image-button-color'],
	'button_text' => $btn_show_config['image-button-text'],
);

?>

<div class="card" >
	<div>
		<div class="top-img">
				<img src="<?php echo ( !empty($atts['card_image']) ) ? $atts['card_image']['url'] : '' ?>" class="card-img-top-serve" alt="...">
			</div>
			<div class="card-body">
				<h5 class="card-title"><?php echo ( !empty($atts['image_card_title']) ) ? $atts['image_card_title'] : '' ?></h5>
				<p class="card-text"><?php echo ( !empty($atts['image_card_description']) ) ? $atts['image_card_description'] : '' ?></p>
			</div>
	</div>
	<?php if( $atts['image_card_button'] === 'show') :  ?>
		<a 
			href="#" class="btn btn-primary service-btn" 
			style = " 
				background-color : <?php echo $button_style['button_color'] ?> 
			"> 
			<?php echo $button_style['button_text'] ?>
		</a>
	<style>
		.service-btn:hover{
			background-color : <?php echo $button_style['button_text'] ?>
		}
	</style>
		
<?php endif; ?>

</div>