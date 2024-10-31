<?php 
/**
 * Register the Widget
 */


class navthemes_widgets_team extends WP_Widget
{
    private $file_name = 'team-view.php';
    
    /**
     * Constructor
     **/
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'navthemes_team_widgets',
            'description' => 'Widget for testimonials'
        );

        parent::__construct( 'navthemes_team_widgets', 'NavThemes Team Widget', $widget_ops );

    }


    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    public function widget( $args, $instance )
    {
      $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
      $designation = ! empty( $instance['designation'] ) ? $instance['designation'] : '';
      $name = ! empty( $instance['name'] ) ? $instance['name'] : '';
      $content = ! empty( $instance['content'] ) ? $instance['content'] : '';
      $fblink = ! empty( $instance['fblink'] ) ? $instance['fblink'] : ''; 
      $twitterlink = ! empty( $instance['twitterlink'] ) ? $instance['twitterlink'] : '';
      $linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : '';

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];

        // Look for a file in theme
        if( $theme_template = locate_template('widgets/' . $this->file_name ) ) {
          
          include $theme_template;
          
        } else {
          
          // Nothing found, let's look in our plugin
          $plugin_template = NavThemes_Widgets_TEMPLATE_DIR . '/' . $this->file_name ;
         
          if( file_exists( $plugin_template ) ){
            include $plugin_template;
          }

         }  

        echo $args['after_widget'];
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    public function update( $new_instance, $old_instance ) {

    // update logic goes here
    $instance = array();

    $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? strip_tags( $new_instance['image'] ) : '';
    $instance['designation'] = ( ! empty( $new_instance['designation'] ) ) ? strip_tags( $new_instance['designation'] ) : '';
    $instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : '';
    $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
    $instance['fblink'] = ( ! empty( $new_instance['fblink'] ) ) ? strip_tags( $new_instance['fblink'] ) : '';
    $instance['twitterlink'] = ( ! empty( $new_instance['twitterlink'] ) ) ? strip_tags( $new_instance['twitterlink'] ) : '';
    $instance['linkedin'] = ( ! empty( $new_instance['linkedin'] ) ) ? strip_tags( $new_instance['linkedin'] ) : '';

return $instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void
     **/
    public function form( $instance )
    {
      $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
      $designation = ! empty( $instance['designation'] ) ? $instance['designation'] : '';
      $name = ! empty( $instance['name'] ) ? $instance['name'] : '';
      $content = ! empty( $instance['content'] ) ? $instance['content'] : '';
      $fblink = ! empty( $instance['fblink'] ) ? $instance['fblink'] : ''; 
      $twitterlink = ! empty( $instance['twitterlink'] ) ? $instance['twitterlink'] : '';
      $linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : '';
        ?>

  <p>
    <label for="<?php echo $this->get_field_id('image'); ?>">Image:</label><br />

    <?php
    
    echo '<img class="custom_media_image" src="' . $image . '" style="margin:0;padding:0;max-width:100px;display:inline-block" /><br />';
   
    ?>

    <input type="hidden" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image'); ?>" id="<?php echo $this->get_field_id('image'); ?>" value="<?php echo $image; ?>" style="margin-top:5px;">

    <input type="button" class="button button-primary custom_media_button" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" value="Upload Image" style="margin-top:5px;" />
  </p>
  <p>
    <label for="<?php echo $this->get_field_name( 'name' ); ?>">Name:</label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name ); ?>" />
    </p>
    <p>
    <label for="<?php echo $this->get_field_name( 'designation' ); ?>">Designation:</label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'designation' ); ?>" name="<?php echo $this->get_field_name( 'designation' ); ?>" type="text" value="<?php echo esc_attr( $designation ); ?>" />
  </p>
      <p>
    <label for="<?php echo $this->get_field_name( 'content' ); ?>">Content:</label>
    <textarea id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" rows="10" cols="34" wrap="soft"><?php echo esc_attr( $content ); ?></textarea>
  </p>
  <p>
    <label for="<?php echo $this->get_field_name( 'fblink' ); ?>">Facebook Link:</label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'fblink' ); ?>" name="<?php echo $this->get_field_name( 'fblink' ); ?>" type="text" value="<?php echo esc_attr( $fblink ); ?>" />
  </p>
  </p>
  <p>
    <label for="<?php echo $this->get_field_name( 'twitterlink' ); ?>">Twiiter Link:</label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'twitterlink' ); ?>" name="<?php echo $this->get_field_name( 'twitterlink' ); ?>" type="text" value="<?php echo esc_attr( $twitterlink ); ?>" />

  </p>
  </p>
  <p>
    <label for="<?php echo $this->get_field_name( 'linkedin' ); ?>">Linkedin Link:</label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>" />

  </p>
    <?php
    }
}
?>