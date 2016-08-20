<?php get_header(); ?>

<section class="restaurant">
    <div class="container-fluid"> <!-- start container -->
    <div class="row">
            <aside class="col-xs-12 col-md-2 restaurant-info">
                <?php
                    if(have_posts()) :
                        while(have_posts()) : the_post();
                            the_content();
                        endwhile;

                    else:
                        echo '<p>No content found</p>';
                    endif;
                ?>
            </aside>
        </div>
    </div> <!-- end container -->
</section>

<?php get_footer(); ?>
