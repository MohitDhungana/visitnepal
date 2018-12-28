<!DOCTYPE html>
<html lang="en">
<head>
<title>News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/news.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.html">Travello</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
                                <li class="active"><a href="index.php">Home</a></li>
										<li><a href="#aboutus">About us</a></li>
										<li><a href="#">Packages</a></li>
										<li><a href="list_places.php">Places</a></li>
										<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
							<div class="header_phone ml-auto">Call us: 00-56 445 678 33</div>

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	
	
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/news.jpg)"></div>
	</div>

	<!-- Search -->

	<?php include "searchbar.php" ?>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Container -->
				<div class="col-lg-8">
					<div class="news_container">
						
                        <!-- News Post -->
                        <?php include "includes/db.php" ?>

                        <?php 






                        if (isset($_POST['search'])) {
                            $search = ($_POST['search']);
                            $query = "SELECT * FROM places WHERE tags LIKE '%$search%'";
                            $search_query = mysqli_query($connection, $query);

                            if (!$search_query) {
                                die("QUERY FAILED" . mysqli_error($connection));
                            }

                            $count = mysqli_num_rows($search_query);
                            if ($count == 0) {
                                echo ("<h1> no result </h1>");
                            } else {
                                // $query = "SELECT * FROM posts";
                                // $select_all_posts_query = mysqli_query($connection, $query);

                                while ($row = mysqli_fetch_assoc($search_query)) {
                                    $place_id = $row['id'];
                                    $place_name = $row['name'];
                                    $place_location = $row['location'];
                                    $place_description = substr($row['description'], 0, 200);
                                    $place_image = $row['place_image'];

                                    ?>



						<div class="news_post">
							<div class="news_post_image"><img src="images/<?php echo ($place_image) ?>" alt="" height="250" width="900"></div>
							<div class="news_post_content">
								
								<div class="news_post_title"><a href="#"><?php echo ($place_name) ?></a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#"><?php echo ($place_location) ?></a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p><?php echo ($place_description) . "................" ?></p>
								</div>
								<div class="news_post_link"><a href="place_description.php?place_id=<?php echo ($place_id) ?>">Read More</a></div>
							</div>
						</div>

						<?php 
    }
}
} ?>

					</div>

					<!-- Pagination -->
					
				</div>

                
				<!-- News Sidebar -->
				<div class="col-lg-4">
					<div class="news_sidebar">


						<!-- Categories -->
						<div class="categories">
							<div class="sidebar_title">Places</div>
							<div class="sidebar_list">
								<ul>
                                <?php 

                                $query = "SELECT * FROM places";
                                $select_all_places = mysqli_query($connection, $query);
                                while ($row = mysqli_fetch_assoc($select_all_places)) {
                                    $place_id = $row['id'];
                                    $place_name = $row['name'];
                                    $place_location = $row['location'];
                                    $place_description = substr($row['description'], 0, 100);
                                    $place_image = $row['place_image'];








                                    ?>
									<li><a href="place_description.php?place_id=<?php echo ($place_id) ?>"><div class="d-flex flex-row align-items-start justify-content-start"><?php echo ($place_name) ?></div></a></li>
                                <?php 
                            } ?>
								</ul>
							</div>
						</div>

						<!-- Latest News -->
						

						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
<?php include "includes/footer.php" ?>