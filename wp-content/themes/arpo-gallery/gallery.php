<?php 
/*
    template name: گالری
*/
    get_header();
    get_template_part('background','img');
    get_template_part('main','menu');
 ?>
 <div class="container">
	<header class="pages">
		<h1><?php the_title(); ?></h1>
    </header>
	<div id="main">
	<?php
	
	$argus=array(
		'numberposts' =>'6',
		'orderby '=> 'menu_order', // This ensures images are in the order set in the page media manager  
        'order'=> 'ASC',  
        'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos  
        'post_parent' => $post->ID, // Important part - ensures the associated images are loaded 
        'post_status' => null, 
        'post_type' => 'attachment'
        );  
        $images = get_children( $argus );

		if($images){
			
			$number=0;
			foreach ($images as $img) {
				
				echo "<section class='right album w5'>";
					echo "<h3>$img->post_title</h3>";
					$img_small = wp_get_attachment_image($img->ID,'thumbnail');
					$img_full_src=wp_get_attachment_image_src($img->ID,'large');
					echo "<a href='$img_full_src[0]' title='$img->post_title'>$img_small</a>";
					echo "<p>$img->post_content</p>";
				echo "</section>";
				$number++;

				if(($number%3)==0)
					echo "<div class='clear'></div>";

			}
			echo next_posts_link('« Previous Post' );

		}else echo 'not';
	
	?>
    </div><!--main-->
    <div class="clear"></div>
<?php 
	get_footer();
 ?>