<?php 
    get_header();
?>
   <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
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
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>
<?php 
    get_footer();
?>
