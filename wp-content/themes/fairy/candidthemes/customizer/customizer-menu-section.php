<?php
/**
 *  Fairy Menu Option
 *
 * @since Fairy 1.0.0
 *
 */
/*Menu Options*/
$wp_customize->add_section( 'fairy_primary_menu_section', array(
   'priority'       => 15,
   'capability'     => 'edit_theme_options',
   'theme_supports' => '',
   'title'          => __( 'Menu Section Options', 'fairy' ),
   'panel'     => 'fairy_panel',
) );

/*Sticky Primary*/
$wp_customize->add_setting( 'fairy_options[fairy-enable-sticky-primary-menu]', array(
   'capability'        => 'edit_theme_options',
   'transport' => 'refresh',
   'default'           => $default['fairy-enable-sticky-primary-menu'],
   'sanitize_callback' => 'fairy_sanitize_checkbox'
) );
$wp_customize->add_control( 'fairy_options[fairy-enable-sticky-primary-menu]', array(
   'label'     => __( 'Enable Primary Menu Sticky', 'fairy' ),
   'description' => __('The main primary menu will be sticky.', 'fairy'),
   'section'   => 'fairy_primary_menu_section',
   'settings'  => 'fairy_options[fairy-enable-sticky-primary-menu]',
   'type'      => 'checkbox',
   'priority'  => 5,
) );