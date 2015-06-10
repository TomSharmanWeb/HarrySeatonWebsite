<?php /**
 * Template Name: Connect
 *
 *	This is an example using Skeleton
 *
 */
?>

<!-- Get Header -->
<?php get_header(); ?>

<!-- Loop Posts -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

<!-- Dynamic Banner Image -->    
<div class="u-max-full-width" id="connect-head">
           
<?php $banner = get_field('banner_image'); ?>
                        
<img class="u-max-full-width" src="<?php print $banner['url']; ?>" id="connect-head">
</div>
    
<!-- Start of Container --> 
    <div class="container"> 
<!-- Instgram -->        
    <div class="row">
        <div class="insta">
        <!-- SnapWidget -->
<script src="http://snapwidget.com/js/snapwidget.js"></script>
<iframe src="http://snapwidget.com/in/?u=aGFycnlzZWF0b258aW58MTI1fDZ8MXx8bm98NXxmYWRlSW58b25TdGFydHx5ZXN8eWVz&ve=020615" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
        </div>
    </div> 
<!---->
<div id="watchspace">
</div>

      <div class="row">
<!-- Twitter -->
        <div class="one-half column" id="twitter">            
        <a class="twitter-timeline" href="https://twitter.com/harryseaton" data-widget-id="605682727787098112">Tweets by @harryseaton</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>    
</div>
          
<!-- Contact Column -->
<div class="one-half column" id="connect-left-column">
    <!-- Business Contact -->
        <div class="bus-contact">
              <h4>General business Enquires</h4>
              <p>For general business enquires <b>only</b>. Listed below are specific addresses for bookings and press. <b>No personal emails!</b></p>
              <div>              
                <a href="mailto:email@example.com">              
                    <div id="agent-mail">
                      <h5>Send a business email</h5>  
                    </div>
                </a>
              </div>
        </div>
    <!-- Contact Twitter Middle Content -->
        <div id="connect-right-middle-content">
            <hr>
                <p><b>The easiest way to speak with Harry is through twitter. Keep up to date and follow him <a href="http://twitter.com/harryseaton">@harryseaton</a>.</b></p>
            <hr>
        </div>
    <!-- Other Contact -->
    <div class="press-contact">
        <!-- Press -->
        <div class="one-half column">
            <h5>Press</h5>  
            <p><b>Print: </b> <a mailto:print.press@harryseaton.co.uk> print.press@harryseaton.co.uk</a></p>
            <p><b>Online: </b> <a mailto:online.press@harryseaton.co.uk> online.press@harryseaton.co.uk</a></p>  
        </div>
        <!-- Booking -->
        <div class="one-half column">
            <h5>Booking</h5>  
            <p><b>In UK: </b> <a mailto:uk.booking@harryseaton.co.uk> uk.booking@harryseaton.co.uk</a></p>
            <p><b>Outside UK: </b> <a mailto:booking@harryseaton.co.uk> booking@harryseaton.co.uk</a></p>             
        </div>
          
        </div>
      
          </div>
    </div>
</div>

<div id="watchspace">
</div>

<!-- End of Container -->
		<?php endwhile; ?>

	<?php else : ?>

<!-- Error 404 -->
<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<!-- Get Footer -->
<?php get_footer(); ?>
