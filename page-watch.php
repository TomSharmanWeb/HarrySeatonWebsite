<?php /**
 * Template Name: Watch
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


<!-- Start of Container -->

<!-- Dynamic Banner Image -->    
<div class="u-max-full-width" id="watch-head">
<a href="http://youtube.com/harryseatonmusic">
<?php $banner = get_field('banner_image'); ?>
                        
<img class="u-max-full-width" src="<?php print $banner['url']; ?>">
    </a>
    </div>

<!-- Video -->
 <div class="container">
        <div class="row">
            <div id="vidplayer">
                    <iframe width="100%" height="550px" src="" ></iframe>
            </div>

<div class="container">           
            
    <?php
            // check if the repeater field has rows of data
            if( have_rows('videos') ): $currentVideo = 0;
            
            // loop through the rows of data
            while ( have_rows('videos') ) : the_row(); 
            
            // print $currentVideo;
    ?>
            
            <?php
            
                // if $currentVideo is 0, 3, 6, 9 etc
                    // start a row
                
                if($currentVideo % 3 == 0) {echo '<div class="row">';}

?>
            
            <?php 
                    $image = get_sub_field('image');
                    $link = get_sub_field('youtube_link');
                ?>

            <div class="one-third column vid-grid" data-youtube="<?php print $link; ?>" >
                    
                
                                               
                <img src="<?php print $image['url']; ?>">
            </div>
            
            <?php

                // if $currentVideo is 2, 5, 8, 11 etc
                    // end a row
                            if($currentVideo % 3 == 2) {echo '</div>';}
            ?>
                     
        <?php

            $currentVideo++;

            endwhile;
            endif;
        ?>     
            
            
            <script>
            
                $('document').ready(function()
                {
                    $('.vid-grid').on('click',function(event)
                    {
                        // grab the youtube link
                        var link = $(event.currentTarget).data('youtube');
                        console.log(link);
                        
                        $('iframe').attr('src', link);
                    })
                })
            
            </script>
            
            
            
            <div></div>
        <div class="row">
            <a href="http://youtube.com/harryseatonmusic" id="watch-more">View more on YouTube...</a>
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

<!-- Footer -->

<?php get_footer(); ?>
