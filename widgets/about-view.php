<?php 
/*
  
  /*
    About View File 

  $image = For image
	$heading = For Heading
	$subheading =  For Subheading
  $content = For content
  $button = For button
  $buttonlink = For buttonlink
  $logo = For logo
  
*/?>

<div class="nt-about-widget"> 

<?php 
   
    if($style=='style1'){ ?>
 
        <div class="style1">

        <?php if ( ! empty( $image )){
              echo  '<img src="'. $image .');" border="0"> ';
            } 

      if ( ! empty( $heading )){
        
        echo  '<h3 class="widget-title">'.$heading.'</h3>';} ?>   

        <div class="row">

             <div class="symbol float-left">
              <?php 
                 if ( ! empty( $logo )){ ?>
                    <img src="<?php echo $logo; ?>" border="0">
                   <?php  }  
              ?>
             </div>

             <div class="content float-left">
                  <?php  if ( ! empty( $content )) echo $content; ?>
             </div>
          
         </div>

         <div class="clearboth"></div>


         <br/>
         <br/>

          <?php 
               if ( ! empty( $button ) || ! empty( $buttonlink )){
                echo '<a href="'.$buttonlink.'" class="btn btn-default" > '.$button. '</a>';

            }
  
         ?>

          </div> <!--.style1-->
        

        <?php 
        
          }

     if($style=='style2'){ ?>
 
        <div class="style2">

        <?php if ( ! empty( $image )){
              echo  '<img src="'. $image .');" border="0"> ';
            } 

      if ( ! empty( $heading )){
        
        echo  '<h3 class="widget-title">'.$heading.'</h3>';} ?>   

        <div class="row">

             <div class="content float-left">
                  <?php  if ( ! empty( $content )) echo $content; ?>
             </div>

             <div class="symbol float-left">
              <?php 
                 if ( ! empty( $logo )){ ?>
                    <img src="<?php echo $logo; ?>" border="0">
                   <?php  }  
              ?>
             </div>
          
         </div>

         <div class="clearboth"></div>


         <br/>
         <br/>

          <?php 
               if ( ! empty( $button ) || ! empty( $buttonlink )){
                echo '<a href="'.$buttonlink.'" class="btn btn-default" > '.$button. '</a>';

            }
  
         ?>

          </div> <!--.style1-->
        

        <?php 
        
          }




        ?>
    
  </div> <!--.nt-about-widget-->
