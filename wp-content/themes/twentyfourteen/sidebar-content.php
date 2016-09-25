<?php
/**
 * The Content Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>
<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<div class="layer-2">
			<div class="col-">
				<div class="content-article block-support">
					<h2 class="title"><span lang="tab-video">Chăm sóc khách hàng</span></h2>
					<div class="content">
						<ul>
							<li><a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/support1.png" alt="support"/>
								<div class="name-phone">
									<span class="name">Tổng đài tư vấn</span><br/>
									<span class="phone">04.3797.0138</span>
								</div>
							</a></li>
							<li><a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/support2.png" alt="support"/>
								<div class="name-phone">
									<span class="name">Dược sỹ Dung</span><br/>
									<span class="phone">0936.476.588</span>
								</div>
							</a></li>
							<li><a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/support3.png" alt="support"/>
								<div class="name-phone">
									<span class="name">Dược sỹ Hoa</span><br/>
									<span class="phone">0919.257.838</span>
								</div>
							</a></li>
							<li><a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/support4.png" alt="support"/>
								<div class="name-phone">
									<span class="name">Hỗ trợ hậu mãi</span><br/>
									<span class="phone">04.85878602</span>
								</div>
							</a></li>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="">
				<div class="block-chungnhan content-article">
					<h2 class="title"><span>Chứng nhận giải thưởng</span></h2>
					<div class="content">
						<img src="<?php echo get_template_directory_uri(); ?>/images/chung-nhan.png" atl="Giấy chứng nhận">
					</div>
				</div>
			</div>
			<div class="col-">
				<div class="content-article block-video-image">
					<h2 class="title"><span class="video active" lang="#tab-video" tab-link="title" tab-content="content">Thư viện video</span> <span class="image" lang="#tab-image"  tab-link="title" tab-content="content"> thư viện ảnh</span></h2>
					<div class="content">
						<div id="tab-video" class="active">
							<?php
								$args1 = array(
									'category__in' => array(23),
									'posts_per_page' => 5,
									'order'   => 'ASC'
								);
								echo CustomQuery($args1,'featured-post-home','home');
							?>
						</div>
						<div id="tab-image">
							<?php
								$args1 = array(
									'category__in' => array(24),
									'posts_per_page' => 5,
									'order'   => 'ASC'
								);
								echo CustomQuery($args1,'featured-post-home','home');
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
</div><!-- #content-sidebar -->
