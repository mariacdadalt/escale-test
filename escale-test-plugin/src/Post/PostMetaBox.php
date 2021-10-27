<?php

namespace eScale\Test\Post;

class PostMetaBox
{
    public const text_var_name = 'escale-test-data';
    public const text_meta_name = '_escale_test_data';

    public static function register() {

        add_meta_box(
            'escale_test_box_id',
            'eScale Test Meta Box',
            'eScale\Test\Post\PostMetaBox::render',
            'post'
        );

    }

    public static function save_data( $post_id ) {

        $value = filter_input( INPUT_POST, self::text_var_name, FILTER_SANITIZE_STRING );
        update_post_meta( $post_id, self::text_meta_name, $value );

    }

    public static function render() {
        global $post;
        $value = get_post_meta( $post->ID, self::text_meta_name, true );
        ?>

        <input type="text" name="escale-test-data" value="<?php echo sanitize_text_field( $value ); ?>" />

    <?php }

}