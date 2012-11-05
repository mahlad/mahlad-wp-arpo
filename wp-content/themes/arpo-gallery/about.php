<?php 
/*
    template name: بیوگرافی
*/
    get_header();
    get_template_part('background','img');
    get_template_part('main','menu');

 ?>
 <div class="container">
    <header class="pages">
        <?php 
        echo '<h1>'.$post->post_title.'</h1>';
            echo '</header>';
            echo"<div id='main'>";
            echo $post->post_content;
        echo "<div class='clear'></div>";
         ?>
         </div><!--main-->
    <div class="clear"></div>
<?php 
    get_footer();
 ?>
    
