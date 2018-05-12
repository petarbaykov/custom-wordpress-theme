 <?php get_header(); ?>
	<div class="container">
		<main class="col col-main ">
			<?php while ( have_posts() ) : the_post(); ?>

				<article class="article-post">
					<div class="article-header ">
						<?php if ( has_post_thumbnail() ) : ?>
						
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
							<div class="article-image article-image-in-post" style="background-image:url(<?php echo $url?>)"></div>
						<?php else : ?>
							<div class="article-image article-image-in-post default-image-post"></div>
						<?php endif ?>
						
						<h1><?php the_title(); ?></h1>
					</div>
					
					
						
						<div class="article-content">
							<?php the_content(__('(more...)')); ?>
						</div>
						<div class="article-footer">
							<?php $tags = wp_get_post_tags($post->ID); ?>
							<div class="tags">
								<span>Tags</span> 
								<?php foreach($tags as $tag):?>
								<a href="<?php echo $tag->slug;?>"><span class="article-tag"><?php echo $tag->name;?></span></a>
								
								<?php endforeach; ?>
							</div>
							
						</div>
					
				</article>
				<?php endwhile; ?>
			</main>
			<aside class="col col-small">
				<?php get_sidebar(); ?>
			</aside>
			<div class="clearFloat"></div>
		</div>
<?php get_footer(); ?>