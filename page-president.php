<?php
/*
Template Name: page-president
*/
?>
<?php get_header();?>
<!---------- main------->
<div id="main_content">
	<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php else: ?>
			<!-- 投稿が無い場合の処理 -->
	<?php endif; ?>
</div>
<!---------- main------->

<?php get_footer(); ?>

