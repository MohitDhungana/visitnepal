<!DOCTYPE html>
<html lang="en">
<head>
  <title>Visit Nepal</title>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
  < <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style type="text/css">
div.test
{
width: 900px;
padding: 10px;
border: 2px solid #000;
border-radius: 15px;
-moz-border-radius: 15px;
}
</style>

 </head>
<body>

<div class="test" class="container" style="background-color: black; color: white; ">
  <h2>Packages</h2>
  <!-- <p>The .table-hover class adds a hover effect (grey background color) on table rows:</p>             -->






  <table bgcolor="white" class="table table-dark " >
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <!-- <th>Email</th> -->
      </tr>
    </thead>
    <tbody>

    <?php 

    $query = "SELECT * FROM package";
    $select_packages = mysqli_query($connection, $query);
    if (!$select_packages) {
      die(mysqli_error($connection));
    }


    while ($row = mysqli_fetch_assoc($select_packages)) {
                        # where row is an array and fetching row from database 

      $package_id = $row['id'];
      $package_name = $row['name'];
      $package_duration = $row['duration'];
      $package_price = $row['price'];
      $package_destination = $row['destinations'];
      $package_inclusions = $row['inclusions'];
      $package_company_id = $row['companies_id'];

      echo "<tr>";
      echo "<td>{$package_name}</td>";
      echo "<td>$ {$package_price}</td>";
      echo "<td align='right'><a href='package_details.php?package_id={$package_id}'>View Complete Package</a></td>";
      echo "</tr>";
    }
    ?>

      
      
      
    </tbody>
  </table>
</div>

</body>
</html>
