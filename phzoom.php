<?php
/*
Plugin Name: phZoom Plugin for WordPress
Plugin URI: http://phoetry.me/archives/phzoom.html
Description: phZoom is a kind of plugin board, based on jQuery to show photos lightbox effects. Although phZoom's volume is very small, it still can show special picture animations. It supports most browers as well, included IE+. If picture links were webs, it could not show this effect. phZoom是一个轻量级看图插件, 基于jQuery 1.4+. phZoom目前支持大多数主流浏览器, 包括IE家族. phZoom拥有苗条的身材(仅3kb+), 以及与众不同的图片动
Version: 1.2.92
Author: Phoetry
Author URI: http://phoetry.me/
*/
load_plugin_textdomain('phzoom', '/wp-content/plugins/phzoom/languages/');

add_action('admin_menu', 'phz_page');
function phz_page (){
	$option = get_option('phzoom_options');
	$options = array ('0','1','2','3','4','5','6','7','8','9','10','11','12','13');
	foreach ( $options as $opt ){
		$option[0] = $option[10] =1;
		if ( count($_POST) > 0 && isset($_POST['phz_settings']) ){
			update_option( 'phz_'.$opt, $_POST[$opt] );
		}else{
			add_option( 'phz_'.$opt, $option[$opt]);
		}
	}
	add_options_page(__("phZoom Options","phzoom"), __("phZoom Options","phzoom"), 8, basename(__FILE__), 'phz_settings');
}

function phz_settings() { ?>

<div class="wrap">
<h2><?php _e('phZoom Options', 'phzoom'); ?></h2>
<form method="post" action="">
	<fieldset>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><label for="0"><?php _e('Picture Link:', 'phzoom'); ?></label></th>
				<td>
					<input name="0" type="checkbox" id="0" value="1"<?php if(get_option('phz_0')) echo 'checked="checked"'; ?>/><?php _e('Picture Link', 'phzoom');?>
					<br /><?php _e('(Suggest check)Judged < img > link address for the picture', 'phzoom');?>
				</td>
				</td>
			</tr>
            
            <tr valign="top">
				<th scope="row"><label for="1"><?php _e('Plugin Range:', 'phzoom'); ?></label></th>
				<td>
					<input name="1" type="text" id="1" value="<?php if(get_option('phz_1')!=''){echo get_option('phz_1');}else{echo 'body';}?>" />
					<br /><?php _e('This ID or Class will determine the range of effect', 'phzoom'); ?>
				</td>
			</tr>
            <tr valign="top">
				<th scope="row"><label for="13"><?php _e('Selector Set:', 'phzoom'); ?></label></th>
				<td>
					<input name="13" type="text" id="13" value="<?php echo get_option('phz_13');?>" />
					<br /><?php _e('If you set this option, the setting of the Plugin Range effect will be replaced(The content you enter must be a complete selector)', 'phzoom'); ?>
				</td>
			</tr>
            
			<tr valign="top">
				<th scope="row"><label for="2"><?php _e('Lay Opacity:', 'phzoom');?></label></th>
				<td>
					<input name="2" type="text" id="2" value="<?php echo get_option('phz_2'); ?>" /> 
					<br /><?php _e('The default is 70%，means opaque 0.7', 'phzoom');?>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="3"><?php _e('Lay Fade Duration:', 'phzoom');?></label></th>
				<td>
					<input name="3" type="text" id="3" value="<?php echo get_option('phz_3'); ?>" />
					<br /><?php _e('Lay Fade Duration, in milliseconds, default value is 400', 'phzoom');?>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="4"><?php _e('Image Fade Duration:', 'phzoom');?></label></th>
				<td>
					<input name="4" type="text" id="4" value="<?php echo get_option('phz_4'); ?>" />
					<br /><?php _e('Images fly to the middle of the screen duration, in milliseconds, default value is 400', 'phzoom');?>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="5"><?php _e('Image Enlarge Duration:', 'phzoom');?></label></th>
				<td>
					<input name="5" type="text" id="5" value="<?php echo get_option('phz_5'); ?>" />
					<br /><?php _e('Image be magnified duration, in milliseconds, default value is 400', 'phzoom');?>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="6"><?php _e('Text Color 1:', 'phzoom');?></label></th>
				<td>
					<input name="6" type="text" id="6" value="<?php echo get_option('phz_6'); ?>" />
					<br /><?php _e('The next and prev the text color, default value is #cf0', 'phzoom');?>
				</td>
			</tr>
            <tr valign="top">
				<th scope="row"><label for="11"><?php _e('Prev Text:', 'phzoom');?></label></th>
				<td>
					<input name="11" type="text" id="11" value="<?php echo get_option('phz_11'); ?>" />
					<br /><?php _e('The prev text, default value is Prev', 'phzoom');?>
				</td>
			</tr>
            <tr valign="top">
				<th scope="row"><label for="12"><?php _e('Next Text:', 'phzoom');?></label></th>
				<td>
					<input name="12" type="text" id="12" value="<?php echo get_option('phz_12'); ?>" />
					<br /><?php _e('The next text, default value is Next', 'phzoom');?>
				</td>
			</tr>
            
            
			<tr valign="top">
				<th scope="row"><label for="7"><?php _e('Text Color 2:', 'phzoom');?></label></th>
				<td>
					<input name="7" type="text" id="7" value="<?php echo get_option('phz_7'); ?>" />
					<br /><?php _e('Image bottom of the title and the text, default value is #cf0', 'phzoom');?>
				</td>
			</tr>

            <tr valign="top">
				<th scope="row"><label for="8"><?php _e('Limit the width:', 'phzoom');?></label></th>
				<td>
					<input name="8" type="checkbox" id="8" value="1" <?php if (get_option('phz_8')!='') echo 'checked="checked"'; ?>/><?php _e('Limit Width', 'phzoom');?>
					<br /><?php _e('The default is false, if true, the large figure will not exceed the width of the window (still maintaining aspect ratio)', 'phzoom');?>
				</td>
			</tr>
            
            <tr valign="top">
				<th scope="row"><label for="10"><?php _e('Return Origin:', 'phzoom');?></label></th>
				<td>
					<input name="10" type="checkbox" id="10" value="1" <?php if (get_option('phz_10')) echo 'checked="checked"'; ?>/><?php _e('Return Origin', 'phzoom');?>
					<br /><?php _e('(Suggest check)The default is true, output origin parameter. if false, plugin will automatically output the img element', 'phzoom');?>
				</td>
			</tr>
            
			<tr valign="top">
				<th scope="row"><label for="9"><?php _e('Load the jQuery:', 'phzoom');?></label></th>
				<td>
					<input name="9" type="checkbox" id="9" value="1" <?php if (get_option('phz_9')!='') echo 'checked="checked"'; ?>/><?php _e('Google CDN', 'phzoom');?>
                    <br /><?php _e('If you have loaded the jquery, you do not check this option', 'phzoom');?>
				</td>
			</tr>
		</table>
	</fieldset>

	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="<?php _e('Save Changes','phzoom') ?>" />
		<input type="hidden" name="phz_settings" value="save" style="display:none;" />
	</p>

</form>

<h3><a href="http://phoetry.me/archives/phzoom.html"><?php _e('Go to Plugin URL get more support and help', 'phzoom');?></a></h3>

</div>
<?php
}
function phz_head(){echo '<link rel="stylesheet" href="'.WP_PLUGIN_URL.'/phzoom/phzoom.css" type="text/css" />';}
add_action('wp_head', 'phz_head');

function phz_footer(){
	if(get_option('phz_1')!=''){$phz_range= get_option('phz_1').' a';}else{$phz_range= 'body a';}
	if(get_option('phz_2')!=''){$phz_layop= 'layOpacity:'.get_option('phz_2').',';}
	if(get_option('phz_3')!=''){$phz_laydu= 'layDur:'.get_option('phz_3').',';}
	if(get_option('phz_4')!=''){$phz_anA= 'animDurA:'.get_option('phz_4').',';}
	if(get_option('phz_5')!=''){$phz_anB= 'animDurB:'.get_option('phz_5').',';}
	if(get_option('phz_6')!=''){$phz_navc= 'navColor:"'.get_option('phz_6').'",';}
	if(get_option('phz_7')!=''){$phz_capc= 'capColor:"'.get_option('phz_7').'",';}
	if(get_option('phz_11')!=''){$phz_prev= 'prevText:"'.get_option('phz_11').'",';}
	if(get_option('phz_12')!=''){$phz_next= 'nextText:"'.get_option('phz_12').'",';}
	if(get_option('phz_8')!=''){$phz_limw= 'limitWidth:true,';}
	if(get_option('phz_9')!=''){$phz_link= '<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>';}
	if(get_option('phz_10')!=''){$phz_reOr= 'returnOrigin:false';}
	$links= ''.$phz_link.'<script type="text/javascript" src="'.WP_PLUGIN_URL.'/phzoom/phzoom.js?ver=1.2.92"></script>';
	$phz_range = get_option('phz_13')!=''? get_option('phz_13') : $phz_range;
	if(get_option('phz_0')!=''){
		$links.= '<script type="text/javascript">jQuery(document).ready(function($) {$("'.$phz_range.'").filter(function(){return/\.(?:jpe?g|png|gif)/i.test(this.href)}).phzoom({'.$phz_layop.$phz_laydu.$phz_anA.$phz_anB.$phz_navc.$phz_capc.$phz_prev.$phz_next.$phz_limw.$phz_reOr.'});});</script>';
	}else{
		$links.= '<script type="text/javascript">jQuery(document).ready(function($) {$("'.$phz_range.'").phzoom({'.$phz_layop.$phz_laydu.$phz_anA.$phz_anB.$phz_navc.$phz_capc.$phz_prev.$phz_next.$phz_limw.$phz_reOr.'});});</script>';
	
	}
	echo $links;
}
add_action('wp_footer', 'phz_footer');
?>