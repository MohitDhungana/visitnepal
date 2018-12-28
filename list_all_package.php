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

<body style="background-image:url(images/boudha.jpg)">

    <?php include "includes/yo2.php" ?>
    <br>
    <br>
    <br>
    <br>

    <div  class="container" align="center">
        <div class="row" align="center">

            <div id="wrapper">
                <div id="page-wrapper">
                    <div class="container-fluid">


                        <?php include "includes/db.php" ?>
<?php include "includes/tablebitch.php"?>

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