<?php
/*
	Travel Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
?>

<?php get_header(); ?>
	<div class="layer-1">
		<div class="col-1">
			<div class="content-article">
				<h2 class="title-article">Công dụng nấm lim xanh</h2>
				<div class="content">
					<?php
						$args1 = array(
							'category__in' => array(3,15,16),
							'posts_per_page' => 4,
							'order'   => 'ASC'
						);
						echo CustomQuery($args1,'featured-post-home','featured-post-first');
						 $category_link1 = get_category_link(3);
					?>
					<!-- Print a link to this category -->
					<a class="show-all" href="<?php echo esc_url( $category_link1 ); ?>" title="Category Name"> >> Xem thêm << </a>
				</div>
			</div>
		</div>
		<div class="col-1">
			<div class="content-article">
				<h2 class="title-article">Cách dùng nấm lim xanh</h2>
				<div class="content">
					<?php
						$args2 = array(
							'category__in' => array(4,17,18),
							'posts_per_page' => 4,
							'order'   => 'ASC'
						);
						echo CustomQuery($args2,'featured-post-home','featured-post-first');
						 $category_link2 = get_category_link(4);
					?>
					<a class="show-all" href="<?php echo esc_url( $category_link2 ); ?>" title="Category Name"> >> Xem thêm << </a>
				</div>
			</div>
		</div>
		<div class="col-1">
			<div class="content-article">
				<h2 class="title-article">Mua bán nấm lim xanh</h2>
				<div class="content">
					<?php
						$args3 = array(
							'category__in' => array(5,19,20),
							'posts_per_page' => 4,
							'order'   => 'ASC'
						);
						echo CustomQuery($args3,'featured-post-home','featured-post-first');
						 $category_link3 = get_category_link(5);
					?>
					<a class="show-all" href="<?php echo esc_url( $category_link3 ); ?>" title="Xem thêm"> >> Xem thêm << </a>
				</div>
			</div>
		</div>
	</div>
	<div class="layer-2">
		<div class="col-1">
			<div class="block-chungnhan content-article">
				<h2 class="title"><span>Chứng nhận giải thưởng</span></h2>
				<div class="content">
					<img src="<?php echo get_template_directory_uri(); ?>/images/chung-nhan.png" atl="Giấy chứng nhận">
				</div>
			</div>
		</div>
		<div class="col-1">
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
		<div class="col-1">
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
	</div>
<?php // get_sidebar(); 
	//get_sidebar( 'content' ); 
//get_sidebar();
?>

<?php get_footer(); ?>
