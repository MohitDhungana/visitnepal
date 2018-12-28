<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/full-slider.css" rel="stylesheet">
<link href="css/subin.css" rel="stylesheet">

		
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('destination_8.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('destination_8.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('destination_8.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    


		<!-- Intro -->

<!-- ------------------------------------------------BODY----------------------------------------------------------- -->

		<!-- Destinations -->

		<div class="destinations" id="destinations">
			<div class="container">
				<!-- <div class="row">
					<div class="col text-center"> -->
						<!-- <div class="section_subtitle">simply amazing places</div> -->
						<!-- <div class="section_title">
							<h2>Place ko naam</h2>
						</div>
					</div>
				</div> -->
				<div class="row destinations_row">
					<div class="col">
						<div class="col-md-8">
					<?php 
				if (isset($_GET['place_id'])) {
					$the_place_id = $_GET['place_id'];
				}

				$places_query = "SELECT * FROM places WHERE id={$the_place_id}";
				$select_all_places = mysqli_query($connection, $places_query);

				$feature_query = "SELECT * FROM features WHERE places_id={$the_place_id}";
				$select_all_features = mysqli_query($connection, $feature_query);

				$row_feature = mysqli_fetch_assoc($select_all_features);
				$feature_id = $row_feature['id'];
				$feature_title = $row_feature['title'];
				$feature_desc = $row_feature['description'];


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
								<div class="destination_title"><a href="destinations.html"><?php echo ($place_name) ?></a></div>

									<img src="images/<?php echo ($place_image) ?>" alt="" height="250" width="1000">
								</div>
								<div class="destination_content">
									<!-- <div class="destination_subtitle">
										<p>Nulla pretium tincidunt felis, nec.</p>
									</div> -->
									<div class="cities"><p><?php echo ($place_description) ?></p></div>
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