<div class="out">
	<header class="general">
    	<article>
        	<img class="ml2" src="<?php bloginfo('template_url'); ?>/images/logo.png">
            <img class="ml1" src="<?php bloginfo('template_url'); ?>/images/logo-text.png">
            
        <?php 
            $args=array(
                'menu'     =>'منو اصلی',
                'echo'     =>'true',
                'container'=>'nav',
                'container_class'=>'headernav',
                'link_before'=>'<h3>',
                'depth'      => 3,
                'link_after' =>'</h3>'
                );
            wp_nav_menu($args);
         ?>
         
            <!-- <nav class="headernav">
            	<ul>
                	<li>
                    	<a href="about.php">
                    		<h3>بیوگرافی من</h3>
                    		<span>آشنایی با طراح</span>
                    	</a>
                    </li>
                    <li>
                    	<a href="">
                    		<h3>گالری </h3>
                            <span>آرشیو طرح ها</span>
                    	</a>
                    	<ul>
                        	<li><a href="album.php"> 1نام آلبوم </a></li>
                            <li><a href="album.php">نام آلبوم 2</a></li>
                            <li><a href="album.php">نام آلبوم 3</a></li>
                        </ul>
                    </li>
                    <li>
                    	<a href="">
                        	<h3>تماس با من</h3>
                            <span>ارتباط</span>
                        </a>
                    </li>
                   
                </ul>
            </nav> -->
        </article>
        
    </header>
    