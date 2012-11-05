    <div class="dark">
        <!-- <div class="imgtext"></div> -->
    </div>
    <footer>
        <div class="bottom">
            <?php dynamic_sidebar('پیام هفته'); ?>
            <?php dynamic_sidebar('لینک ها'); ?>
            
          <div class="clear"></div>  
        </div>
        
            <?php dynamic_sidebar('کپی رایت');
                if (current_user_can('administrator')){
                global $wpdb;
                echo "<pre>";
                print_r($wpdb->queries);
                echo "</pre>";
}

             ?>
        
        <div class="clear"></div>
    </footer>
    <div class="clear"></div>
</div><!--container-->
<div class="clear"></div>
</div><!--out-->
</body>
</html>