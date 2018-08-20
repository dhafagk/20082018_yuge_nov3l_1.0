<?php

/* THIS CODE IS CODED BY SOMEONE, AND I JUST MODIFIED THIS A LITTLE BIT LOL */

define('WYSIWYG_META_BOX_ID', 'my-editor');
define('WYSIWYG_EDITOR_ID', 'myeditor'); //Important for CSS that this is different
define('WYSIWYG_META_KEY', 'extra-content');

/*===== MEMBUAT META BOX =====*/

add_action('add_meta_boxes', 'metabox_add_box');
function metabox_add_box() {
add_meta_box('table_of_content', __('Table of Content','textdomain'), 'dlbox_show_box', 'novel', 'normal', 'high' );
}

/*===== MENAMPILKAN META BOX =====*/

function dlbox_show_box(){
	global $post;
	$meta_box_id = WYSIWYG_META_BOX_ID;
    $editor_id = WYSIWYG_EDITOR_ID;

    //menggunakan nonce untuk verifikasi
    echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';

    //menambahkan css dan jquery seperti WYSISYG yang asli
        echo "
                <style type='text/css'>
                        #$meta_box_id #edButtonHTML, #$meta_box_id #edButtonPreview {background-color: #F1F1F1; border-color: #DFDFDF #DFDFDF #CCC; color: #999;}
                        #$editor_id{width:100%;}
                        #$meta_box_id #editorcontainer{background:#fff !important;}
                        #$meta_box_id #$editor_id_fullscreen{display:none;}
                </style>

                <script type='text/javascript'>
                        jQuery(function($){
                                $('#$meta_box_id #editor-toolbar > a').click(function(){
                                        $('#$meta_box_id #editor-toolbar > a').removeClass('active');
                                        $(this).addClass('active');
                                });

                                if($('#$meta_box_id #edButtonPreview').hasClass('active')){
                                        $('#$meta_box_id #ed_toolbar').hide();
                                }

                                $('#$meta_box_id #edButtonPreview').click(function(){
                                        $('#$meta_box_id #ed_toolbar').hide();
                                });

                                $('#$meta_box_id #edButtonHTML').click(function(){
                                        $('#$meta_box_id #ed_toolbar').show();
                                });

				//Tell the uploader to insert content into the correct WYSIWYG editor
				$('#media-buttons a').bind('click', function(){
					var customEditor = $(this).parents('#$meta_box_id');
					if(customEditor.length > 0){
						edCanvas = document.getElementById('$editor_id');
					}
					else{
						edCanvas = document.getElementById('content');
					}
				});
                        });
                </script>
        ";

        //membuat editor
        $content = get_post_meta($post->ID, WYSIWYG_META_KEY, true);
        the_editor($content, $editor_id);

        echo "<div style='clear:both; display:block;'></div>";

}

/* ===	SAVE METABOX === */
add_action('save_post', 'wysiwyg_save_meta');
function wysiwyg_save_meta($post_id){

        $editor_id = WYSIWYG_EDITOR_ID;
        $meta_key = WYSIWYG_META_KEY;

        if(isset($_REQUEST[$editor_id]))
                update_post_meta($_REQUEST['post_ID'], WYSIWYG_META_KEY, $_REQUEST[$editor_id]);

}

?>