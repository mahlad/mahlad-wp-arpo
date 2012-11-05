<?php 
	add_theme_support('menus');
	//register_widget();
	register_sidebar(array(
		'name' => 'لینک ها',
		'id' => 'links',
		'description' => 'bottom part',
		'before_widget' => '<section class="right padleft  w5">',
		'after_widget' => "<div class='clear'></div>
            </section>\n",
		'before_title' => '<h3>',
		'after_title' => "</h3>\n"
	));
register_sidebar(array(
		'name' => 'پیام هفته',
		'id' => 'week',
		'description' => 'text in a week',
		'before_widget' => '<section class="right padleft  w5">',
		'after_widget' => "<div class='clear'></div>
            </section>\n",
		'before_title' => '<h3>',
		'after_title' => "</h3>\n"
	));
register_sidebar(array(
		'name' => 'کپی رایت',
		'id' => 'copyright',
		'description' => 'copyright',
		'before_widget' => '<div class="copyright">',
		'after_widget' => "</div>",
		
	));
