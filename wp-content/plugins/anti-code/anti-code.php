<?php
/*
Plugin Name: Anti-code
Plugin URI: www.hygetropin.tw
Description: Anti-code check and managerment
Version: 1.0
Author: Lj
Author URI: www.hygetropin.tw
*/
// 1. 注册激活插件的时候生产数据库表 anti_code 
/*
	anti_code 表结构：
	ID  表示index号
	antiCode 16 digit number   16位的查询数字
	times   被查看的次数
	available      是否有效
	ex    扩展字段
*/
define('MY_PLUGIN_VERSION_NUM', '1.0');
define('MY_PLUGIN_MINIMUM_WP_VERSION', '1.0');

global $wpdb;
define('MY_NEW_TABLE', $wpdb->prefix . 'anti_code');
// 插件激活时，运行回调方法创建数据表, 在WP原有的options表中插入插件版本号
register_activation_hook(__FILE__, 'plugin_activation_cretable');
function plugin_activation_cretable()
{
	 global $wpdb;
    /*
     * We'll set the default character set and collation for this table.
     * If we don't do this, some characters could end up being converted 
     * to just ?'s when saved in our table.
     */
    $charset_collate = '';

    if (!empty($wpdb->charset)) {
      $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset}";
    }

    if (!empty( $wpdb->collate)) {
      $charset_collate .= " COLLATE {$wpdb->collate}";
    }

    $sql = "CREATE TABLE " . MY_NEW_TABLE . " (
	    `id` int(11) NOT NULL auto_increment,
		`antiCode` varchar(17) default ' ' not NULL,
		`times` int default 0,
		`available` int default 1,
		`ex` varchar(10) default NULL,
		UNIQUE KEY `id` (`id`)
    ) $charset_collate;";

     $wpdb->query( $sql ); //执行sql语句
  
}
// 2. 后台管理页面生成
/**
 * Register a Anti-code menu page.
 */
function register_anti_code_menu_page() {
    add_menu_page(
        __( 'Custom Menu Title', 'textdomain' ),
        'Anti code',
        'manage_options',
        'anti-code/admin_anti_code.php', //关联插件目录下的显示页面
        '',
        NULL,  //plugins_url( 'anti-code/images/icon.png' ),
        5
    );
}
add_action( 'admin_menu', 'register_anti_code_menu_page' );

// 3. anti-code 检查模板生成
// 

/*
// 卸载plugin时删除数据库表，暂时不做任何动作
// 后续需要在卸载驱动的时候需要将数据库表导出保存
register_deactivation_hook(__FILE__, 'plugin_deactivation_deltable');
function plugin_deactivation_deltable() {
    global $wpdb;

    $wpdb->query("DROP TABLE IF EXISTS " . MY_NEW_TABLE);
    delete_option('my_plugin_version_num');
}
?>
*/


