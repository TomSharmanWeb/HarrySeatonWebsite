<?php /**
 * Template Name: Terms & Conditions
 *
 *	This is an example using Skeleton
 *
 */
?>
<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

<!-- ADD CONTENT HERE -->
<div class="container">
    <div class="row">
        <!-- Page Title Header -->
        <div class="row">
            <div class="twelve columns">
            <h3 id="terms-title">Terms & Conditions</h3>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns">
            <h5>Website General Terms of Service:</h5>
            <p></p>
            </div>
        </div>
        <div class="row" id="terms">
            <div class="twelve columns">
            <h6><b>General</b></h6>
<?php $gen = the_field('general');
        consoleLog($gen);
        consoleLog($gen['text']);?>            
<p><?php print $gen['text']; ?></p>
      
            <h6><b>Links</b></h6>
<?php $link = the_field('links');
        consoleLog($link);
        consoleLog($link['text']);?>          
<p><?php print $link['text']; ?></p>                  
            <h6><b>Use of Cookies</b></h6>
<?php $cookies = the_field('cookies');
        consoleLog($cookies);
        consoleLog($cookies['text']);?>  
<p><?php print $cookies['text']; ?></p>
                
            <h6><b>Use by Children</b></h6>
<?php $child = the_field('use_by_children');
        consoleLog($child);
        consoleLog($child['text']);?>
<p><?php print $child['text']; ?></p>
                
            <h6><b>Forwarding Web Pages</b></h6>
<?php $fwd = the_field('fowarding_web_pages');
        consoleLog($fwd);
        consoleLog($fwd['text']);?>
<p><?php print $fwd['text']; ?></p>
                
            <h6><b>Use and Sharing of Demographic Information</b></h6>
<?php $demo = the_field('demographic_info');
        consoleLog($demo);
        consoleLog($demo['text']);?>
<p><?php print $demo['text']; ?></p>
                
            <h6><b>Third Parties</b></h6>
<?php $party = the_field('third_parties');
        consoleLog($party);
        consoleLog($party['text']);?>
<p><?php print $party['text']; ?></p>
                
            <h6><b>Security</b></h6>
<?php $sec = the_field('security');
        consoleLog($sec);
        consoleLog($sec['text']);?>
<p><?php print $sec['text']; ?></p>
                
            <h6><b>Disclosure</b></h6>
<?php $dis = the_field('disclosure');
        consoleLog($dis);
        consoleLog($dis['text']);?>
<p><?php print $dis['text']; ?></p>
                
            <h6><b>Modifications to Terms</b></h6>
<?php $mod = the_field('modifications_to_terms');
        consoleLog($mod);
        consoleLog($mod['text']);?>
<p><?php print $mod['text']; ?></p> 
            </div>
        </div>                
    </div>
</div>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>

