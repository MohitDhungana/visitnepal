<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/full-slider.css" rel="stylesheet">
<link href="css/subin.css" rel="stylesheet">
<?php 
if (isset($_GET['place_id'])) {
	$the_place_id = $_GET['place_id'];
}

$places_query = "SELECT * FROM places WHERE id={$the_place_id}";
$select_all_places = mysqli_query($connection, $places_query);
$row = mysqli_fetch_assoc($select_all_places);
$place_image = $row['place_image'];


?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	
	<div class="carousel-inner" role="listbox">
		<!-- Slide One - Set the background image for this slide in the line below -->
		<div class="carousel-item active" style="background-image: url('images/<?php echo ($place_image) ?>')">
			
		</div>
	
	</div>
	
</div>



<!-- Intro -->

<!-- ------------------------------------------------BODY----------------------------------------------------------- -->

<!-- Destinations -->

	<div class="container">

		<div class="row">
				<div class="col-lg-8">
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
							<h2><?php echo ($place_name) ?></h2>

						</div>
						<div class="destination_content">
							<!-- <div class="destination_subtitle">
										<p>Nulla pretium tincidunt felis, nec.</p>
									</div> -->
							<div class="cities">
								<p>
									<?php echo ($place_description) ?>
								</p>
							</div>
						</div>
					</div>
					<?php 
			} ?>

				

				
				</div>
		</div>
	</div>

<!-- Testimonials -->



<!-- News -->


<!-- Footer -->

<?php include "includes/newfooter.php" ?>