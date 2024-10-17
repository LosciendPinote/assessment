<?php

/**
 * Template Name: Location Page
 */
get_header();
?>
<section id="location--section">
    <section class="location--map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="location--content position-relative">
                        <div class="location--map">
                            <img src="<?php echo esc_url(get_field('background_image')['url']) ?>" alt="">
                        </div>
                        <?php assessment_post('washmate-location') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<?php
get_footer();
