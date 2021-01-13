<?php include('header.php')?>

       

        <!-- xac minh dang nhap -->
 <?php      
session_start() ;
if ( !isset( $_SESSION[ 'userid' ] ) ){
    include('navbar-login.php');
}else{
    if($_SESSION['role']==1){
        include('navbar-admin.php');
    }else{
        include('navbar-user.php');
    }
    
}
?>
<div class="container pt-3 clearfix">
    
<div class="page-wrapper">
		<div class="post-slider">
			<h1>Trending Post</h1>

			<i class="fas fa-chevron-left prev"></i>
			<i class="fas fa-chevron-right next"></i>

			<div class="post-wrapper">
				<div class="post">
					<div class="inner-post">
						<img src="asset/image/image_4.png" alt="" class="slider-image">
					</div>
					<div class="post-info">
						<h4><a href="">One day your life will flash before your eyes</a></h4>
						<i class="far fa-user">Awa Melvine</i> &nbsp;
						<i class="far fa-calendar"> Mar 8, 2019</i>
					</div>
				</div>

				<div class="post">
					<div class="inner-post">
						<img src="asset/image/image_5.png" alt="" class="slider-image">
					</div>
					<div class="post-info">
						<h4><a href="">One day your life will flash before your eyes</a></h4>
						<i class="far fa-user">Awa Melvine</i> &nbsp;
						<i class="far fa-calendar"> Mar 8, 2019</i>
					</div>
				</div>

				<div class="post">
					<div class="inner-post">
						<img src="asset/image/image_6.png" alt="" class="slider-image">
					</div>
					<div class="post-info">
						<h4><a href="">One day your life will flash before your eyes</a></h4>
						<i class="far fa-user">Awa Melvine</i> &nbsp;
						<i class="far fa-calendar"> Mar 8, 2019</i>
					</div>
				</div>

				<div class="post">
					<div class="inner-post">
						<img src="asset/image/image_7.png" alt="" class="slider-image">
					</div>
					<div class="post-info">
						<h4><a href="">One day your life will flash before your eyes</a></h4>
						<i class="far fa-user">Awa Melvine</i> &nbsp;
						<i class="far fa-calendar"> Mar 8, 2019</i>
					</div>
				</div>

			</div>

		</div>
	
	<div class="content clearfix">
		<div class="main-content">
			<h1 class="recent-post-title">Recent Post</h1>
			
			<div class="post clearfix">
				<img src="asset/image/image_1.png" alt="" class="post-image"> 
				<div class="post-preview">
					<h2><a href="" class="single-html">The strongest and sweetest song yet remain to be sung</a></h2>
					<i class="far fa-user">Awa Melvine</i>
					&nbsp;
					<i class="far calendar">Mar 11, 2019</i>
					<p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aperiam vel iure temporibus beatae, deleniti accusamus eum doloremque optio, sed aspernatur nesciunt possimus cupiditate. Obcaecati fugit error quod doloribus blanditiis!</p>
					<a href="single.php" class="btn read-more">Read More</a>
				</div>
			</div>

			<div class="post clearfix">
				<img src="asset/image/image_2.png" alt="" class="post-image"> 
				<div class="post-preview">
					<h2><a href="" class="single-html">That love is all there is, is all we know of love</a></h2>
					<i class="far fa-user">Awa Melvine</i>
					&nbsp;
					<i class="far calendar">Mar 11, 2019</i>
					<p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aperiam vel iure temporibus beatae, deleniti accusamus eum doloremque optio, sed aspernatur nesciunt possimus cupiditate. Obcaecati fugit error quod doloribus blanditiis!</p>
					<a href="single.php" class="btn read-more">Read More</a>
				</div>
			</div>

			<div class="post clearfix">
				<img src="asset/image/image_3.png" alt="" class="post-image"> 
				<div class="post-preview">
					<h2><a href="" class="single-html">Do anything, but let it produce joy</a></h2>
					<i class="far fa-user">Awa Melvine</i>
					&nbsp;
					<i class="far calendar">Mar 11, 2019</i>
					<p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aperiam vel iure temporibus beatae, deleniti accusamus eum doloremque optio, sed aspernatur nesciunt possimus cupiditate. Obcaecati fugit error quod doloribus blanditiis!</p>
					<a href="single.php" class="btn read-more">Read More</a>
				</div>
			</div>

			<div class="post clearfix">
				<img src="asset/image/image_4.png" alt="" class="post-image"> 
				<div class="post-preview">
					<h2><a href="" class="single-html">The strongest and sweetest song yet remain to be sung</a></h2>
					<i class="far fa-user">Awa Melvine</i>
					&nbsp;
					<i class="far calendar">Mar 11, 2019</i>
					<p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aperiam vel iure temporibus beatae, deleniti accusamus eum doloremque optio, sed aspernatur nesciunt possimus cupiditate. Obcaecati fugit error quod doloribus blanditiis!</p>
					<a href="/single.php" class="btn read-more">Read More</a>
				</div>
			</div>
		</div>
		<div class="sidebar">
			<div class="section search">
				<h2 class="section-title">
					Search
					<form action="index.php" method="post">
						<input type="text" name="search-term" id="" class="text-input" placeholder="Search..">
					</form>
				</h2>
			</div>
			<div class="section topics">
				<h2 class="section-title">
					Topics
					
				</h2>
				<ul>
					<li><a href="#">Poem</a></li>
					<li><a href="#">Quotes</a></li>
					<li><a href="#">Fiction</a></li>
					<li><a href="#">Biography</a></li>
					<li><a href="#">Motivation</a></li>
					<li><a href="#">Inspiration</a></li>
					<li><a href="#">Life Lessons</a></li>

				</ul>
			</div>
		</div>
	</div>
</div>

</div>
<?php
include('footer.php')?>