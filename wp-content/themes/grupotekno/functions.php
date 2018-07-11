<?php
add_theme_support('post-thumbnails');
show_admin_bar(false);
add_theme_support('menus');

//SCRIPTS E STYLES
if (!is_admin()) {
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/dist/css/styles.min.css', [], false, 'screen');
    wp_enqueue_script('js', get_template_directory_uri() . '/assets/dist/js/scripts.min.js', [], true, true);
}

function gt_get_logo($fileName, $alt = null)
{
    $logoPath = get_template_directory_uri() . '/assets/dist/img/' . $fileName;
    return '<img src="' . $logoPath . '" alt="' . $alt . '" />';
}

function gt_get_left_menu()
{
    return wp_nav_menu([
        'menu' => 'LEFT SITE MENU'
    ]);
}

function gt_get_right_menu()
{
    wp_nav_menu([
        'menu' => 'RIGHT SITE NAV'
    ]);
}

function gt_get_image($file_name)
{
    return '<img src="' . get_template_directory_uri() . '/assets/dist/img/' . $file_name . '" alt="" />';
}

function gt_get_page_content($page_title)
{
    $page = get_page_by_title($page_title);
    $id = $page->ID;
    $page_object = get_page($id);
    return wpautop($page_object->post_content);
}

function gt_get_custom_post_type($post_type)
{
    $posts = new WP_Query(array('post_type' => $post_type));
    while ($posts->have_posts()) : $posts->the_post(); ?>
        <div class="slide">
                <?= the_post_thumbnail() ?>
            <div class="info">
                <?= the_title() ?>
                <?= the_content() ?>
                <?= get_field('site') ?>
                <?= get_field('telefone') ?>
            </div>
        </div>
    <?php endwhile;
}
