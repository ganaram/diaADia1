		<!-- Header -->
        <header id="header">
			<a class="logo" href="index.html">Industrious</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<?php
			wp_nav_menu(array(
				'theme_location'	=>'main-menu',
				'depth'				=>2,
				'container_clas'	=>'collapse navbar-collapse',
				'container_id'		=>'bs-example-navbar-collapse-1',
				'menu_class'		=>'navbar-nav ml-auto',
				'walker'			=>new WP_Bootstrap_Navwalker()
			));
			?>
            <?php wp_head()?>
