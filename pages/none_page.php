<?php 
/*
	template name: 空页面
*/
get_header();
?>
<div class="pagewrapper clearfix">
		<header class="pageheader clearfix">
			<h1 class="fl">
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</h1>
			<div class="fr"><!-- 百度分享 -->
	<?php deel_share() ?>
			</div>
		</header>
		<?php while (have_posts()) : the_post(); ?>
			<div class="article-content">
				<?php the_content(); ?>
			</div>
		<?php comments_template('', true); endwhile;  ?>
	
</div>

<?php get_footer(); ?>