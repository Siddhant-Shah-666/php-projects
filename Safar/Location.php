<?php
session_start();
$_SESSION['value'] =  '<script>localStorage.value</script>';
echo $_SESSION['value'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Safar/conponents/navbar.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        main {
            height: fit-content;
            width: 100vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            /* height: 370vh; */
        }

        a {
            text-decoration: none;
            color: aliceblue;
        }

        .imgBox {
            height: 80vh;
            width: 100vw;
            object-fit: cover;
        }

        img {
            height: 100%;
            width: 100%;
            background-color: #311d1d;
        }

        .placeInfo {
            height: 30vh;
            width: 90vw;
            background-color: #f8ffff;
            margin: 3vh 5vw;
            padding: 2vw;
            box-sizing: border-box;
            color: rgb(21, 1, 31);
            font-size: 3.6vh;
            font-weight: bold;
            border-radius: 10px;
            box-shadow: 1vh 1vh 3vh rgb(49, 49, 49);

        }

        .placeInfo2 {
            height: 40vh;
            width: 80vw;
            margin: 3vh 10vw;
            /* background-color: #cca8a8; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 5vw;
        }

        .imginfo {
            height: 36vh;
            width: 80vw;
            /* background-color: /#cca8a8; */
            display: flex;

            justify-content: center;
            align-items: center;
        }

        .placeInfo2 h2 {
            font-size: 4vh;
            text-decoration: underline;
            position: relative;
            top: 2vh;
        }

        .placeInfo2 .image {
            height: 40vh;
            width: 50vw;
            /* background-color: #3abfbd; */
            margin: 3vh 0;
            /* padding: 1vh; */
            box-sizing: border-box;
            color: aliceblue;
            font-size: x-large;
            border-radius: 10px;
            z-index: 44;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 1vh 1vh 3vh rgb(44, 44, 44);

        }

        .placeInfo2 .info {
            height: 25vh;
            width: 70vw;
            background-color: #f3f8f8;
            margin: 3vh 0;
            padding: 1vw 1vw 1vw 5vw;
            box-sizing: border-box;
            color: rgb(43, 4, 51);
            font-size: 3vh;
            border-radius: 10px;
            position: relative;
            left: -3vw;
            box-shadow: -1vh 1.5vh 2vh rgb(53, 52, 52);

        }

        .indiaPropular {
            height: 20vh;
            width: 80vw;
            display: flex;
            padding: 2vh;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-bottom: 2px solid black;
            background-color: #fff;
            margin: 5vh 0;
            /* margin-left: 10vw; */
        }

        .indiaPropular h2 {
            font-size: 6vh;
            padding: 2vh;
        }

        .indiaPropular p {
            font-size: 3vh;
        }

        .cardframe {
            height: 50vh;
            width: 100vw;
            background-color: rgb(252, 251, 251);
            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            align-items: center;
            justify-content: center;
            padding: 1vh;
            /* margin-top: 70vh; */


        }

        .cards {
            height: 50vh;
            width: 100vw;
            /* background-color: grey; */
            display: flex;
            /* justify-content: center; */
            align-items: center;
            justify-content: center;
        }

        .card {
            height: 30vh;
            width: 25vw;
            background-color: #fff;
            border-radius: 10px;
            padding: 1vw;
            display: flex;
            flex-direction: column;
            /* gap: 2vh; */
            align-items: center;
            margin: 1vw;
            /* margin-top: 5vw; */
            box-shadow: -0.5vh 0.5vh 1vh rgb(58, 57, 57);
            border-radius: 15px;

        }

        .cimage {
            height: 30vh;
            width: 18vw;
            background-color: #5f5b5b;
            border-radius: 10px;
            position: relative;
            top: -8vh;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: -0.5vh 0.5vh 1.3vh rgb(102, 100, 100);

        }

        .cname {
            height: 8vh;
            width: 13vw;
            /* background-color: #524a4a; */
            position: relative;
            text-align: center;
            font-size: xx-large;
            font-weight: 900;
            color: #dfa505;
            text-decoration: underline;
            top: -4vh;
        }

        .locoImages {
            width: 90vw;
            height: fit-content;
            padding: 2vw;
            margin: 5vw;
            background-color: #9c4de6a8;
            display: flex;
            gap: 2vw;
            flex-wrap: wrap;
            border-radius: 20px;
        }

        .limages {
            width: 20vw;
            height: 25vh;
            border-radius: 10px;
            overflow: hidden;
            background-color: #838181;
            box-shadow: -1vh 1vh 1.4vh rgb(71, 70, 70);

        }

        .irctc {
            height: 8vh;
            width: 30vw;
            border-radius: 10vh;
            color: rgb(124, 20, 150);
            background-color: #848085;
            font-weight: 900;
            font-size: 5vh;
            text-align: center;
            padding: 1vh;
            margin: 0 0 8vh 0;
            transition: all 1s;
        }

        .irctc:hover {
            background-color: #57095e;
            color: #fcfafa;
        }

        footer {
            height: 10vh;
            width: 100vw;
            display: flex;
            /* margin-top: 5vh; */

        }

        .block {
            height: 10vh;
            width: 50vw;
            background-color: #592369;
            color: #fff;
            font-weight: 700;
            font-size: 4vh;
            text-align: center;
            padding-top: 3vh;
            /* border: 2px solid black; */
        }
    </style>
</head>

<body>
    <?php
    $imgid = $_POST['imgid'];
    // echo $id;

    
    ?>




    <?php
    include '../Safar/conponents/navbar.php';
    ?>
    <main>
        <?php
          $imgQ = "SELECT * FROM `location` where id = '$imgid'";
          $imgResult =mysqli_query($dbconn,$imgQ);
          while($row = mysqli_fetch_assoc($imgResult)){


            
          }
        ?>
        <div class="imgBox">
            <img src="assets/images/taj.jpg" alt="">
        </div>
        <div class="placeInfo">
            <P>The Taj Mahal is a white marble mausoleum in Agra, India, built between 1631 and 1648 by Mughal emperor Shah Jahan as a tomb for his wife, Mumtaz Mahal. Lorem ipsum dolor sit amet consectetur adipisicing elit. It's considered one of the world's most beautiful buildings and a masterpiece of Indo-Islamic architecture,
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae totam natus consectetur necessitatibus placeat, and is also a UNESCO World Heritage site.
            </P>
        </div>
        <div class="placeInfo2">
            <h2>Taj Mahal</h2>
            <div class="imginfo">
                <div class="image">
                    <img src="assets/images/img2.jpeg" alt="">
                </div>
                <div class="info">
                    The Taj Mahal is a white marble mausoleum in Agra, India, built between 1631 and 1648 by Mughal emperor Shah Jahan as a tomb for his wife, Mumtaz Mahal. It's considered one of the world's most beautiful buildings and a masterpiece of Indo-Islamic architecture, and is also a UNESCO World Heritage site.

                </div>
            </div>
        </div>
        <div class="indiaPropular">
            <h2>Popular Cuisines</h2>
            <p>India is a home to the finest architectural heritage, serene ghats, spectacular landscapes and largest tiger reserve</p>
        </div>

        <div class="cardframe">
            <div class="cards">
                <div class="card">
                    <div class="cimage">
                        <img src="assets/images/1.jpg" alt="">
                    </div>
                    <div class="cname">
                        <p>Veg Thali</p>
                    </div>
                </div>
                <div class="card">
                    <div class="cimage">
                        <img src="assets/images/download2.jpg" alt="">
                    </div>
                    <div class="cname">
                        <p>Butter Paneer</p>
                    </div>
                </div>
                <div class="card">
                    <div class="cimage">
                        <img src="assets/images/download3.jpg" alt="">
                    </div>
                    <div class="cname">
                        <p>Momo</p>
                    </div>
                </div>
            </div>
        </div>



        <div class="indiaPropular">
            <h2>Popular In India</h2>
            <p>India is a home to the finest architectural heritage, serene ghats, spectacular landscapes and largest tiger reserve</p>
        </div>


        <div class="locoImages">
            <div class="limages">
                <img src="assets/images/taj1.jpg" alt="">

            </div>
            <div class="limages">
                <img src="assets/images/taj2.jpg" alt="">
            </div>
            <div class="limages">
                <img src="assets/images/taj3.jpg" alt="">
            </div>
            <div class="limages">
                <img src="assets/images/taj4.jpg" alt="">
            </div>
            <div class="limages">
                <img src="assets/images/taj5.jpg" alt="">
            </div>
            <div class="limages">
                <img src="assets/images/taj6.jpg" alt="">
            </div>
            <div class="limages">
                <img src="assets/images/taj7.jpg" alt="">
            </div>
            <div class="limages">
                <img src="assets/images/taj8.jpg" alt="">
            </div>
        </div>


        <div class="irctc">
            <a href="https://www.irctc.co.in/nget/train-search"> Book Your Train Ticket</a>

        </div>



        <footer>
            <div class="block">
                <h4>Contact us : Safar@666gmail.com</h4>
            </div>
            <div class="block">
                <h4>Safar@copyright</h4>
            </div>

        </footer>
    </main>



</body>
<script>
    console.log(localStorage.value);
</script>

</html>