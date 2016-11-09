<?php 
/*
	Anti-code managment Page
	主要作用是显示Anti-code 后台管理页面
	Version 1.0 版本实现基本的可以查询功能，主要是可以看。
*/
	?>
	<h1>Anti Code Managerment</h1>
	<p><?php _e("This Page is for Anti code management") ?></p>
<?php 
global $wpdb;
define('MY_NEW_TABLE', $wpdb->prefix . 'anti_code');
$pagenum = isset( $_GET['pagenum'] ) ? absint( $_GET['pagenum'] ) : 1;
$limit = 5;
$offset = ( $pagenum - 1 ) * $limit;
$entries = $wpdb->get_results( "SELECT * FROM ".MY_NEW_TABLE." LIMIT $offset, $limit" );
 ?>
<div class="wrap">
<table class="widefat">
    <thead>
        <tr>
            <th scope="col" class="manage-column column-name" style="">Index</th>
            <th scope="col" class="manage-column column-name" style="">AntiCode</th>
             <th scope="col" class="manage-column column-name" style="">Checked Times</th>
             <th scope="col" class="manage-column column-name" style="">Available</th>
        </tr>
    </thead>
 
    <tfoot>
        <tr>
            <th scope="col" class="manage-column column-name" style="">Index</th>
            <th scope="col" class="manage-column column-name" style="">AntiCode</th>
             <th scope="col" class="manage-column column-name" style="">Checked Times</th>
             <th scope="col" class="manage-column column-name" style="">Available</th>

        </tr>
    </tfoot>
 
    <tbody>
        <?php if( $entries ) { ?>
 
            <?php
            $count = 1;
            $class = '';
            foreach( $entries as $entry ) {
                $class = ( $count % 2 == 0 ) ? ' class="alternate"' : '';
            ?>
 
            <tr<?php echo $class; ?>>
                <td><?php echo $entry->id; ?></td>
                <td><?php echo $entry->antiCode; ?></td>
                <td><?php echo $entry->times; ?></td>
                <td><?php echo $entry->available; ?></td>

            </tr>
 
            <?php
                $count++;
            }
            ?>
 
        <?php } else { ?>
        <tr>
            <td colspan="2">No posts yet</td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php 
 
$total = $wpdb->get_var( "SELECT COUNT(`id`) FROM ".MY_NEW_TABLE );
$num_of_pages = ceil( $total / $limit );
$page_links = paginate_links( array(
    'base' => add_query_arg( 'pagenum', '%#%' ),
    'format' => '',
    'prev_text' => __( '«', 'aag' ),
    'next_text' => __( '»', 'aag' ),
    'total' => $num_of_pages,
    'current' => $pagenum
) );
 
if ( $page_links ) { ?>
     <div class="tablenav"><div class="tablenav-pages" style="margin: 1em 0"><?php echo $page_links ?>  </div>
     </div>
<?php 
}
 ?>
 <h2 >Total --->
 <font color=red>
 <?php 
 	//统计总共有多少防码被查询过
	echo $wpdb->get_var( "SELECT COUNT(times) FROM ".MY_NEW_TABLE." WHERE times > 0" );  
  ?> 
  </font> <----
 anti code be checked.</h2>