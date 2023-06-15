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
			<?php
			$args = array(
				'post_type' => 'produto',
				'posts_per_page' => 3 // Exibe os 3 ultimos produtos
				// 'posts_per_page' => -1 // Exibe todos os produtos
			);

			$loop = new WP_Query($args);

			if ($loop->have_posts()) {
				while ($loop->have_posts()) {
					$loop->the_post();

					// Iteração dos produtos via Loop
			?>
					<div class="produto">
						<img src="<?php the_post_thumbnail_url(); ?>" />
						<p class="upper-text"><?php echo get_the_excerpt(); ?></p>
						<p class="subtitle"><?php the_title(); ?></p>
					</div>
			<?php

				}
			} else {
				// Caso não haja produtos encontrados
				echo 'Nenhum produto encontrado.';
			}

			wp_reset_postdata(); // Restaura os dados originais do post
			?>
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