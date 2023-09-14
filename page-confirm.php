<?php
/*
Template Name: 送信確認
*/
?>

<?php get_header(); ?>
<main class="page-wrap">
	<div class="page-wrap__inner">
		<div class="page-wrap__content">
			<section class="contact-box">
				<div id="title-box">
					<h1 class="page-title">お問い合わせ</h1>
				</div>
				<div class="form_role" id="page">
					<h3>送信内容の確認</h3>
					<p>ご入力いただいた情報は下記のとおりです。<br>間違いがないかどうかお確かめのうえ、<span></span>「送信する」ボタンを押してください。</p>
				</div><!--- form_role --->
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div id="form-box">
							<?php the_content(); ?>
						</div><!---  --->
					<?php endwhile; ?>
				<?php endif; ?>
			</section>
		</div>
	</div><!--top-wrap__inner-->
</main>

<?php get_footer(); ?>
