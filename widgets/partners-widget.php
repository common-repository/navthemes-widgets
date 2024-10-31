<?php 
/**
 * Register the Widget
 */

class navthemes_widgets_partners extends WP_Widget
{
    private $file_name = 'partners-view.php';

    /**
     * Constructor
     **/
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'navthemes_partners_widgets',
            'description' => 'Widget that uses the built in Media library.'
        );

        parent::__construct( 'navthemes_partners_widgets', 'NavThemes Partner Section', $widget_ops );

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
        $link = ! empty( $instance['link'] ) ? $instance['link'] : '';
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';


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
        
        $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? strip_tags( $new_instance['image'] ) : '';
        $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
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
        $link = ! empty( $instance['link'] ) ? $instance['link'] : '';
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
    ?>
        <p>
        <label for="<?php echo $this->get_field_id('image'); ?>">Image</label><br />

        <?php
           
                echo '<img class="custom_media_image" src="' . $image . '" style="margin:0;padding:0;max-width:100px;display:inline-block" /><br />';
          
        ?>

        <input type="hidden" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image'); ?>" id="<?php echo $this->get_field_id('image'); ?>" value="<?php echo $image; ?>" style="margin-top:5px;">

        <input type="hidden" class="widefat custom_media_id" name="<?php echo $this->get_field_name('image'); ?>" id="<?php echo $this->get_field_id('image'); ?>" value="<?php echo $image; ?>" style="margin-top:5px;">

        <input type="button" class="button button-primary custom_media_button" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" value="Upload Image" style="margin-top:5px;" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_name( 'link' ); ?>"><?php _e( 'Link:', 'intechnic-pro' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:', 'intechnic-pro' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>


    <?php
    }
}
?>