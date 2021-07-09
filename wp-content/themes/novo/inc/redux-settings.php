<?php

if (!class_exists('Redux')) {
  return;
}

$opt_name = "novo_theme";
$opt_name = apply_filters('novo_theme/opt_name', $opt_name);

$theme = wp_get_theme();

$args = array(
  'opt_name' => $opt_name,
  'display_name' => $theme->get('Name'),
  'display_version' => $theme->get('Version'),
  'menu_type' => 'submenu',
  'allow_sub_menu' => true,
  'menu_title' => esc_html__('Theme Options', 'novo'),
  'page_title' => esc_html__('Theme Options', 'novo'),
  'google_api_key' => '',
  'google_update_weekly' => true,
  'async_typography' => true,
  'admin_bar' => false,
  'admin_bar_icon' => 'dashicons-portfolio',
  'admin_bar_priority' => 50,
  'global_variable' => '',
  'dev_mode' => false,
  'update_notice' => true,
  'customizer' => true,
  'page_priority' => null,
  'page_parent' => 'novo_dashboard',
  'page_permissions' => 'manage_options',
  'menu_icon' => '',
  'last_tab' => '',
  'page_icon' => 'icon-themes',
  'page_slug' => '',
  'save_defaults' => true,
  'default_show' => false,
  'default_mark' => '',
  'show_import_export' => true,
  'transient_time' => 60 * MINUTE_IN_SECONDS,
  'output' => true,
  'output_tag' => true,
  'database' => '',
  'use_cdn' => true,
  'show_options_object' => false,
);

Redux::setArgs($opt_name, $args);

if (!function_exists('yprm_redux_social_icons')) {
  function yprm_redux_social_icons() {
    return array(
      '' => esc_html__('None', 'novo'),
      '500px' => esc_html__('500px', 'novo'),
      'amazon' => esc_html__('Amazon', 'novo'),
      'app-store' => esc_html__('App Store', 'novo'),
      'behance' => esc_html__('Behance', 'novo'),
      'blogger' => esc_html__('Blogger', 'novo'),
      'codepen' => esc_html__('Codepen', 'novo'),
      'digg' => esc_html__('Digg', 'novo'),
      'dribbble' => esc_html__('Dribbble', 'novo'),
      'dropbox' => esc_html__('Dropbox', 'novo'),
      'ebay' => esc_html__('Ebay', 'novo'),
      'facebook' => esc_html__('Facebook', 'novo'),
      'flickr' => esc_html__('Flickr', 'novo'),
      'foursquare' => esc_html__('Foursquare', 'novo'),
      'github' => esc_html__('GitHub', 'novo'),
      'google-plus' => esc_html__('Google Plus', 'novo'),
      'instagram' => esc_html__('Instagram', 'novo'),
      'itunes' => esc_html__('Itunes', 'novo'),
      'kickstarter' => esc_html__('Kickstarter', 'novo'),
      'linkedin' => esc_html__('LinkedIn', 'novo'),
      'mailchimp' => esc_html__('Mailchimp', 'novo'),
      'mixcloud' => esc_html__('MixCloud', 'novo'),
      'windows' => esc_html__('Windows', 'novo'),
      'odnoklassniki' => esc_html__('Odnoklassniki', 'novo'),
      'paypal' => esc_html__('PayPal', 'novo'),
      'periscope' => esc_html__('Periscope', 'novo'),
      'openid' => esc_html__('OpenID', 'novo'),
      'pinterest' => esc_html__('Pinterest', 'novo'),
      'reddit' => esc_html__('Reddit', 'novo'),
      'skype' => esc_html__('Skype', 'novo'),
      'snapchat' => esc_html__('Snapchat', 'novo'),
      'soundcloud' => esc_html__('SoundCloud', 'novo'),
      'spotify' => esc_html__('Spotify', 'novo'),
      'stack-overflow' => esc_html__('Stack Overflow', 'novo'),
      'steam' => esc_html__('Steam', 'novo'),
      'stripe' => esc_html__('Stripe', 'novo'),
      'telegram' => esc_html__('Telegram', 'novo'),
      'tumblr' => esc_html__('Tumblr', 'novo'),
      'twitter' => esc_html__('Twitter', 'novo'),
      'viber' => esc_html__('Viber', 'novo'),
      'vimeo' => esc_html__('Vimeo', 'novo'),
      'vk' => esc_html__('VK', 'novo'),
      'whatsapp' => esc_html__('Whatsapp', 'novo'),
      'yahoo' => esc_html__('Yahoo', 'novo'),
      'yelp' => esc_html__('Yelp', 'novo'),
      'yoast' => esc_html__('Yoast', 'novo'),
      'youtube' => esc_html__('YouTube', 'novo'),
    );
  }
}

Redux::setSection($opt_name, array(
  'title' => esc_html__('General', 'novo'),
  'id' => 'general',
  'customizer_width' => '400px',
  'icon' => 'fa fa-home',
  'fields' => array(
    array(
      'id' => 'site_color_mode',
      'type' => 'select',
      'title' => esc_html__('Site color mode', 'novo'),
      'options' => array(
        'light' => esc_html__('Light', 'novo'),
        'dark' => esc_html__('Dark', 'novo'),
      ),
      'default' => 'dark',
    ),
    array(
      'id' => 'decor_color',
      'type' => 'color',
      'title' => esc_html__('Main Color', 'novo'),
      'validate' => 'color',
      'default' => '#c48f56',
      'transparent' => false,
      'output' => array(
        'background-color' => '.button-style1:hover, .vc_general.vc_btn3:hover,.pixproof-data .button-download:hover, .banner-social-buttons .item + .item:after,.banner-right-buttons .button + .button:before,.footer-social-button a + a:after, .post-bottom .zilla-likes, .portfolio_hover_type_4 .portfolio-item .content h5:after, .portfolio_hover_type_5 .portfolio-item .content h5:before, .portfolio_hover_type_7 .portfolio-item .content h5:after, .portfolio_hover_type_7 .portfolio-item .content h5:before, .heading-with-num-type2 .sub-h:before, .portfolio_hover_type_2 .portfolio-item .content h5:after, .portfolio_hover_type_6 .portfolio-item .content h5:after, .portfolio_hover_type_8 .portfolio-item .content h5:after, .portfolio_hover_type_8 .portfolio-item .content h5:before, .portfolio_hover_type_9 .portfolio-item .content h5:after, .portfolio_hover_type_9 .portfolio-item .content h5:before, body .category .item:before, .testimonials .owl-dots .owl-dot.active, .skill-item-line .line div, .price-list .item:before, .price-list .item .options .button-style1 span, .price-list .item .options .button-style1 span:after, .price-list-type2 .item:before, .split-screen .owl-dots .owl-dot.active, .vertical-parallax-area .pagination-dots span.active, .split-screen-type2 .pagination-dots span.active, .white .album-playlist .jp-volume-bar .jp-volume-bar-value, .photo-carousel > a, .js-pixproof-gallery .selected .proof-photo__id, .hm-cunt span, .woocommerce .products .product .image .product_type_grouped, .woocommerce .products .product .add_to_cart_button, .woocommerce div.product .woocommerce-tabs .tabs li a:after, .woocommerce div.product form.cart .button, .booked-calendar-shortcode-wrap .booked-calendar tbody td.today:hover .date .number, .booked-calendar-shortcode-wrap .booked-appt-list .timeslot .timeslot-people button, body .booked-modal p.booked-title-bar, body .booked-modal .button, body .booked-modal .button.button-primary',

        'border-color' => '.button-style1,.vc_general.vc_btn3, .pixproof-data .button-download, .navigation > ul > li.current-menu-item > a span,.navigation > ul > li.current-menu-ancestor > a span,.navigation > ul > li.current_page_item > a span, .banner .cell .content a[data-type="video"], .portfolio_hover_type_3 .portfolio-item .content, .portfolio_hover_type_6 .portfolio-item .content, .portfolio_hover_type_4 .portfolio-item .content, .portfolio_hover_type_4 .portfolio-item:hover .content, .portfolio-type-carousel .portfolio-item .a-img a[data-type="video"] i, .pagination .current, .video-block a > div, .team-social-buttons a, .woocommerce .woocommerce-ordering select, .woocommerce form .form-row select, .woocommerce form .form-row textarea, .woocommerce form .form-row input.input-text, .woocommerce div.product form.cart .variations select, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .coupon-area .input-text, .select2-dropdown, .select2-container--default .select2-selection--single, .play-button-block a,.booked-calendar-shortcode-wrap .booked-calendar tbody td.today .date .number',

        'color' => '.heading-decor:after,.heading-decor-s .h:after,.testimonials .item .quote:after, .button-style2, .preloader_content__container:after, .preloader_content__container:before, .navigation.hover-style2 > ul > li.current-menu-item > a span:after,.navigation.hover-style2 > ul > li.current-menu-ancestor > a span:after,.navigation.hover-style2 > ul > li.current_page_item > a span:after, .navigation.hover-style3 > ul > li.current-menu-item > a span:after,.navigation.hover-style3 > ul > li.current-menu-ancestor > a span:after,.navigation.hover-style3 > ul > li.current_page_item > a span:after, .navigation.hover-style4 > ul > li.current-menu-item > a span:after,.navigation.hover-style4 > ul > li.current-menu-ancestor > a span:after,.navigation.hover-style4 > ul > li.current_page_item > a span:after, .navigation > ul > li:hover > a, .navigation .sub-menu li.current-menu-item > a,.navigation .sub-menu li.current-menu-ancestor > a,.navigation .sub-menu li:hover > a, .navigation .sub-menu li.current-menu-item.menu-item-has-children:after, .navigation .sub-menu li.menu-item-has-children:hover:after, .navigation .children li.current_page_item > a,.navigation .children li.current-menu-ancestor > a,.navigation .children li:hover > a, .navigation .children li.current_page_item.page_item_has_children:after, .navigation .children li.page_item_has_children:hover:after, .full-screen-nav .fsn-container > ul > li:hover > a, .full-screen-nav .fsn-container > ul > li.current-menu-item > a,.full-screen-nav .fsn-container > ul > li.current-menu-parent > a,.full-screen-nav .fsn-container > ul > li.current-menu-ancestor > a, .minicart-wrap .cart_list .mini_cart_item .quantity, .widget_shopping_cart_content .cart_list .mini_cart_item .quantity, .side-navigation li.current-menu-item > a,.side-navigation li.current-menu-parent > a,.side-navigation li.current-menu-ancestor > a,.side-navigation li.current_page_item > a,.side-navigation li:hover > a, .banner-social-buttons .item:hover,.footer-social-button a:hover, .banner-right-buttons .button:hover .h, .banner-about .sub-h, .banner .cell .content .angle, .banner .heading span, .banner .owl-dot.active:before, .banner .owl-prev:hover,.banner .owl-next:hover, .banner .price, .widget_archive ul li a:hover,.widget_categories ul li a:hover,.widget_pages ul li a:hover,.widget_meta ul li a:hover,.widget_nav_menu ul li a:hover,.widget_recent_entries ul li a:hover,.product-categories li a:hover, .tagcloud .tag-cloud-link:hover, .blog-post-widget .item .blog-detail, .blog-item .date, .project-horizontal .content .date, .blog-item .bottom .col i, .site-content .date, .comment-items .comment-item .text .date, .site-footer .scroll-up-button:hover, .contact-row i, .filter-button-group button:after,.filter-button-group a:after, .category-buttons a:after, .portfolio-type-carousel .portfolio-item .bottom-content .cat, .price-list .item .options .button-style1.active, .heading-with-num-type2 .num, .accordion-items .item .top .t:before, .accordion-items .item .top .t:after, .accordion-items .item.active .top, .tabs .tabs-head .item.active-tab, .split-screen .portfolio-navigation .numbers .num.active span, .category-slider-area .category-slider .center .item, .vertical-parallax-slider .item .price, .js-pixproof-gallery .proof-photo__meta .nav li a:hover, .heading-block .sub-h, .heading-block .h.accent-color, .heading-block .h span, .num-box-items .num-box .num, .icon-box .icon, .woocommerce .quantity .qty, .woocommerce #reviews #comments ol.commentlist li .meta time, .woocommerce .cart .up, .woocommerce .cart .down, .woocommerce table.shop_table .product-price > span, .woocommerce table.shop_table .product-subtotal > span, .woocommerce div.product .date, .woocommerce div.product .product_meta .sku_wrapper, .woocommerce div.product .price-area, .woocommerce div.product .variations_form span.price, .woocommerce .products .product .price, .minicart-wrap .total > span, .booked-calendar-shortcode-wrap .booked-appt-list>h2 strong',

        'stroke' => '.skill-item .chart .outer, .banner-circle-nav .item svg circle',
      ),
    ),
    array(
      'id' => 'right_click_disable',
      'type' => 'button_set',
      'title' => esc_html__('Right Click Disable', 'novo'),
      'options' => array(
        'true' => esc_html__('On', 'novo'),
        'false' => esc_html__('Off', 'novo'),
      ),
      'default' => 'false',
    ),
    array(
      'id' => 'right_click_disable_message',
      'type' => 'editor',
      'title' => esc_html__('Message', 'novo'),
      'default' => __('<p style="text-align: center"><strong><span style="font-size: 18px">Content is protected. Right-click function is disabled.</span></strong></p>', 'novo'),
      'args' => array(
        'teeny' => false,
        'textarea_rows' => 5,
      ),
      'required' => array('right_click_disable', '=', 1),
    ),
    array(
      'id' => 'protected_message',
      'type' => 'editor',
      'title' => esc_html__('Protected Page Message', 'novo'),
      'default' => esc_html__('This content is password protected. To view it please enter your password below:', 'novo'),
      'args' => array(
        'teeny' => false,
        'textarea_rows' => 5,
      ),
    ),
    array(
      'id' => 'mobile_adaptation',
      'type' => 'button_set',
      'title' => esc_html__('Mobile Adaptation', 'novo'),
      'options' => array(
        'true' => esc_html__('Original', 'novo'),
        'false' => esc_html__('Cropped', 'novo'),
      ),
      'default' => 'false',
    ),
    array(
      'id' => 'cat_prefix',
      'type' => 'button_set',
      'title' => esc_html__('Category Prefix', 'novo'),
      'desc' => wp_kses_post(__('Show/Hide Category prefix.<br><b>Example:</b><br><b>If Show -</b> Category: Lifestyle<br><b>If Hide -</b> Lifestyle', 'novo')),
      'options' => array(
        'true' => esc_html__('Show', 'novo'),
        'false' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'true',
    ),
    array(
      'id' => 'lazyload',
      'type' => 'button_set',
      'title' => esc_html__('Lazyload Images', 'novo'),
      'options' => array(
        'true' => esc_html__('Yes', 'novo'),
        'false' => esc_html__('No', 'novo'),
      ),
      'default' => 'false',
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Preloader', 'novo'),
  'id' => 'general_preloader',
  'customizer_width' => '450px',
  'icon' => 'fa fa-sync-alt',
  'fields' => array(
    array(
      'id' => 'preloader_show',
      'type' => 'button_set',
      'title' => esc_html__('Preloader', 'novo'),
      'options' => array(
        'true' => esc_html__('On', 'novo'),
        'false' => esc_html__('Off', 'novo'),
      ),
      'default' => 'true',
    ),
    array(
      'id' => 'preloader_type',
      'type' => 'select',
      'title' => esc_html__('Preloader type', 'novo'),
      'options' => array(
        'image' => esc_html__('Image', 'novo'),
        'words' => esc_html__('Words', 'novo'),
      ),
      'default' => 'words',
      'required' => array('preloader_show', '=', 'true'),
    ),
    array(
      'id' => 'preloader_img',
      'type' => 'background',
      'title' => esc_html__('Prelaoder image', 'novo'),
      'desc' => esc_html__('Choose a default logo image to display', 'novo'),
      'background-attachment' => false,
      'background-position' => false,
      'background-repeat' => false,
      'background-origin' => false,
      'background-color' => false,
      'background-size' => false,
      'background-clip' => false,
      'preview_media' => true,
      'preview' => false,
      'required' => array('preloader_type', '=', 'image'),
    ),
    array(
      'id' => 'preloader_static_word',
      'type' => 'text',
      'title' => esc_html__('Static word', 'novo'),
      'required' => array('preloader_type', '=', 'words'),
    ),
    array(
      'id' => 'preloader_dinamic_word_1',
      'type' => 'text',
      'title' => esc_html__('Dynamic word 1', 'novo'),
      'required' => array('preloader_type', '=', 'words'),
    ),
    array(
      'id' => 'preloader_dinamic_word_2',
      'type' => 'text',
      'title' => esc_html__('Dynamic word 2', 'novo'),
      'required' => array('preloader_type', '=', 'words'),
    ),
    array(
      'id' => 'preloader_dinamic_word_3',
      'type' => 'text',
      'title' => esc_html__('Dynamic word 3', 'novo'),
      'required' => array('preloader_type', '=', 'words'),
    ),
    array(
      'id' => 'preloader_dinamic_word_4',
      'type' => 'text',
      'title' => esc_html__('Dynamic word 4', 'novo'),
      'required' => array('preloader_type', '=', 'words'),
    ),
    array(
      'id' => 'preloader_dinamic_word_5',
      'type' => 'text',
      'title' => esc_html__('Dynamic word 5', 'novo'),
      'required' => array('preloader_type', '=', 'words'),
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Logo', 'novo'),
  'id' => 'header_logo',
  'customizer_width' => '450px',
  'icon' => 'fa fa-address-book',
  'fields' => array(
    array(
      'id' => 'logo_text',
      'type' => 'text',
      'title' => esc_html__('Logo text', 'novo'),
    ),
    array(
      'id' => 'default_logo',
      'type' => 'background',
      'title' => esc_html__('Logo Image - normal', 'novo'),
      'desc' => esc_html__('Choose a default logo image to display', 'novo'),
      'background-attachment' => false,
      'background-position' => false,
      'background-repeat' => false,
      'background-origin' => false,
      'background-color' => false,
      'background-size' => false,
      'background-clip' => false,
      'preview_media' => true,
      'preview' => false,
    ),
    array(
      'id' => 'light_logo',
      'type' => 'background',
      'title' => esc_html__('Logo Image - light', 'novo'),
      'desc' => esc_html__('Choose a logo image to display for "Light" header skin', 'novo'),
      'background-attachment' => false,
      'background-position' => false,
      'background-repeat' => false,
      'background-origin' => false,
      'background-color' => false,
      'background-size' => false,
      'background-clip' => false,
      'preview_media' => true,
      'preview' => false,
    ),
    array(
      'id' => 'dark_logo',
      'type' => 'background',
      'title' => esc_html__('Logo Image - Dark', 'novo'),
      'desc' => esc_html__('Choose a logo image to display for "Dark" header skin', 'novo'),
      'background-attachment' => false,
      'background-position' => false,
      'background-repeat' => false,
      'background-origin' => false,
      'background-color' => false,
      'background-size' => false,
      'background-clip' => false,
      'preview_media' => true,
      'preview' => false,
    ),
    array(
      'id' => 'logo_size',
      'units' => 'px',
      'type' => 'dimensions',
      'units_extended' => 'false',
      'title' => esc_html__('Logo Size', 'novo'),
      'output' => array('.site-header .logo img, .side-header .logo img, .site-header .logo a, .side-header .logo a'),
      'height' => true,
    ),
    array(
      'id' => 'mobile_logo_size',
      'units' => 'px',
      'type' => 'dimensions',
      'units_extended' => 'false',
      'title' => esc_html__('Mobile Logo Size', 'novo'),
      'output' => array('.is-mobile-body .site-header .logo img, .is-mobile-body .side-header .logo img, .is-mobile-body .site-header .logo a, .is-mobile-body .side-header .logo a'),
      'height' => true,
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Header', 'novo'),
  'id' => 'header_style',
  'customizer_width' => '450px',
  'icon' => 'fa fa-heading',
  'fields' => array(
    array(
      'id' => 'header_style',
      'type' => 'image_select',
      'title' => esc_html__('Style', 'novo'),
      'options' => array(
        'logo_left' => array(
          'alt' => 'Logo left',
          'img' => get_template_directory_uri() . '/inc/imgs/header-style1.png',
        ),
        'logo_center' => array(
          'alt' => 'Logo center',
          'img' => get_template_directory_uri() . '/inc/imgs/header-style2.png',
        ),
        'logo_center_t2' => array(
          'alt' => 'Logo center type 2',
          'img' => get_template_directory_uri() . '/inc/imgs/header-style3.png',
        ),
        'side' => array(
          'alt' => 'Side',
          'img' => get_template_directory_uri() . '/inc/imgs/header-style4.png',
        ),
      ),
      'default' => 'logo_left',
    ),
    array(
      'id' => 'header_container',
      'type' => 'select',
      'title' => esc_html__('Container', 'novo'),
      'options' => array(
        'container' => esc_html__('Center container', 'novo'),
        'container-fluid' => esc_html__('Full witdh', 'novo'),
      ),
      'default' => 'container-fluid',
    ),
    array(
      'id' => 'header_color_mode',
      'type' => 'select',
      'title' => esc_html__('Color mode', 'novo'),
      'options' => array(
        'dark' => esc_html__('Dark', 'novo'),
        'light' => esc_html__('Light', 'novo'),
      ),
      'default' => 'dark',
    ),
    array(
      'id' => 'header-light-start',
      'type' => 'section',
      'title' => esc_html__('Header Light Scheme', 'novo'),
      'indent' => true 
    ),
    array(
      'id' => 'header_light_bg_color',
      'type' => 'color',
      'title' => esc_html__('Background Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('background-color' => '.site-header.fixed, .site-header.header-space-on'),
    ),
    array(
      'id' => 'header_light_text_color',
      'type' => 'color',
      'title' => esc_html__('Text Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('color' => '.site-header'),
    ),
    array(
      'id' => 'header-light-end',
      'type' => 'section',
      'indent' => false 
    ),
    array(
      'id' => 'header-dark-start',
      'type' => 'section',
      'title' => esc_html__('Header Dark Scheme', 'novo'),
      'indent' => true 
    ),
    array(
      'id' => 'header_dark_bg_color',
      'type' => 'color',
      'title' => esc_html__('Background Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('background-color' => '.site-header.header-space-on.dark, .site-header.dark.fixed'),
    ),
    array(
      'id' => 'header_dark_text_color',
      'type' => 'color',
      'title' => esc_html__('Text Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('color' => '.site-header.dark'),
    ),
    array(
      'id' => 'header-dark-end',
      'type' => 'section',
      'indent' => false 
    ),
    array(
      'id' => 'header-elements-start',
      'type' => 'section',
      'title' => esc_html__('Elements', 'novo'),
      'indent' => true 
    ),
    array(
      'id' => 'header_cart',
      'type' => 'button_set',
      'title' => esc_html__('Cart', 'novo'),
      'options' => array(
        'true' => esc_html__('Show', 'novo'),
        'false' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'true',
    ),
    array(
      'id' => 'header_search',
      'type' => 'button_set',
      'title' => esc_html__('Search', 'novo'),
      'options' => array(
        'true' => esc_html__('Show', 'novo'),
        'false' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'true',
    ),
    array(
      'id' => 'header_sidebar_word',
      'type' => 'text',
      'title' => esc_html__('Side Bar Background Word', 'novo'),
    ),
    array(
      'id' => 'header-elements-end',
      'type' => 'section',
      'indent' => false 
    ),
    array(
      'id' => 'nav-options-start',
      'type' => 'section',
      'title' => esc_html__('Navigation Options', 'novo'),
      'indent' => true 
    ),
    array(
      'id' => 'navigation_type',
      'type' => 'select',
      'title' => esc_html__('Navigation type', 'novo'),
      'options' => array(
        'disabled' => esc_html__('Disabled', 'novo'),
        'hidden_menu' => esc_html__('Hidden menu', 'novo'),
        'visible_menu' => esc_html__('Visible menu', 'novo'),
        'full_screen' => esc_html__('Full screen menu', 'novo'),
      ),
      'default' => 'visible_menu',
    ),
    array(
      'id' => 'navigation_item_hover_style',
      'type' => 'image_select',
      'title' => esc_html__('Navigation item hover style', 'novo'),
      'options' => array(
        'style1' => array(
          'alt' => 'Style 1',
          'img' => get_template_directory_uri() . '/inc/imgs/nav-item-h1.png',
        ),
        'style2' => array(
          'alt' => 'Style 2',
          'img' => get_template_directory_uri() . '/inc/imgs/nav-item-h2.png',
        ),
        'style3' => array(
          'alt' => 'Style 3',
          'img' => get_template_directory_uri() . '/inc/imgs/nav-item-h3.png',
        ),
        'style4' => array(
          'alt' => 'Style 4',
          'img' => get_template_directory_uri() . '/inc/imgs/nav-item-h4.png',
        ),
      ),
      'default' => 'style1',
    ),
    array(
      'id' => 'header_accent_color',
      'type' => 'color',
      'title' => esc_html__('Color on active', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array(
        'background-color' => '.hm-cunt span',

        'color' => '.navigation .sub-menu li.current-menu-item > a, .navigation .sub-menu li.current-menu-ancestor > a, .navigation .sub-menu li.current-menu-item.menu-item-has-children:after, .navigation .children li.current_page_item > a, .navigation .children li.current-menu-ancestor > a, .navigation .children li.current_page_item.page_item_has_children:after, .navigation.hover-style2 > ul > li.current-menu-item > a span:after, .navigation.hover-style2 > ul > li.current-menu-ancestor > a span:after, .navigation.hover-style2 > ul > li.current_page_item > a span:after, .navigation.hover-style3 > ul > li.current-menu-item > a span:after, .navigation.hover-style3 > ul > li.current-menu-ancestor > a span:after, .navigation.hover-style3 > ul > li.current_page_item > a span:after, .navigation.hover-style4 > ul > li.current-menu-item > a span:after, .navigation.hover-style4 > ul > li.current-menu-ancestor > a span:after, .navigation.hover-style4 > ul > li.current_page_item > a span:after',

        'border-color' => '.navigation > ul > li.current-menu-item > a span, .navigation > ul > li.current-menu-ancestor > a span, .navigation > ul > li.current_page_item > a span, .navigation > ul > li.current-menu-ancestor > a span'
      ),
    ),
    array(
      'id' => 'header_accent_color_hover',
      'type' => 'color',
      'title' => esc_html__('Color on hover', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('color' => '.navigation > ul > li:hover > a, .navigation .sub-menu li:hover > a, .navigation .children li:hover > a, .navigation .sub-menu li:hover.menu-item-has-children:after, .navigation .children li:hover.page_item_has_children:after'),
    ),
    array(
      'id' => 'nav-options-end',
      'type' => 'section',
      'indent' => false 
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Theme Fonts', 'novo'),
  'id' => 'theme_fonts',
  'icon' => 'fas fa-font',
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Fonts', 'novo'),
  'id' => 'theme_fonts_array',
	'subsection'       => true,
  'fields' => array(
    array(
			'id'       => 'custom_fonts',
      'type'     => 'yprm_fonts',
      'default'  => array(
        'fonts' => '{"type":"google","family":"Montserrat","variants":"100, 100italic, 200, 200italic, 300, 300italic, regular, italic, 500, 500italic, 600, 600italic, 700, 700italic, 800, 800italic, 900, 900italic","subsets":"vietnamese, cyrillic, latin, latin-ext, cyrillic-ext"}'
      )
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Icon Fonts', 'novo'),
  'id' => 'theme_icon_fonts_array',
	'subsection'       => true,
  'fields' => array(
    array(
			'id'       => 'icon_fonts',
      'type'     => 'yprm_icon_fonts',
      'title'    => esc_html__('Upload Custom Icon Fonts', 'novo')
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Typography', 'novo'),
  'id' => 'typography',
  'customizer_width' => '400px',
  'icon' => 'fa fa-i-cursor',
  'fields' => array(
    array(
      'id' => 'body-font-face',
      'type' => 'yprm_typography',
      'title' => esc_html__('Body', 'novo'),
      'output' => array('body'),
      'default' => array(
        'weight' => 'regular',
        'family' => 'Montserrat',
        'font-size' => '16px',
      ),
    ),
    array(
      'id' => 'h1-font-face',
      'type' => 'yprm_typography',
      'title' => esc_html__('H1', 'novo'),
      'output' => array('h1, .h1'),
      'default' => array(
        'weight' => '700',
        'family' => 'Montserrat',
        'font-size' => '60px',
      ),
    ),
    array(
      'id' => 'h2-font-face',
      'type' => 'yprm_typography',
      'title' => esc_html__('H2', 'novo'),
      'output' => array('h2, .h2'),
      'default' => array(
        'weight' => '700',
        'family' => 'Montserrat',
        'font-size' => '48px',
      ),
    ),
    array(
      'id' => 'h3-font-face',
      'type' => 'yprm_typography',
      'title' => esc_html__('H3', 'novo'),
      'output' => array('h3, .h3'),
      'default' => array(
        'weight' => '700',
        'family' => 'Montserrat',
        'font-size' => '36px',
      ),
    ),
    array(
      'id' => 'h4-font-face',
      'type' => 'yprm_typography',
      'title' => esc_html__('H4', 'novo'),
      'output' => array('h4, .h4'),
      'default' => array(
        'weight' => '700',
        'family' => 'Montserrat',
        'font-size' => '30px',
      ),
    ),
    array(
      'id' => 'h5-font-face',
      'type' => 'yprm_typography',
      'title' => esc_html__('H5', 'novo'),
      'output' => array('h5, .h5'),
      'default' => array(
        'weight' => '700',
        'family' => 'Montserrat',
        'font-size' => '24px',
      ),
    ),
    array(
      'id' => 'h6-font-face',
      'type' => 'yprm_typography',
      'title' => esc_html__('H6', 'novo'),
      'output' => array('h6, .h6'),
      'default' => array(
        'weight' => '700',
        'family' => 'Montserrat',
        'font-size' => '18px',
      ),
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Social buttons in footer', 'novo'),
  'id' => 'social_buttons',
  'customizer_width' => '400px',
  'icon' => 'fab fa-twitter',
  'fields' => array(
    array(
      'id' => 'footer_social_buttons',
      'type' => 'button_set',
      'title' => esc_html__('Social buttons in footer', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'social_target',
      'type' => 'select',
      'title' => esc_html__('Open link in', 'olvi'),
      'options' => array(
        '_self' => esc_html__('Current Tab', 'olvi'),
        '_blank' => esc_html__('New Tab', 'olvi'),
      ),
    ),
    array(
      'id' => 'sl1',
      'type' => 'label',
      'title' => esc_html__('Social button 1', 'novo'),
    ),
    array(
      'id' => 'social_icon1',
      'type' => 'select',
      'title' => esc_html__('Social icon', 'novo'),
      'options' => yprm_redux_social_icons(),
      'default' => '',
    ),
    array(
      'id' => 'social_link1',
      'type' => 'text',
      'title' => esc_html__('Link', 'novo'),
    ),
    array(
      'id' => 'sb2',
      'type' => 'label',
      'title' => esc_html__('Social button 2', 'novo'),
    ),
    array(
      'id' => 'social_icon2',
      'type' => 'select',
      'title' => esc_html__('Social icon', 'novo'),
      'options' => yprm_redux_social_icons(),
      'default' => '',
    ),
    array(
      'id' => 'social_link2',
      'type' => 'text',
      'title' => esc_html__('Link', 'novo'),
    ),
    array(
      'id' => 'sb3',
      'type' => 'label',
      'title' => esc_html__('Social button 3', 'novo'),
    ),
    array(
      'id' => 'social_icon3',
      'type' => 'select',
      'title' => esc_html__('Social icon', 'novo'),
      'options' => yprm_redux_social_icons(),
      'default' => '',
    ),
    array(
      'id' => 'social_link3',
      'type' => 'text',
      'title' => esc_html__('Link', 'novo'),
    ),
    array(
      'id' => 'sb4',
      'type' => 'label',
      'title' => esc_html__('Social button 4', 'novo'),
    ),
    array(
      'id' => 'social_icon4',
      'type' => 'select',
      'title' => esc_html__('Social icon', 'novo'),
      'options' => yprm_redux_social_icons(),
      'default' => '',
    ),
    array(
      'id' => 'social_link4',
      'type' => 'text',
      'title' => esc_html__('Link', 'novo'),
    ),
    array(
      'id' => 'sb5',
      'type' => 'label',
      'title' => esc_html__('Social button 5', 'novo'),
    ),
    array(
      'id' => 'social_icon5',
      'type' => 'select',
      'title' => esc_html__('Social icon', 'novo'),
      'options' => yprm_redux_social_icons(),
      'default' => '',
    ),
    array(
      'id' => 'social_link5',
      'type' => 'text',
      'title' => esc_html__('Link', 'novo'),
    ),
    array(
      'id' => 'sb6',
      'type' => 'label',
      'title' => esc_html__('Social button 6', 'novo'),
    ),
    array(
      'id' => 'social_icon6',
      'type' => 'select',
      'title' => esc_html__('Social icon', 'novo'),
      'options' => yprm_redux_social_icons(),
      'default' => '',
    ),
    array(
      'id' => 'social_link6',
      'type' => 'text',
      'title' => esc_html__('Link', 'novo'),
    ),
    array(
      'id' => 'sb7',
      'type' => 'label',
      'title' => esc_html__('Social button 7', 'novo'),
    ),
    array(
      'id' => 'social_icon7',
      'type' => 'select',
      'title' => esc_html__('Social icon', 'novo'),
      'options' => yprm_redux_social_icons(),
      'default' => '',
    ),
    array(
      'id' => 'social_link7',
      'type' => 'text',
      'title' => esc_html__('Link', 'novo'),
    ),
    array(
      'id' => 'footer_social-light-start',
      'type' => 'section',
      'title' => esc_html__('Footer Light Scheme', 'novo'),
      'indent' => true 
    ),
    array(
      'id' => 'footer_social_light_bg_color',
      'type' => 'color',
      'title' => esc_html__('Background Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('background-color' => '.footer-social-button'),
    ),
    array(
      'id' => 'footer_social_light_text_color',
      'type' => 'color',
      'title' => esc_html__('Text Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('color' => '.footer-social-button'),
    ),
    array(
      'id' => 'footer_social-light-end',
      'type' => 'section',
      'indent' => false 
    ),
    array(
      'id' => 'footer_social-dark-start',
      'type' => 'section',
      'title' => esc_html__('Footer Dark Scheme', 'novo'),
      'indent' => true 
    ),
    array(
      'id' => 'footer_social_dark_bg_color',
      'type' => 'color',
      'title' => esc_html__('Background Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('background-color' => '.site-dark .footer-social-button'),
    ),
    array(
      'id' => 'footer_social_dark_text_color',
      'type' => 'color',
      'title' => esc_html__('Text Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('color' => '.site-dark .footer-social-button'),
    ),
    array(
      'id' => 'footer_social-dark-end',
      'type' => 'section',
      'indent' => false 
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Footer', 'novo'),
  'id' => 'footer',
  'customizer_width' => '400px',
  'icon' => 'fa fa-th-large',
  'fields' => array(
    array(
      'id' => 'footer',
      'type' => 'button_set',
      'title' => esc_html__('Footer', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'footer_logo',
      'type' => 'button_set',
      'title' => esc_html__('Footer Logo', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'copyright_text',
      'type' => 'text',
      'title' => esc_html__('Copyright text', 'novo'),
    ),
    array(
      'id' => 'footer_scroll_up',
      'type' => 'button_set',
      'title' => esc_html__('Scroll Up Button', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'footer_decor',
      'type' => 'button_set',
      'title' => esc_html__('Decor Memphis', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'footer_default_logo',
      'type' => 'background',
      'title' => esc_html__('Logo Image - normal', 'novo'),
      'desc' => esc_html__('Choose a default logo image to display', 'novo'),
      'background-attachment' => false,
      'background-position' => false,
      'background-repeat' => false,
      'background-origin' => false,
      'background-color' => false,
      'background-size' => false,
      'background-clip' => false,
      'preview_media' => true,
      'preview' => false,
      'required' => array('footer_logo', '=', 'show'),
    ),
    array(
      'id' => 'footer_light_logo',
      'type' => 'background',
      'title' => esc_html__('Logo Image - light', 'novo'),
      'desc' => esc_html__('Choose a logo image to display for "Light" header skin', 'novo'),
      'background-attachment' => false,
      'background-position' => false,
      'background-repeat' => false,
      'background-origin' => false,
      'background-color' => false,
      'background-size' => false,
      'background-clip' => false,
      'preview_media' => true,
      'preview' => false,
      'required' => array('footer_logo', '=', 'show'),
    ),
    array(
      'id' => 'footer_dark_logo',
      'type' => 'background',
      'title' => esc_html__('Logo Image - Dark', 'novo'),
      'desc' => esc_html__('Choose a logo image to display for "Dark" header skin', 'novo'),
      'background-attachment' => false,
      'background-position' => false,
      'background-repeat' => false,
      'background-origin' => false,
      'background-color' => false,
      'background-size' => false,
      'background-clip' => false,
      'preview_media' => true,
      'preview' => false,
      'required' => array('footer_logo', '=', 'show'),
    ),
    array(
      'id' => 'footer_logo_size',
      'units' => 'px',
      'type' => 'dimensions',
      'units_extended' => 'false',
      'title' => esc_html__('Logo Size', 'novo'),
      'output' => array('.site-footer .logo img'),
      'height' => true,
      'required' => array('footer_logo', '=', 'show'),
    ),
    array(
      'id' => 'footer_mobile_logo_size',
      'units' => 'px',
      'type' => 'dimensions',
      'units_extended' => 'false',
      'title' => esc_html__('Mobile Logo Size', 'novo'),
      'output' => array('.is-mobile-body .site-footer .logo img'),
      'height' => true,
      'required' => array('footer_logo', '=', 'show'),
    ),
    array(
      'id' => 'footer-light-start',
      'type' => 'section',
      'title' => esc_html__('Footer Light Scheme', 'novo'),
      'indent' => true 
    ),
    array(
      'id' => 'footer_light_bg_color',
      'type' => 'color',
      'title' => esc_html__('Background Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('background-color' => '.site-footer'),
    ),
    array(
      'id' => 'footer_light_text_color',
      'type' => 'color',
      'title' => esc_html__('Text Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('color' => '.site-footer'),
    ),
    array(
      'id' => 'footer-light-end',
      'type' => 'section',
      'indent' => false 
    ),
    array(
      'id' => 'footer-dark-start',
      'type' => 'section',
      'title' => esc_html__('Footer Dark Scheme', 'novo'),
      'indent' => true 
    ),
    array(
      'id' => 'footer_dark_bg_color',
      'type' => 'color',
      'title' => esc_html__('Background Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('background-color' => '.site-dark .site-footer'),
    ),
    array(
      'id' => 'footer_dark_text_color',
      'type' => 'color',
      'title' => esc_html__('Text Color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('color' => '.site-dark .site-footer'),
    ),
    array(
      'id' => 'footer-dark-end',
      'type' => 'section',
      'indent' => false 
    ),
    array(
      'id' => 'footer_cols_title',
      'type' => 'raw',
      'title' => esc_html__('Cols Size', 'somo'),
      'desc' => wp_kses(__('<b>Example:</b> col-12 col-sm-6 col-md-4 col-lg-3<br><a href="https: //getbootstrap.com/docs/4.3/layout/grid/?#grid-options" target="_blank">Bootstrap Grid Instructions</a><br>
      If you want hide column enter <b>hide</b>', 'somo'), 'post'),
    ),
    array(
      'id' => 'footer_col_1',
      'type' => 'text',
      'title' => esc_html__('Footer col 1', 'novo'),
      'default' => 'col-12 col-md-4'
    ),
    array(
      'id' => 'footer_col_2',
      'type' => 'text',
      'title' => esc_html__('Footer col 2', 'novo'),
      'default' => 'col-12 col-sm-6 col-md-4'
    ),
    array(
      'id' => 'footer_col_3',
      'type' => 'text',
      'title' => esc_html__('Footer col 3', 'novo'),
      'default' => 'col-12 col-sm-6 col-md-4'
    ),
    array(
      'id' => 'footer_col_4',
      'type' => 'text',
      'title' => esc_html__('Footer col 4', 'novo'),
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('404 Page', 'novo'),
  'id' => '404_page',
  'customizer_width' => '400px',
  'icon' => 'fa fa-exclamation-circle',
  'fields' => array(
    array(
      'id' => '404_bg',
      'type' => 'background',
      'title' => esc_html__('Background image', 'novo'),
      'background-attachment' => false,
      'background-position' => false,
      'background-repeat' => false,
      'background-origin' => false,
      'background-color' => false,
      'background-size' => false,
      'background-clip' => false,
      'preview_media' => true,
      'preview' => false,
    ),
    array(
      'id' => '404_page_color',
      'type' => 'color',
      'title' => esc_html__('Text color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('color' => '.banner-404'),
    ),
    array(
      'id' => '404_page_heading_color',
      'type' => 'color',
      'title' => esc_html__('Heading color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('color' => '.banner-404 .b-404-heading'),
    ),
    array(
      'id' => '404_page_heading',
      'type' => 'textarea',
      'title' => esc_html__('Heading', 'novo'),
      'default' => __('<span>404</span><br>ERROR', 'novo'),
    ),
    array(
      'id' => '404_page_desc',
      'type' => 'textarea',
      'title' => esc_html__('Desc', 'novo'),
      'default' => esc_html__('The page you are looking for doesn`t exist anymore', 'novo'),
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Coming Soon Page', 'novo'),
  'id' => 'coming_soon',
  'customizer_width' => '400px',
  'icon' => 'fa fa-calendar-alt',
  'fields' => array(
    array(
      'id' => 'coming_soon_bg',
      'type' => 'background',
      'title' => esc_html__('Background image', 'novo'),
      'background-attachment' => false,
      'background-position' => false,
      'background-repeat' => false,
      'background-origin' => false,
      'background-color' => false,
      'background-size' => false,
      'background-clip' => false,
      'preview_media' => true,
      'preview' => false,
    ),
    array(
      'id' => 'coming_soon_color',
      'type' => 'color',
      'title' => esc_html__('Text color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('color' => '.banner-coming-soon'),
    ),
    array(
      'id' => 'coming_soon_heading_color',
      'type' => 'color',
      'title' => esc_html__('Heading color', 'novo'),
      'validate' => 'color',
      'transparent' => false,
      'output' => array('color' => '.banner-coming-soon .b-coming-heading'),
    ),
    array(
      'id' => 'coming_soon_heading',
      'type' => 'textarea',
      'title' => esc_html__('Heading', 'novo'),
      'default' => esc_html__('Coming soon', 'novo'),
    ),
    array(
      'id' => 'coming_soon_subscribe_desc',
      'type' => 'textarea',
      'title' => esc_html__('Subscribe form desc', 'novo'),
      'default' => esc_html__('Subscribe and get the latest updates', 'novo'),
    ),
    array(
      'id' => 'coming_soon_subscribe_code',
      'type' => 'text',
      'title' => esc_html__('Subscribe form code', 'novo'),
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Portfolio Project Page', 'novo'),
  'id' => 'project_page',
  'customizer_width' => '400px',
  'icon' => 'fa fa-tasks',
  'fields' => array(
    array(
      'id' => 'project_style',
      'type' => 'select',
      'title' => esc_html__('Style project page', 'novo'),
      'options' => array(
        'slider' => esc_html__('Slider', 'novo'),
        'masonry' => esc_html__('Masonry', 'novo'),
        'grid' => esc_html__('Grid', 'novo'),
        'horizontal' => esc_html__('Horizontal', 'novo'),
        'horizontal-type2' => esc_html__('Horizontal Type 2', 'novo'),
      ),
      'default' => 'slider',
    ),
    array(
      'id' => 'project_count_cols',
      'type' => 'select',
      'title' => esc_html__('Cols count', 'novo'),
      'options' => array(
        'col2' => esc_html__('Col 2', 'novo'),
        'col3' => esc_html__('Col 3', 'novo'),
        'col4' => esc_html__('Col 4', 'novo'),
      ),
      'required' => array('project_style', '=', array('masonry', 'grid')),
      'default' => 'col2',
    ),
    array(
      'id' => 'project_image',
      'type' => 'select',
      'title' => esc_html__('Portfolio image', 'novo'),
      'options' => array(
        'full' => esc_html__('Full', 'novo'),
        'adaptive' => esc_html__('Adaptive', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'full',
    ),
    array(
      'id' => 'project_date',
      'type' => 'select',
      'title' => esc_html__('Show date', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'project_like',
      'type' => 'select',
      'title' => esc_html__('Show like', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'project_navigation',
      'type' => 'select',
      'title' => esc_html__('Show navigation', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'project_gallery_link',
      'type' => 'text',
      'title' => esc_html__('Link Back to Main Gallery', 'novo'),
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Portfolio LightBox', 'novo'),
  'id' => 'portfolio_light_box',
  'customizer_width' => '400px',
  'icon' => 'far fa-images',
  'fields' => array(
    array(
      'id' => 'project_image_zoom',
      'type' => 'button_set',
      'title' => esc_html__('Zoom', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'project_image_full_screen',
      'type' => 'button_set',
      'title' => esc_html__('Toggle Full Screen', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'project_image_share',
      'type' => 'button_set',
      'title' => esc_html__('Share', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'project_image_download',
      'type' => 'button_set',
      'title' => esc_html__('Download Link', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'hide',
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Blog post', 'novo'),
  'id' => 'blog_post',
  'customizer_width' => '400px',
  'icon' => 'fab fa-wordpress',
  'fields' => array(
    array(
      'id' => 'blog_feature_image',
      'type' => 'select',
      'title' => esc_html__('Blog Feature Image', 'novo'),
      'options' => array(
        'hide' => esc_html__('Hide', 'novo'),
        'show' => esc_html__('Show', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'blog_date',
      'type' => 'select',
      'title' => esc_html__('Show Date', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'blog_like',
      'type' => 'select',
      'title' => esc_html__('Show Like', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'blog_comments',
      'type' => 'select',
      'title' => esc_html__('Show Comments', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'blog_comments',
      'type' => 'select',
      'title' => esc_html__('Show Comments', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'blog_sidebar',
      'type' => 'select',
      'title' => esc_html__('Sidebar', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
    array(
      'id' => 'blog_navigation',
      'type' => 'select',
      'title' => esc_html__('Show navigation', 'novo'),
      'options' => array(
        'show' => esc_html__('Show', 'novo'),
        'hide' => esc_html__('Hide', 'novo'),
      ),
      'default' => 'show',
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Portfolio Categories Style', 'novo'),
  'id' => 'project_style',
  'customizer_width' => '400px',
  'icon' => 'fa fa-th',
  'fields' => array(
    array(
      'id' => 'project_in_popup',
      'type' => 'select',
      'title' => esc_html__('Open project in popup', 'novo'),
      'options' => array(
        'yes' => esc_html__('Yes', 'novo'),
        'no' => esc_html__('No', 'novo'),
      ),
      'default' => 'no',
    ),
    array(
      'id' => 'portfolio_style',
      'type' => 'select',
      'title' => esc_html__('Portfolio style', 'novo'),
      'options' => array(
        'masonry' => esc_html__('Masonry', 'novo'),
        'grid' => esc_html__('Grid', 'novo'),
      ),
      'default' => 'grid',
    ),
    array(
      'id' => 'portfolio_cols',
      'type' => 'select',
      'title' => esc_html__('Cols count', 'novo'),
      'options' => array(
        'col2' => esc_html__('Col 2', 'novo'),
        'col3' => esc_html__('Col 3', 'novo'),
        'col4' => esc_html__('Col 4', 'novo'),
      ),
      'default' => 'col3',
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Shop', 'novo'),
  'id' => 'shop_style',
  'customizer_width' => '400px',
  'icon' => 'fa fa-shopping-basket',
  'fields' => array(
    array(
      'id' => 'shop_type',
      'type' => 'select',
      'title' => esc_html__('Type', 'novo'),
      'options' => array(
        'masonry' => esc_html__('Masonry', 'novo'),
        'grid' => esc_html__('Grid', 'novo'),
      ),
      'default' => 'grid',
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Translation', 'novo'),
  'id' => 'translation',
  'customizer_width' => '400px',
  'icon' => 'fa fa-language',
  'fields' => array(
    array(
      'id' => 'tr_load_more',
      'type' => 'text',
      'title' => esc_html__('Load More', 'novo'),
    ),
    array(
      'id' => 'tr_all',
      'type' => 'text',
      'title' => esc_html__('All', 'novo'),
    ),
    array(
      'id' => 'tr_options',
      'type' => 'text',
      'title' => esc_html__('Options', 'novo'),
    ),
  ),
));

Redux::setSection($opt_name, array(
  'title' => esc_html__('Custom code & analytics & Map API', 'novo'),
  'id' => 'custom_code_analytics',
  'customizer_width' => '400px',
  'icon' => 'fa fa-code',
  'fields' => array(
    array(
      'id' => 'code_in_head',
      'type' => 'ace_editor',
      'title' => esc_html__('Code in <head>', 'novo'),
    ),
    array(
      'id' => 'code_before_body',
      'type' => 'ace_editor',
      'title' => esc_html__('Code before </body> tag', 'novo'),
    ),
    array(
      'id' => 'google_maps_api_key',
      'type' => 'text',
      'title' => esc_html__('Google Map API Key', 'novo'),
      'description' => __('Create an application in <a href="https://console.developers.google.com/flows/enableapi?apiid=places_backend,maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true" target="_blank">Google Console</a> and add the Key here.', 'novo'),
    ),
  ),
));