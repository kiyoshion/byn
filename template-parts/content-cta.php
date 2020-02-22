<aside class="bg bg--black cta<?php if ( is_page( 'contact' ) ) echo ' is-hidden'; ?>">
    <a class="bg__abs bg__abs-link" href="<?php echo esc_url( home_url('/contact') ); ?>"></a>
    <div class="flex__container flex__container-center container">
        <div class="flex__container-img js-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-contact.svg" alt="">
        </div>
        <div class="flex__container-txt js-wrap">
            <h3 class="font--en font--white">GET IN TOUCH</h3>
        </div>
    </div>
</aside>