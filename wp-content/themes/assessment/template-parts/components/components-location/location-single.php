<section id="single--location">
    <section class="breadcrumbs--section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo do_shortcode(get_field('breadcrumbs_short_code')) ?>
                </div>
            </div>
        </div>
    </section>
    <section class="page--header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="location--head">
                        <div class="location__title">
                            <h1 class="Headline_3_ExtraBold Headline_1_ExtraBold"><?php the_title() ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--single--location section--location--info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="location__info__item location__info__time d-flex">
                        <div class="location__info__icon location__icon__time">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/image/location/time.png')  ?>" alt="">
                        </div>
                        <div class="location__info__title location__title__time">
                            <h5 class="Paragraph_3_Regular">Working Hours</h5>
                        </div>
                        <div class="location__info__text location__text__time">
                            <h5 class="Headline_7_SemiBold"><?php echo esc_html(get_field('location_from_active_hours') . " - " . get_field('location_to_active_hours')) ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="location__info__item location__info__email d-flex">
                        <div class="location__info__icon location__icon__email">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/image/location/email.png')  ?>" alt="">
                        </div>
                        <div class="location__info__title location__title__email">
                            <h5 class="Paragraph_3_Regular">Email Address</h5>
                        </div>
                        <div class="location__info__text location__text__email">
                            <h5 class="Headline_7_SemiBold"><?php echo esc_html(get_field('location_email')) ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="location__info__item location__info__phone d-flex">
                        <div class="location__info__icon location__icon__phone">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/image/location/phone.png')  ?>" alt="">
                        </div>
                        <div class="location__info__title location__title__phone">
                            <h5 class="Paragraph_3_Regular">Phone Number</h5>
                        </div>
                        <div class="location__info__text location__text__phone">
                            <h5 class="Headline_7_SemiBold"><?php echo esc_html(get_field('location_phone_number')) ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--single--location location--address">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single--location--content">
                        <?php assessment_display_repeater('pickupdelivery_area') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>