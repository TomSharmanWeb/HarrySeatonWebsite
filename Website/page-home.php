<?php /**
 * Template Name: Home
 *
 *	This is an example using Skeleton
 *
 */
?>
<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>


<!-- Static Full-Screen Video -->
    <div class="full-video">
        <div id="volume" class="mute" class="vid"></div>
        <video autoplay="autoplay" muted class="u-max-full-width" id"" class="videoPlayer" loop>
        <source src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/05/Intro1.mp4" type="video/mp4">
        </video> 
    </div>

<!-- http://stackoverflow.com/questions/24092874/mute-unmute-video-not-working-jquery -->

<script>
$('#volume').click(function(){
   $('video')[0].muted ^= 1;  // Toggle mute 1/0
   $(this).toggleClass('mute unmute');
});
</script>


    
<!-- Start of Container -->
    
    <div class="container" id="home-middle"> 
      <div class="row" id="home-middle-content">
        <div class="one-half column" id="home-main-event">
            
<!-- Dynamic Event Title -->
            
<?php $title = the_field('event_title');
?>
            
<h3 id="ticket-title"><?php print $title['text']; ?>
</h3>

<!-- Dynamic Event Description -->
            
<?php $desc = the_field('event_description'); ?>
            
<p id="ticket-text"><?php print $desc['text']; ?></p>

<!-- Dynamic Map -->            
<div>
                                      
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>                                    
<style type="text/css">

.acf-map {
	width: 100%;
	height: 250px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

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

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

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

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

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

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
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

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);
</script>                                
                                    
                                    
                                    
   <?php 

$location = get_field('event_map');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>                                 
            </div>
            
            
<!-- Static Ticket Button -->           
            
            <a class="button button-primary" href="tickets" id="ticket-button">More Info</a>
          </div>      
            
            
<!-- Static Mailing List -->          
          
          <div class="one-half column" id="mail-box">
           <h3 id="mail-head">Mailing List</h3>
              <p id="mail-tagline"><b>Sign up today and recieve the following:</b></p>
             <ul class="mail-list">
                <li>Exclusive News</li>
                <li>Free Events</li>
                <li>Pre-Sale Tickets</li>
                <li>Limited Edition Merch</li>
                <li>Competitions & Freebies</li>
                <li>Songs before release!</li>
            </ul>
            <div id="mail-sign-up">
                <div id="checkbox-terms">
                <input type=checkbox name="maillist"><p>I Agree to the <a href="terms">Terms and Conditions</a>.</p>
                </div>
            <input type="text" placeholder="Enter email address" id="email">
            <button id="signup">Sign Up</button>
            </div>
<script>
var requiredCheckboxes = $(':checkbox[required]');

requiredCheckboxes.change(function(){
    if(requiredCheckboxes.is(':checked')) {
        requiredCheckboxes.removeAttr('required');
    }
    else {
        requiredCheckboxes.attr('required', 'required');
    }
});                
                
                </script>
          </div> 
      </div>
    </div>

<!-- Lookbook -->

        <div class="u-max-full-width" id="arrow">

        <a href="lookbook">
           <h6>VIEW LOOKBOOK 15</h6>       
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/05/lookbook-header.jpg" id="lookbook-                head" width="100%">
        </a>
        </div>
    
    
<!-- End of Container -->
  
		<?php endwhile; ?>

	<?php else : ?>

<!-- Error 404 -->

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<!-- Footer -->

<?php get_footer(); ?>

