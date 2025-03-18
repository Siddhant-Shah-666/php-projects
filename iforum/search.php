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

        <style>
        * {
            margin: 0;
            padding: 0;
        }

        .timage {
            height: 8vh !important;
            width: 4vw !important;
            border-radius: 50% !important;

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
    <h2>Search Result for <?php echo $_GET['query']; ?></h2>
    <div class="container-fluid">
         <?php 
         $query =  $_GET['query'];
          $sql = "SELECT * FROM `threads` WHERE match (t_title,t_desc) against ('$query');";
          $result = mysqli_query($conn, $sql);
          $noResult = true;
          while ($row = mysqli_fetch_assoc($result)) {
              $noResult = false;
              $tName = $row['t_title'];
              $tDesc = $row['t_desc'];
              $tId = $row['t_id'];
              $time = $row['time'];
              $userid = $row['t_userid'];
              $sql2 = "select name from `users` where id = '$userid'";
              $result2 = mysqli_query($conn, $sql2);
              $row2 = mysqli_fetch_assoc($result2); 
              // echo  $row2['name'];
              $username = $row2['name'];
               
              echo ' <div class="media  mt-3">
         <img src="images/thumbnail.png" class="mr-3 timage"  alt="...">
         <div class="media-body">
          <p my-0>  Posted by <b>'.$username.'</b> at '.$time.'</p>
           <h5 class="mt-0 "><a href="threads.php?t_Id=' . $tId . '" class = "text-dark">' . $tName . ' </a></h5>
           <p ><a href="threads.php?t_Id=' . $tId . '" class = "text-dark">' . $tDesc . ' </a> </p>
         </div>
       </div>';
          }
          if ($noResult) {
              echo '<div class="container_fluid mx-2">
          <div class="jumbotron">
              <p class="display-4"><b>No Questions found...!</b></p>
         
              <hr class="my-4">
              <p><b>Be the first one to ask...!</b></p>
               <h5>Posted by </h5>
          </div>
      </div>';
          }
          
         ?>



    </div>



    <?php
    include 'partials/footer.php';
    ?>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>