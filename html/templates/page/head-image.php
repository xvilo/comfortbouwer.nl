			<div class="container">
				<section class="page-header__image" style="background-image: url('<?php echo get_field('afbeelding')['url'] ?>')">
					<h1 class="page-header--title">
						<?php 
						if(get_field('title') == 'no'){ 
							echo get_field('title-text');
						}else{
							the_title();
						}
						?></h1>
				</section>
			</div>