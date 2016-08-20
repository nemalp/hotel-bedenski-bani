     <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <p>Семеен хотел Беденски бани</p>
                    <p>с.Беден</p>
                    <p>Телефон: <span>0888 543 345</span></p>
                    <p>Email: <a href="mailto:ivan.v.uzunov@gmail.com">ivan.v.uzunov@gmail.com</a></p>
                </div>
                <div class="col-xs-12 col-sm-8">
                    <?php
                        wp_nav_menu( array(
                            'menu'              => 'footer_menu',
                            'theme_location'    => 'footer_menu',
                            'menu_class'        => 'footer-nav pull-right',
                            'depth'             => 2
                        ));
                    ?>
                </div>
                <div class="col-xs-12 col-sm-8 social">
                    <p>Последвай ни в:</p>
                    <a href="https://www.facebook.com/HotelBedenskiBani" class="social-link link-fb" target="_blank">Facebook</a>
                    <a href="" class="social-link link-twitter">Twitter</a>
                </div>
            </div>
            <p class="pull-right">&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
