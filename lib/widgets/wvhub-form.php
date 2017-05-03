<?php 
add_action( 'widgets_init', function(){
	register_widget( 'My_Widget' );
});
class My_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'WV Hub form Widget',
			'description' => 'Use this widget to add a callout to your Help forms in specific sidebars',
		);
		parent::__construct( 'my_widget', 'WV Hub Form Widget', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		extract( $args );

		// these are the widget options
		$cta_text = $instance['cta_text'];
		$callout_text = $instance['callout_text'];
		//Get the ID from the homepage
		$frontpage_id = get_option( 'page_on_front' );
		//Get several fields from the homepage ACF fields to use in our widget
		$background = get_field('wg_background_image', $frontpage_id);
		$background_url = $background['sizes']['large'];
		$dropdown = get_field('form_dropdowns', $frontpage_id);

		echo $before_widget;

		// Display the widget
		echo '<div class="widget-text wp-widget-plugin-box gate-bg" style="background-image:url('.$background_url.');">';

		// Check if cta_text is set
		echo '<div class="widget-cta_text gate-cta">';
		if( $cta_text ) {
		echo '<h4 class="wp-widget-plugin-cta_text"">'.$cta_text.' <span>'.$callout_text.'</span></h4>';
		}
		echo '</div>';
		echo '<div id="dropdown-trigger" class="cta-dropdown cta-widget">';
		echo '<h6 style="font-size:16px;" >I\'d like The Hub to help me...</h6>';
		echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
					    <path d="M7 10l5 5 5-5z"/>
					</svg>';
		echo '<div class="dropdown-menu-type widget-dropdown">';

		//Grab all of the links created in the dropdown on the homepage to include here
		if(have_rows('form_dropdowns', $frontpage_id)):while(have_rows('form_dropdowns', $frontpage_id)):the_row();

			$d_link_text=get_sub_field('label');
			//var_dump($d_link_text);
			$d_link = get_sub_field('link');
			echo '<a href="'.$d_link.'"><h5 style="font-size:14px;">'.$d_link_text.'</h5></a>';
		endwhile;
		endif;

		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo $after_widget;
		//}
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		// Check values
		if( $instance) {
		$cta_text = $instance['cta_text'];
		$callout_text = $instance['callout_text'];
		} else {
		$cta_text = '';
		$callout_text = '';
		}

?>
	<p>
	<label for="<?php echo $this->get_field_id('cta_text'); ?>"><?php _e('CTA Text:', 'my_widget'); ?></label>
	<textarea class="widefat" id="<?php echo $this->get_field_id('cta_text'); ?>"  name="<?php echo $this->get_field_name('cta_text'); ?>" rows="7" cols="20" ><?php echo $cta_text; ?></textarea><!-- //placeholder="Enter brief CTA text here. Could be the same as the homepage" -->
	</p>
	<p>
	<label for="<?php echo $this->get_field_id('callout_text'); ?>"><?php _e('CTA Callout (eg Green Text):', 'my_widget'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('callout_text'); ?>"  name="<?php echo $this->get_field_name('callout_text'); ?>" type="text" value="<?php echo $callout_text; ?>" ></input> <!-- placeholder="Enter brief callout text, this text will be green." -->
	</p>

	<p>**Note: Dropdown text/links are populated by information entered on the homepage via the "Form Dropdowns" custom fields</p>
<?php 
	}
	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
		$instance=$old_instance;
		$instance['cta_text'] = strip_tags($new_instance['cta_text']);
		$instance['callout_text'] = strip_tags($new_instance['callout_text']);

		return $instance;
	}
}
?>