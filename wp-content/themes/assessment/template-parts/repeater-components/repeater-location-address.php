<div class="location__address__item">
    <div class="row">
        <div class="location--street--address--wrap">
            <div class="address__item__icon location__icon__bg">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/image/location/address_icon.png') ?>" alt="">
            </div>
            <div class="location--address--wrapper">
                <div class="location--address--content street--content">
                    <div class="location__address__title">
                        <h5 class="Paragraph_3_Regular">Street Address</h5>
                    </div>
                    <div class="location__address__text">
                        <h5 class="Headline_7_SemiBold"><?php echo esc_html(get_sub_field('location_street_address')) ?></h5>
                    </div>
                </div>
                <div class="location--address--content address--post--code">
                    <div class="location__address__title">
                        <h5 class="Paragraph_3_Regular">Post Code</h5>
                    </div>
                    <div class="location__address__text">
                        <h5 class="Headline_7_SemiBold"><?php echo esc_html(get_sub_field('location_post_code')) ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="address--area--wrapper d-flex">
        <div class="address__area__item">
            <div class="location--address--content address--post--building--number">
                <div class="location__address__title">
                    <h5 class="Paragraph_3_Regular">Building Number</h5>
                </div>
                <div class="location__address__text address--text--bg">
                    <h5 class="Headline_7_SemiBold"><?php echo esc_html(get_sub_field('location_building_number')) ?></h5>
                </div>
            </div>
        </div>
        <div class="address__area__item">
            <div class="location--address--content address--post--street--name">
                <div class="location__address__title">
                    <h5 class="Paragraph_3_Regular">Street Name</h5>
                </div>
                <div class="location__address__text address--text--bg">
                    <h5 class="Headline_7_SemiBold"><?php echo esc_html(get_sub_field('location_street_name')) ?></h5>
                </div>
            </div>
        </div>
        <div class="address__area__item">
            <div class="location--address--content address--post--state">
                <div class="location__address__title">
                    <h5 class="Paragraph_3_Regular">State</h5>
                </div>
                <div class="location__address__text address--text--bg">
                    <h5 class="Headline_7_SemiBold"><?php echo esc_html(get_sub_field('location_state')) ?></h5>
                </div>
            </div>
        </div>
        <div class="address__area__item">
            <div class="location--address--content address--post--city">
                <div class="location__address__title">
                    <h5 class="Paragraph_3_Regular">City</h5>
                </div>
                <div class="location__address__text address--text--bg">
                    <h5 class="Headline_7_SemiBold"><?php echo esc_html(get_sub_field('location_city')) ?></h5>
                </div>
            </div>
        </div>
    </div>

</div>