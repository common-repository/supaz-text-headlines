<!-- Backend Mega Heading Settings -->
<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>
<div class="mh-settings-header">
	<div class="mh-settings-header-item">
		<img src="<?php esc_attr_e(MH_IMG_DIR.'/mh_header_image.jpg');?>" alt="Supaz Text Headlines">
	</div>
	<div class="mh-settings-header-item">
		<h3 class="plugin-title"><?php _e( 'Supaz Text Headlines', 'supaz-text-headlines' ); ?></h3>	
		<span class="plugin-tagline">A simple text headlines plugin </span>
	</div>
	<div class="mh-settings-header-item mh-social-follow">
		<p class="mh-follow-us">Follow us for new updates</p>
		<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fsupazthemes&amp;layout=button&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:px; height:20px;" allowTransparency="true"></iframe>
		<p class="mh-follow-us">
			<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" style="position: static; visibility: visible; width:px; height: 20px;" title="Twitter Follow Button" src="http://platform.twitter.com/widgets/follow_button.c4fd2bd4aa9a68a5c8431a3d60ef56ae.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=supazthemes&amp;show_count=false&amp;show_screen_name=true&amp;size=m&amp;time=1484717853708" data-screen-name="supazthemes"></iframe>
		</p>
	</div>
</div>


<!-- Save settings and Restore Success Message -->
<?php 
if ( isset( $_GET['message'] ) ) {
	?>
	<div class="notice notice-success is-dismissible"><p><?php echo __( 'Settings saved successfully', 'supaz-text-headlines' ); ?></p></div>
	<?php 
}
if ( isset( $_GET['restore-message'] ) ) {
	?>
	<div class="notice notice-success is-dismissible"><p><?php echo __( 'Settings restored to default successfully', 'supaz-text-headlines' ); ?></p></div>
	<?php 
}

$mh_settings = get_option( 'mh_settings' );
$mh_source = get_option( 'mh_source' );
$mh_source = isset($mh_source)?sanitize_text_field($mh_source): 'mh-posts';

$mh_post_source = get_option('mh_post_source');
$mh_post_source = isset($mh_post_source)?sanitize_text_field($mh_post_source): 'mh-latest-post';

$mh_category = get_option( 'mh_category' );
$mh_category = isset($mh_category)?sanitize_text_field($mh_category): '';

// $this->print_array($mh_category);

$mh_settings = empty( $mh_settings ) ? array() : $mh_settings;

$mh_custom_settings = get_option( 'mh_custom_settings' );
$mh_custom_settings = empty( $mh_custom_settings ) ? array() : $mh_custom_settings;

$mh_layout = isset($mh_custom_settings['mh_layout'])?$mh_custom_settings['mh_layout']:'mh-layout-1';
$mh_font_family = isset($mh_custom_settings['mh_font_family'])?$mh_custom_settings['mh_font_family']:'Lato';

$mh_left_border_style = isset($mh_custom_settings['mh_left_border_style'])?$mh_custom_settings['mh_left_border_style']:'solid';
$mh_left_border_width = isset($mh_custom_settings['mh_left_border_width'])?$mh_custom_settings['mh_left_border_width']:'10';
$mh_left_border_color = isset($mh_custom_settings['mh_left_border_color'])?$mh_custom_settings['mh_left_border_color']:'#007acc';

$mh_right_border_style = isset($mh_custom_settings['mh_right_border_style'])?$mh_custom_settings['mh_right_border_style']:'none';
$mh_right_border_width = isset($mh_custom_settings['mh_right_border_width'])?$mh_custom_settings['mh_right_border_width']:'0';
$mh_right_border_color = isset($mh_custom_settings['mh_right_border_color'])?$mh_custom_settings['mh_right_border_color']:'transparent';

$mh_top_border_style = isset($mh_custom_settings['mh_top_border_style'])?$mh_custom_settings['mh_top_border_style']:'none';
$mh_top_border_width = isset($mh_custom_settings['mh_top_border_width'])?$mh_custom_settings['mh_top_border_width']:'0';
$mh_top_border_color = isset($mh_custom_settings['mh_top_border_color'])?$mh_custom_settings['mh_top_border_color']:'transparent';

$mh_bottom_border_style = isset($mh_custom_settings['mh_bottom_border_style'])?$mh_custom_settings['mh_bottom_border_style']:'none';
$mh_bottom_border_width = isset($mh_custom_settings['mh_bottom_border_width'])?$mh_custom_settings['mh_bottom_border_width']:'0';
$mh_bottom_border_color = isset($mh_custom_settings['mh_bottom_border_color'])?$mh_custom_settings['mh_bottom_border_color']:'transparent';

$mh_nav_left_border_style = isset($mh_custom_settings['mh_nav_left_border_style'])?$mh_custom_settings['mh_nav_left_border_style']:'solid';
$mh_nav_left_border_width = isset($mh_custom_settings['mh_nav_left_border_width'])?$mh_custom_settings['mh_nav_left_border_width']:'1';
$mh_nav_left_border_color = isset($mh_custom_settings['mh_nav_left_border_color'])?$mh_custom_settings['mh_nav_left_border_color']:'#eee';

$mh_nav_right_border_style = isset($mh_custom_settings['mh_nav_right_border_style'])?$mh_custom_settings['mh_nav_right_border_style']:'none';
$mh_nav_right_border_width = isset($mh_custom_settings['mh_nav_right_border_width'])?$mh_custom_settings['mh_nav_right_border_width']:'0';
$mh_nav_right_border_color = isset($mh_custom_settings['mh_nav_right_border_color'])?$mh_custom_settings['mh_nav_right_border_color']:'transparent';

$mh_nav_top_border_style = isset($mh_custom_settings['mh_nav_top_border_style'])?$mh_custom_settings['mh_nav_top_border_style']:'none';
$mh_nav_top_border_width = isset($mh_custom_settings['mh_nav_top_border_width'])?$mh_custom_settings['mh_nav_top_border_width']:'0';
$mh_nav_top_border_color = isset($mh_custom_settings['mh_nav_top_border_color'])?$mh_custom_settings['mh_nav_top_border_color']:'transparent';

$mh_nav_bottom_border_style = isset($mh_custom_settings['mh_nav_bottom_border_style'])?$mh_custom_settings['mh_nav_bottom_border_style']:'none';
$mh_nav_bottom_border_width = isset($mh_custom_settings['mh_nav_bottom_border_width'])?$mh_custom_settings['mh_nav_bottom_border_width']:'0';
$mh_nav_bottom_border_color = isset($mh_custom_settings['mh_nav_bottom_border_color'])?$mh_custom_settings['mh_bottom_border_color']:'transparent';

$mh_main_background_color = isset($mh_custom_settings['mh_main_background_color'])?$mh_custom_settings['mh_main_background_color']:'transparent';
$mh_main_font_color = isset($mh_custom_settings['mh_main_font_color'])?$mh_custom_settings['mh_main_font_color']:'#000000';

$mh_nav_background_color = isset($mh_custom_settings['mh_nav_background_color'])?$mh_custom_settings['mh_nav_background_color']:'transparent';
$mh_nav_font_color = isset($mh_custom_settings['mh_nav_font_color'])?$mh_custom_settings['mh_nav_font_color']:'#000000';

$mh_main_font_size = isset($mh_custom_settings['mh_main_font_size'])?$mh_custom_settings['mh_main_font_size']:'40';
$mh_nav_font_size = isset($mh_custom_settings['mh_nav_font_size'])?$mh_custom_settings['mh_nav_font_size']:'20';

?>

<form class="mh-setting-form" method="post" action="<?php echo admin_url( 'admin-post.php' ); ?>">
	<div class="mh-setting-form-tab-wrap">
		<ul class="mh-tabs">
			<li class="tab-link current" data-tab="mh-tab-1"><?php _e( 'Build Settings', 'supaz-text-headlines' ); ?></li>
			<li class="tab-link" data-tab="mh-tab-2"><?php _e( 'Frontend Settings', 'supaz-text-headlines' ); ?></li>
			<li class="tab-link" data-tab="mh-tab-3"><?php _e( 'How to use', 'supaz-text-headlines' ); ?></li>
			<li class="tab-link" data-tab="mh-tab-4"><?php _e( 'About us', 'supaz-text-headlines' ); ?></li>
		</ul>
		<div id="mh-tab-1" class="mh-tab-content current">
			<input type="hidden" name="action" value="mh_settings_save_action"/>
			<div class="mh-form-field-wrapper">
				<div class="mh-form-field-header">
					<h4><?php _e( 'Select source', 'supaz-text-headlines' );?></h4>
				</div>
				<div class="mh-form-field">
					<label for="mh-source"><?php _e('Source ', 'supaz-text-headlines');?></label>
					<select class="mh-source" name="mh_source">
						<option value="mh-posts" <?php if($mh_source == 'mh-posts') _e('selected="selected"');?>><?php _e('Posts', 'supaz-text-headlines');?></option>
						<option value="mh-custom" <?php if($mh_source == 'mh-custom') _e('selected="selected"');?>><?php _e('Custom', 'supaz-text-headlines');?></option>
					</select>
				</div>
				<div class="mh-source-content mh-post-field-wrapper" <?php if($mh_source != 'mh-posts') _e('style="display: none;"');?>>
					<div class="mh-form-field-wrapper">
						<div class="mh-form-field">
							<label for="mh-post-source"><?php _e('Post Source', 'supaz-text-headlines');?></label>
							<select name="mh_post_source" class="mh-post-source">
								<option value="mh-latest-post" <?php if($mh_post_source=='mh-latest-post') _e('selected'); ?>><?php _e('Latest Posts','supaz-text-headlines'); ?></option>
								<option value="mh-selected-category" <?php if($mh_post_source=='mh-selected-category') _e('selected'); ?>><?php _e('From Selected Category','supaz-text-headlines'); ?></option>
							</select>
						</div>
						<div class="mh-form-field mh-post-categories" <?php if($mh_post_source != 'mh-selected-category') _e('style="display: none;"');?>>
							<label><?php _e('Categories','supaz-text-headlines');?></label>
							<select name="mh_category">
								<?php
								$post_catgory_object = get_categories();
								foreach($post_catgory_object as $post_catgory_item){
									?>
									<option value="<?php _e($post_catgory_item->slug);?>" <?php if($mh_category==$post_catgory_item->slug) _e('selected'); ?>><?php _e($post_catgory_item->name);?></option>
									<?php
								}?>
							</select>
						</div>
					</div>
				</div>
				<div class="mh-source-content mh-custom-field-wrapper" <?php if($mh_source != 'mh-custom') _e('style="display: none;"');?>>
					<?php
					for($i = 1; $i < 5; $i++){	
						?>
						<div class="mh-form-field-wrapper">
							<div class="mh-form-field-header">
								<h4><?php _e( 'Mega Heading Block ', 'supaz-text-headlines' ); esc_attr_e($i);?></h4>
							</div>
							<div class="mh-form-field">
								<label for="mh-enable-<?php esc_attr_e($i);?>"><?php _e('Enable ', 'supaz-text-headlines'); esc_attr_e($i);?></label>
								<input type="checkbox" id="mh-enable-<?php esc_attr_e($i);?>" name="mh-enable-<?php esc_attr_e($i);?>" <?php if(isset( $mh_settings[$i]['mh-enable-'.$i] ) && $mh_settings[$i]['mh-enable-'.$i] =="1") _e('checked');?>>
							</div>
							<div class="mh-form-field">
								<label for="mh-title-<?php esc_attr_e($i);?>"><?php _e('Title ', 'supaz-text-headlines'); esc_attr_e($i);?></label>
								<input type="text" id="mh-title-<?php esc_attr_e($i);?>" name="mh-title-<?php esc_attr_e($i);?>" value="<?php echo (isset( $mh_settings[$i]['mh-title-'.$i] )) ? esc_attr( $mh_settings[$i]['mh-title-'.$i] ) : ''; ?>">
							</div>
							<div class="mh-form-field">
								<label for="mh-sub-title-<?php esc_attr_e($i);?>"><?php _e('Link URL ', 'supaz-text-headlines'); esc_attr_e($i);?></label>
								<input type="url" id="mh-sub-title-<?php esc_attr_e($i);?>" name="mh-sub-title-<?php esc_attr_e($i);?>" value="<?php echo (isset( $mh_settings[$i]['mh-sub-title-'.$i] )) ? esc_attr( $mh_settings[$i]['mh-sub-title-'.$i] ) : ''; ?>">
							</div>

						</div>
						<?php
					}?>
				</div>
			</div>
		</div>
		<div id="mh-tab-2" class="mh-tab-content">
			<div class="mh-form-field-wrapper">
				<div class="mh-form-field-header">
					<h4><?php _e( 'Layout Settings', 'supaz-text-headlines' ); ?></h4>
				</div>
				<div class="mh-form-field">
					<label for="mh-font-family"><?php _e('Layout Type', 'supaz-text-headlines');?></label>
					<select name="mh_layout">
						<option value="mh-layout-1" <?php if($mh_layout=='mh-layout-1') _e('selected'); ?>><?php _e('Horizontal','supaz-text-headlines'); ?></option>
						<option value="mh-layout-2" <?php if($mh_layout=='mh-layout-2') _e('selected'); ?>><?php _e('Vertical','supaz-text-headlines'); ?></option>
					</select>
				</div>
			</div>
			<?php
			$font_array = array(
				'Amatic SC','Arimo','Arvo','Cabin','Droid Serif','Fira Sans','Great Vibes','Italianno','Lato','Lora','Merriweather','Montserrat','Open Sans','PT Sans Narrow','PT Sans','Raleway','Roboto Condensed','Roboto Slab','Roboto','Signika','Varela Round'
			);
			?>
			<div class="mh-form-field-wrapper">
				<div class="mh-form-field-header">
					<h4><?php _e( 'Font Settings', 'supaz-text-headlines' ); ?></h4>
				</div>
				<div class="mh-form-field">
					<label for="mh-font-family"><?php _e('Font Family ', 'supaz-text-headlines');?></label>
					<select name="mh_font_family">

						<?php foreach($font_array as $font_name){?>
						<option value="<?php _e($font_name); ?>" <?php if($mh_font_family==$font_name) _e('selected'); ?>><?php _e($font_name); ?></option>
						<?php } ?>

					</select>
				</div>
			</div>

			<div class="mh-form-field-wrapper">
				<div class="mh-form-field-header">
					<h4><?php _e( 'Mega Heading Block 1 Settings', 'supaz-text-headlines' ); ?></h4>
				</div>
				<div class="mh-form-field">
					<label for="mh_main_background_color"><?php _e('Background color', 'supaz-text-headlines');?></label>
					<input type="text" name="mh_main_background_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_main_background_color);?>"/>
				</div>
				<div class="mh-form-field">
					<label for="mh_main_font_color"><?php _e('Font Color', 'supaz-text-headlines');?></label>
					<input type="text" name="mh_main_font_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_main_font_color);?>"/>
				</div>
				<div class="mh-form-field">
					<label for="mh_main_font_size"><?php _e('Font size', 'supaz-text-headlines');?></label>
					<input type="number" name="mh_main_font_size" value="<?php esc_attr_e($mh_main_font_size);?>"/>
				</div>
				<div class="mh-form-field-wrapper">
					<div class="mh-form-field-header">
						<h4><?php _e( 'Border Settings', 'supaz-text-headlines' ); ?></h4>
					</div>
					<div class="mh-form-field">
						<label for="mh-left-border-style"><?php _e('Left Border Style', 'supaz-text-headlines');?></label>
						<select name="mh_left_border_style">
							<option value="none" <?php if($mh_left_border_style=='none') _e('selected'); ?>><?php _e('None');?></option>
							<option value="solid" <?php if($mh_left_border_style=='solid') _e('selected'); ?>><?php _e('Solid');?></option>
							<option value="dashed" <?php if($mh_left_border_style=='dashed') _e('selected'); ?>><?php _e('Dashed');?></option>
							<option value="dotted" <?php if($mh_left_border_style=='dotted') _e('selected'); ?>><?php _e('Dotted');?></option>
						</select>
					</div>
					<div class="mh-form-field">
						<label for="mh_left_border_width"><?php _e('Left Border Width', 'supaz-text-headlines');?></label>
						<input type="number" name="mh_left_border_width" value="<?php esc_attr_e($mh_left_border_width);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_left_border_color"><?php _e('Left Border Color', 'supaz-text-headlines');?></label>
						<input type="text" name="mh_left_border_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_left_border_color);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_right_border_style"><?php _e('Right Border Style', 'supaz-text-headlines');?></label>
						<select name="mh_right_border_style">
							<option value="none" <?php if($mh_right_border_style=='none') _e('selected'); ?>><?php _e('None');?></option>
							<option value="solid" <?php if($mh_right_border_style=='solid') _e('selected'); ?>><?php _e('Solid');?></option>
							<option value="dashed" <?php if($mh_right_border_style=='dashed') _e('selected'); ?>><?php _e('Dashed');?></option>
							<option value="dotted" <?php if($mh_right_border_style=='dotted') _e('selected'); ?>><?php _e('Dotted');?></option>
						</select>
					</div>
					<div class="mh-form-field">
						<label for="mh_right_border_width"><?php _e('Right Border Width', 'supaz-text-headlines');?></label>
						<input type="number" name="mh_right_border_width" value="<?php esc_attr_e($mh_right_border_width);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_right_border_color"><?php _e('Right Border Color', 'supaz-text-headlines');?></label>
						<input type="text" name="mh_right_border_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_right_border_color);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_top_border_style"><?php _e('Top Border Style', 'supaz-text-headlines');?></label>
						<select name="mh_top_border_style">
							<option value="none" <?php if($mh_top_border_style=='none') _e('selected'); ?>><?php _e('None');?></option>
							<option value="solid" <?php if($mh_top_border_style=='solid') _e('selected'); ?>><?php _e('Solid');?></option>
							<option value="dashed" <?php if($mh_top_border_style=='dashed') _e('selected'); ?>><?php _e('Dashed');?></option>
							<option value="dotted" <?php if($mh_top_border_style=='dotted') _e('selected'); ?>><?php _e('Dotted');?></option>
						</select>
					</div>
					<div class="mh-form-field">
						<label for="mh_top_border_width"><?php _e('Top Border Width', 'supaz-text-headlines');?></label>
						<input type="number" name="mh_top_border_width" value="<?php esc_attr_e($mh_top_border_width);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_top_border_color"><?php _e('Top Border Color', 'supaz-text-headlines');?></label>
						<input type="text" name="mh_top_border_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_top_border_color);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_bottom_border_style"><?php _e('Bottom Border Style', 'supaz-text-headlines');?></label>
						<select name="mh_bottom_border_style">
							<option value="none" <?php if($mh_bottom_border_style=='none') _e('selected'); ?>><?php _e('None');?></option>
							<option value="solid" <?php if($mh_bottom_border_style=='solid') _e('selected'); ?>><?php _e('Solid');?></option>
							<option value="dashed" <?php if($mh_bottom_border_style=='dashed') _e('selected'); ?>><?php _e('Dashed');?></option>
							<option value="dotted" <?php if($mh_bottom_border_style=='dotted') _e('selected'); ?>><?php _e('Dotted');?></option>
						</select>
					</div>
					<div class="mh-form-field">
						<label for="mh_bottom_border_width"><?php _e('Bottom Border Width', 'supaz-text-headlines');?></label>
						<input type="number" name="mh_bottom_border_width" value="<?php esc_attr_e($mh_bottom_border_width);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_bottom_border_color"><?php _e('Bottom Border Color', 'supaz-text-headlines');?></label>
						<input type="text" name="mh_bottom_border_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_bottom_border_color);?>"/>
					</div>
				</div>
			</div>
			<div class="mh-form-field-wrapper">
				<div class="mh-form-field-header">
					<h4><?php _e( 'Mega Heading Block 2,3,4 Settings', 'supaz-text-headlines' ); ?></h4>
				</div>
				<div class="mh-form-field">
					<label for="mh_nav_background_color"><?php _e('Background color', 'supaz-text-headlines');?></label>
					<input type="text" name="mh_nav_background_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_nav_background_color);?>"/>
				</div>
				<div class="mh-form-field">
					<label for="mh_nav_font_color"><?php _e('Font Color', 'supaz-text-headlines');?></label>
					<input type="text" name="mh_nav_font_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_nav_font_color);?>"/>
				</div>
				<div class="mh-form-field">
					<label for="mh_nav_font_size"><?php _e('Font size', 'supaz-text-headlines');?></label>
					<input type="number" name="mh_nav_font_size" value="<?php esc_attr_e($mh_nav_font_size);?>"/>
				</div>
				<div class="mh-form-field-wrapper">
					<div class="mh-form-field-header">
						<h4><?php _e( 'Border Settings', 'supaz-text-headlines' ); ?></h4>
					</div>
					<div class="mh-form-field">
						<label for="mh-left-border-style"><?php _e('Left Border Style', 'supaz-text-headlines');?></label>
						<select name="mh_nav_left_border_style">
							<option value="none" <?php if($mh_nav_left_border_style=='none') _e('selected'); ?>><?php _e('None');?></option>
							<option value="solid" <?php if($mh_nav_left_border_style=='solid') _e('selected'); ?>><?php _e('Solid');?></option>
							<option value="dashed" <?php if($mh_nav_left_border_style=='dashed') _e('selected'); ?>><?php _e('Dashed');?></option>
							<option value="dotted" <?php if($mh_nav_left_border_style=='dotted') _e('selected'); ?>><?php _e('Dotted');?></option>
						</select>
					</div>
					<div class="mh-form-field">
						<label for="mh_nav_left_border_width"><?php _e('Left Border Width', 'supaz-text-headlines');?></label>
						<input type="number" name="mh_nav_left_border_width" value="<?php esc_attr_e($mh_nav_left_border_width);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_nav_left_border_color"><?php _e('Left Border Color', 'supaz-text-headlines');?></label>
						<input type="text" name="mh_nav_left_border_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_nav_left_border_color);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_nav_right_border_style"><?php _e('Right Border Style', 'supaz-text-headlines');?></label>
						<select name="mh_nav_right_border_style">
							<option value="none" <?php if($mh_nav_right_border_style=='none') _e('selected'); ?>><?php _e('None');?></option>
							<option value="solid" <?php if($mh_nav_right_border_style=='solid') _e('selected'); ?>><?php _e('Solid');?></option>
							<option value="dashed" <?php if($mh_nav_right_border_style=='dashed') _e('selected'); ?>><?php _e('Dashed');?></option>
							<option value="dotted" <?php if($mh_nav_right_border_style=='dotted') _e('selected'); ?>><?php _e('Dotted');?></option>
						</select>
					</div>
					<div class="mh-form-field">
						<label for="mh_nav_right_border_width"><?php _e('Right Border Width', 'supaz-text-headlines');?></label>
						<input type="number" name="mh_nav_right_border_width" value="<?php esc_attr_e($mh_nav_right_border_width);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_nav_right_border_color"><?php _e('Right Border Color', 'supaz-text-headlines');?></label>
						<input type="text" name="mh_nav_right_border_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_nav_right_border_color);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_nav_top_border_style"><?php _e('Top Border Style', 'supaz-text-headlines');?></label>
						<select name="mh_nav_top_border_style">
							<option value="none" <?php if($mh_nav_top_border_style=='none') _e('selected'); ?>><?php _e('None');?></option>
							<option value="solid" <?php if($mh_nav_top_border_style=='solid') _e('selected'); ?>><?php _e('Solid');?></option>
							<option value="dashed" <?php if($mh_nav_top_border_style=='dashed') _e('selected'); ?>><?php _e('Dashed');?></option>
							<option value="dotted" <?php if($mh_nav_top_border_style=='dotted') _e('selected'); ?>><?php _e('Dotted');?></option>
						</select>
					</div>
					<div class="mh-form-field">
						<label for="mh_nav_top_border_width"><?php _e('Top Border Width', 'supaz-text-headlines');?></label>
						<input type="number" name="mh_nav_top_border_width" value="<?php esc_attr_e($mh_nav_top_border_width);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_nav_top_border_color"><?php _e('Top Border Color', 'supaz-text-headlines');?></label>
						<input type="text" name="mh_nav_top_border_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_nav_top_border_color);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_nav_bottom_border_style"><?php _e('Bottom Border Style', 'supaz-text-headlines');?></label>
						<select name="mh_nav_bottom_border_style">
							<option value="none" <?php if($mh_nav_bottom_border_style=='none') _e('selected'); ?>><?php _e('None');?></option>
							<option value="solid" <?php if($mh_nav_bottom_border_style=='solid') _e('selected'); ?>><?php _e('Solid');?></option>
							<option value="dashed" <?php if($mh_nav_bottom_border_style=='dashed') _e('selected'); ?>><?php _e('Dashed');?></option>
							<option value="dotted" <?php if($mh_nav_bottom_border_style=='dotted') _e('selected'); ?>><?php _e('Dotted');?></option>
						</select>
					</div>
					<div class="mh-form-field">
						<label for="mh_nav_bottom_border_width"><?php _e('Bottom Border Width', 'supaz-text-headlines');?></label>
						<input type="number" name="mh_nav_bottom_border_width" value="<?php esc_attr_e($mh_nav_bottom_border_width);?>"/>
					</div>
					<div class="mh-form-field">
						<label for="mh_nav_bottom_border_color"><?php _e('Bottom Border Color', 'supaz-text-headlines');?></label>
						<input type="text" name="mh_nav_bottom_border_color" class="mh-color-picker" data-alpha="true" value="<?php esc_attr_e($mh_nav_bottom_border_color);?>"/>
					</div>
				</div>
			</div>
		</div>
		<div id="mh-tab-3" class="mh-tab-content">
			<div class="mh-form-field-wrapper mh-title">
				<h4><?php _e( 'How to use', 'supaz-text-headlines' );?></h4>
			</div>
			<div class="mh-content">
				<p><?php _e( 'Supaz Text Headlines - A simple text headlines plugin is a very simple, easy to use heading text plugin.', 'supaz-text-headlines');?><br/></p>
				<p><?php _e( ' To use the plugin, go to Build Settings to add your main heading and three sub-heading. Go to frontend settings to choose your layout, border and color settings and you are done!', 'supaz-text-headlines');?></p>
				<div class="mh-how-to-image">
					<img src="<?php esc_attr_e(MH_IMG_DIR.'/mh-demo.PNG');?>" alt="Supaz Text Headlines" />	
				</div>

				<p><?php _e(' Simply use the shortcode', 'supaz-text-headlines');?><span class="mh-copy-to-clipboard"><input readonly type="text" value="[supaz_text_headlines]"></span><?php _e('wherever convienient.  ', 'supaz-text-headlines');?></p>

			</div>
		</div>
		<div id="mh-tab-4" class="mh-tab-content">
			<div class="mh-form-field-wrapper mh-title">
				<h4><?php _e( 'Supazthemes', 'supaz-text-headlines' );?></h4>
			</div>
			<div class="mh-content">
				<p>Young energetic wordpress lovers. Working together to make the wordpress even better through the development of wordpress plugins, themes.</p>
			</div>
		</div>
	</div>
	<?php
	wp_nonce_field( 'mh_admin_option-update' ); 
	wp_nonce_field('mh_action_nonce', 'mh_nonce_field');
	$restore_nonce = wp_create_nonce('mh-restore-nonce');
	?>
	<div class="mh-field-wrap">
		<div class="mh-field mh-save">
			<input type="submit" class="button-primary" value="<?php esc_attr_e( 'Save Changes', 'supaz-text-headlines' ); ?>" name="mh_settings_save_button"/>
			<a href="<?php echo admin_url() . 'admin-post.php?action=mh_restore_settings&_wpnonce=' . $restore_nonce; ?>" onclick="return confirm('<?php _e('Are you sure you want to restore default settings?', 'supaz-text-headlines') ?>');"><input type="button" value="<?php _e('Restore Default Settings', 'supaz-text-headlines'); ?>" class="button-primary"/></a>
		</div>
	</div>
</form>