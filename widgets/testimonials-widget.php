<?php 
/**
 * Register the Widget
 */


class navthemes_widgets_testimonials extends WP_Widget
{ 
  private $file_name = 'testimonials-view.php';

    /**
     * Constructor
     **/
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'navthemes_testimonials_widgets',
            'description' => 'Widget for testimonials'
        );

        parent::__construct( 'navthemes_testimonials_widgets', 'NavThemes Testimonials Widget', $widget_ops );

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
        $content = ! empty( $instance['content'] ) ? $instance['content'] : '';
        $name = ! empty( $instance['name'] ) ? $instance['name'] : '';
        $heading = ! empty( $instance['heading'] ) ? $instance['heading'] : '';
        $designation = ! empty( $instance['designation'] ) ? $instance['designation'] : '';
        $logo = ! empty( $instance['logo'] ) ? $instance['logo'] : '';
    
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
    $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
    $instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : '';
    $instance['heading'] = ( ! empty( $new_instance['heading'] ) ) ? strip_tags( $new_instance['heading'] ) : '';
    $instance['designation'] = ( ! empty( $new_instance['designation'] ) ) ? strip_tags( $new_instance['designation'] ) : '';
    $instance['logo'] = ( ! empty( $new_instance['logo'] ) ) ? strip_tags( $new_instance['logo'] ) : '';
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
        $content = ! empty( $instance['content'] ) ? $instance['content'] : '';
        $heading = ! empty( $instance['heading'] ) ? $instance['heading'] : '';
        $name = ! empty( $instance['name'] ) ? $instance['name'] : '';
        $designation = ! empty( $instance['designation'] ) ? $instance['designation'] : '';
        $logo = ! empty( $instance['logo'] ) ? $instance['logo'] : '';
        ?>


    <p>
        <label for="<?php echo $this->get_field_name( 'heading' ); ?>">Heading:</label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'heading' ); ?>" name="<?php echo $this->get_field_name( 'heading' ); ?>" type="text" value="<?php echo esc_attr( $heading ); ?>" />
    </p>

    <p>
        <label for="<?php echo $this->get_field_name( 'content' ); ?>">Content:</label>
            <textarea id="<?php echo $this->get_field_id( 'content' ); ?>" rows="10" cols="34" name="<?php echo $this->get_field_name( 'content' ); ?>" wrap="soft"><?php echo esc_attr( $content ); ?></textarea>

    </p>
    <p>
        <label for="<?php echo $this->get_field_name( 'name' ); ?>">Name:</label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_name( 'designation' ); ?>"><?php _e( 'Designation:','intechnic-pro' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'designation' ); ?>" name="<?php echo $this->get_field_name( 'designation' ); ?>" type="text" value="<?php echo esc_attr( $designation ); ?>" />
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
        <label for="<?php echo $this->get_field_id('logo'); ?>">Logo:</label><br />

        <?php
       
        echo '<img class="custom_media_image" src="' . $logo . '" style="margin:0;padding:0;max-width:100px;display:inline-block" /><br />';
      
        ?>

        <input type="hidden" class="widefat custom_media_url" name="<?php echo $this->get_field_name('logo'); ?>" id="<?php echo $this->get_field_id('logo'); ?>" value="<?php echo $logo; ?>" style="margin-top:5px;">

        <input type="button" class="button button-primary custom_media_button" id="<?php echo $this->get_field_id('logo'); ?>" name="<?php echo $this->get_field_name('logo'); ?>" value="Upload Image" style="margin-top:5px;" />
    </p>
    <?php
    }
}
?>