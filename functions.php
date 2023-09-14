<?php

remove_action('wp_head', 'wp_generator');

add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'navigation' => 'ナビゲーションメニュー',
    )
);
// ウィジェット
register_sidebar();

//冒頭抜粋文の文字数変更
function custom_excerpt_length($length)
{
    return 40;        //表示したい文字数
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; //任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

//ビジュアルエディターのフォントサイズ変更機能の文字サイズ指定
add_filter('tiny_mce_before_init', function ($settings) {
    //フォントサイズの指定
    $settings['fontsize_formats'] =
        '10px 12px 14px 16px 18px 20px 24px 28px 32px 36px 42px 48px';
    //$settings['fontsize_formats'] = '0.8em 1.6em 2em 3em';
    //$settings['fontsize_formats'] = '80% 160% 200% 300%';
    return $settings;
});

//Wordpressビジュアルエディターに文字サイズの変更機能を追加
add_filter('mce_buttons', function ($buttons) {
    //フォントサイズ変更機能を追加
    array_push($buttons, 'fontsizeselect');
    return $buttons;
});

// カスタム投稿タイプ　[○○○○○○○○]
add_action('init', 'add_item_post_type');
function add_item_post_type()
{
    $params = array(
        'labels' => array(
            'title' => 'カテゴリー',
            'name' => 'カテゴリー',
            'singular_name' => 'カテゴリー',
            'add_new' => 'カテゴリー新規追加',
            'add_new_item' => 'カテゴリー追加',
            'edit_item' => 'カテゴリーを編集する',
            'new_item' => 'カテゴリーを追加',
            'all_items' => 'カテゴリーの一覧',
            'view_item' => 'プレビュー',
            'search_items' => '検索する',
            'not_found' => '記事が見つかりませんでした。',
            'not_found_in_trash' => 'ゴミ箱内に記事が見つかりませんでした。'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title',
            'custom-fields',
            'thumbnail',
        ),
        'taxonomies' => array('item_category', 'item_tag')
    );
    register_post_type('item', $params);

    register_taxonomy(
        'item-cat',
        'item',
        array(
            'hierarchical' => true,
            'update_count_callback' => '_update_post_term_count',
            'label' => 'アイテムカテゴリー',
            'singular_label' => 'アイテムカテゴリー',
            'public' => true,
            'show_ui' => true
        )
    );
}
