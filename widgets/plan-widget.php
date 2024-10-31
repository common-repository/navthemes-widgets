<?php 
/**
 * Register the Widget
 */
// Register and load the widget

class navthemes_widgets_plan extends WP_Widget
{
    private $file_name = 'plan-view.php';

    /**
     * Constructor
     **/
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'navthemes_plan_widget',
            'description' => 'Widget of plans'
        );

        parent::__construct( 'navthemes_plan_widget', 'NavThemes Plans Widget', $widget_ops );

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
        $currency = ! empty( $instance['currency'] ) ? $instance['currency'] : '';
        $value = ! empty( $instance['value'] ) ? $instance['value'] : '';
        $duration = ! empty( $instance['duration'] ) ? $instance['duration'] : '';
        $mthcurrency = ! empty( $instance['mthcurrency'] ) ? $instance['mthcurrency'] : '';
        $mthvalue = ! empty( $instance['mthvalue'] ) ? $instance['mthvalue'] : '';
        $mthduration = ! empty( $instance['mthduration'] ) ? $instance['mthduration'] : '';
        $work = ! empty( $instance['work'] ) ? $instance['work'] : '';
        $level = ! empty( $instance['level'] ) ? $instance['level'] : '';
        $field = ! empty( $instance['field'] ) ? $instance['field'] : '';
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

$instance['currency'] = ( ! empty( $new_instance['currency'] ) ) ? strip_tags( $new_instance['currency'] ) : '';
$instance['value'] = ( ! empty( $new_instance['value'] ) ) ? strip_tags( $new_instance['value'] ) : '';
$instance['duration'] = ( ! empty( $new_instance['duration'] ) ) ? strip_tags( $new_instance['duration'] ) : '';
$instance['mthcurrency'] = ( ! empty( $new_instance['mthcurrency'] ) ) ? strip_tags( $new_instance['mthcurrency'] ) : '';
$instance['mthvalue'] = ( ! empty( $new_instance['mthvalue'] ) ) ? strip_tags( $new_instance['mthvalue'] ) : '';
$instance['mthduration'] = ( ! empty( $new_instance['mthduration'] ) ) ? strip_tags( $new_instance['mthduration'] ) : '';
$instance['work'] = ( ! empty( $new_instance['work'] ) ) ? strip_tags( $new_instance['work'] ) : '';
$instance['level'] = ( ! empty( $new_instance['level'] ) ) ? strip_tags( $new_instance['level'] ) : '';
$instance['field'] = ( ! empty( $new_instance['field'] ) ) ? strip_tags( $new_instance['field'] ) : '';
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
        $currency = ! empty( $instance['currency'] ) ? $instance['currency'] : '';
        $value = ! empty( $instance['value'] ) ? $instance['value'] : '';
        $duration = ! empty( $instance['duration'] ) ? $instance['duration'] : '';
        $mthcurrency = ! empty( $instance['mthcurrency'] ) ? $instance['mthcurrency'] : '';
        $mthvalue = ! empty( $instance['mthvalue'] ) ? $instance['mthvalue'] : '';
        $mthduration = ! empty( $instance['mthduration'] ) ? $instance['mthduration'] : '';
        $work = ! empty( $instance['work'] ) ? $instance['work'] : '';
        $level = ! empty( $instance['level'] ) ? $instance['level'] : '';
        $field = ! empty( $instance['field'] ) ? $instance['field'] : '';
        $button = ! empty( $instance['button'] ) ? $instance['button'] : '';
        $buttonlink = ! empty( $instance['buttonlink'] ) ? $instance['buttonlink'] : '';
        $style = ! empty( $instance['style'] ) ? $instance['style'] : '';
        ?>

        <p>
            <label for="<?php echo $this->get_field_name( 'currency' ); ?>">Yearly Currency:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'currency' ); ?>" name="<?php echo $this->get_field_name( 'currency' ); ?>" type="text" value="<?php echo esc_attr( $currency ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'value' ); ?>">Yearly Value:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'value' ); ?>" name="<?php echo $this->get_field_name( 'value' ); ?>" type="text" value="<?php echo esc_attr( $value ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'duration' ); ?>">Yearly Duration:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'duration' ); ?>" name="<?php echo $this->get_field_name( 'duration' ); ?>" type="text" value="<?php echo esc_attr( $duration ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'mthcurrency' ); ?>">Monthly Currency:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'mthcurrency' ); ?>" name="<?php echo $this->get_field_name( 'mthcurrency' ); ?>" type="text" value="<?php echo esc_attr( $mthcurrency ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'mthvalue' ); ?>">Monthly Value:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'mthvalue' ); ?>" name="<?php echo $this->get_field_name( 'mthvalue' ); ?>" type="text" value="<?php echo esc_attr( $mthvalue ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'mthduration' ); ?>">Monthly Duration:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'mthduration' ); ?>" name="<?php echo $this->get_field_name( 'mthduration' ); ?>" type="text" value="<?php echo esc_attr( $mthduration ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'work' ); ?>">Field 1:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'work' ); ?>" name="<?php echo $this->get_field_name( 'work' ); ?>" type="text" value="<?php echo esc_attr( $work ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'level' ); ?>">Field 2:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'level' ); ?>" name="<?php echo $this->get_field_name( 'level' ); ?>" type="text" value="<?php echo esc_attr( $level ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'field' ); ?>">Features:</label>
          
            <textarea id="<?php echo $this->get_field_id( 'field' ); ?>" name="<?php echo $this->get_field_name( 'field' ); ?>" rows="10" cols="34" placeholder="One Option Per Line" wrap="soft"><?php echo esc_attr( $field ); ?></textarea>

        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'button' ); ?>">Button:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'button' ); ?>" name="<?php echo $this->get_field_name( 'button' ); ?>" type="text" value="<?php echo esc_attr( $button ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'buttonlink' ); ?>">Button Link:</label>
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