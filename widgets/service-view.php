<?php 
  /*
  $image =  For Image
  $heading = For Heading
  $subheading =  For SubHeading
  $button =  For Button
  $buttonlink =  For Button Link
*/?>

<div class="nt-service-widget"> 

        <div class="nt-col">
          <div class="nt-image">
            <?php if ( ! empty( $image )){
                  echo  '<img src="'. $image .'" border="0"> ';
                } ?>
            </div>

       <?php if ( ! empty( $heading )){
        
        echo  '<h3 class="widget-title text-center">'.$heading.'</h3>';} ?>   

        <div class="row">

             <div class="content text-center">
                  <?php  if ( ! empty( $subheading )) echo $subheading; ?>
             </div>
          
         </div>

         <div class="clearboth"></div>

         <br/>
         <br/>

         <div class="nt-button">
          <?php 
               if ( ! empty( $button ) || ! empty( $buttonlink )){
                echo '<a href="'.$buttonlink.'" class="btn btn-default" > '.$button. '</a>';

            }
  
         ?>
          </div>

          </div> <!--.style1-->
        
    
    
  </div> <!--.nt-service-widget-->