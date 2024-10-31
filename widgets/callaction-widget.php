<?php 
/**
 * Register the Widget
 */

class navthemes_widgets_callaction extends WP_Widget
{
    private $file_name = 'callaction-view.php';
    /**
     * Constructor
     **/
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'navthemes_callaction_widgets',
            'description' => 'Widget of call action'
        );

        parent::__construct( 'navthemes_callaction_widgets', 'NavThemes Call Action Widget', $widget_ops );

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
        $content = ! empty( $instance['content'] ) ? $instance['content'] : '';
        $heading = ! empty( $instance['heading'] ) ? $instance['heading'] : '';
        $button = ! empty( $instance['button'] ) ? $instance['button'] : '';
        $buttonlink = ! empty( $instance['buttonlink'] ) ? $instance['buttonlink'] : '';

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


        // Add any html to output the image in the $instance array
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

$instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
$instance['heading'] = ( ! empty( $new_instance['heading'] ) ) ? strip_tags( $new_instance['heading'] ) : '';
$instance['buttonlink'] = ( ! empty( $new_instance['buttonlink'] ) ) ? strip_tags( $new_instance['buttonlink'] ) : '';
$instance['button'] = ( ! empty( $new_instance['button'] ) ) ? strip_tags( $new_instance['button'] ) : '';


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
        $content = ! empty( $instance['content'] ) ? $instance['content'] : '';
        $heading = ! empty( $instance['heading'] ) ? $instance['heading'] : '';
        $button = ! empty( $instance['button'] ) ? $instance['button'] : '';
        $buttonlink = ! empty( $instance['buttonlink'] ) ? $instance['buttonlink'] : '';


        ?>

        <p>
            <label for="<?php echo $this->get_field_name( 'heading' ); ?>"><?php _e( 'Heading:', 'intechnic-pro' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'heading' ); ?>" name="<?php echo $this->get_field_name( 'heading' ); ?>" type="text" value="<?php echo esc_attr( $heading ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'content' ); ?>"><?php _e( 'Content:', 'intechnic-pro' ); ?></label>
            <textarea id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" rows="10" cols="34" wrap="soft"><?php echo esc_attr( $content ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'button' ); ?>"><?php _e( 'Button:', 'intechnic-pro' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'button' ); ?>" name="<?php echo $this->get_field_name( 'button' ); ?>" type="text" value="<?php echo esc_attr( $button ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'buttonlink' ); ?>"><?php _e( 'Button Link:', 'intechnic-pro' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'buttonlink' ); ?>" name="<?php echo $this->get_field_name( 'buttonlink' ); ?>" type="text" value="<?php echo esc_attr( $buttonlink ); ?>" />
        </p>

    <?php
    }
}
?>