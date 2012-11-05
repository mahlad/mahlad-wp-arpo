<?php 
echo"<div class='bg-slide'>";
	// $args=array(
	// 	'post_type' => 'attachment',
 //   'numberposts' => -1,
 //   'post_status' => null,
 //   'post_parent' => $post->ID
	// 	);
	// echo $post->ID;
	// $attachments=get_posts($args);
	// if($attachments){
	// 	foreach ($attachments as $att) {
	// 		$img=wp_get_attachment_image($att->ID,'full');
	// 		echo $img;
	// 	}
	// }else echo 'not background image';
$metas=get_post_custom($post->ID);
if($metas['bg-img']){
	foreach ($metas['bg-img'] as $meta) {
		echo wp_get_attachment_image($meta,'large');
	}
}
echo "</div>";	
	
 ?>
 
	

