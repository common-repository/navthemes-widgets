<?php 
/*
    $currency = For currency
    $value = For value
    $duration = For duration
    $work = For work
    $level = For level
    $field = For field
    $button = For button
    $buttonlink = For buttonlink
*/
?>

<div class="nt-plan-widget">

  <div class="nt-col">
    <div class="nt-box-header text-center">

     <?php if ( ! empty( $level )){ ?>
      <div class="nt-header-field1 pt_40">
        <p><?php echo $level; ?></p>
      </div>
     <?php } ?>

     <div  class="currency_month">
       <?php if ( ! empty( $currency ) || ! empty( $value )){ ?>
        <div class="nt-header-field2 pt_2">
          <p><span><?php echo $currency; ?></span><?php echo $value; ?></p>
        </div>
         <?php } 


         if ( ! empty( $duration )){ ?>
        <div class="nt-header-field3 pt_2 pb_40">
          <p class="text-center"><?php echo $duration; ?></p>
        </div>
        <?php } ?>
      </div>

      <div  class="currency_year">
           <?php if ( ! empty( $mthcurrency ) || ! empty( $mthvalue )){ ?>
          <div class="nt-header-field2 pt_2">
            <p><span><?php echo $mthcurrency; ?></span><?php echo $mthvalue; ?></p>
          </div>
           <?php } 


           if ( ! empty( $mthduration )){ ?>
          <div class="nt-header-field3 pt_2 pb_40">
            <p class="text-center"><?php echo $mthduration; ?></p>
          </div>
          <?php } ?>
     </div>

    </div>
    <div class="nt-box-body text-center">

      <?php if ( ! empty( $work )){ ?>
      <div class="nt-body-heading">
        <p><?php echo $work; ?></p>
      </div>
      <?php } ?>


      <div class="nt-body-fields">
       <?php if ( ! empty( $field )){ ?>
        <ul>
          <li><?php echo nl2br($field); ?></li>
        </ul>
      <?php } ?>
      </div>

    </div>

    <?php if ( ! empty( $button ) || ! empty( $buttonlink )){ ?>
    <div class="nt-plan-button">
      <a href="<?php echo $buttonlink; ?>"><input type="button" value="<?php echo $button; ?>"></a>
    </div>
    <?php } ?>

  </div>


</div> 


<?php
        // This is where you run the code and display the output
?>