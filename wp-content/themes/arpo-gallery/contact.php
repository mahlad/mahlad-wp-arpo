<?php 
	/*
    template name: تماس
*/
    get_header();
    get_template_part('background','img');
    get_template_part('main','menu');
?>
<div class="container">
	<header class="pages">
		<h1><?php the_title(); ?></h1>
    </header>
	<div id="main" style='color:#fff;'>
	<?php 
    the_post();
    echo $post->post_content;
  ?>
	</div><!--main-->
    <div class="clear"></div>
<?php 
	get_footer();
 ?>
 <form action="contact_submit" method="get" accept-charset="utf-8">
 	contact_submit
 	get
 </form>