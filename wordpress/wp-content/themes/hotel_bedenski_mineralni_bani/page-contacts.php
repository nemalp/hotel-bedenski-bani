<?php get_header(); ?>

	<section class="contacts">
        <div class="container">
            <div id="contacts-container" class="contacts-container contacts-closed">
                <div class="contacts-wrapper">
                    <div class="contacts-cover">
                        <div id="contacts-front" class="contacts-front">
                            <div class="contacts-content">
                                <h2>Контакти</h2>
                                <a href="#" class="contacts-button-open">+</a>
                            </div><!-- /contacts-content -->
                        </div><!-- /contacts-front -->
                        <div class="contacts-back">
                            <div class="contacts-content">
                                <h2>Контакти</h2>
                                <p>За заявки, моля свържете се с нас:<br>
                                    Tel: +359 888 543 345<br>
                                    <a href="mailto:ivan.v.uzunov@gmail.com">ivan.v.uzunov@gmail.com</a></p>
                                <figure><img src="http://bourgtibourg.com/content/6-hotel-4-etoiles-paris-marais/contact.jpg" alt=""></figure>
                                <blockquote>
                                    <p>« One’s destination is never a place,<br>
                                        but rather a new way of looking at things. »</p>
                                    <p><em>~ Henry Miller</em></p>
                                </blockquote>
                            </div><!-- /contacts-content -->
                            <div class="contacts-overlay"></div>
                        </div><!-- /contacts-back -->
                    </div><!-- /contacts-cover -->
                    <div class="contacts-middle">
                        <div class="contacts-inner">
                            <div class="contacts-content">
                                <h2>Карта</h2>
                                <p>Беденски минерални бани - Семеен хотел<br>
                                    общ. Девин<br>
                                </p>
                                <div id="map" style="width:100%;height:100%;height:440px">
                                    <a href="http://goo.gl/maps/BxeEc" title="Voir le plan sur Google Maps" target="_blank">
                                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:338px;width:270px;"><div id="gmap_canvas" style="height:338px;width:270px;"><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.pblack.de" id="get-map-data">pure black</a></div></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(41.70209601970364,24.50335403386839),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.70209601970364, 24.50335403386839)});infowindow = new google.maps.InfoWindow({content:"<b> &#1041;&#1077;&#1076;&#1077;&#1085;&#1089;&#1082;&#1080; &#1041;&#1072;&#1085;&#1080; - &#1057;&#1077;&#1084;&#1077;&#1077;&#1085; &#1061;&#1086;&#1090;&#1077;&#1083;</b><br/>&#1041;&#1077;&#1076;&#1077;&#1085;&#1089;&#1082;&#1080; &#1084;&#1080;&#1085;&#1077;&#1088;&#1072;&#1083;&#1085;&#1080; &#1073;&#1072;&#1085;&#1080;<br/> &#1086;&#1073;&#1097;. &#1044;&#1077;&#1074;&#1080;&#1085;" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                                    </a>
                                </div>
                            </div><!-- /contacts-content -->
                            <div class="contacts-overlay"></div>
                        </div><!-- /contacts-inner -->
                    </div><!-- /contacts-middle -->
                    <div class="contacts-right">
                        <div class="contacts-front"></div>
                        <div class="contacts-back">
                            <span class="contacts-close">Затвори</span>
                            <div class="contacts-content">
                                <h2>Twitter</h2>
                                <p>Chat with us on <a href="">Twitter</a><br>
                                    or join us on <a href="">Facebook</a><br>
                                    &nbsp;<br>
                                    &nbsp;</p>
                                <div class="twitter-widget" id="twitter-widget">
                                </div>
                            </div><!-- /contacts-content -->
                        </div><!-- /contacts-back -->
                    </div><!-- /contacts-right -->
                </div><!-- /contacts-wrapper -->
            </div>
        </div>
    </section>

	<?php get_footer(); ?>
