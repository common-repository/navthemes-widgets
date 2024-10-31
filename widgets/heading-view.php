<?php 
/*
	$heading = For Heading
	$subheading =  For Subheading
  $content = For Content
*/


  echo '<div>';
        if ( ! empty( $heading )){
          echo '<h2>'.$heading.'</h2>';
      }
      
    if ( ! empty( $subheading )){
            echo '<h1>'.$subheading.'</h1>';
        }
      if ( ! empty( $content )){
          echo '<p>'.$content.'</p>';
      }
    echo '</div>';  
?>

