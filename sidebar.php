<div id="sidebar">
<h2 ><?php _e('Categories'); ?></h2>
<ul id="categories">
<!--<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>-->
<?php 
	$categories = get_categories();
	foreach($categories as $category) {
	   echo '<div class="l-category"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>'.'<span class="cat-counter"><span>'.$category->count.'</span></span>'.'</div>';
	}
	
?>
</ul>
<h2 ><?php _e('Tags'); ?></h2>
<ul id="categories">

<?php 
	$tags = get_tags();
	
	foreach($tags as $tag) {
	   echo '<span class="article-tag"><a href="' . get_category_link($tag->term_id) . '">' . $tag->name . '</a></span>';
	}
	
?>
</ul>

<h2>Последни постове</h2>
<ul id="latest-posts">
<?php
	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	
	foreach( $recent_posts as $recent ):?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]), 'thumbnail' ); ?>
		<li><img class="image-aside" src="<?php echo $url; ?>"><a href="<?php echo get_permalink($recent["ID"]);?>"><?php echo $recent["post_title"]; ?></a> </li> 
		<div class="clearFloat"></div>
		
		
	<?php endforeach;
	wp_reset_query();?>

</ul>
</div>