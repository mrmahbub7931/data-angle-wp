<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$options = get_option( 'data_angel' );
?>

<!-- hero area start -->
<div class="hero-area slider-1" id="slider-area">
	<div class="slider">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-4 col-sm-offset-4 col-md-8">
					<div class="hero-text mr-ri-l">
						<h1>Moto All solution Head</h1>
						<p>Nulla aliquet, erat a egestas lacinia, leo libero dapibus nisl, quis pulvinar dolor justo id turpis. Nulla odio orci.</p>
						<a href="#" class="hero-btn">Download</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- hero area end -->
<!-- service area start -->
<?php 
	$featured = $options['featured_post'];
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => '3',
		'cat' => $featured
	);
	$query = new WP_Query( $args );

	if ($query->have_posts()) :
	
?>
<section id="features" class="service-area gray-bg">
	<div class="container">
		<div class="row">
			<?php while( $query->have_posts() ) : $query->the_post(); ?>
			<div class="col-md-4 col-sm-6">
				<div class="single-service">
					<div class="service-icon">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="service-content">
						<h2><?php echo wp_trim_words( get_the_title(), 5, '' ); ?></h2>
						<p><?php echo wp_trim_words( get_the_excerpt(), 20, '' ); ?> </p>
						
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>
<!-- service area start -->
<?php 
	$call_to_action = $options['call-action-page-text'];
	$call_to_action_link = $options['call-action-page-link'];
	
	if (isset($call_to_action)) :
	
?>
<!-- Testimonial Area Start -->
<section id="client" class="testimonial-area pt-120 pb-130 bg-4">
	<div class="container">
		<div class="row">
			<div class="testimonial">
				<div class="col-md-12">
					<div class="testimonial-desc text-center">
						<p><?php echo $call_to_action; ?></p>
						<a class="theme-btn" href="<?php echo get_page_link($call_to_action_link)?>">see our reserach</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Testimonial Area End -->		
<?php endif; ?>
<?php
	$team_heading_title = $options['team_sec_heading_title'];
	$team_heading_text = $options['team_sec_heading_text'];
	$args = array(
		'post_type' => 'team_member',
		'post_status' => 'publish',
		'posts_per_page' => '4',
		'order' => 'ASC',
	);
	$query = new WP_Query( $args );

	if ($query->have_posts()) :
	
?>
<!-- Team Area Start -->
<section id="team" class="team-area ptb-130">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-heading pb-55 text-center">
					<h2><?php echo esc_attr( $team_heading_title )?></h2>
					<p><?php echo esc_attr( $team_heading_text )?></p>
				</div>
			</div>
		</div>
		<div class="row">
		<?php while ($query->have_posts()) : $query->the_post();
			$designation = get_post_meta( get_the_ID(), 'designation', true );
		?>
			<div class="col-md-3 col-sm-6">
				<div class="team-single">
					<?php the_post_thumbnail()?>
					<div class="team-overlay text-center">
						<h5><?php the_title(); ?></h5>
						<h6><?php echo $designation; ?></h6>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</section>
<!-- Team Area End -->
<?php endif; ?>
<?php
get_footer();
