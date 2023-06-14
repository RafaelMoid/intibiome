<?php
// Template name: Home
?>

<?php get_header(); ?>

<main id="home">
	<section class="banner">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-hero.png" class="banner-web">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-intibiome-02.png" class="banner-mobile">
	</section>
	<section class="first-content">
		<h3>we’re here to help</h3>
		<p class="small-text">
			When it comes to caring for our most intimate areas, we’ve lost our connection.</br></br>
			Embarrassed, unwilling, or unable to communicate with others, we’re needlessly neglecting the parts of our bodies that need it most.</br></br>
			We’re here to help. Providing you with the expertise, knowledge and products you need to feel confident in your personal care.
		</p>
		<div class="first-content-icons">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons.png" class="banner-mobile">
		</div>
		<h3>whatever your age. whatever your lifestyle. whatever your interests.</h3>
		<p class="medium-text">
			Co-created with gynaecologists, our revolutionary products have been expertly developed to support your intimate microbiome and pH balance, and strengthen overall natural health.</br></br>
			As the experts in intimate hygiene, we want to bring discussion about intimate wellness care out of the dark and demystify the taboos that surround it.
		</p>
	</section>
	<section class="our-products">
		<h3>our products</h3>
		<div class="grid-products">
			<!-- Criar o Grid de produtos aqui -->
			<!-- Criar o Grid de produtos aqui -->
			<div class="produto">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image mask.png" class="image-card-produto">
				<p class="upper-text">intibiome wellness daily intimate wash</p>
				<p class="subtitle">wellness</p>
			</div>
			<div class="produto">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image mask.png" class="image-card-produto">
				<p class="upper-text">intibiome active extra protection intimate wash</p>
				<p class="subtitle">active</p>
			</div>
			<div class="produto">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image mask.png" class="image-card-produto">
				<p class="upper-text">intibiome agecare dryness relief intimate wash</p>
				<p class="subtitle">agecare</p>
			</div>
		</div>
	</section>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Asset 22.png" class="banner-produto-web">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-intibiome-05.png" class="banner-produto-mobile">
	<section class="blog-grid">
		<h3>keep up to date with our discoveries</h3>
		<div class="recent-posts">
			<?php
			$args = array(
				'posts_per_page' => 3, // Número de posts a serem exibidos
			);

			$recent_posts = new WP_Query($args);

			while ($recent_posts->have_posts()) : $recent_posts->the_post();
			?>
				<div class="post">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>">
						<h2><?php the_title(); ?></h2>
					</a>
				</div>
			<?php
			endwhile;
			wp_reset_postdata();
			?>
		</div>
		<a class="btn-posts" href="">see more</a>

	</section>
</main>

<?php get_footer(); ?>