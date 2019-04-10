
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if(fw_get_db_settings_option('show-header')) : ?>
<header>
    <div class="social-and-login">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="follow-us">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="follow-text">
                                    <p>Follow us:</p>
                                </div>   
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm 6follow-social-wrapper">
                                <div class="follow-social">
                                    <div class="row social-row-wrapper">
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-1">
                                            <a href="<?php print(esc_html__(fw_get_db_customizer_option('header-social')['Facebook'])) ?>" class="social-link">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-1">
                                            <a href="<?php print(esc_html__(fw_get_db_customizer_option('header-social')['Twitter'])) ?>" class="social-link">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-1">
                                            <a href="<?php print(esc_html__(fw_get_db_customizer_option('header-social')['Linkedin'])) ?>" class="social-link">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-1">
                                            <a href="<?php print(esc_html__(fw_get_db_customizer_option('header-social')['Google+'])) ?>" class="social-link">
                                                <i class="fab fa-google"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-8 col-1 side-wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-4 col-sm-1"></div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-12">
                    <div class="register-login">
                        <div class="row">
                            <div class="col-lg-2 col-md-1 col-sm-1"></div>
                            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5">
                                <div class="register">
                                    <a href="<?php print(esc_html__(fw_get_db_customizer_option('header-register-link')['Register']))?>">Register</a>
                                </div>
                            </div>
                            <div class="vertical-divider"></div>
                            <div class="col-lg-3 col-md-5 col-sm-5">
                                <div class="login">
                                    <a href="<?php print(esc_html__(fw_get_db_customizer_option('header-register-link')['Login']))?>">Login</a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-1 col-sm-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-and-contact-info">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-4">
                    <div class="logo-box">
                        <div class="header-logo" style="background: url('<?php 
                        if( !empty(fw_get_db_customizer_option('header-logo')['url'])){
                            print(esc_html__(fw_get_db_customizer_option('header-logo')['url']));
                        }
                        else{
                            print(fw_get_db_customizer_option('header-logo'));
                        }
                        ?>')"></div>
                        <div class="text-logo-box">
                            <div class="text-logo">
                                <p><a href="<?php echo get_home_url()?>"><?php print(esc_html__(fw_get_db_customizer_option('header-logo-text')))?></a></p>
                            </div>
                            <div class="sub-text-logo">
                                <p><?php print(esc_html__(fw_get_db_customizer_option('header-sub-logo-text')))?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-8" style="transform: translateY(20%);">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-box-info">
                                    <div class="info-link">
                                        <a href="tel:<?php print(esc_html__(fw_get_db_customizer_option('header-contact-block')['Phone'])) ?>"><?php print(esc_html__(fw_get_db_customizer_option('header-contact-block')['Phone'])) ?></a>
                                    </div>
                                    <div class="info-mail-link">
                                        <a href="mailto:<?php print(esc_html__(fw_get_db_customizer_option('header-contact-block')['Mail'])) ?>"><?php print(esc_html__(fw_get_db_customizer_option('header-contact-block')['Mail'])) ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-box-info">
                                    <div class="info-link">
                                        <a href=""><?php print(esc_html__(fw_get_db_customizer_option('header-contact-block')['Street'])) ?>,</a>
                                    </div>
                                    <div class="info-mail-link">
                                        <a href=""><?php print(esc_html__(fw_get_db_customizer_option('header-contact-block')['City and Country'])) ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="far fa-caret-square-down"></i>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

						<?php wp_nav_menu( array(
							'theme_location' => 'header-menu', 
							'menu' => 'header_menu',
							'container' => false,
							'menu_class' => 'navbar-nav mr-auto mt-2 ml-0 mt-lg-0',
						) );?>
                            <a href="<?php print(esc_html__(fw_get_db_customizer_option('header-button-block')['Link'])) ?>" class="btn btn-primary donate"><?php print(esc_html__(fw_get_db_customizer_option('header-button-block')['Text'])) ?></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<?php endif ?>