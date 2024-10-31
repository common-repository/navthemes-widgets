<?php 
/*
  $heading =  For Subheading
  $content = For Content
  $button =  For Button Text
  $buttonlink =  For Button Link
*/
?>

  <div class="nt-callaction-widget">

    <div class="nt-callaction-body">

       <?php if ( ! empty( $heading )){ ?>
        <div class="nt-header">
          <p><?php echo $heading; ?></p>
        </div>
       <?php } ?>

       <?php if ( ! empty( $content )){ ?>
        <div class="nt-content">
          <p><?php echo $heading; ?></p>
        </div>
        <?php } ?>

    </div>

        <?php if ( ! empty( $button ) || ! empty( $buttonlink )){ ?>
        <div class="nt-callaction-button">
          <a href="<?php echo $button; ?>"><input type="button" value="<?php echo $buttonlink; ?>"></a>
        </div>
        <?php } ?>

  </div> 
           
<?php
        // This is where you run the code and display the output
?>