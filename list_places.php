<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>


	<!-- Menu -->


	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/wings.jpg)"></div>
	</div>

	<!-- Search -->

	<?php include "searchbar.php" ?>

	<!-- Destinations -->

	<div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simply amazing places</div>
					<div class="section_title"><h2>Popular Destinations</h2></div>
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
					$place_description = substr($row['description'], 0, 100);
					$place_image = $row['place_image'];








					?>
						

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/<?php echo ($place_image) ?>" alt="" height="250" width="900">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#"><?php echo ($place_name) ?></a></div>
								<div class="destination_subtitle"><b><p><?php echo ($place_location) ?></b></p></div>
								<!-- <div class="destination_price">From $579</div> -->
								<div class="destination_list">
									
										<p><?php echo ($place_description) . "....." ?></p>
										<div class="button load_more_button"><a href="place_description.php?place_id=<?php echo ($place_id) ?>">see more</a></div>
										<!-- <li>All Inclusive</li>
										<li>Flight tickets included</li>
										<li>Guided visits</li> -->
									
								</div>
							</div>
						</div>

				<?php 
		} ?>

					</div>
				</div>
			</div>
			
		</div>
	</div>
<?php include "includes/footer.php" ?>