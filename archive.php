<?php get_header(); ?>
<main class="archives-wrap">
	<div class="archives-wrap__inner">
		<div class="archives-wrap__content">
			<section>
				<div id="blog-container">
					<h4>お知らせ一覧</h4>
					<div class="inner flex">
						<article class="blog-main">
							<ul class="archive-post">
								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<li class="post-item">
											<div class="blog-meta">
												<?php the_category(); ?>
												<p class="date"><?php echo get_post_time('Y.m.d'); ?></p>
											</div>
											<!--- #post-meta --->
											<div class="thumbnail">
												<a href="<?php the_permalink(); ?>">
													<?php
													if (has_post_thumbnail()) :
														the_post_thumbnail('thumbnail');
													else :
													?>
														<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="no img" />
													<?php endif; ?>
												</a>
											</div>
											<span class="blog-title">
												<a href="<?php the_permalink() ?>"><?php the_title(); ?>
												</a>
											</span>
											<span class="excerpt"><?php the_excerpt(); ?></span>
										</li>
										<!--"post-item-->
									<?php endwhile; ?>
								<?php else : ?>
									<h3>記事がありません</h3>
									<p>表示する記事はありませんでした。</p>
								<?php endif; ?>
							</ul>
							<div id="wp_pagenavi">
								<!--プラグイン WP-PageNavi-->
								<?php if (function_exists('wp_pagenavi')) {
									wp_pagenavi();
								} ?>
						</article>
						<!--- blog-main --->
						<?php get_sidebar(); ?>
					</div>
				</div>
			</section>
		</div>
	</div><!--top-wrap__inner-->
</main>

<?php get_footer(); ?>
