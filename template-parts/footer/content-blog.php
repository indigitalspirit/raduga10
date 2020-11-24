<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raduga10
 */

?>

<!--=======  post title  =======-->
<h1 class="post-title">
	<?php the_title(); ?>
</h1>
<!--=======  End of post title  =======-->


<!--=======  Post meta  =======-->
<div class="post-meta">
	<p>
		<span><i class="fa fa-user-circle"></i> </span>
		<?php
			
			raduga10_posted_by();
		?>

		<span class="separator">|</span>

		<span><i class="fa fa-calendar"></i></span>
		<?php
			raduga10_posted_on();
			
		?>
	</p>
</div>
<!--=======  End of Post meta  =======-->


<!--=======  Post media  =======-->
<div class="single-blog-post-media mb-xs-20">
	<div class="image">
		<?php raduga10_post_thumbnail(); ?>
	</div>
</div>
<!--=======  End of Post media  =======-->


<!--=======  Post content  =======-->
<div class="post-content mb-40">
	<?php the_content(); ?>                        
</div>
<!--=======  End of Post content  =======-->

<?php 
	if( get_the_tag_list() ){
?>
<!--=======  Tags area  =======-->
<div class="tag-area mb-40">
	<span>Метки: </span>
	<?php 
		
			echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
	

	?>
</div>
<!--=======  End of Tags area  =======-->
<?php 
	}
?>


<!--=======  Share post area  =======-->
<!-- <div class="social-share-buttons mb-40">
	<h3>share this post</h3>
	<ul>
			<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
			<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
			<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
	</ul>
</div> -->
<!--=====  End of Share post area  ======-->



<!--=======  related post  =======-->
<?php 

//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags(get_the_id());

if ($tags):
?>
<div class="related-post-container">
	<div class="row">
			<div class="col-lg-12">
					<h3 class="related-post-title mb-30">
						Ещё посты по теме
					</h3>
			</div>
	</div>

<?php 
	
	$first_tag = $tags[0]->term_id;

	$related_args=array(
	'tag__in' => array($first_tag),
	'post__not_in' => array($post->ID),
	'posts_per_page'=>5,
	'caller_get_posts'=>1
	);

	$related__query = new WP_Query($related_args);

	if( $related__query->have_posts() ):
?>
	<div class="row">

<?php 
		$related_posts_counter = 0;

		while ($related__query->have_posts() && ($related_posts_counter < 3) ) :			
			$related_posts_counter = $related_posts_counter + 1;
			$related__query->the_post(); 

?>
		<div class="col-lg-4 col-md-4 mb-sm-20">
			<!--=======  single related post  =======-->
			
			<div class="single-related-post">
					<div class="image">
							<!-- <a href="blog-post-image-format.html">
									<img src="assets/images/blog-image/01.jpg" class="img-fluid" alt="">
							</a> -->
							<?php raduga10_post_thumbnail(); ?>
					</div>
					<div class="content">
							<h3 class="related-post-title"> 
									<a href="<?php the_permalink() ?>">
										<?php the_title(); ?>
									</a> 
									<span class="related-post-date">
										<span><i class="fa fa-calendar"></i></span>
										<?php raduga10_posted_on(); ?>
									</span>
							</h3>
					</div>
			</div>
			
			<!--=======  End of single related post  =======-->
			</div>
	
<?php
		endwhile;
?>

	</div>

<?php
	endif;

	wp_reset_query();
?>
	
	</div>

<?php 
	endif;
?>

<!--=======  End of related post  =======-->

<!--=======  End of blog post container  =======-->


