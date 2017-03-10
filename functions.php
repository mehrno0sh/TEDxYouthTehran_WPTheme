<?php
function create_events()
{
    register_post_type('events',
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Event'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'excerpt'
            )
        ));
}

add_action('init', 'create_events');

function create_talks()
{
    register_post_type('talks',
        array(
            'labels' => array(
                'name' => __('Talks'),
                'singular_name' => __('Talk'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
            )
        ));
}

add_action('init', 'create_talks');

function create_social_link()
{
    register_post_type('social-links',
        array(
            'labels' => array(
                'name' => __('Social Links'),
                'singular_name' => __('Social Link'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'excerpt',
                'custom-fields'
            )
        ));
}

add_action('init', 'create_social_link');


add_theme_support('title-tag');

register_nav_menus(array(
    'primary' => __('Primary Menu', 'tedxtehranseventeen'),
    'footer' => __('Footer Menu', 'tedxtehranseventeen'),
));
