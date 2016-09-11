<?php
/**
 * The template for displaying the about page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section class="about-page">
    <div class="site-content">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class='aboutpage-hero'>
                <?php the_content(); ?>
            </div>
        <?php endwhile; // end of the loop. ?>
    </div><!-- .container -->
</section><!-- .home-page -->

<section class="about-our-services">
    <div class="site-content">
        <h3>Our Services</h3>
                <?php while ( have_posts() ) : the_post();
                     $our_services= get_field('our_services');
                ?>
                    <p><?php echo $our_services ?></p>
                <?php endwhile; ?>
    </div>
</section>

<section class="about-service-descriptions">
    <div class="site-content">
            <?php while ( have_posts() ) : the_post();
                    $service_1 = get_field('service_1');
                    $service_image_1 = get_field('service_image_1');
                    $service_description_1 = get_field('service_description_1');
                    $service_2 = get_field('service_2');
                    $service_image_2 = get_field('service_image_2');
                    $service_description_2 = get_field('service_description_2');
                    $service_3 = get_field('service_3');
                    $service_image_3 = get_field('service_image_3');
                    $service_description_3 = get_field('service_description_3');
                    $service_4 = get_field('service_4');
                    $service_image_4 = get_field('service_image_4');
                    $service_description_4 = get_field('service_description_4');
                    $size = 'medium';
            ?>
                            <article class ="service-description-image-left">
                                    <?php if($service_image_1); {
                                        echo wp_get_attachment_image( $service_image_1, $size );
                                    } ?>
                                <aside>
                                    <h2><?php echo $service_1; ?></h2>
                                    <p><?php echo $service_description_1; ?></p>
                                </aside>
                                <div style="clear:both;"></div>
                            </article>
                            <article class ="service-description-image-right">
                                    <?php if($service_image_2); {
                                        echo wp_get_attachment_image( $service_image_2, $size );
                                    } ?>
                                <aside>
                                    <h2><?php echo $service_2; ?></h2>
                                    <p><?php echo $service_description_2; ?></p>
                                </aside>
                                <div style="clear:both;"></div>
                            </article>
                            <article class ="service-description-image-left">
                                    <?php if($service_image_3); {
                                        echo wp_get_attachment_image( $service_image_3, $size );
                                    } ?>
                                <aside>
                                    <h2><?php echo $service_3; ?></h2>
                                    <p><?php echo $service_description_3; ?></p>
                                </aside>
                                <div style="clear:both;"></div>
                            </article>
                            <article class ="service-description-image-right">
                                    <?php if($service_image_4); {
                                        echo wp_get_attachment_image( $service_image_4, $size );
                                    } ?>
                                <aside>
                                    <h2><?php echo $service_4; ?></h2>
                                    <p><?php echo $service_description_4; ?></p>
                                </aside>
                                <div style="clear:both;"></div>
                            </article>
             <?php endwhile; ?>
    </div>
</section>

<section class="about-contact-us">
    <div class="site-content">
            <?php while ( have_posts() ) : the_post();
                $contact_us = get_field('contact_us');
            ?>
                <h2><?php echo $contact_us; ?></h2>
                <a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
             <?php endwhile; ?>
             <div style="clear:both;"></div>
    </div>
</section>

<?php get_footer(); ?>
