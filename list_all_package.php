<!--   <?php 
        if (isset($_SESSION['deleted'])) {
            echo "<div class='alert alert-success' id='success-div'>
            <span class='glyphicon glyphicon-exclamation-sign' aria-hidden= 'true' > users declined sucessfully </span>
          </div>";
            unset($_SESSION['deleted']);
        }
        ?>  -->


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>User Profile - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        input.hidden {
            position: absolute;
            left: -9999px;
        }

        #profile-image1 {
            cursor: pointer;

            width: 100px;
            height: 100px;
            border: 2px solid #03b1ce;
        }

        .tital {
            font-size: 16px;
            font-weight: 500;
        }

        .bot-border {
            border-bottom: 1px #f8f8f8 solid;
            margin: 5px 0 5px 0
        }
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function () {};
        var defaultCSS = document.getElementById('bootstrap-css');

        function changeCSS(css) {
            if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css +
                '" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $(document).ready(function () {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
        });
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Visit Nepal</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="list_all_package.php">Packages</a></li>
                <li><a href="list_places.php">Places</a></li>
                <!-- <li><a href="#">Contact us</a></li> -->
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>

    <div class="container" align="center">
        <div class="row" align="center">

            <div id="wrapper">
                <div id="page-wrapper">
                    <div class="container-fluid">


                        <?php include "includes/db.php" ?>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>

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

                        // $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
                        // $select_categories_id = mysqli_query($connection, $query);


                        // while ($row = mysqli_fetch_assoc($select_categories_id)) {
                        //     $cat_id = $row['cat_id'];
                        //     $cat_title = $row['cat_title'];


                        //     echo "<td>{$cat_title}</td>";


                   

                    // echo "<td>{$post_status}</td>";
                    // echo "<td><img width='100' src='../images/{$post_image}' alt='adsfasdfads'></td>";
                    // echo "<td>{$post_tags}</td>";
                    // echo "<td>{$post_comment_count}</td>";
                    // echo "<td>{$post_date}</td>";
                                    echo "<td align='right'><a href='#'>View Complete Package</a></td>";
                                    echo "</tr>";
                    // echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                    // echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                    // echo "</tr>";

                                }
                                ?>



                            </tbody>
                        </table>



                        <?php 

                // if (isset($_GET['delete'])) {
                //     $the_post_id = $_GET['delete'];

                //     $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
                //     $delete_query = mysqli_query($connection, $query);
                //     header("Location: posts.php");

                // }


                        ?>
                    </div>
                </div>
            </div>

            <script>
                $(function () {
                    $('#profile-image1').on('click', function () {
                        $('#profile-image-upload').click();
                    });
                });
            </script>









        </div>
    </div>





    <script type="text/javascript">

    </script>
</body>

</html>