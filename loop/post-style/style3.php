<?php
cairo_set_post_views($post->ID);
$views = cairo_get_post_views(get_the_ID());
?>
<article itemscope itemtype="http://schema.org/Article" <?php post_class('post status-publish post-style3'); ?> role="article">
	<div class="col-sm-5 col-xs-12">
		<figure class="post-image">
			<?php if ( has_post_thumbnail() ) { ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('cairo-post-small-tow', array('itemprop'=>'image')); ?>
			</a>
		<?php } ?>
		</figure>
	</div>
	<div class="col-sm-7 col-xs-12">
		<div class="post-detail">
			<div class="post-meta top-meta">
				<div class="post-cat">
					<?php cairo_category_name_color(); ?>
				</div><!-- post-cat -->
				<div class="post-data">
					<?php the_time( get_option('date_format') ); ?>
				</div>
			</div><!-- post-meta -->

			<div class="post-title">
				<?php the_title('<h3 class="entry-title" itemprop="name headline"><a href="'.get_permalink().'" title="'.the_title_attribute("echo=0").'">', '</a></h3>'); ?>
			</div><!-- post-title -->

			<div class="post-excerpt">
				<p><?php echo cairo_string_limit_words(get_the_excerpt(), 18);?>&hellip;</p>
			</div> <!-- post-excerpt -->

			<div class="post-meta bottom-meta">
				<aside class="post-author">
				 <?php echo get_avatar( get_the_author_meta( 'ID' ), 45 ); ?>
				 <?php the_author_posts_link(); ?>
				</aside>
				<ul class="post-meta-info">
					<li class="post-data"><i class="fa fa-commenting-o"></i><?php cairo_post_comments_count(); ?></li>
					<?php if ( ot_get_option('post_view_count') == 'on' )  { ?>
					  <li class="post-data"><i class="fa fa-eye"></i><?php echo ($views); ?> <?php echo esc_html__('Views', 'cairo'); ?></li>
					<?php } ?>
				</ul>
			</div><!-- post-meta -->
		</div><!-- post-detail -->
	</div>
</article>
