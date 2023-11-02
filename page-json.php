<?php /* Template Name: Json Page */ 
header('Content-type: application/json; charset=UTF-8');
?>   
<?php
  $today = getdate();
    $args = array(
       
        'posts_per_page' => 1,
        'post_type' => 'post',
        'date_query' => array(
            array(
              'year'  => $today['year'],
              'month' => $today['mon'],
              'day'   => $today['mday'],
            ),
          ),
        'post_status' => 'publish',
    );
query_posts( $args );
while ( have_posts() ) : the_post(); 
global $post;
$tema = get_field( "tema1" );
$vargu = get_field( "vargu1" );
$titulli_vargut = get_field( "titulli_vargut1" );
$bg_image = get_field( "bg_image1" );    
$ngjyra_e_tekstit = get_field( "ngjyra_e_tekstit" );
$link_vargu = get_field('link_vargu1'); 
$video= get_field('video1'); 
$artikull= get_field('devotion'); 
$text= get_field('text1'); 
$img_verso_of_the_day=get_field('img_verso_of_the_day'); 
 ?> 
{"todayverse":{         
	"title": "<?php if (get_field('tema1')) {  echo $tema; }?>",
	"content": "<?php if (get_field('vargu1')) {  echo $vargu; }?>",
	"bg_image": "<?php if (get_field('bg_image1')) {  echo $bg_image; }?>", 
	"txt_color": "<?php if (get_field('ngjyra_e_tekstit1')) {  echo $ngjyra_e_tekstit; }?>", 
	<?php if( $link_vargu ['libri_emri'] !=':' ) : echo '"book_name":"'.$link_vargu['libri_emri'].'",'; endif; ?>
	<?php if( $link_vargu ['nr_kapitulli'] !=':' ) : echo '"chapter_name":"'.$link_vargu['nr_kapitulli'].'",'; endif; ?>
	<?php if( $link_vargu ['nr_vargu'] !=':' ) :   echo '"verse_number":"'.$link_vargu['nr_vargu'].'"'; endif; ?>
	
},

"stories":[
	
	{
	"type": "verse",
	"content": "<?php if (get_field('vargu1')) {  echo $vargu; }?>",
	<?php if( $link_vargu ['libri_emri'] !=':' ) : echo '"book_name":"'.$link_vargu['libri_emri'].'",'; endif; ?>
	<?php if( $link_vargu ['nr_kapitulli'] !=':' ) : echo '"chapter_name":"'.$link_vargu['nr_kapitulli'].'",'; endif; ?>
	<?php if( $link_vargu ['nr_vargu'] !=':' ) :   echo '"verse_number":"'.$link_vargu['nr_vargu'].'",'; endif; ?>
	"story_description": "Vargu i dites"
	} 
,<?php if ($video['video_url']):?>	
	{
	"type": "video", 
 	<?php if( $video= get_field('video1') ) :   echo '"link": "'.$video['video_url'].'"'; endif; ?>
	},
	<?php endif;?><?php if ($artikull['content']):?>	
	{
	"type": "devotion",
	<?php if( $artikull= get_field('devotion') ) :   echo '"title": "'.$artikull['title'].'",'; endif; ?>
	<?php if( $artikull= get_field('devotion') ) :   echo '"content": '.   json_encode($artikull['content']).','; endif; ?>
 <?php if( $artikull= get_field('devotion') ) :   echo '"bg_color": "'.$artikull['bg_color'].'",'; endif; ?>
 <?php if( $artikull= get_field('devotion') ) :   echo '"txt_color": "'.$artikull['txt_color'].'",'; endif; ?>
 	"slug": "<?php global $post; echo $post_slug=$post->post_name;?>",
	"story_description": "Devocion"
	},<?php endif;?>
<?php if ($text['title']):?>
	{
	"type": "text",
 <?php if( $text= get_field('text1') ) :   echo '"title": "'.$text['title'].'",'; endif; ?>
 <?php if( $text= get_field('text1') ) :   echo '"content": '. json_encode($text['content']).','; endif; ?>
 <?php if( $text= get_field('text1') ) :   echo '"bg_color": "'.$text['bg_color'].'",'; endif; ?>
 <?php if( $text= get_field('text1') ) :   echo '"txt_color": "'.$text['txt_color'].'",'; endif; ?>
	"story_description": "Lutje"
	} 
,<?php endif;?><?php if ($img_verso_of_the_day):?>
	
	{
	"type": "image",
	"image": "<?php if (get_field('img_verso_of_the_day')) {  echo $img_verso_of_the_day; }?>"
	
	} <?php endif;?>		
	]}  
  <?php endwhile;?>