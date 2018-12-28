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
					<!-- <div class="section_subtitle">simply amazing places</div> -->
					<div class="section_title"><h2>Popular Sports</h2></div>
				</div>
			</div>
			
			<div class="row destinations_row">
				<div class="col">
					<div class="destinations_container item_grid">




					<?php 

    $query = "SELECT * FROM sports";
    $select_all_sports = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_all_sports)) {
        $sport_id = $row['id'];
        $sport_name = $row['title'];
        $sport_location = $row['places'];
        $sport_description = $row['description'];
        $sport_image = $row['image'];








        ?>
						

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/<?php echo ($sport_image) ?>" alt="" height="250" width="900">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#"><?php echo ($sport_name) ?></a></div>
								<div class="destination_subtitle"><b><p><?php echo ($sport_location) ?></b></p></div>
								<!-- <div class="destination_price">From $579</div> -->
								<div class="destination_list">
									
										<p><?php echo ($sport_description) ?></p>
										<!-- <div class="button load_more_button"><a href="sport_description.php?sport_id=<?php echo ($sport_id) ?>">see more</a></div> -->
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