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
		//$title = apply_filters('widget_title', $instance['title']);
		$cta_text = $instance['cta_text'];
		$callout_text = $instance['callout_text'];
		// $link_text_1 = $instance['link_text_1'];
		// $link_text_2 = $instance['link_text_2'];
		// $link_text_3 = $instance['link_text_3'];
		// $link_text_4 = $instance['link_text_4'];
		// $link_1 = $instance['link_1'];
		// $link_2 = $instance['link_2'];
		// $link_3 = $instance['link_3'];
		// $link_4 = $instance['link_4'];
		$frontpage_id = get_option( 'page_on_front' );
		$background = get_field('wg_background_image', $frontpage_id);
		$background_url = $background['sizes']['large'];
		$dropdown = get_field('form_dropdowns', $frontpage_id);
		//var_dump($frontpage_id);
		//var_dump($dropdown);

		echo $before_widget;

		// Display the widget
		echo '<div class="widget-text wp-widget-plugin-box gate-bg" style="background-image:url('.$background_url.');">';
		// echo '<div class="widget-title">';

		// // Check if title is set
		// if ( $title ) {
		// echo $before_title . $title . $after_title ;
		// }
		// echo '</div>';

		// Check if cta_text is set
		echo '<div class="widget-cta_text gate-cta">';
		if( $cta_text ) {
		echo '<h4 class="wp-widget-plugin-cta_text"">'.$cta_text.'<span>'.$callout_text.'</span></h4>';
		}
		echo '</div>';
		echo '<div class="cta-dropdown">';
		echo '<ul>';

		if(have_rows('form_dropdowns', $frontpage_id)):while(have_rows('form_dropdowns', $frontpage_id)):the_row();

			$d_link_text=get_sub_field('label');
			//var_dump($d_link_text);
			$d_link = get_sub_field('link');
			echo '<li><a href="'.$d_link.'">'.$d_link_text.'</a></li>';
		endwhile;
		endif;

		// if($link_text_1){
		// 	echo '<li><a href="'.$link_1.'">'.$link_text_1.'</a></li>';
		// }
		// if($link_text_2){
		// 	echo '<li><a href="'.$link_3.'">'.$link_text_2.'</a></li>';
		// }
		// if($link_text_3){
		// 	echo '<li><a href="'.$link_3.'">'.$link_text_3.'</a></li>';
		// }
		// if($link_text_3){
		// 	echo '<li><a href="'.$link_4.'">'.$link_text_4.'</a></li>';
		// }
		echo '</ul>';
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
		// $title = esc_attr($instance['title']);
		$cta_text = $instance['cta_text'];
		$callout_text = $instance['callout_text'];
		// $link_text_1 = $instance['link_text_1'];
		// $link_text_2 = $instance['link_text_2'];
		// $link_text_3 = $instance['link_text_3'];
		// $link_text_4 = $instance['link_text_4'];
		// $link_1 = $instance['link_1'];
		// $link_2 = $instance['link_2'];
		// $link_3 = $instance['link_3'];
		// $link_4 = $instance['link_4'];

		} else {
		//$title = '';
		$cta_text = '';
		$callout_text = '';
		// $link_text_1 = '';
		// $link_text_2 = '';
		// $link_text_3 = '';
		// $link_text_4 = '';
		// $link_1 = '';
		// $link_2 = '';
		// $link_3 = '';
		// $link_4 = '';
		}

?>
	<!-- <p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'my_widget'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
	</p> -->
	<p>
	<label for="<?php echo $this->get_field_id('cta_text'); ?>"><?php _e('CTA Text:', 'my_widget'); ?></label>
	<textarea class="widefat" id="<?php echo $this->get_field_id('cta_text'); ?>"  name="<?php echo $this->get_field_name('cta_text'); ?>" rows="7" cols="20" ><?php echo $cta_text; ?></textarea><!-- //placeholder="Enter brief CTA text here. Could be the same as the homepage" -->
	</p>
	<p>
	<label for="<?php echo $this->get_field_id('callout_text'); ?>"><?php _e('CTA Callout (eg Green Text):', 'my_widget'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('callout_text'); ?>"  name="<?php echo $this->get_field_name('callout_text'); ?>" type="text" value="<?php echo $callout_text; ?>" ></input> <!-- placeholder="Enter brief callout text, this text will be green." -->
	</p>

	<!-- <h2>Links:</h2>
	<p>
	<label for="<?php echo $this->get_field_id('link_text_1'); ?>"><?php _e('Link Text:', 'my_widget'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('link_text_1'); ?>" name="<?php echo $this->get_field_name('link_text_1'); ?>" type="text" value="<?php echo $link_text_1; ?>" ></input>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id('link_1'); ?>"><?php _e('Link:', 'my_widget'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('link_1'); ?>" placeholder="Use the format http://... " name="<?php echo $this->get_field_name('link_1'); ?>" type="text" value="<?php echo $link_1; ?>" ></input>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id('link_text_2'); ?>"><?php _e('Link Text:', 'my_widget'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('link_text_2'); ?>" name="<?php echo $this->get_field_name('link_text_2'); ?>" type="text" value="<?php echo $link_text_2; ?>" ></input>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id('link_2'); ?>"><?php _e('Link:', 'my_widget'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('link_2'); ?>" placeholder="Use the format http://... " name="<?php echo $this->get_field_name('link_2'); ?>" type="text" value="<?php echo $link_2; ?>" ></input>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id('link_text_3'); ?>"><?php _e('Link Text:', 'my_widget'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('link_text_3'); ?>" name="<?php echo $this->get_field_name('link_text_3'); ?>" type="text" value="<?php echo $link_text_3; ?>" ></input>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id('link_3'); ?>"><?php _e('Link:', 'my_widget'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('link_3'); ?>" placeholder="Use the format http://... " name="<?php echo $this->get_field_name('link_3'); ?>" type="text" value="<?php echo $link_3; ?>" ></input>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id('link_text_4'); ?>"><?php _e('Link Text:', 'my_widget'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('link_text_4'); ?>" name="<?php echo $this->get_field_name('link_text_4'); ?>" type="text" value="<?php echo $link_text_4; ?>" ></input>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id('link_4'); ?>"><?php _e('Link:', 'my_widget'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('link_4'); ?>" placeholder="Use the format http://... " name="<?php echo $this->get_field_name('link_4'); ?>" type="text" value="<?php echo $link_4; ?>" ></input>
	</p> -->
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
		//$instance['title'] = strip_tags($new_instance['title']);
		$instance['cta_text'] = strip_tags($new_instance['cta_text']);
		$instance['callout_text'] = strip_tags($new_instance['callout_text']);
		// $instance['link_text_1'] = strip_tags($new_instance['link_text_1']);
		// $instance['link_text_2'] = strip_tags($new_instance['link_text_2']);
		// $instance['link_text_3'] = strip_tags($new_instance['link_text_3']);
		// $instance['link_text_4'] = strip_tags($new_instance['link_text_4']);
		// $instance['link_1'] = strip_tags($new_instance['link_1']);
		// $instance['link_2'] = strip_tags($new_instance['link_2']);
		// $instance['link_3'] = strip_tags($new_instance['link_3']);
		// $instance['link_4'] = strip_tags($new_instance['link_4']);

		return $instance;
	}
}
?>