<?php get_header(); // Gets header.php ?>

	<section id="single-project">
		<?php if(have_posts()) : while(have_posts()) : the_post(); // This is where the WordPress Loop starts ?>
			<?php 
				$image = get_field('project_masthead');
				if( !empty($image) ): 							
			?>
			<div class="masthead width--100vw height--full display--inline-block bg-size--cover bg-position--centercenter bg-repeat--norepeat padding-xsu-top--large padding-lgu-top--xlarge padding-xsu-right--medium padding-xsu-bottom--medium padding-xsu-left--medium" style="background-image:url('<?php echo $image['url']; ?>');">
				<div id="masthead-type" class="masthead-type">
					<div class="col col-small--12 col-medium--10 col-large--7 col-xlarge--5">
						<h1 class="text-header--bold text-xsu-header--xlarge text-lgu-header--xxlarge display--table color--white single-project-border"><?php the_title(); ?></h1>
						<p class="text-body--bold text-xsu-body--medium text--uppercase display--table clear--both color--white single-project-border"><?php the_field('project_categories'); ?></p>
					</div>
					<div class="col col-small--12 col-medium--10 col-large--5 col-xlarge--4">
						<div class="text-body--book text-xsu-body--medium padding-xsu-top--medium padding-xsu-bottom--small color--white"><?php the_content(); ?></div>
						<?php if( get_field('project_web_url') ): ?>
							<a class="text-body--bold text-xsu-body--medium text--uppercase text--underline color--white" href="<?php the_field('project_web_url'); ?>" target="_blank">View Project</a>
						<?php endif; ?>
						<?php if( get_field('project_credits') ): ?>
							<p class="text-body--book text-xsu-body--medium display--table clear--both padding-xsu-top--medium color--white"><small>*<?php the_field('project_credits'); ?></small></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<div id="content" class="content padding-xsu-top--medium padding-lgu-top--large padding-lgu-right--large padding-lgu-left--large">
				<div class="row">
					<div class="project-information-button position--fixed">
						<button class="button--blue"><p class="text-body--bold text--uppercase">Info</p></button>
					</div>
					<div class="project-information z-index--99 position--fixed">
						<a class="information-close cursor--pointer overflow--hidden display--inline-block position--absolute"></a>
						<div class="header-type padding-xsu-bottom--medium">
							<h2 class="text-header--bold text-xsu-header--large color--blue"><?php the_title(); ?></h2>
							<p class="text-body--bold text-xsu-body--medium text--uppercase color--darkgray"><?php the_field('project_categories'); ?></p>
						</div>
						<div class="description">
							<div class="text-body--book text-xsu-body--medium color--darkgray"><?php the_content(); ?></div>
						</div>					
						<?php if( get_field('project_web_url') ): ?>
							<a class="text-body--bold text-xsu-body--medium text--uppercase text--underline padding-xsu-top--small color--darkgray" href="<?php the_field('project_web_url'); ?>" target="_blank">View Project</a>
						<?php endif; ?>
						<?php if( get_field('project_credits') ): ?>
							<p class="text-body--book text-xsu-body--medium padding-xsu-top--medium color--darkgray"><small>*<?php the_field('project_credits'); ?></small></p>
						<?php endif; ?>
					</div>
					<div class="gallery col col-small--12">
						<?php 
							$images = get_field('project_images');
							if( $images ): ?>
						    <ul>
						        <?php foreach( $images as $image ): ?>
						            <li>
						                <a href="<?php echo $image['url']; ?>">
						                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
						                </a>
						                <p><?php echo $image['caption']; ?></p>
						            </li>
						        <?php endforeach; ?>
						    </ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endwhile; endif; // This is where the WordPress Loop ends ?>
	</section>

<?php get_footer(); // Gets footer.php ?>