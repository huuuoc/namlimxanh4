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
			Công dụng nấm lim xanh
			<?php
				$args1 = array(
					'category__in' => array(4),
					'order'   => 'ASC'
				);
				//echo CustomQuery($args1,'featured-post','featured-post-first');
			?>
		</div>
		<div class="col-1">
			Cách dùng nấm lim xanh
			<?php
				$args1 = array(
					'category__in' => array(4),
					'order'   => 'ASC'
				);
				//echo CustomQuery($args1,'featured-post','featured-post-first');
			?>
		</div>
		<div class="col-1">
			Mua bán nấm lim xanh
			<?php
				$args1 = array(
					'category__in' => array(4),
					'order'   => 'ASC'
				);
				//echo CustomQuery($args1,'featured-post','featured-post-first');
			?>
		</div>
	</div>
	<div class="layer-2">
		<div class="col-1">
			<div class="block-chungnhan">
				<h2 class="title"><span>Chứng nhận giải thưởng</span></h2>
				<div class="content">
					<?php
						$args1 = array(
							'category__in' => array(4),
							'order'   => 'ASC'
						);
						//echo CustomQuery($args1,'featured-post','featured-post-first');
					?>
				</div>
			</div>
		</div>
		<div class="col-1">
			<h2 class="title"><span lang="tab-video">Thư viện video</span> <span lang="tab-image"> thư viện ảnh</span></h2>
				<div class="content">
					<div id="tab-video">Video</div>
					<div id="tab-image">Video</div>
					<?php
						$args1 = array(
							'category__in' => array(4),
							'order'   => 'ASC'
						);
						//echo CustomQuery($args1,'featured-post','featured-post-first');
					?>
				</div>
		</div>
		<div class="col-1">
			Chăm sóc khách hàng
			<?php
				$args1 = array(
					'category__in' => array(4),
					'order'   => 'ASC'
				);
				//echo CustomQuery($args1,'featured-post','featured-post-first');
			?>
		</div>
	</div>
<?php // get_sidebar(); 
	//get_sidebar( 'content' ); 
//get_sidebar();
?>

<?php get_footer(); ?>
