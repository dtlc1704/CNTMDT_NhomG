<?php
/**
 * Displays main header
 *
 * @package Cosmetic Ecommerce Store
 */
?>

<?php if(get_theme_mod('fashion_estore_top_header_on_of_setting') != ''){ ?>
<div class="main_header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 align-self-center">
                <div class="navbar-brand">
                    <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                    <?php endif; ?>
                    <?php $cosmetic_ecommerce_store_blog_info = get_bloginfo( 'name' ); ?>
                        <?php if ( ! empty( $cosmetic_ecommerce_store_blog_info ) ) : ?>
                            <?php if ( is_front_page() && is_home() ) : ?>
                              <?php if( get_theme_mod('fashion_estore_logo_title',true) != ''){ ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php }?>
                            <?php else : ?>
                              <?php if( get_theme_mod('fashion_estore_logo_title',true) != ''){ ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                <?php }?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php
                            $cosmetic_ecommerce_store_description = get_bloginfo( 'description', 'display' );
                            if ( $cosmetic_ecommerce_store_description || is_customize_preview() ) :
                        ?>
                        <?php if( get_theme_mod('fashion_estore_theme_description',false) != ''){ ?>
                        <p class="site-description"><?php echo esc_html($cosmetic_ecommerce_store_description); ?></p>
                      <?php } ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-7 align-self-center">
                <?php if(class_exists('woocommerce')){ ?>
                    <div class="pro_search">
                        <?php get_product_search_form(); ?>
                    </div>
                <?php }?>
            </div>
            <div class="col-lg-3 col-md-4 col-8 align-self-center">
                <div class="call-info">
                    <div class="row">
                        <?php if(get_theme_mod('fashion_estore_phone_number_info') != ''){ ?>
                            <div class="col-lg-2 col-md-2 col-3">
                                <i class="<?php echo esc_attr( get_theme_mod('fashion_estore_phone_number_icon') ); ?>"></i>
                            </div>
                            <div class="col-lg-10 col-md-10 col-9">
                                <strong><?php echo esc_html(get_theme_mod('fashion_estore_phone_number_text','')); ?></strong>
                                <p><?php echo esc_html(get_theme_mod('fashion_estore_phone_number_info','')); ?></p>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-4 align-self-center">
                <?php if(class_exists('woocommerce')){ ?>
                    <div class="cart_box">
                        <?php global $woocommerce; ?>
                        <a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e( 'shopping cart','cosmetic-ecommerce-store' ); ?>"><i class="fas fa-shopping-bag"></i><span class="cart-value"><?php echo sprintf ( esc_html( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php }?>