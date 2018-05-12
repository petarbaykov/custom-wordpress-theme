<?php get_header(); ?>
<div class="container mainContainer">
	<main class="col col-main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article>
			<div class="article-header">
					<a href="<?php the_permalink(); ?>" class="the_title"><h1><?php the_title(); ?></h1></a>
					<?php if ( has_post_thumbnail() ) : ?>
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
						<img class="article-image" src="<?php echo $url ?>">
					
					<?php endif ?>
				   
				
			</div>
			<div class="article-content">
			
				<?php the_excerpt(); ?>
			</div>
			<div class="article-footer">
				<?php $tags = wp_get_post_tags($post->ID); ?>
				<div class="tags">
					<span>Tags</span> 
					<?php foreach($tags as $tag):?>
					<a href="<?php echo $tag->slug;?>"><span class="article-tag"><?php echo $tag->name;?></span></a>
					
					<?php endforeach; ?>
				</div>
				<a class="continueReading " href="<?php the_permalink(); ?>">Read more</a>
			</div>
		</article>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	</main>
	<aside class="col col-small">
		<?php get_sidebar(); ?>
	</aside>
	<div class="clearFloat"></div>
</div>
<?php get_footer(); ?>