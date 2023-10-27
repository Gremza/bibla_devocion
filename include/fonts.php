<?php
$fontih1=get_theme_mod( 'gr_h1_select_settings', 'Kalam' );
$fontih2=get_theme_mod( 'gr_h2_select_settings', 'Kalam' );
$fontih3=get_theme_mod( 'gr_h3_select_settings', 'Kalam' );
$fontih4=get_theme_mod( 'gr_h4_select_settings', 'Kalam' );
$fontihcontent=get_theme_mod( 'gr_font_content_select_settings', 'Kalam' );
$fontimenu=get_theme_mod( 'gr_font_select_settings', 'Kalam' );
$fonttop=get_theme_mod( 'gr_font_top_select_settings', 'Kalam' );
$fontchoice =FALSE; 

 
switch ($fontih1) { 
  case 'Anton':  
    $fh1= "Anton";
    $fontchoiceh1 =FALSE;
    break;
  case "Raleway":
   $fh1=  "Raleway";
   $fontchoiceh1 =FALSE;
    break;
    case "Lato":
      $fh1=  "Lato";
      $fontchoiceh1 =FALSE;
       break;   
  case "Mukta":
    $fh1=  "Mukta";
    $fontchoiceh1 =FALSE;
    break;
  case "Monda":
    $fh1=  "Monda";
    $fontchoiceh1 =FALSE;
    break;
  case "Mukta":
    $fh1=  "Mukta";
    $fontchoiceh1 =FALSE;
    break;
  case "Staatliches":
    $fh1=  "Staatliches";
    $fontchoiceh1 =FALSE;
    break;
  case "Kalam":
    $fh1=  "Kalam";
    $fontchoiceh1 =FALSE;
    break;
  case "Merienda":
    $fh1=  "Merienda";
    $fontchoiceh1 =FALSE;
    break;
  case "Roboto":
    echo "Roboto";
    $fontchoiceh1 =FALSE;
    break;
  case "Bebas+Neue&display=swap":
    $fh1=  "Bebas Neue";
    $fontchoiceh1 =FALSE;
    break;
  case "Montserrat:wght@100&display=swap":
    $fh1=  "Montserrat";
    $fontchoiceh1 =FALSE;
    break;
  case "Cinzel+Decorative&display=swap":
    $fh1=  "Cinzel Decorative";
    $fontchoiceh1 =FALSE;
    break;
case "corporates":
    $fh1=  "corporates";
    $fontchoiceh1 =TRUE;
    break;  
case "corporatea":
    $fh1=  "corporatea";
    $fontchoiceh1 =TRUE;
    break;  	          
case "Open+Sans:wght@300;400;500;800&display=swap":
    $fh1=  "Open Sans";
    $fontchoiceh1 =FALSE;
    break;  	     
  default:
    $fh1=  "Kalam";
    $fontchoiceh1 =FALSE;
} 


switch ($fontih2) { 
  case 'Anton':  
    $fh2= "Anton";
    $fontchoiceh2 =FALSE;
    break;
  case "Raleway":
   $fh2=  "Raleway";
   $fontchoiceh2 =FALSE;
    break;
    case "Lato":
      $fh2=  "Lato";
      $fontchoiceh2 =FALSE;
       break;
  case "Mukta":
    $fh2=  "Mukta";
    $fontchoiceh2 =FALSE;
    break;
  case "Monda":
    $fh2=  "Monda";
    $fontchoiceh2 =FALSE;
    break;
  case "Mukta":
    $fh2=  "Mukta";
    $fontchoiceh2 =FALSE;
    break;
  case "Staatliches":
    $fh2=  "Staatliches";
    $fontchoiceh2 =FALSE;
    break;
  case "Kalam":
    $fh2=  "Kalam";
    $fontchoiceh2 =FALSE;
    break;
  case "Merienda":
    $fh2=  "Merienda";
    $fontchoiceh2 =FALSE;
    break;
  case "Roboto":
    echo "Roboto";
    $fontchoiceh2 =FALSE;
    break;
  case "Bebas+Neue&display=swap":
    $fh2=  "Bebas Neue";
    $fontchoiceh2 =FALSE;
    break;
  case "Montserrat:wght@100&display=swap":
    $fh2=  "Montserrat";
    $fontchoiceh2 =FALSE;
    break;
  case "Cinzel+Decorative&display=swap":
    $fh2=  "Cinzel Decorative";
    $fontchoiceh2 =FALSE;
    break;
case 'corporates':
    $fh2=  "corporates";
    $fontchoiceh2 =TRUE;
    break;  
case 'corporatea':
    $fh2=  "corporatea";
    $fontchoiceh2 =TRUE;
    break;  	          
    case "Open+Sans:wght@300;400;500;800&display=swap":
      $fh2=  "Open Sans";
      $fontchoiceh2 =FALSE;
      break;     
  default:
    $fh2=  "Kalam";
    $fontchoiceh2 =FALSE;
}

switch ($fontih3) { 
  case 'Anton':  
    $fh3= "Anton";
    $fontchoiceh3 =FALSE;
    break;
  case "Raleway":
   $fh3=  "Raleway";
   $fontchoiceh3 =FALSE;
    break;
    case "Lato":
      $fh3=  "Lato";
      $fontchoiceh3 =FALSE;
       break;
  case "Mukta":
    $fh3=  "Mukta";
    $fontchoiceh3 =FALSE;
    break;
  case "Monda":
    $fh3=  "Monda";
    $fontchoiceh3 =FALSE;
    break;
  case "Mukta":
    $fh3=  "Mukta";
    $fontchoiceh3 =FALSE;
    break;
  case "Staatliches":
    $fh3=  "Staatliches";
    $fontchoiceh3 =FALSE;
    break;
  case "Kalam":
    $fh3=  "Kalam";
    $fontchoiceh3 =FALSE;
    break;
  case "Merienda":
    $fh3=  "Merienda";
    $fontchoiceh3 =FALSE;
    break;
  case "Roboto":
    echo "Roboto";
    $fontchoiceh3 =FALSE;
    break;
  case "Bebas+Neue&display=swap":
    $fh3=  "Bebas Neue";
    $fontchoiceh3 =FALSE;
    break;
  case "Montserrat:wght@100&display=swap":
    $fh3=  "Montserrat";
    $fontchoiceh3 =FALSE;
    break;
  case "Cinzel+Decorative&display=swap":
    $fh3=  "Cinzel Decorative";
    $fontchoice =FALSE;
    break;
case 'corporates':
    $fh3=  "corporates";
    $fontchoiceh3 =TRUE;
    break;  
case 'corporatea':
    $fh3=  "corporatea";
    $fontchoiceh3 =TRUE;
    break;  	          
    case "Open+Sans:wght@300;400;500;800&display=swap":
      $fh3=  "Open Sans";
      $fontchoiceh3 =FALSE;
  default:
    $fh3=  "Kalam";
    $fontchoiceh3 =FALSE;
}

switch ($fontih4) { 
  case 'Anton':  
    $fh4= "Anton";
    $fontchoiceh4 =FALSE;
    break;
  case "Raleway":
   $fh4=  "Raleway";
   $fontchoiceh4 =FALSE;
    break;
    case "Lato":
      $fh4=  "Lato";
      $fontchoiceh4 =FALSE;
       break;
  case "Mukta":
    $fh4=  "Mukta";
    $fontchoiceh4 =FALSE;
    break;
  case "Monda":
    $fh4=  "Monda";
    $fontchoiceh4 =FALSE;
    break;
  case "Mukta":
    $fh4=  "Mukta";
    $fontchoiceh4 =FALSE;
    break;
  case "Staatliches":
    $fh4=  "Staatliches";
    $fontchoiceh4 =FALSE;
    break;
  case "Kalam":
    $fh4=  "Kalam";
    $fontchoiceh4 =FALSE;
    break;
  case "Merienda":
    $fh4=  "Merienda";
    $fontchoiceh4 =FALSE;
    break;
  case "Roboto":
    echo "Roboto";
    $fontchoiceh4 =FALSE;
    break;
  case "Bebas+Neue&display=swap":
    $fh4=  "Bebas Neue";
    $fontchoiceh4 =FALSE;
    break;
  case "Montserrat:wght@100&display=swap":
    $fh4=  "Montserrat";
    $fontchoiceh4 =FALSE;
    break;
  case "Cinzel+Decorative&display=swap":
    $fh4=  "Cinzel Decorative";
    $fontchoiceh4 =FALSE;
    break;
case 'corporates':
    $fh4=  "corporates";
    $fontchoiceh4 =TRUE;
    break;  
case 'corporatea':
    $fh4=  "corporatea";
    $fontchoiceh4 =TRUE;
    break;  	        
    case "Open+Sans:wght@300;400;500;800&display=swap":
      $fh4=  "Open Sans";
      $fontchoiceh4 =FALSE;  
  default:
    $fh4=  "Kalam";
    $fontchoiceh4 =FALSE;
}
  
switch ($fontihcontent)  { 
      case 'Anton':  
        $fh5= "Anton";
        $fontchoicecontent =FALSE;
        break;
      case "Raleway":
       $fh5=  "Raleway";
       $fontchoicecontent =FALSE;
        break;
        case "Lato":
          $fh5=  "Lato";
          $fontchoicecontent =FALSE;
           break;
      case "Mukta":
        $fh5=  "Mukta";
        $fontchoicecontent =FALSE;
        break;
      case "Monda":
        $fh5=  "Monda";
        $fontchoicecontent =FALSE;
        break;
      case "Mukta":
        $fh5=  "Mukta";
        $fontchoicecontent =FALSE;
        break;
      case "Staatliches":
        $fh5=  "Staatliches";
        $fontchoicecontent =FALSE;
        break;
      case "Kalam":
        $fh5=  "Kalam";
        $fontchoicecontent =FALSE;
        break;
      case "Merienda":
        $fh5=  "Merienda";
        $fontchoicecontent =FALSE;
        break;
      case "Roboto":
        echo "Roboto";
        $fontchoicecontent =FALSE;
        break;
      case "Bebas+Neue&display=swap":
        $fh5=  "Bebas Neue";
        $fontchoicecontent =FALSE;
        break;
      case "Montserrat:wght@100&display=swap":
        $fh5=  "Montserrat";
        $fontchoicecontent =FALSE;
        break;
      case "Cinzel+Decorative&display=swap":
        $fh5=  "Cinzel Decorative";
        $fontchoicecontent =FALSE;
        break;
	case 'corporates':
        $fh5=  "corporates";
        $fontchoicecontent =TRUE;
        break;  
  case 'corporatea':
        $fh5=  "corporatea";
        $fontchoicecontent =TRUE;
        break;  	          
        case "Open+Sans:wght@300;400;500;800&display=swap":
          $fh5=  "Open Sans";
          $fontchoicecontent =FALSE;  
      default:
        $fh5=  "Kalam";
        $fontchoicecontent =FALSE;

  }
     
switch ($fontimenu) { 
  case 'Anton':  
    $fh6= "Anton";
    $fontchoicemenu =FALSE;
    break;
    case "Raleway":
      $fh6=  "Raleway";
      $fontchoicemenu =FALSE;
       break;
       case "Lato":
        $fh6=  "Lato";
        $fontchoicemenu =FALSE;
         break;
  case "Mukta":
    $fh6=  "Mukta";
    $fontchoicemenu =FALSE;
    break;
  case "Monda":
    $fh6=  "Monda";
    $fontchoicemenu =FALSE;
    break;
  case "Mukta":
    $fh6=  "Mukta";
    $fontchoicemenu =FALSE;
    break;
  case "Staatliches":
    $fh6=  "Staatliches";
    $fontchoicemenu =FALSE;
    break;
  case "Kalam":
    $fh6=  "Kalam";
    $fontchoicemenu =FALSE;
    break;
  case "Merienda":
    $fh6=  "Merienda";
    $fontchoicemenu =FALSE;
    break;
  case "Roboto":
    echo "Roboto";
    $fontchoicemenu =FALSE;
    break;
  case "Bebas+Neue&display=swap":
    $fh6=  "Bebas Neue";
    $fontchoicemenu =FALSE;
    break;
  case "Montserrat:wght@100&display=swap":
    $fh6=  "Montserrat";
    $fontchoicemenu =FALSE;
    break;
  case "Cinzel+Decorative&display=swap":
    $fh6=  "Cinzel Decorative";
    $fontchoicemenu =FALSE;
    break;
case 'corporates':
    $fh6=  "corporates";
    $fontchoicemenu =TRUE;
    break;  
case 'corporatea':
    $fh6=  "corporatea";
    $fontchoicemenu =TRUE;
    break;  	    
    case "Open+Sans:wght@300;400;500;800&display=swap":
      $fh6=  "Open Sans";
      $fontchoicemenu =FALSE;        
  default:
    $fh6=  "Kalam";
    $fontchoicemenu =FALSE;
  }

  switch ($fonttop) { 
    case 'Anton':  
      $fh7= "Anton";
      $fontchoicetop =FALSE;
      break;
    case "Raleway":
     $fh7=  "Raleway";
     $fontchoicetop =FALSE;
      break;
      case "Lato":
        $fh7=  "Lato";
        $fontchoicetop =FALSE;
         break;
    case "Mukta":
      $fh7=  "Mukta";
      $fontchoicetop =FALSE;
      break;
    case "Monda":
      $fh7=  "Monda";
      $fontchoicetop =FALSE;
      break;
    case "Mukta":
      $fh7=  "Mukta";
      $fontchoicetop =FALSE;
      break;
    case "Staatliches":
      $fh7=  "Staatliches";
      $fontchoicetop =FALSE;
      break;
    case "Kalam":
      $fh7=  "Kalam";
      $fontchoicetop =FALSE;
      break;
    case "Merienda":
      $fh7=  "Merienda";
      $fontchoicetop =FALSE;
      break;
    case "Roboto":
      echo "Roboto";
      $fontchoicetop =FALSE;
      break;
    case "Bebas+Neue&display=swap":
      $fh7=  "Bebas Neue";
      $fontchoicetop =FALSE;
      break;
    case "Montserrat:wght@100&display=swap":
      $fh7=  "Montserrat";
      $fontchoicetop =FALSE;
      break;
    case "Cinzel+Decorative&display=swap":
      $fh7=  "Cinzel Decorative";
      $fontchoicetop =FALSE;
      break;
  case 'corporates':
      $fh7=  "corporates";
      $fontchoicetop =TRUE;
      break;  
  case 'corporatea':
      $fh7=  "corporatea";
      $fontchoicetop =TRUE;
      break;  	          
      case "Open+Sans:wght@300;300;400;500;800&display=swap":
        $fh7=  "Open Sans";
        $fontchoicetop =FALSE;  
    default:
      $fh7=  "Kalam";
      $fontchoicetop =FALSE;
  } 







?>