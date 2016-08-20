<?php 
    get_header();
?>
<section class="carousel">
        <div class="container">
        <?php if ( is_page( 'home' )) echo do_shortcode('[metaslider id=102]'); ?>
        </div>
        </div>
    </section>
   <section class="main">
        <div class="container">
            <!-- <div class="banners">
                <div class="baner-item">
                    <img src="img/baner-item-1.jpg" alt="">
                </div>
                <div class="baner-item">
                    <img src="img/baner-item-2.jpg" alt="">
                </div>
                <div class="baner-item">
                    <img src="img/baner-item-3.jpg" alt="">
                </div>
            </div> -->
            <div class="col-xs-12">
                <article style="padding-bottom: 50px;">
                    <?php 
                        if(have_posts()) :
                            while(have_posts()) : the_post();
                            the_content();
                            endwhile;

                        else: 
                            echo '<p>No content found</p>';

                        endif;
                    ?>
                </article>
            </div>
        </div>
    </section> 
<?php 
    get_footer();
?>
