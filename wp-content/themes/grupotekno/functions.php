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
        <div class="slide" data-pager="<?= the_title() ?>">
                <?= the_post_thumbnail() ?>
            <div class="info">
                <?= the_content() ?>
            </div>
        </div>
    <?php endwhile;
}

/**
 * 
 */
function _query_posts($post_type, $ID = null)
{
    $args = array(
        'post_type' => $post_type,
        'post_parent' => !is_null($ID) ? $ID : 0
    );

    return new WP_Query($args);
}
function _get_post_slug($ID)
{
    return get_post_field('post_name', $ID);
}

function _has_children($ID)
{
    $args = array(
        'post_partent' => $ID
    );
    $get_children_array = get_children($args, ARRAY_A);
    $rekeyed_array = array_values($get_children_array);
    return $rekeyed_array[0]['ID'];
}

function gt_get_investidores($ID = null)
{
    $posts = _query_posts('investidores');
    while ($posts->have_posts()) : $posts->the_post(); ?>
    <ul class='dropdown'>
        <li>
            <h3><?php the_title() ?></h3>
        </li>
        <?php _get_children_post(get_the_ID()) ?>
    </ul>
    <?php endwhile;
}

function _get_children_post($id)
{
    $hasChildren = _has_children($id);
    if ($hasChildren) {
        $posts = _query_posts('investidores', $id);
        if ($posts->have_posts()) {
            echo '<ul class="dropdown-menu">';
            while ($posts->have_posts()) : $posts->the_post(); ?>
            <li>
                <h3><a target="_blank" <?=get_field('pdf') ? 'href="'.get_field('pdf').'"' : ''?>><?php the_title() ?></a></h3>
            </li>
            <?php _get_children_post(get_the_ID()) ?>
            <?php endwhile;
            echo '</ul>';
        } else {

        }
    }
}

function gt_get_relacao_dropdown()
{
    wp_dropdown_pages();
}
