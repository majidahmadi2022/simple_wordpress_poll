<?php
/*
Plugin Name: YaldaPoll
Plugin URI: https://majidahmadi.ir
Description: Client Poll For Yalda
Author: Majid Ahmadi
Author URI: https://majidahmadi.ir
Text Domain: yaldapoll
Domain Path: /languages/
Version: 1.0
*/

define ("YPOLL_PATH" ,  plugin_dir_path( __FILE__ )) ;
define ("YPOLL_URL" , plugin_dir_url(__FILE__) ) ;

/**
 * inital plugin
 */

function yaldapoll_plugin_init() {
	load_plugin_textdomain( 'yaldapoll', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'yaldapoll_plugin_init' );

require_once YPOLL_PATH . "/includes/install.php" ;
require_once YPOLL_PATH . "/includes/unistall.php" ;
require_once YPOLL_PATH . "/includes/yldapoll_admin.php" ;
require_once YPOLL_PATH . "/includes/pollform.php" ;

register_activation_hook( __FILE__, 'yaldaPoll_install_functions' );
function yaldaPoll_install_functions()
{
	new yaldaPoll\installer() ;
}

//unistall
register_deactivation_hook( __FILE__, 'yaldaPoll_unistall_functions' );
function yaldaPoll_unistall_functions()
{
	new yaldaPoll\unistaller() ;
}

add_action('admin_menu', 'addMenu');


function addMenu()
{
	add_menu_page(__("Poll List" , "yaldapoll") , __("Poll List" , "yaldapoll") , 'manage_options' , 'yaldapoll'
	, yaldapoll_admin , '' , 15);
	add_submenu_page(null,__("Poll Detail" , "yaldapoll") , __("Poll Detail" , "yaldapoll") , 'manage_options' , 'poll_view_detail'
		, yaldapoll_detail , '' , 15);
}

/**
 * add short code to translate to poll form
 * @since 1.0.0
 * @created Majid Ahmadi
 *
 */
function yaldapollform( $atts, $content = null)	{
	poll_form() ;
}
add_shortcode('yaldapoll', 'yaldapollform');

function javascript_variables(){ ?>
	<script type="text/javascript">
        var ajax_url = '<?php echo admin_url( "admin-ajax.php" ); ?>';
        var ajax_nonce = '<?php echo wp_create_nonce( "secure_nonce_name" ); ?>';
	</script><?php
}
add_action ( 'wp_head', 'javascript_variables' );

add_action('wp_ajax_send_form', 'send_form'); // This is for authenticated users
add_action('wp_ajax_nopriv_send_form', 'send_form'); // This is for unauthenticated users.

/**
 * In this function we will handle the form inputs and send our email.
 *
 * @return void
 */
function yaldaadmincss()
{
	?>
	<style>
        .wp-list-table th
        {
            background:#aaa !important;
	        color:#fff;
	        text-align: center;
        }
        .wp-list-table td
        {
            background:#fff !important;
            text-align: center;
        }
	</style>
	<?php
}
add_action('admin_head', 'yaldaadmincss');
function send_form() {

	// This is a secure process to validate if this request comes from a valid source.
	//check_ajax_referer( 'secure-nonce-name', 'security' );
	$data                 = array();
	$data['moshtari']     = $_POST["moshtari"];
	$data['phonenumber']  = $_POST["phonenumber"];
	$data['email']        = $_POST['email'];
	$data['nemayande_moshtari']        = $_POST['agent'];
	$data['companyname']  = $_POST['companyname'];
	$data['product_type'] = $_POST['product_type'];
	$data['sorat']        = $_POST['sorat'];
	$data['barkhord']     = $_POST['barkhord'];
	$data['motabeghat']   = $_POST['motabeghat'];
	$data['motabeghat_graphic'] = $_POST['motabeghatgr'];
	$data['karaei']       = $_POST['karaei'];
	$data['poshtibani']   = $_POST['poshtibani'];
	$data['zamanbandi']   = $_POST['zamanbandi'];
	$data['amoozesh']     = $_POST['amozesh'];
	$data['ux']           = $_POST['ux'];
	$data['ertebatat']      = $_POST['ertebatat'];
	$data['description']  = $_POST['description'];
	$format               = array();
	for ( $i = 0; $i <= 16; $i++ ) {
		$format[] = "%s";
	}
	global $wpdb;
	$tablename = $wpdb->prefix . "yldp_polls";
	//$msg = "Test";
	try {
		$wpdb->insert( $tablename, $data, $format );
		$msg = "اطلاعات شما با موفقیت ثبت شد." ;
	}catch(Exception $e )
	{
		$msg = "ثبت اطلاعات با خطا مواجه گشت.";
	}

	echo $msg ;



	wp_die();
}

?>