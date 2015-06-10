<?php /**
 * Template Name: Tickets
 *
 *	This is an example using Skeleton
 *
 */
?>

<!-- Header --> 

<?php get_header(); ?>

<!-- Loop Posts --> 

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
               
<!-- Dynamic Banner Image -->    
<div class="u-max-full-width" id="ticket-head">
           
<?php $banner = get_field('banner_image');
?>
                        
<img class="u-max-full-width" src="<?php print $banner['url']; ?>" id="ticket-head">
</div>
    
<!-- Start of Container -->
    
    <div class="container" id="ticket-container">
      <div class="row">
        <div class="one-half column" id="ticket-main-event">

<!-- Dynamic Event Title -->
            
<?php $title = the_field('event_title');
?>
            
<h3 id="ticket-title"><?php echo $title['text']; ?></h3>

<!-- Dynamic Event Description -->
            
<?php $desc = the_field('event_description');
?>
            
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
            
            <a class="button button-primary" href="#" id="ticket-button">Buy Tickets</a>
          </div>      
          
<!-- Dyanmic Venue Table -->           
          
          <div class="one-half column" id="ticket-table">
              
                       <table>     
                   <tr><th>Venue</th>
                       <th>Price</th>		
                       <th>Date</th>
                       <th>Tickets</th></tr>
    <?php
        // check if the repeater field has rows of data
        if( have_rows('venue_list') ):
           // loop through the rows of data
            while ( have_rows('venue_list') ) : the_row();?>
                   
            <tr> 
                <td><?php the_sub_field('venue_name'); ?></td>
                    <td><p>£<?php the_sub_field('price'); ?></p></td>
                        <td><?php the_sub_field('date'); ?></td>
                <td><a href="<?php the_sub_field('buy_tickets'); ?>">Buy Tickets</a></td>
                        </tr>
                     
        <?php
            endwhile;
            else :
            // no rows found
            endif;?>  
      </table>
                                            
                         
          
          </div> 
      </div>
    </div>

<div id="watchspace">
</div>

<!-- End of Container -->

		<?php endwhile; ?>

	<?php else : ?>

<!-- 404 Error -->

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<!-- Footer -->

<?php get_footer(); ?>

