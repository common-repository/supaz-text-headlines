<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
//$this->print_array($mh_settings);
/*$this->print_array($mh_custom_settings);*/
$mh_layout                  = isset( $mh_custom_settings['mh_layout'] ) ? sanitize_text_field( $mh_custom_settings['mh_layout'] ) : 'mh-layout-1';

$mh_source                  = get_option( 'mh_source' );
$mh_source                  = isset($mh_source)?sanitize_text_field($mh_source): 'mh-posts';

$mh_post_source             = get_option('mh_post_source');
$mh_post_source             = isset($mh_post_source)?sanitize_text_field($mh_post_source): 'mh-latest-post';

$mh_category                = get_option( 'mh_category' );
$mh_category                = isset($mh_category)?sanitize_text_field($mh_category): '';

$enable_1                   = isset( $mh_settings['1']['mh-enable-1'] ) ? sanitize_text_field( $mh_settings['1']['mh-enable-1'] ) : 0;
$heading_1                  = isset( $mh_settings['1']['mh-title-1'] ) ? sanitize_text_field( $mh_settings['1']['mh-title-1'] ) : '';
$link_URL_1                 = isset( $mh_settings['1']['mh-sub-title-1'] ) ? sanitize_text_field( $mh_settings['1']['mh-sub-title-1'] ) : '';
$read_more_1                = isset( $mh_settings['1']['mh-image-url-1'] ) ? sanitize_text_field( $mh_settings['1']['mh-image-url-1'] ) : '';

$enable_2                   = isset( $mh_settings['2']['mh-enable-2'] ) ? sanitize_text_field( $mh_settings['2']['mh-enable-2'] ) : 0;
$heading_2                  = isset( $mh_settings['2']['mh-title-2'] ) ? sanitize_text_field( $mh_settings['2']['mh-title-2'] ) : '';
$link_URL_2                 = isset( $mh_settings['2']['mh-sub-title-2'] ) ? sanitize_text_field( $mh_settings['2']['mh-sub-title-2'] ) : '';
$read_more_2                = isset( $mh_settings['2']['mh-image-url-2'] ) ? sanitize_text_field( $mh_settings['2']['mh-image-url-2'] ) : '';

$enable_3                   = isset( $mh_settings['3']['mh-enable-3'] ) ? sanitize_text_field( $mh_settings['3']['mh-enable-3'] ) : 0;
$heading_3                  = isset( $mh_settings['3']['mh-title-3'] ) ? sanitize_text_field( $mh_settings['3']['mh-title-3'] ) : '';
$link_URL_3                 = isset( $mh_settings['3']['mh-sub-title-3'] ) ? sanitize_text_field( $mh_settings['3']['mh-sub-title-3'] ) : '';
$read_more_3                = isset( $mh_settings['3']['mh-image-url-3'] ) ? sanitize_text_field( $mh_settings['3']['mh-image-url-3'] ) : '';

$enable_4                   = isset( $mh_settings['4']['mh-enable-4'] ) ? sanitize_text_field( $mh_settings['4']['mh-enable-4'] ) : 0;
$heading_4                  = isset( $mh_settings['4']['mh-title-4'] ) ? sanitize_text_field( $mh_settings['4']['mh-title-4'] ) : '';
$link_URL_4                 = isset( $mh_settings['4']['mh-sub-title-4'] ) ? sanitize_text_field( $mh_settings['4']['mh-sub-title-4'] ) : '';
$read_more_4                = isset( $mh_settings['4']['mh-image-url-4'] ) ? sanitize_text_field( $mh_settings['4']['mh-image-url-4'] ) : '';

$mh_font_family             = isset($mh_custom_settings['mh_font_family'])?$mh_custom_settings['mh_font_family']:'Lato';

$mh_left_border_style       = isset($mh_custom_settings['mh_left_border_style'])?$mh_custom_settings['mh_left_border_style']:'solid';
$mh_left_border_width       = isset($mh_custom_settings['mh_left_border_width'])?$mh_custom_settings['mh_left_border_width']:'10';
$mh_left_border_color       = isset($mh_custom_settings['mh_left_border_color'])?$mh_custom_settings['mh_left_border_color']:'#007acc';

$mh_right_border_style      = isset($mh_custom_settings['mh_right_border_style'])?$mh_custom_settings['mh_right_border_style']:'none';
$mh_right_border_width      = isset($mh_custom_settings['mh_right_border_width'])?$mh_custom_settings['mh_right_border_width']:'0';
$mh_right_border_color      = isset($mh_custom_settings['mh_right_border_color'])?$mh_custom_settings['mh_right_border_color']:'#ffffff';

$mh_top_border_style        = isset($mh_custom_settings['mh_top_border_style'])?$mh_custom_settings['mh_top_border_style']:'none';
$mh_top_border_width        = isset($mh_custom_settings['mh_top_border_width'])?$mh_custom_settings['mh_top_border_width']:'0';
$mh_top_border_color        = isset($mh_custom_settings['mh_top_border_color'])?$mh_custom_settings['mh_top_border_color']:'#ffffff';

$mh_bottom_border_style     = isset($mh_custom_settings['mh_bottom_border_style'])?$mh_custom_settings['mh_bottom_border_style']:'none';
$mh_bottom_border_width     = isset($mh_custom_settings['mh_bottom_border_width'])?$mh_custom_settings['mh_bottom_border_width']:'0';
$mh_bottom_border_color     = isset($mh_custom_settings['mh_bottom_border_color'])?$mh_custom_settings['mh_bottom_border_color']:'#ffffff';

$mh_nav_left_border_style   = isset($mh_custom_settings['mh_nav_left_border_style'])?$mh_custom_settings['mh_nav_left_border_style']:'solid';
$mh_nav_left_border_width   = isset($mh_custom_settings['mh_nav_left_border_width'])?$mh_custom_settings['mh_nav_left_border_width']:'1';
$mh_nav_left_border_color   = isset($mh_custom_settings['mh_nav_left_border_color'])?$mh_custom_settings['mh_nav_left_border_color']:'#eeeeee';

$mh_nav_right_border_style  = isset($mh_custom_settings['mh_nav_right_border_style'])?$mh_custom_settings['mh_nav_right_border_style']:'none';
$mh_nav_right_border_width  = isset($mh_custom_settings['mh_nav_right_border_width'])?$mh_custom_settings['mh_nav_right_border_width']:'0';
$mh_nav_right_border_color  = isset($mh_custom_settings['mh_nav_right_border_color'])?$mh_custom_settings['mh_nav_right_border_color']:'#ffffff';

$mh_nav_top_border_style    = isset($mh_custom_settings['mh_nav_top_border_style'])?$mh_custom_settings['mh_nav_top_border_style']:'none';
$mh_nav_top_border_width    = isset($mh_custom_settings['mh_nav_top_border_width'])?$mh_custom_settings['mh_nav_top_border_width']:'0';
$mh_nav_top_border_color    = isset($mh_custom_settings['mh_nav_top_border_color'])?$mh_custom_settings['mh_nav_top_border_color']:'#ffffff';

$mh_nav_bottom_border_style = isset($mh_custom_settings['mh_nav_bottom_border_style'])?$mh_custom_settings['mh_nav_bottom_border_style']:'none';
$mh_nav_bottom_border_width = isset($mh_custom_settings['mh_nav_bottom_border_width'])?$mh_custom_settings['mh_nav_bottom_border_width']:'0';
$mh_nav_bottom_border_color = isset($mh_custom_settings['mh_nav_bottom_border_color'])?$mh_custom_settings['mh_nav_bottom_border_color']:'#ffffff';

$mh_main_background_color   = isset($mh_custom_settings['mh_main_background_color'])?$mh_custom_settings['mh_main_background_color']:'#ffffff';
$mh_main_font_color         = isset($mh_custom_settings['mh_main_font_color'])?$mh_custom_settings['mh_main_font_color']:'#000000';
$mh_nav_background_color    = isset($mh_custom_settings['mh_nav_background_color'])?$mh_custom_settings['mh_nav_background_color']:'#ffffff';
$mh_nav_font_color          = isset($mh_custom_settings['mh_nav_font_color'])?$mh_custom_settings['mh_nav_font_color']:'#000000';

$mh_main_font_size          = isset($mh_custom_settings['mh_main_font_size'])?$mh_custom_settings['mh_main_font_size']:'40px';
$mh_nav_font_size           = isset($mh_custom_settings['mh_nav_font_size'])?$mh_custom_settings['mh_nav_font_size']:'20px';

switch($mh_post_source){
	case 'mh-latest-post':
	$args = array(
		'numberposts'      => 4,
		'offset'           => 0,
		'category'         => 0,
		'orderby'          => 'post_date',
		'order'            => 'DESC',
		'post_type'        => 'post',
		'post_status'      => 'publish',
		'suppress_filters' => true
	);
	$recent_posts = get_posts( $args);
	break;
	case 'mh-selected-category';
	$args = array(
		'posts_per_page'   => 4,
		'offset'           => 0,
		'category_name'    => $mh_category,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'post_type'        => 'post',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);
	$recent_posts = get_posts( $args ); 
	break;
}
$loop_count = 0;
switch($mh_source){
	case 'mh-posts':
	?>
	<div class="mh-frontend-wrapper <?php esc_attr_e($mh_layout); if($mh_layout == 'mh-layout-2') esc_attr_e(' mh-clearfix');?>">
		<?php
		foreach($recent_posts as $post){
			$post_ID = $post->ID;
			if($loop_count == 0):?>
				<div class="mh-frontend-wrapper-item mh-frontend-wrapper-item-large" >
					<div class="mh-main-title">
						<a href="<?php echo esc_url( get_permalink( $post_ID ) );?>"><?php echo wp_kses_post( get_the_title($post_ID));?></a>
					</div>
				</div>
			<?php endif;
			$loop_count++;
		}
		$loop_count = 0;
		?>
		<div class="mh-frontend-sub-heading <?php if($mh_layout == 'mh-layout-1') esc_attr_e('mh-clearfix');?>">
			<?php
			foreach($recent_posts as $post){
				$post_ID = $post->ID;
				if($loop_count > 0):?>

					<div class="mh-frontend-wrapper-item">
						<div class="mh-main-title">
							<a href="<?php echo esc_url( get_permalink( $post_ID ) );?>"><?php echo wp_kses_post( get_the_title($post_ID));?></a>
						</div>
					</div>
				<?php endif;
				$loop_count++;
			}
			?>
		</div>
	</div>
	<?php
	break;
	case 'mh-custom':
	?>
	<div class="mh-frontend-wrapper <?php esc_attr_e($mh_layout); if($mh_layout == 'mh-layout-2') esc_attr_e(' mh-clearfix');?>">
		<?php if($enable_1 == 1):?>
			<div class="mh-frontend-wrapper-item mh-frontend-wrapper-item-large" >
				<div class="mh-main-title">
					<a href="<?php esc_attr_e($link_URL_1);?>" target="_blank"><?php _e($heading_1);?></a>
				</div>
			</div>
		<?php endif;?>

		<?php if($enable_2 == 1 || $enable_3 == 1  || $enable_4 == 1 ):?>				
			<div class="mh-frontend-sub-heading <?php if($mh_layout == 'mh-layout-1') esc_attr_e('mh-clearfix');?>">
				<?php if($enable_2 == 1):?>		
					<div class="mh-frontend-wrapper-item">
						<div class="mh-main-title">
							<a href="<?php esc_attr_e($link_URL_2);?>" target="_blank"><?php _e($heading_2);?></a>
						</div>
					</div>
				<?php endif;?>
				<?php if($enable_3 == 1):?>	
					<div class="mh-frontend-wrapper-item">
						<div class="mh-main-title">
							<a href="<?php esc_attr_e($link_URL_3);?>" target="_blank"><?php _e($heading_3);?></a>
						</div>
					</div>
				<?php endif;?>
				<?php if($enable_4 == 1):?>		
					<div class="mh-frontend-wrapper-item">
						<div class="mh-main-title">
							<a href="<?php esc_attr_e($link_URL_4);?>" target="_blank"><?php _e($heading_4);?></a>
						</div>
					</div>
				<?php endif;?>
			</div>
		<?php endif; ?>
	</div>
	<?php
	break;
}
?>
<style>
.mh-frontend-wrapper span,
.mh-frontend-wrapper a,
.mh-frontend-wrapper div,
.mh-frontend-wrapper p,
.mh-frontend-wrapper h1,
.mh-frontend-wrapper h2,
.mh-frontend-wrapper h3,
.mh-frontend-wrapper h4,
.mh-frontend-wrapper h5,
.mh-frontend-wrapper h6,
.mh-frontend-wrapper input,
.mh-frontend-wrapper button{
	font-family: '<?php esc_attr_e($mh_font_family);?>';
}
.mh-frontend-wrapper.mh-layout-2  .mh-frontend-wrapper-item.mh-frontend-wrapper-item-large,
.mh-frontend-wrapper.mh-layout-1  .mh-frontend-wrapper-item.mh-frontend-wrapper-item-large{
	border-left: <?php echo $mh_left_border_width .'px '. $mh_left_border_style .' '.$mh_left_border_color?>;
	border-top: <?php echo $mh_top_border_width .'px '. $mh_top_border_style .' '.$mh_top_border_color?>;
	border-bottom: <?php echo $mh_bottom_border_width .'px '. $mh_bottom_border_style .' '.$mh_bottom_border_color?>;
	border-right: <?php echo $mh_right_border_width .'px '. $mh_right_border_style .' '.$mh_right_border_color?>;
}
.mh-frontend-sub-heading .mh-frontend-wrapper-item .mh-main-title{
	border-left: <?php echo $mh_nav_left_border_width .'px '. $mh_nav_left_border_style .' '.$mh_nav_left_border_color?>;
	border-top: <?php echo $mh_nav_top_border_width .'px '. $mh_nav_top_border_style .' '.$mh_nav_top_border_color?>;
	border-bottom: <?php echo $mh_nav_bottom_border_width .'px '. $mh_nav_bottom_border_style .' '.$mh_nav_bottom_border_color?>;
	border-right: <?php echo $mh_nav_right_border_width .'px '. $mh_nav_right_border_style .' '.$mh_nav_right_border_color?>;
}

.mh-frontend-wrapper .mh-frontend-wrapper-item.mh-frontend-wrapper-item-large{
	background-color: <?php echo $mh_main_background_color;?>;
}
.mh-frontend-wrapper .mh-frontend-sub-heading .mh-frontend-wrapper-item a{
	background-color: <?php echo $mh_nav_background_color;?>;
}
.mh-frontend-wrapper .mh-frontend-wrapper-item.mh-frontend-wrapper-item-large .mh-main-title a,
.mh-frontend-wrapper .mh-frontend-wrapper-item.mh-frontend-wrapper-item-large .mh-main-title a:hover{
	color: <?php echo $mh_main_font_color;?>;
}
.mh-frontend-wrapper .mh-frontend-sub-heading .mh-frontend-wrapper-item a,
.mh-frontend-wrapper .mh-frontend-sub-heading .mh-frontend-wrapper-item a:hover{
	color: <?php echo $mh_nav_font_color;?>;
}

.mh-frontend-wrapper-item.mh-frontend-wrapper-item-large .mh-main-title a {
	font-size: <?php echo $mh_main_font_size .'px';?>;
}

.mh-frontend-sub-heading .mh-frontend-wrapper-item a {
	font-size: <?php echo $mh_nav_font_size .'px';?>;
}
</style>
