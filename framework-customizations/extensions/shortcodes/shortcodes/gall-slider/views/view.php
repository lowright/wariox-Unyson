<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
*/

function gall_slides($_atts){
    $atts_ = $_atts['frst_multi_picker'];
    
    $output = '';
    $count = 0;
    for ($i = 1; $i <= count($_atts['frst_multi_picker']); $i++) { 
        $slider_height = 'height : ' . $_atts['slider_height'] . "vh";
        $gall_slides = $_atts['frst_multi_picker']["slide-$i"]['slide-images'];
        if($i == 1){
            $output .= "<div class='carousel-item active'>";
                $output .= "<div class='row'>";
                $output .= "<div class='col-lg-6 col-sm-6 col-xs-6'><img src='".$gall_slides[0]['url']."' alt='...'></div>";
                $output .= "<div class='col-lg-6 col-sm-6 col-xs-6'><img src='".$gall_slides[1]['url']."' class='d-block w-100' alt='...'></div>";
                $output .= "</div>";
            $output .= "</div>";   
        }
        else{
            $output .= "<div class='carousel-item'>";
                $output .= "<div class='row'>";
                $output .= "<div class='col-lg-6 col-sm-6 col-xs-6'><img src='".$gall_slides[0]['url']."' class='d-block w-100' alt='...'></div>";
                $output .= "<div class='col-lg-6 col-sm-6 col-xs-6'><img src='".$gall_slides[0]['url']."' class='d-block w-100' alt='...'></div>";
                $output .= "</div>";
            $output .= "</div>"; 
        }
    }

    return $output;
}

?>
<div id="carouselExampleCaptionss" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php echo gall_slides($atts)?>
    </div>
    <ol class="carousel-indicators" id="gall_indicators">
        <li data-target="#carouselExampleCaptionss" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptionss" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptionss" data-slide-to="2"></li>
    </ol>
</div>

