<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>


		<!-- Home -->

		<div class="home">

			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/everest.jpg)"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content">
											<div class="home_title">
												<h2>Let us take you away</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/lumbini_home.jpg)"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content">
											<div class="home_title">
												<h2>Let us take you away</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content">
											<div class="home_title">
												<h2>Let us take you away</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- <div class="home_page_nav">
					<ul class="d-flex flex-column align-items-end justify-content-end">
						<li><a href="#" data-scroll-to="#destinations">Offers<span>01</span></a></li>
						<li><a href="#" data-scroll-to="#testimonials">Testimonials<span>02</span></a></li>
						<li><a href="#" data-scroll-to="#news">Latest<span>03</span></a></li>
					</ul>
				</div> -->
			</div>
		</div>

		<!-- Search -->

<?php include "searchbar.php" ?>

		<!-- Intro -->

<!-- ------------------------------------------------BODY----------------------------------------------------------- -->

		<!-- Destinations -->

		<div class="destinations" id="destinations">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_subtitle">simply amazing places</div>
						<div class="section_title">
							<h2>Popular Destinations</h2>
						</div>
					</div>
				</div>
				<div class="row destinations_row">
					<div class="col">
						<div class="destinations_container item_grid">
			<?php 

		$query = "SELECT * FROM places";
		$select_all_places = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_assoc($select_all_places)) {
			$place_id = $row['id'];
			$place_name = $row['name'];
			$place_location = $row['location'];
			$place_description = $row['description'];
			$place_image = $row['place_image'];







			?>

							<!-- Destination -->
							<div class="destination item">
								<div class="destination_image">
									<img src="images/<?php echo ($place_image) ?>" alt="" height="250" width="900">
								</div>
								<div class="destination_content">
									<div class="destination_title"><a href="destinations.html"><?php echo ($place_name) ?></a></div>
									<!-- <div class="destination_subtitle">
										<p>Nulla pretium tincidunt felis, nec.</p>
									</div> -->
									<div class="destination_price">From $679</div>
								</div>
							</div>
		<?php 
} ?>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Testimonials -->



		<!-- News -->


		<!-- Footer -->

		<?php include "includes/footer.php" ?>