<?php
/*
Template Name: AnitCode
*/
?>

<?php
/*处理表单错误信息，获取防伪校验码*/


if(isset($_POST['submitted'])) {
    if(trim($_POST['AntiNum']) === '') {
        $nameError = 'Please enter your 16 digits Anti Code.';
        $hasError = true;
    } else {
        $pAntiCode = trim($_POST['AntiNum']);

    }
	/*在防伪校验码数据表中查询所查询的anti code*/
	
	if(!isset($hasError))
	{
		global $wpdb;  //查询数据库
		define('MY_NEW_TABLE', $wpdb->prefix . 'anti_code');  // 防伪校验码表名
		$searchSql = "SELECT * FROM ".MY_NEW_TABLE." WHERE `antiCode`= " .$pAntiCode ;
		$entries = $wpdb->get_results( $searchSql );
		$CheckedAnti = true;
	}
} 
?>

<?php get_header(); ?>
<h1><?php the_title(); ?></h1>
<form action="<?php the_permalink(); ?>" id="AntiCode" method="post">
            <label for="DigitAntiNum"><?php _e("Anti Code") ?>:</label>
            <input type="text" name="AntiNum" id="DigitAntiNum" value="" />
    <button type="submit">Verfiy</button>
	<?php if(isset($CheckedAnti) && $CheckedAnti == true) { ?>
		<?php 
     	if($entries)
     	{ ?>
     		<h1><font color=red> You get the origin Hygetropin.tw !!!! </font></h1>
     	<?php 
     	}else
     	{ //没有找到代码 ?>
     		
     		<h1><font color=red> You get the fake Hygetropin.tw !!!! </font></h1>
    <?php }
     }?>
     <input type="hidden" name="submitted" id="submitted" value="true" />
<?php 
get_footer();
?>

