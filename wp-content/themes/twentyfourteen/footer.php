<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
				<div class="block-angency">
					<div class="tab">
						<ul class="tab-link">
							<li class="active" lang="#tab1" tab-link="tab-link" tab-content="tab-content">Đại lý Miền Bắc</li>
							<li lang="#tab2" tab-link="tab-link" tab-content="tab-content">Đại lý Miền Trung</li>
							<li lang="#tab3" class="last" tab-link="tab-link" tab-content="tab-content">Đại lý Miền Nam</li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="tab1" class="active">
							<ul>
								<?php
									$args1 = array(
										'category__in' => array(9),
										'order'   => 'ASC'
									);
									echo CustomQuery($args1,'featured-post');
								?>
							</ul>
						</div>
						<div id="tab2">
							<ul>
								<?php
									$args1 = array(
										'category__in' => array(10),
										'order'   => 'ASC'
									);
									echo CustomQuery($args1,'featured-post');
								?>
							</ul>
						</div>
						<div id="tab3">
							<ul>
								<?php
									$args1 = array(
										'category__in' => array(11),
										'order'   => 'ASC'
									);
									echo CustomQuery($args1,'featured-post');
								?>
							</ul>
						</div>
					</div>
				</div>
				</div><!-- #main -->
			</div><!-- .main -->
		</div><!-- #main-container -->
		<div class="footer-container">
			<div class="footer">	
				<footer id="colophon" class="site-footer" role="contentinfo">
					<?php get_sidebar( 'footer' ); ?>
					<div class="site-info">
						<div class="rfloat social">
							<h2>Kết nối mạng xã hội</h2>
							<ul>
								<li><a href="#" title="Youtube">
									<img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="Youtube" />
								</a></li>
								<li><a href="#" title="Twitter">
									<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter" />
								</a></li>
								<li><a href="#" title="Google">
									<img src="<?php echo get_template_directory_uri(); ?>/images/google.png" alt="google" />
								</a></li>
								<li><a href="#" title="Facebook">
									<img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt="facebook" />
								</a></li>
							</ul>
						</div>
						<div class="nfloat">
							<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Nấm lim xanh" />
							<div class="info-company">
								<p class="name-company">Công ty TNHH Nông Lâm Sản Tiên Phước - Nấm lim xanh từ rừng nguyên sinh</p>
								<p><span>Trụ sở: 158/149 Hồ Tùng Mậu,Nam Từ Liêm,TP.Hà Nội</span><span>Xí nghiệp: Huyện Tiên Phước - Tỉnh Quảng Nam</span></p>
								<p>ĐT: 04.3797.0138 - 0919.257.838 - Email:<a title="Email" href="mailto:nonglamsantienphuoc@gmail.com">nonglamsantienphuoc@gmail.com</a> - Website:<a title="Nông lâm sản Tiên Phước" href="nonglamsantienphuoc.com">www.nonglamsantienphuoc.com</a></p>
							</div>
						</div>
						
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div>
		</div>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>