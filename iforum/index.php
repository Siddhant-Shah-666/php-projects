<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            
        }

        .cimages {
            height: 25vh !important;
            width: 21vw !important;

        }

        .simages {
            height: 50vh !important;
            width: 100vw !important;
        }

        img {
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php
    include 'partials/dbconn.php';
    include 'partials/header.php';


    ?>


    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/images1.jpg" class="d-block w-100 simages" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/images2.jpg" class="d-block w-100 simages" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/images3.jpg" class="d-block w-100 simages" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>

    <div class="container">
        <h3 class="text-center my-3">Code Dining - Categories</h3>
        <div class="row">
            <?php
            $sql = "SELECT * FROM `catagories`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $cName = $row['cato_name'];
                $cDesc = $row['cato_desc'];
                $cId = $row['cato_id'];
                echo '<div class="col-md-4 my-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/images4.jpg" class="card-img-top cimages" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">  <a href="threads_list.php?catId='.$cId.'">'.$cName.'</a></h5>
                        <p class="card-text">'.substr($cDesc,0,110).'...'.'</p>
                        <a href="threads_list.php?catId='.$cId.'" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>';
            
            }
            ?>
        </div>
    </div>
   
    <?php

    include 'partials/footer.php';

    ?>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>