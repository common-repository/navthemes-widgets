<?php 
  /*
  $image =  For Image
  $designation = For Designation
  $name =  For Name
  $content= For Content
  $fblink =  For Facebook Link
  $twitterlink =  For Twitter Link
  $linkedin =  For Linkedin Link
*/
?>
  
<div class="nt-team-widget"> 

        <div class="nt-col">
          <div class="nt-image">
            <?php if ( ! empty( $image )){
                  echo  '<img src="'. $image .');" border="0"> ';
                } ?>
            </div>

       <?php if ( ! empty( $name )){
        
        echo  '<h3 class="widget-title text-center">'.$name.'</h3>';} ?>   

        <?php if ( ! empty( $designation )){
        
        echo  '<h3 class="widget-title text-center">'.$designation.'</h3>';} ?> 

        <div class="row">

             <div class="content text-center">
                  <?php  if ( ! empty( $content )) echo $content; ?>
             </div>
          
         </div>

         <div class="clearboth"></div>


         <br/>
         <br/>

         <div class="nt-button">
          <div class="nt-sociallinks text-center">
             <?php if ( ! empty( $fblink )){ ?>
                <a href="<?php echo $fblink; ?>" target="_blank">
                    <i id="social-fb" class="fa fa-facebook-square fa-3x social"></i>
                </a>
              <?php } ?>

              <?php if ( ! empty( $twitterlink )){ ?>
                <a href="<?php echo $twitterlink; ?>" target="_blank">
                    <i id="social-tw" class="fa fa-twitter-square fa-3x social"></i>
                </a>
              <?php } ?>

              <?php if ( ! empty( $linkedin )){ ?>
                <a href="<?php echo $linkedin; ?>" target="_blank">
                    <i id="social-em" class="fa fa-instagram fa-3x social"></i>
                </a>
              <?php } ?>
            </div>
          </div>

          </div> <!--.style1-->
        
    
    
  </div> <!--.nt-service-widget-->


       <?php 
        // This is where you run the code and display the output
?>