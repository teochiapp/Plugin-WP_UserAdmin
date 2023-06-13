<?php

/**
 * La funcionalidad específica de administración del plugin.
 *
 * @link       http://misitioweb.com
 * @since      1.0.0
 *
 * @package    newtheme-blank
 * @subpackage newtheme-blank/admin
 */

/**
 * Define el nombre del plugin, la versión y dos métodos para
 * Encolar la hoja de estilos específica de administración y JavaScript.
 * 
 * @since      1.0.0
 * @package    newtheme-blank
 * @subpackage newtheme-blank/admin
 * @author     Jhon J.R <email@example.com>
 * 
 * @property string $plugin_name
 * @property string $version
 */
class NEW_Admin {
    
    /**
	 * El identificador único de éste plugin
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name  El nombre o identificador único de éste plugin
	 */
    private $plugin_name;
    
    /**
	 * Versión actual del plugin
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version  La versión actual del plugin
	 */
    private $version;
    
    /**
     * @param string $plugin_name nombre o identificador único de éste plugin.
     * @param string $version La versión actual del plugin.
     */
    public function __construct( $plugin_name, $version ) {
        
        $this->plugin_name = $plugin_name;
        $this->version = $version;     
        
    }
    
    /**
	 * Registra los archivos de hojas de estilos del área de administración
	 *
	 * @since    1.0.0
     * @access   public
	 */
    public function enqueue_styles() {
        
        /**
         * Una instancia de esta clase debe pasar a la función run()
         * definido en NEW_Cargador como todos los ganchos se definen
         * en esa clase particular.
         *
         * El NEW_Cargador creará la relación
         * entre los ganchos definidos y las funciones definidas en este
         * clase.
		 */
		wp_enqueue_style( $this->plugin_name, NEW_PLUGIN_DIR_URL . 'admin/css/new-admin.css', array(), $this->version, 'all' );
        
    }
    
    /**
	 * Registra los archivos Javascript del área de administración
	 *
	 * @since    1.0.0
     * @access   public
	 */
    public function enqueue_scripts() {
        
        /**
         * Una instancia de esta clase debe pasar a la función run()
         * definido en NEW_Cargador como todos los ganchos se definen
         * en esa clase particular.
         *
         * El NEW_Cargador creará la relación
         * entre los ganchos definidos y las funciones definidas en este
         * clase.
		 */
        wp_enqueue_script( $this->plugin_name, NEW_PLUGIN_DIR_URL . 'admin/js/new-admin.js', ['jquery'], $this->version, true );
        
        /**
        * Librería sweetalert2
        * https://sweetalert.js.org/guides/
        */
        wp_enqueue_script( "new_sweetalert", NEW_PLUGIN_DIR_URL . 'helpers/sweetalert2/sweetalert.min.js', ['jquery'], $this->version, true );

        /**
        * Framework materialize
        * https://materializecss.com/
        */
        wp_enqueue_style( 'new_materialize_css', NEW_PLUGIN_DIR_URL . 'helpers/materialize/css/materialize.min.css', array(), '1.0.0', 'all' );

        /**
        * Framework materialize icons
        * https://materializecss.com/icons.html
        */
        wp_enqueue_style( 'new_materialize_icons', 'https://fonts.googleapis.com/
        icon?family=Material+Icons', array(), '1.0.0', 'all' );

        /**
        * Framework materialize
        * https://materializecss.com/
        */
        wp_enqueue_script( 'new_materialize_js', NEW_PLUGIN_DIR_URL . 'helpers/ma
        terialize/js/materialize.min.js', ['jquery'], '1.0.0', true );
    }
    
}







