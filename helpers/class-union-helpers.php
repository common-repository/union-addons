<?php
/**
 * Fired during plugin activation
 *
 * @link       https://archivescode.com
 * @since      1.0.4
 *
 * @package    Union_Addons
 * @subpackage Union_Addons/helpers
 */


class Union_Helpers{

    public function union_is_plugin_installed($plugin_path){

        require_once ABSPATH . 'wp-admin/includes/plugin.php';

        $plugins = get_plugins();
        
        return isset( $plugins[ $plugin_path ] );

    }

    public static function union_check_user_can( $action ) {
        return current_user_can( $action );
	}

    public function union_get_theme_installed(){
        
        $theme = wp_get_theme();

        if($theme->parent()){
            $theme_name = $theme->parent()->get('name');
        }else{
            $theme_name = $theme->get('name');
        }

        $theme_name = sanitize_key( $theme_name );

        return $theme_name;
    }
    
    public static function union_elementor_notice(){

        $elementor_path = sprintf( '%1$s/%1$s.php', 'elementor' );

        if(! defined('ELEMENTOR_VERSION')){

            if(! self::union_is_plugin_installed($elementor_path)){

                if(self::union_check_user_can( 'install_plugins' )){

                    $install_url = wp_nonce_url( self_admin_url( sprintf( 'update.php?action=install-plugin&plugin=%s', 'elementor' ) ), 'install-plugin_elementor' );

                    $message = sprintf( '<p>%s</p>', __('Union Addons for Elementor is not working because you need to Install Elementor plugin.', 'union-addons' ) );

                    $message .= sprintf( '<p><a href="%s" class="button-primary">%s</a></p>', $install_url, __( 'Install Elementor Now', 'union-addons' ) );

                }

            }else{

                if( self::union_check_user_can( 'activate_plugins' ) ) {

                    $activation_url = wp_nonce_url( 'plugins.php?action=activate&amp;plugin=' . $elementor_path . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $elementor_path );

                    $message = '<p>' . __( 'Union Addons for Elementor is not working because you need to activate Elementor plugin.', 'union-addons' ) . '</p>';

                    $message .= '<p>' . sprintf( '<a href="%s" class="button-primary">%s</a>', $activation_url, __( 'Activate Elementor Now', 'union-addons' ) ) . '</p>';

                }

            }

            self::union_render_notice($message);

        }        
    }
    
    public static function union_elementor_pro_notice(){
        
        $elementor_pro_path = sprintf( '%1$s/%1$s.php', 'elementor-pro' );
        
        if(! defined('ELEMENTOR_PRO_VERSION')){

            if(! self::union_is_plugin_installed($elementor_pro_path)){

                if(self::union_check_user_can( 'install_plugins' )){

                    $message = sprintf( '<p>%s</p>', __('Union Custom Skin for Elementor Pro is not working because you need to Install Elementor Pro plugin.', 'union-addons' ) );

                }

            }else{

                if( self::union_check_user_can( 'activate_plugins' ) ) {

                    $activation_url = wp_nonce_url( 'plugins.php?action=activate&amp;plugin=' . $elementor_pro_path . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $elementor_pro_path );

                    $message = '<p>' . __( 'Union Custom Skin for Elementor Pro is not working because you need to activate Elementor plugin.', 'union-addons' ) . '</p>';

                    $message .= '<p>' . sprintf( '<a href="%s" class="button-primary">%s</a>', $activation_url, __( 'Activate Elementor Pro Now', 'union-addons' ) ) . '</p>';

                }

            }

            self::union_render_notice($message);

        }   
        
    }
    
    private function union_render_notice( $message, $class = '', $handle = '' ){
        ?>
            <div class="error pa-new-feature-notice <?php echo $class; ?>" data-notice="<?php echo $handle; ?>">
                <?php echo $message; ?>
            </div>
        <?php
    }

}