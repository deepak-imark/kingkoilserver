<?php 
/* Template Name: contact

*/ 
get_header();

?>
<?php
	$banner=get_post_meta(8,"contact_banner_image",true);
	$thumb = wp_get_attachment_image_src($banner, 'contact_banner' );	
?>
 <div class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="caption">
            <h2 class="in_ttl"><?php the_field("contact_banner_title",8);?></h2>
            <p><?php the_field("contact_banner_content",8);?></p>
        </div>

    </div>
    <section class="contact_div">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_field("contact_us_title",8);?></h2>
                    <p><?php the_field("contact_us_content",8);?></p>
                    <div class="cntct_box">
                        <div class="bx">
                            <div class="icon_outer">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                            <div class="info_rltd">
                                <p><?php the_field("contact_name_one",8);?></p>
                                <a href="tel:<?php the_field("contact_phone_one",8);?>"><?php the_field("contact_phone_one",8);?></a>
                                <a class="mail_adrs" href="mailto:<?php the_field("contact_mail_one",8);?>"><?php the_field("contact_mail_one",8);?></a>
                            </div>
                            <div class="info_rltd">
                                <p><?php the_field("contact_name_two",8);?></p>
                                <a href="tel:<?php the_field("contact_phone_two",8);?> "><?php the_field("contact_phone_two",8);?></a>
                                <a class="mail_adrs" href="mailto:<?php the_field("contact_mail_two",8);?>"><?php the_field("contact_mail_two",8);?></a>
                            </div>
                            <div class="info_rltd">
                                <p><?php the_field("contact_name_three",8);?></p>
                                <a href="tel:<?php the_field("contact_phone_three",8);?>"><?php the_field("contact_phone_three",8);?></a>
                                <a class="mail_adrs" href="mailto:<?php the_field("contact_mail_three",8);?>"><?php the_field("contact_mail_three",8);?></a>
                            </div>
                        </div>
                        <div class="bx">
                            <div class="icon_outer icon_outer1">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="info_rltd altrnt">
                                <?php the_field("contact_address",8);?>
							</div>
                        </div>
                    </div>
                </div>
				
                <div class="col-md-6">
                    <div class="map">
                       <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9575.520260115167!2d-6.7540338632867485!3d53.13029850354038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486780c1f2c12949%3A0xa00c7a99731ec70!2sKilcullen%2C+Co.+Kildare%2C+Ireland!5e0!3m2!1sen!2sin!4v1465294601478" frameborder="0" style="border:0" allowfullscreen></iframe>-->
					   
				   <?php 
					$location = get_field('map');	
					if( !empty($location) ):	
						?>
                      <div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                      </div>
                  <?php endif; ?></div>
                
			</div>
            </div>
            <div class="form_div">
                <div class="row">
                    <div class="col-md-12">
                        <h2>get in touch</h2>
                    </div>
                </div>
                <div class="row">
				<?php echo do_shortcode( '[contact-form-7 id="33" title="Contact form 1"]' ); ?>
                    <!--<div class="col-md-6">
                        <input type="text" value="" placeholder="Name:">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="" placeholder="Email:">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="" placeholder="Phone:">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="" placeholder="Subject:">
                    </div>
                    <div class="col-md-12">
                        <textarea placeholder="Message:"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input class="submit_buton_form" type="button" value="Submit">
                    </div>-->
                </div>
            </div>
        </div>
    </section>
	<style type="text/css">

.acf-map {
    width: 100%;
    height: 520px;
    border: #ccc solid 1px;
    margin: 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
                <script type="text/javascript">
                    (function ($) {

                        /*
                         *  render_map
                         *
                         *  This function will render a Google Map onto the selected jQuery element
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	4.3.0
                         *
                         *  @param	$el (jQuery element)
                         *  @return	n/a
                         */

                        function render_map($el) {

                            // var
                            var $markers = $el.find('.marker');

                            // vars
                            var args = {
                                zoom: 30,
                                center: new google.maps.LatLng(0, 0),
                               
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };

                            // create map	        	
                            var map = new google.maps.Map($el[0], args);

                            // add a markers reference
                            map.markers = [];

                            // add markers
                            $markers.each(function () {

                                add_marker($(this), map);

                            });

                            // center map
                            center_map(map);

                        }

                        /*
                         *  add_marker
                         *
                         *  This function will add a marker to the selected Google Map
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	4.3.0
                         *
                         *  @param	$marker (jQuery element)
                         *  @param	map (Google Map object)
                         *  @return	n/a
                         */

                        function add_marker($marker, map) {

                            // var
                            var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

                            // create marker
                            var marker = new google.maps.Marker({
                                position: latlng,
                                map: map
                            });

                            // add to array
                            map.markers.push(marker);

                            // if marker contains HTML, add it to an infoWindow
                            if ($marker.html()) {
                                // create info window
                                var infowindow = new google.maps.InfoWindow({
                                    content: $marker.html()
                                });

                                // show info window when marker is clicked
                                google.maps.event.addListener(marker, 'click', function () {

                                    infowindow.open(map, marker);

                                });
                            }

                        }

                        /*
                         *  center_map
                         *
                         *  This function will center the map, showing all markers attached to this map
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	4.3.0
                         *
                         *  @param	map (Google Map object)
                         *  @return	n/a
                         */

                        function center_map(map) {

                            // vars
                            var bounds = new google.maps.LatLngBounds();

                            // loop through all markers and create bounds
                            $.each(map.markers, function (i, marker) {

                                var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

                                bounds.extend(latlng);

                            });

                            // only 1 marker?
                            if (map.markers.length == 1) {
                                // set center of map
                                map.setCenter(bounds.getCenter());
                                map.setZoom(15);
                            } else {
                                // fit to bounds
                                map.fitBounds(bounds);
                            }

                        }

                        /*
                         *  document ready
                         *
                         *  This function will render each map when the document is ready (page has loaded)
                         *
                         *  @type	function
                         *  @date	8/11/2013
                         *  @since	5.0.0
                         *
                         *  @param	n/a
                         *  @return	n/a
                         */

                        $(document).ready(function () {

                            $('.acf-map').each(function () {

                                render_map($(this));

                            });

                        });

                    })(jQuery);
                </script>
<?php
get_footer();
?>