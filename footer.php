<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
$options = get_option( 'data_angel' );
?>

<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<!-- Copyright Area Start -->
<div class="copyright-area bg-5 ptb-70">
			<div class="container">
				<!-- Contact address left -->
				<div class="row conct-border two">
						<div class="col-md-4 col-sm-4">
							<div class="single-address">
								<div class="media">
									<div class="media-left">
										<i class="icofont icofont-phone"></i>
									</div>
									<div class="media-body text-center">
										<p><?php echo $options['footer_phone'];?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="single-address">
								<div class="media">
									<div class="media-left">
										<i class="icofont icofont-web"></i>
									</div>
									<div class="media-body text-center">
										<p><?php echo $options['footer_email'];?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="single-address">
								<div class="media">
									<div class="media-left">
										<i class="icofont icofont-social-google-map"></i>
									</div>
									<div class="media-body text-center">
										<p><?php echo $options['footer_address'];?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Contact address left -->
				<!-- Copyright right -->
				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<div class="copyright-area text-center">
								<!-- Copyright social -->
								<?php 
									$social_details = $options['footer_social'];
								?>
								<div class="contact-social text-center pt-70 pb-35">
									<ul>
										<?php foreach ($social_details as $s_item) : ?>
										<li>
											<a href="<?php echo $s_item['social_url']?>"><i class="<?php echo $s_item['social_icon']?>"></i></a>
										</li>
										<?php endforeach; ?>
									</ul>
								</div>
								<!-- Copyright social -->
								<div class="copyright-text">
									<p>Copyright &copy;  <a href="https://dataangel.com/">Data angel</a> All Rights Reserved.</p>
								</div>
								<!-- Copyright text -->
							</div>
						</div>
					</div>
				</div>
				<!-- Copyright right -->
			</div>
		</div>
		<!-- Copyright Area End -->
		</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
		