<?php
/**
 * Created by PhpStorm.
 * User: MinhMan.Tran
 * Date: 8/13/2016
 * Time: 9:03 AM
 */

function my_settings_enqueue($hook) {
    if ( 'toplevel_page_dickinsons-settings' != $hook ) {
        return;
    }

    wp_enqueue_style( 'my_settings_admin_codemirror_css', get_template_directory_uri() . '/css/codemirror.css', false, VERSION );
    wp_enqueue_style( 'my_settings_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, VERSION );

    wp_enqueue_script( 'my_settings_admin_codemirror_js', get_template_directory_uri() . '/js/codemirror.js', array(), VERSION, true );
    wp_enqueue_script( 'my_settings_admin_xml_js', get_template_directory_uri() . '/js/xml.js', array(), VERSION, true );
    wp_enqueue_script( 'my_settings_admin_js', get_template_directory_uri() . '/js/codestyle.js', array('my_settings_admin_codemirror_js', 'my_settings_admin_xml_js'), VERSION, true );

}
add_action( 'admin_enqueue_scripts', 'my_settings_enqueue' );

//================================================================================================

// create custom plugin settings menu
add_action('admin_menu', 'footer_create_menu');

function footer_create_menu() {

    //create new top-level menu
    add_menu_page('Options', 'Options', 'administrator', 'dickinsons-settings', 'dickinsons_settings_page' );

    //call register settings function
    add_action( 'admin_init', 'register_dickinsons_settings' );
}


function register_dickinsons_settings() {
    //register our settings
    register_setting( 'dickinsons-settings-header', 'slogan_en' );
    register_setting( 'dickinsons-settings-header', 'slogan_vi' );

    register_setting( 'dickinsons-settings-footer', 'contact_en' );
    register_setting( 'dickinsons-settings-footer', 'contact_vi' );

    register_setting( 'dickinsons-settings-footer', 'copyright_en' );
    register_setting( 'dickinsons-settings-footer', 'copyright_vi' );

    register_setting( 'dickinsons-settings-footer', 'our_blog_en' );
    register_setting( 'dickinsons-settings-footer', 'our_blog_vi' );

    register_setting( 'dickinsons-settings-footer', 'all_articles_en' );
    register_setting( 'dickinsons-settings-footer', 'all_articles_vi' );

    register_setting( 'dickinsons-settings-footer', 'all_articles_link_en' );
    register_setting( 'dickinsons-settings-footer', 'all_articles_link_vi' );
}

function dickinsons_settings_page() {
    ?>
    <div class="wrap">
        <h1>Options</h1>
        <h2>Header Settings</h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'dickinsons-settings-header' ); ?>
            <?php do_settings_sections( 'dickinsons-settings-header' ); ?>
            <table class="form-table my-settings">
                <colgroup>
                    <col width="16%"/>
                    <col width="42%"/>
                    <col width="42%"/>
                </colgroup>
                <thead>
                    <tr>
                        <th></th>
                        <th>English</th>
                        <th>Vietnamese</th>
                    </tr>
                </thead>
                <tbody>
                    <tr valign="top" class="slogan">
                        <th scope="row">Slogan</th>
                        <td>
                            <textarea id="slogan_en" name="slogan_en"><?php echo trim( get_option('slogan_en') ); ?></textarea>
                        </td>
                        <td>
                            <textarea id="slogan_vi" name="slogan_vi"><?php echo trim( get_option('slogan_vi') ); ?></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>

            <?php submit_button(); ?>

        </form>

        <h2>Footer Settings</h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'dickinsons-settings-footer' ); ?>
            <?php do_settings_sections( 'dickinsons-settings-footer' ); ?>
            <table class="form-table my-settings">
                <colgroup>
                    <col width="16%"/>
                    <col width="42%"/>
                    <col width="42%"/>
                </colgroup>
                <thead>
                <tr>
                    <th></th>
                    <th>English</th>
                    <th>Vietnamese</th>
                </tr>
                </thead>
                <tbody>
                <tr valign="top" class="contacts">
                    <th scope="row">Contact</th>
                    <td>
                        <textarea id="contact_en" name="contact_en"><?php echo trim( get_option('contact_en') ); ?></textarea>
                    </td>
                    <td>
                        <textarea id="contact_vi" name="contact_vi"><?php echo trim( get_option('contact_vi') ); ?></textarea>
                    </td>
                </tr>
                <tr valign="top" class="copyright">
                    <th scope="row">Copyright</th>
                    <td>
                        <textarea id="copyright_en" name="copyright_en"><?php echo trim( get_option('copyright_en') ); ?></textarea>
                    </td>
                    <td>
                        <textarea id="copyright_vi" name="copyright_vi"><?php echo trim( get_option('copyright_vi') ); ?></textarea>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Our Blog</th>
                    <td>
                        <input type="text" name="our_blog_en" value="<?php echo trim( get_option('our_blog_en') ); ?>" />
                    </td>
                    <td>
                        <input type="text" name="our_blog_vi" value="<?php echo trim( get_option('our_blog_vi') ); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">All articles</th>
                    <td>
                        <input type="text" name="all_articles_en" value="<?php echo trim( get_option('all_articles_en') ); ?>" />
                    </td>
                    <td>
                        <input type="text" name="all_articles_vi" value="<?php echo trim( get_option('all_articles_vi') ); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">All articles link</th>
                    <td>
                        <input type="text" name="all_articles_link_en" value="<?php echo trim( get_option('all_articles_link_en') ); ?>" />
                    </td>
                    <td>
                        <input type="text" name="all_articles_link_vi" value="<?php echo trim( get_option('all_articles_link_vi') ); ?>" />
                    </td>
                </tr>
                </tbody>
            </table>

            <?php submit_button(); ?>

        </form>
    </div>
<?php } ?>