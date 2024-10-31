<?php 
/**
 * Register the Widget
 */


class navthemes_widgets_service extends WP_Widget
{
    private $file_name = 'service-view.php';
    
    /**
     * Constructor
     **/
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'navthemes_service_widgets',
            'description' => 'Widget for Services'
        );

      parent::__construct( 'navthemes_service_widgets', 'NavThemes Services Widget', $widget_ops );

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
      $heading = ! empty( $instance['heading'] ) ? $instance['heading'] : '';
      $subheading = ! empty( $instance['subheading'] ) ? $instance['subheading'] : '';
      $button = ! empty( $instance['button'] ) ? $instance['button'] : '';
      $buttonlink = ! empty( $instance['buttonlink'] ) ? $instance['buttonlink'] : '';
      $style = ! empty( $instance['style'] ) ? $instance['style'] : '';

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
      $instance['heading'] = ( ! empty( $new_instance['heading'] ) ) ? strip_tags( $new_instance['heading'] ) : '';
      $instance['subheading'] = ( ! empty( $new_instance['subheading'] ) ) ? strip_tags( $new_instance['subheading'] ) : '';
      $instance['button'] = ( ! empty( $new_instance['button'] ) ) ? strip_tags( $new_instance['button'] ) : '';
      $instance['buttonlink'] = ( ! empty( $new_instance['buttonlink'] ) ) ? strip_tags( $new_instance['buttonlink'] ) : '';
      $instance['style'] = ( ! empty( $new_instance['style'] ) ) ? strip_tags( $new_instance['style'] ) : '';
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
      $heading = ! empty( $instance['heading'] ) ? $instance['heading'] : '';
      $subheading = ! empty( $instance['subheading'] ) ? $instance['subheading'] : '';
      $button = ! empty( $instance['button'] ) ? $instance['button'] : '';
      $buttonlink = ! empty( $instance['buttonlink'] ) ? $instance['buttonlink'] : '';
      $style = ! empty( $instance['style'] ) ? $instance['style'] : '';
    ?>

    <p>
      <label for="<?php echo $this->get_field_name( 'heading' ); ?>">Heading:</label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'heading' ); ?>" name="<?php echo $this->get_field_name( 'heading' ); ?>" type="text" value="<?php echo esc_attr( $heading ); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_name( 'subheading' ); ?>">SubHeading:</label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'subheading' ); ?>" name="<?php echo $this->get_field_name( 'subheading' ); ?>" type="text" value="<?php echo esc_attr( $subheading ); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('image'); ?>">Image:</label><br />
      <?php
      
      echo '<img class="custom_media_image" src="' . $image . '" style="margin:0;padding:0;max-width:100px;display:inline-block" /><br />';
      
      ?>
      <input type="hidden" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image'); ?>" id="<?php echo $this->get_field_id('image'); ?>" value="<?php echo $image; ?>" style="margin-top:5px;">

      <input type="button" class="button button-primary custom_media_button" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" value="Upload Image" style="margin-top:5px;" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_name( 'button' ); ?>">Button:</label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'button' ); ?>" name="<?php echo $this->get_field_name( 'button' ); ?>" type="text" value="<?php echo esc_attr( $button ); ?>" />
      </p>
      <p>
      <label for="<?php echo $this->get_field_name( 'buttonlink' ); ?>">ButtonLink:</label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'buttonlink' ); ?>" name="<?php echo $this->get_field_name( 'buttonlink' ); ?>" type="text" value="<?php echo esc_attr( $buttonlink ); ?>" />
    </p>

      <p>
    <label for="<?php echo $this->get_field_id( 'style' ); ?>">Title:</label>
    <select name="<?php echo $this->get_field_name( 'style' ); ?>" id="<?php echo $this->get_field_id( 'style' ); ?>">
        
        <option value="style1" <?php if($style=='style1') echo "selected"; ?>>Style1</option>
        <option value="style2" <?php if($style=='style2') echo "selected"; ?>>Style2</option>
        <option value="style3" <?php if($style=='style3') echo "selected"; ?>>Style3</option>

    </select>

  </p>

    <?php
    }
}
?>