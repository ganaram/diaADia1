<!-- Footer -->
<footer id="footer">
				<div class="inner">
					<div class="content">	
					<?php
			wp_nav_menu(array(
				'theme_location'	=>'footer-menu',
				'depth'				=>2,
				'container_clas'	=>'collapse navbar-collapse',
				'container_id'		=>'bs-example-navbar-collapse-1',
				'menu_class'		=>'navbar-nav ml-auto',
				'walker'			=>new WP_Bootstrap_Navwalker()
			));
			?>
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
                    </div>
                    
                    <?php wp_footer(); ?>
				</div>
			</footer>