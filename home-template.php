<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>

	<div class="container headerContainer">
		<h1>Welcome to our page</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed leo convallis, egestas nisi gravida,
		efficitur felis. Pellentesque sit amet urna gravida, interdum nunc non, semper purus.
		In suscipit molestie lorem, pulvinar cursus ipsum luctus euismod. Nulla suscipit dictum arcu,
		quis luctus urna volutpat in. Duis feugiat nibh ac euismod tincidunt. Sed laoreet justo vitae leo
		varius gravida. Quisque sit amet ullamcorper purus. Suspendisse interdum maximus vestibulum. Fusce 
		in pellentesque turpis. Proin et diam ac magna feugiat varius. Praesent velit sapien, feugiat in sapien
		id, porttitor varius mi. Donec aliquet porta efficitur.</p>
		<div class="btn btn-learnmore">Learn more</div>
	</div>
</header>

<div class="services">
	<div class="container">
		<h1>Our services</h1>
		
		<div class="services-box">
			<div class="service-box">
				<div class="service-icon"><span class="fa fa-rocket"></span></div>
				<div class="service-content">
				<h2>Startup </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed leo convallis, egestas nisi gravida,
		efficitur felis. Pellentesque sit amet urna gravida, interdum nunc non, semper purus.
		In suscipit molestie lorem, pulvinar cursus ipsum luctus euismod. Nulla suscipit dictum arcu,
		quis luctus urna volutpat in. </p>
				</div>
				
			</div>
			<div class="service-box">
				<div class="service-icon"><span class="fa fa-line-chart"></span></div>
				<div class="service-content">
				<h2>Progress </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed leo convallis, egestas nisi gravida,
		efficitur felis. Pellentesque sit amet urna gravida, interdum nunc non, semper purus.
		In suscipit molestie lorem, pulvinar cursus ipsum luctus euismod. Nulla suscipit dictum arcu,
		quis luctus urna volutpat in. </p>
				</div>
			</div>
			<div class="service-box">
				<div class="service-icon"><span class="fa fa-cloud"></span></div>
				<div class="service-content">
				<h2>Everything in cloud </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed leo convallis, egestas nisi gravida,
		efficitur felis. Pellentesque sit amet urna gravida, interdum nunc non, semper purus.
		In suscipit molestie lorem, pulvinar cursus ipsum luctus euismod. Nulla suscipit dictum arcu,
		quis luctus urna volutpat in. </p>
				</div>
			</div>
			<div class="clearFloat"></div>
		</div>
	</div>
</div>
<div class="banner">
	<div class="container">
		<div class="box">
		<h1>Our offer</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed leo convallis, egestas nisi gravida,
		efficitur felis. Pellentesque sit amet urna gravida, interdum nunc non, semper purus.
		In suscipit molestie lorem, pulvinar cursus ipsum luctus euismod. Nulla suscipit dictum arcu,
		quis luctus urna volutpat in.
		</p>
		<div class="callToActionBtn">Start now</div>
		</div>
		<div class="box box_image">
			<img src="<?php echo get_template_directory_uri(); ?>/img/bussines.jpg">
		</div>
		<div class="clearFloat"></div>
	</div>
</div>
<div class="team">
	<div class="container">
		<h1>Our team</h1>
		
		<div class="team-container">
			<div class="team-box">
				<div class="team-member team-member1"></div>
				<h2>John John</h2>
				<p>CEO</p>
			</div>
			<div class="team-box">
				<div class="team-member team-member2"></div>
				<h2>John John</h2>
				<p>CTO</p>
			</div>
			<div class="team-box">
				<div class="team-member team-member3"></div>
				<h2>John John</h2>
				<p>Software engeener</p>
			</div>
			<div class="clearFloat"></div>
		</div>
	</div>
</div>
<div class="news">
	<div class="container">
		<h1>Latest news</h1>
		<div class="news-container">
		<?php 
			$args = array( 'numberposts' => '3' );
			$recent_posts = wp_get_recent_posts( $args );
			
			foreach( $recent_posts as $recent ):
		?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]), 'thumbnail' ); ?>
		
			<div class="news-box">
				<div class="news_image" style="background-image:url(<?php echo $url;?>)"></div>
				<h2><a href="<?php echo get_permalink($recent["ID"])?>"><?php echo 	$recent["post_title"]?></a></h2>
				<p><?php echo 	substr($recent["post_content"],0,300);?></p>
			</div>
		
		<?php endforeach;
		wp_reset_query();?>
		
			
			
			
			<div class="clearFloat"></div>
		</div>
	</div>
</div>
<div class="downBanner">
	<div class="container">
		<h1>Try out our products</h1>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed leo convallis, egestas nisi gravida,
		efficitur felis. Pellentesque sit amet urna gravida, interdum nunc non, semper purus.
		In suscipit molestie lorem, pulvinar cursus ipsum luctus euismod. Nulla suscipit dictum arcu,
		quis luctus urna volutpat in.</p>
		<div class="callToActionBtn">Start now</div>
	</div>
	
</div>

<?php get_footer(); ?>