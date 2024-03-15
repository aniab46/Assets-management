<?php 

/*
 * Plugin Name:       Assets Academy
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       With the plugin can enhance your post engagement and user can reach your more posts ..
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Muhammad Aniab
 * Author URI:        http://muhammadaniab.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-assignment-plugin
 * Domain Path:       /languages
 */

 class aa_asset_academy{
	public function __construct(){
		add_action("init", array($this,"init"));
	}

	public function init(  ) {
		add_action("wp_enqueue_scripts", array($this,"connect_script_file"));
		add_action("admin_enqueue_scripts", array($this,"connect_script_admin"));
	}


	public function connect_script_admin($hook){
		$admin_url = plugin_dir_url(__FILE__);

		if($hook=='plugins.php'){
			wp_enqueue_script("admin_handle", $admin_url."js/admin_script.js",[],'1.0') ;
		}
		
	}
	public function connect_script_file(){


		// wp_deregister kre ager js version ana jay

		$script_uri= plugin_dir_url(__FILE__) ."js/main.js";
		$script_js_uri= plugin_dir_url(__FILE__) ."js/second.js";
		$style_uri= plugin_dir_url(__FILE__) ."css/style.css";
		$script_comic_js= plugin_dir_url(__FILE__) ."js/comic.js";

		//wp_enqueue_script("Handle_name", $script_uri,[], '1.0',true ) ;
		//wp_enqueue_script("Handle_name_js", $script_js_uri,[], '1.0',true ) ;
		//wp_enqueue_style('Handle_style', $style_uri, array(),'1.0' ) ;
		wp_enqueue_script('comic', $script_comic_js, array('jquery'),'1.0',true);



		$data=[
			'Name'=> 'Muhammad Aniab',
			'ID'=> '18EEE160',
		];
		//wp_localize_script
		wp_localize_script('Handle_name','Data_name',$data);
	}

		//xkcd plugin
		// version
	
	


	
 }

 new aa_asset_academy();