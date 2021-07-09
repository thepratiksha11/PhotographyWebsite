<?php
/**
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */


require_once get_template_directory() . '/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'novo_register_required_plugins' );


function novo_register_required_plugins() {

	$plugins = array(
		array(
			'name'               => esc_html__('TinyMCE Advanced', 'novo'),
			'slug'               => 'tinymce-advanced',
			'required'           => true,
		),
		array(
			'name'               => esc_html__('Contact Form 7', 'novo'),
			'slug'               => 'contact-form-7',
			'required'           => true,
		),
		array(
			'name'               => esc_html__('Advanced Custom Fields', 'novo'),
			'slug'               => 'advanced-custom-fields',
			'required'           => true,
		),
		array(
			'name'               => esc_html__('Black Studio TinyMCE Widget', 'novo'),
			'slug'               => 'black-studio-tinymce-widget',
			'required'           => true,
		),
		array(
			'name'               => esc_html__('WP Retina 2x', 'novo'),
			'slug'               => 'wp-retina-2x',
			'required'           => true,
		),
		array(
			'name'               => esc_html__('WooCommerce', 'novo'),
			'slug'               => 'woocommerce',
		),
		array(
			'name'               => esc_html__('Redux Framework', 'novo'),
			'slug'               => 'redux-framework',
			'required'           => true,
		),
		array(
			'name'               => esc_html__('GDPR Cookie Consent', 'novo'),
			'slug'               => 'cookie-law-info',
		),
		array(
			'name'               => esc_html__('PixProof', 'novo'),
			'slug'               => 'pixproof',
		),
		array(
			'name'               => esc_html__('Unyson', 'novo'),
			'slug'               => 'unyson',
			'required'           => true,
		),
  );
  
  if (function_exists('curl_init')) {
    $ch = curl_init('http://updates.promo-theme.com/manifest.json');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $file = curl_exec($ch);
    curl_close($ch);
    
    $plugins_array = json_decode($file, true);

    if (is_array($plugins_array['novo'])) {
      foreach ($plugins_array['novo'] as $item) {
        array_push($plugins, $item);
      }
    }
  }

	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}