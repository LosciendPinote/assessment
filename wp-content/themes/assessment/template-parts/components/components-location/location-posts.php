<div class="pin--item" style="left: <?php echo esc_attr(get_field('x_axis')) ?>%; top: <?php echo esc_attr(get_field('y_axis')) ?>%;">
    <a href="<?php esc_url(the_permalink()) ?>" class="location__link">
        <div class="pin__content p-relative">
            <div class="pin--hover p-absolute">
                <div class="pin--title">
                    <h4 class="Headline_8_Bold Headline_6_Bold"><?php esc_html(the_title()) ?></h4>
                </div>
            </div>
            <div class="pin--img">
                <img src="<?php echo esc_url(get_field('pin_image', '40')['url']) ?>" alt="">
            </div>
        </div>
    </a>
</div>