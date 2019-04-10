<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
*/

function make_slides($_atts){
    $atts_ = $_atts['frst_multi_picker'];
    $output = '';
    $count = 0;
    for ($i = 1; $i <= count($_atts['frst_multi_picker']); $i++) { 
        $slider_height = 'height : ' . $_atts['slider_height'] . "vh";
        @$sl_options = array(
            'sl_bg' => $atts_["slide-$i"]["slide-images"]["url"],
            'sl_sub_title' => $atts_["slide-$i"]["slide-sub-title"],
            'sl_title' => $atts_["slide-$i"]["slide-title"],
            'sl_description' => $atts_["slide-$i"]["slide-description"],
            'sl_btn' => $atts_["slide-$i"]["slide-button-text"],
        );
        if($i == 1){
            $output .= "<div class='carousel-item active' style='background-image:url(".$sl_options['sl_bg']."); $slider_height '>";
            $output .= "<div class='flexWrapper'>";
            $output .= "<div class='sliderTitleWrapp'>";
        }
        else{
            $output .= "<div class='carousel-item' style='background-image:url(".$sl_options['sl_bg']."); $slider_height '>";
            $output .= "<div class='flexWrapper'>";
            $output .= "<div class='sliderTitleWrapp'>";
        }
        $output .= "<h5>".$sl_options['sl_sub_title']."</h5>";
        $output .= "<p>".$sl_options['sl_title']."</p>";
        $output .= "<div class='mx-auto home-divider'></div>";
        $output .= "<span>".$sl_options['sl_description']."</span>";
        $output .= "<div class='form-btn gall-btn'>";
        $output .= "<button type='submit' class='btn gall-button'>".$sl_options['sl_btn']."</button>";
        $output .= "</div>
                </div>
            </div>
        </div>";
    }

    return $output;
}

?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php echo make_slides($atts)?>
        </div>
    </div>