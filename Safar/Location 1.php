<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Safar/conponents/navbar.css">

    <style>
        body {
            width: 100vw;
            height: fit-content;
            background-color: rgb(251, 251, 253);
        }


        .firstDiv {
            height: 30vh;
            width: 100vw;
            background-color: #fff;
        }

        .videoBox {

            margin-top: 25vh;
            width: 100vw;
            height: 95vh;
            background-color: #fff;
        }

        .mvideo {
            width: 100%;
            height: 100%;

        }

        .intro {
            height: 30vh;
            width: 90vw;
            background-color: #fff;
            margin-top: 3vh;
            padding: 3vh;
            font-size: 4vh;
            margin-left: 5vw;
            border-radius: 5px;
            box-shadow: -1vh 1vh 2vh black;

        }

        .indiaPropular {
            height: 20vh;
            width: 70vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-bottom: 2px solid black;
            background-color: #fff;
            margin: 8vh 0;
            margin-left: 15vw;
            border-radius: 10px;
            box-shadow: -1vh 1vh 3vh black;
        }

        .indiaPropular h2 {
            font-size: 6vh;
            padding: 2vh;

        }

        .indiaPropular p {
            font-size: 3vh;
        }

        .frame {

            height: 80vh;
            width: 100vw;
            overflow: hidden;
            /* box-shadow: -1vh 1vh 5vh black; */
            display: flex;
            align-items: center;
            box-shadow: -1vh 1vh 1vh black;
        }

        .slider {
            height: 80vh;
            width: 100vw;
            transition: all 1s;

            display: flex;
            /*  */
        }

        .frame .slider img {
            height: 80vh;
            width: 100vw;
            object-fit: cover;
        }

        .left {
            height: 10vh;
            width: 5vw;
            position: absolute;
            left: 5vw;
            cursor: pointer;
            /* background-color: #fff; */
            z-index: 5;
        }

        .right {
            height: 10vh;
            width: 5vw;
            position: absolute;
            right: 5vw;
            cursor: pointer;
            /* background-color: #fff; */
        }

        .slideinfo {
            height: 30vh;
            width: 60vw;
            display: flex;
            flex-direction: column;
            padding: 2vh;
            background-color: #fff;
            position: absolute;
            top: -35vh;
            /* z/-index: 8; */
        }


        .show_more {
            padding: 2vh;
            color: #652681;
            font-size: larger;
            border-radius: 10px;
            margin: 2vh 0;
            font-style: oblique;
            font-weight: 900;
        }

        /* card slider */

        .cardframe {
            height: 50vh;
            width: 100vw;
            background-color: rgb(252, 251, 251);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            justify-content: center;
            padding: 1vh;
            margin-top: 15vh;


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
            box-shadow: -0.5vh 0.5vh 1vh black;
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
            box-shadow: -0.5vh 0.5vh 1vh black;

        }

        .Cbtn {
            height: 8vh;
            width: 13vw;
            /* background-color: #524a4a; */
            position: relative;
            color: #40074e;
            top: -4vh;
            font-size: xx-large;
            font-weight: 900;
            text-align: center;
            margin-top: 1vh;
            text-decoration: underline;
            border: none;
            border-radius: 10px;
        }

        footer {
            height: 10vh;
            width: 100vw;
            display: flex;
            margin-top: 5vh;

        }

        .block {
            height: 10vh;
            width: 50vw;
            background-color: #592369;
            color: #fff;
            font-weight: 900;
            font-size: xx-large;
            text-align: center;
            padding-top: 3vh;
            /* border: 2px solid black; */
        }
    </style>
</head>

<body>
    <?php
    include '../Safar/conponents/navbar.php';
    ?>

    <div class="videoBox">
        <video autoplay muted loop class="mvideo" src="assets/videos/Incredible_india_Edit_v10_1980x786_resolution.mp4"></video>
    </div>

    <div class="intro">
        <p>One of the oldest civilisations in the world, India is a mosaic of multicultural experiences. With a rich heritage and myriad attractions, the country is among the most popular tourist destinations in the world. It covers an area of 32, 87,263 sq. km, extending from the snow-covered Himalayan heights to the tropical rain forests of the south. As the 7th largest country in the world, India stands apart from the rest of Asia, marked off as it is by mountains and the sea, which give the country a distinct geographical entity.</p>
    </div>

    <div class="indiaPropular">
        <h2>Popular In India</h2>
        <p>India is a home to the finest architectural heritage, serene ghats, spectacular landscapes and largest tiger reserve</p>
    </div>

    <div class="frame">
        <div class="left arrow"><img src="assets/images/left.png" alt=""></div>
        <div class="slider">
            <div class="image">
                <a href="#"><img .image src="assets/images/slide1.jpeg" alt=""></a>

            </div>
            <div class="image">
                <a href="#"><img .image src="assets/images/slide2.jpeg" alt=""></a>

            </div>
            <div class="image">
                <a href="#"><img .image src="assets/images/slide3.jpeg" alt=""></a>

            </div>
            <div class="image">
                <a href="#"><img .image src="assets/images/slide4.jpeg" alt=""></a>

            </div>

        </div>
        <div class="right arrow"><img src="assets/images/right.png" alt=""></div>
    </div>
    <div class="indiaPropular">
        <h2>Popular In India</h2>
        <p>India is a home to the finest architectural heritage, serene ghats, spectacular landscapes and largest tiger reserve</p>
    </div>


    <?php

    echo '<div class="cardframe">
<div class="cards">';
    include 'db_conn.php';
    $query = "Select * from `location` limit 3";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)) {

        echo '
        <div class="card">
            <div class="cimage">
                <a href="#"><img src="' . $row['mainImg'] . '" alt=""></a>  
            </div>
            <div class="cname">
                <form action="" method="POST">
                    <input type="hidden" name="Lname" value="' . $row['siteName'] . '">
                    <input type="Submit" name="sub" class ="Cbtn" value="' . $row['siteName'] . '">
                </form>
             </div> 
         </div>
           
   ';
    }

    echo ' </div>

 </div>

      ';
    ?>
    <!-- <div class="showMore">
         <a href="Location.html">  <button class="show_more">show more</button></a>
     </div> -->


    <div class="indiaPropular">
        <h2>Popular In India</h2>
        <p>India is a home to the finest architectural heritage, serene ghats, spectacular landscapes and largest tiger reserve</p>
    </div>
    <?php

    echo '<div class="cardframe">
<div class="cards">';
    include 'db_conn.php';
    $query = "Select * from `location` limit 3";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)) {

        echo '
        <div class="card">
            <div class="cimage">
                <a href="#"><img src="' . $row['mainImg'] . '" alt=""></a>  
            </div>
            <div class="cname">
                <form action="" method="POST">
                    <input type="hidden" name="Lname" value="' . $row['siteName'] . '">
                    <input type="Submit" name="sub" class ="Cbtn" value="' . $row['siteName'] . '">
                </form>
             </div> 
         </div>
           
   ';
    }

    echo ' </div>

</div>

      ';

    ?>
    <!-- <div class="showMore">
        <a href="">  <button class="show_more">show more</button></a>
    </div> -->
    <footer>
        <div class="block">
            <h4>Contact us : Safar@666gmail.com</h4>
        </div>
        <div class="block">
            <h4>Safar@copyright</h4>
        </div>

    </footer>














    <script>
        const left = document.querySelector(".left");
        const right = document.querySelector(".right");
        const slider = document.querySelector(".slider");
        const images = document.querySelectorAll(".image");

        let slideNo = 1;
        //   let ilenght = images.length;
        const nextSlide = () => {
            slider.style.transform = `translateX(-${slideNo * 100}vw)`;
            slideNo++;
        };
        const gotoFirstSlide = () => {
            slider.style.transform = `translateX(0vh)`;
            slideNo = 1;
        };

        const prevSlide = () => {
            slider.style.transform = `translateX(-${(slideNo - 2) * 100}vw)`;
            slideNo--;
        };
        const gotoLastSlide = () => {
            slider.style.transform = `translateX(-${(images.length - 1) * 100}vw)`;
            slideNo = images.length;
        };

        right.addEventListener("click", () => {
            console.log("hello")
            if (slideNo < images.length) {
                nextSlide();
            } else {
                gotoFirstSlide();
            }
            // changeSlideDotColor();
        });
        left.addEventListener("click", () => {
            if (slideNo > 1) {
                prevSlide();
            } else {
                gotoLastSlide();
            }
            // changeSlideDotColor();
        });

        let slideInterval;

        const startSlideShow = () => {
            slideInterval = setInterval(() => {
                // slideInterval < images.length ? nextSlide() : gotoFirstSlide();
                if (slideNo < images.length) {
                    nextSlide();
                } else {
                    gotoFirstSlide();
                }
                //    changeSlideDotColor();
            }, 2000);
        };
        startSlideShow();

        const stopSlideShow = () => {
            clearInterval(slideInterval)
        }

        slider.addEventListener('mouseover', stopSlideShow);
        slider.addEventListener('mouseout', startSlideShow);
        right.addEventListener('mouseover', stopSlideShow);
        right.addEventListener('mouseout', startSlideShow);
        left.addEventListener('mouseover', stopSlideShow);
        left.addEventListener('mouseout', startSlideShow);
    </script>
</body>

</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            