<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/full-slider.css" rel="stylesheet">
<link href="css/subin.css" rel="stylesheet">
<?php 
if (isset($_GET['sport_id'])) {
    $the_sport_id = $_GET['sport_id'];
}

$sport_query = "SELECT * FROM sports WHERE id={$the_sport_id}";
$select_all_sports = mysqli_query($connection, $sport_query);
$row = mysqli_fetch_assoc($select_all_sports);
$sport_image = $row['image'];


?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	
	<div class="carousel-inner" role="listbox">
		<!-- Slide One - Set the background image for this slide in the line below -->
		<div class="carousel-item active" style="background-image: url('images/<?php echo ($sport_image) ?>')">
			
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
    if (isset($_GET['sport_id'])) {
        $the_sport_id = $_GET['sport_id'];
    }

    $sport_query = "SELECT * FROM sports WHERE id={$the_sport_id}";
    $select_all_sports = mysqli_query($connection, $sport_query);

    // $feature_query = "SELECT * FROM features WHERE places_id={$the_place_id}";
    // $select_all_features = mysqli_query($connection, $feature_query);

    // $row_feature = mysqli_fetch_assoc($select_all_features);
    // $feature_id = $row_feature['id'];
    // $feature_title = $row_feature['title'];
    // $feature_desc = $row_feature['description'];


    while ($row = mysqli_fetch_assoc($select_all_sports)) {
        $sport_id = $row['id'];
        $sport_name = $row['title'];
        $sport_location = $row['places'];
        $sport_description = substr($row['description'], 0, 100);
        $sport_image = $row['image'];



        ?>

					<!-- Destination -->
					<div class="destination item">
						<div class="destination_image">
							<h2><?php echo ($sport_name) ?></h2>

						</div>
						<div class="destination_content">
							<!-- <div class="destination_subtitle">
										<p>Nulla pretium tincidunt felis, nec.</p>
									</div> -->
							<div class="cities">
								<p>
									<?php echo ($sport_description) ?>
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