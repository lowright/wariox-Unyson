<?php if(fw_get_db_settings_option('show-footer')) : ?>
<footer>
    <div class="home-footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="display: flex; align-items: center;">
                    <div class="newsletter">
                        <h5>Newsletter</h5>
                        <p>
                            Subscribe to our Newsletter to be updated,
                            we promise not to spam.
                        </p>
                        <form action="" method="POST" id="subscribe-form" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control subscribe-input" placeholder="Email Address">
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text subs-btn"><i class="fas fa-pencil-alt"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-card">
                        <div class="footer-logo mx-auto" style="background-image: url('<?php 
                                if( !empty(fw_get_db_customizer_option('footer-logo')['url'])){
                                    print(esc_html__(fw_get_db_customizer_option('footer-logo')['url']));
                                }
                                else{
                                    print(fw_get_db_customizer_option('footer-logo'));
                                }
                            ?>')">
                        </div>
                        <div class="footer-logo-text">
                            <p><?php print( esc_html__( fw_get_db_customizer_option('footer-logo-text') ) ) ?></p>
                        </div>
                        <div class="footer-card-desc">
                            <p>
                                <?php print( esc_html__( fw_get_db_customizer_option('description') ) ) ?>
                            </p>
                        </div>
                        <div class="footer-card-social">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-2"></div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                    <a href="<?php print( esc_html__( fw_get_db_customizer_option('footer-social')['Facebook'] ) ) ?>" class="social-link">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                    <a href="https://facebook.com" class="social-link">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                    <a href="https://facebook.com" class="social-link">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                    <a href="https://facebook.com" class="social-link">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="display: flex; align-items: center;">
                    <div class="news-end-events">
                        <h5>News & Events</h5>
                        <?php 
                            $args = array(
                                'posts_per_page' => 2,
                            );
                            $posts = get_posts($args);
                            foreach ($posts as $post):
                                setup_postdata( $post );
                        ?>
                        <div class="news-small-post">
                            <p>
                                <a href="<?php the_permalink( ) ?>"> <?php the_title( ) ?> </a> 
                            </p>
                            <div class="meta">
                                <div class="row">
                                    <!-- <div class="col-sm-3"></div> -->
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 news-small-meta">
                                        <div class="icon">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="#"><?php echo get_the_date('d.m.y') ?></a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 news-small-meta">
                                        <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="#"><?php the_author( ) ?></a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 news-small-meta">
                                        <div class="icon">
                                            <i class="fas fa-tags"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="#"><?php the_tags('') ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div>
                        <p class="copyright-text"><?php print( esc_html__( fw_get_db_customizer_option('copyright-text') ) ) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php endif ?>
<?php wp_footer(); ?>

</body>
</html>
