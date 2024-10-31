<?php 
  /*
  $image =  For Image
  $content = For Content
  $name =  For Name
  $heading = For heading
  $designation =  For Name
  $logo =  For Logo or Icon or any 2nd image
*/
  ?>


<div class="nt-testimonials-widget"> 
        <div class="nt-col">

          <?php if ( ! empty( $image )){ ?>
            <div class="nt-image">
              <img src="<?php echo $image; ?>" border="0"> 
            </div>
          <?php } ?>

            <?php if ( ! empty( $heading )){ ?>
            <h3 class="widget-title text-center"><?php echo $heading; ?></h3>   
            <?php } ?>

            <div class="row">


            <?php if ( ! empty( $content )){ ?>
              <div class="content text-center">
                <p><?php echo $content; ?></p>
                </div>
              </div>
            <?php } ?>

            <div class="nt-bottom">

              <div class="text-center w40">

              <?php if ( ! empty( $name ) || ! empty( $designation ) || ! empty( $logo )){ ?>
                <div class="nt-image w30">
                  <img src="<?php echo $logo; ?>" border="0"> 
                </div>
                <div class="content text-center w30 mt_40">
                   <p><?php echo $name; ?></p>
                </div>
                <div class="content text-center w30 mt_40">
                   <p><?php echo $designation; ?></p>
                </div>
              <?php } ?>

              </div>

            </div>

          </div> <!--.style1-->
        
    
    
  </div> <!--.nt-testimonails-widget-->
  
