<?php
/*
Template Name: お問い合わせ
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
				<div class="contact_text" id="page">
					<div>
						<span>電話でのお問い合わせ</span>
						<a href="tel:"><i class="fas fa-phone-alt"></i></a>
					</div>
					<div>
						<span>メールでのお問い合わせ</span>
						<p>メールによるお問い合わせは随時受付けておりますのでお気軽にお問い合わせください。<br>以下のフォームに必要事項をご入力の上、内容を確認して送信してください。</p>
					</div>
				</div>
				<!--- contact_text ---->
				<div id="form-box">
					<?php echo do_shortcode('[mwform_formkey key="●●●"]'); ?>
				</div>
				<!---  --->

			</section>
		</div>
	</div><!--top-wrap__inner-->
</main>

<?php get_footer(); ?>
