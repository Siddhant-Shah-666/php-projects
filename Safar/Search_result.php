<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Safar/conponents/navbar.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            --main_color: rgb(252, 250, 253);
        }

        img {
            height: 100%;
            width: 100%;

        }

        body {
            width: 100vw;

            background-color: rgb(251, 251, 253);
        }


        .container {
            width: 100vw;
            height: fit-content;
            padding: 2vw;
            /* background-color: #757070; */
        }

        .box {
            width: 95vw;
            height: 40vh;
            padding: 2vw;
            background-color: #5a1e5c;
            display: flex;
            justify-content: center;
            align-items: center;
            /* gap: 2vw; */
            margin: 2vh 0;
            border-radius: 10px;
        }

        .imgbox {
            height: 35vh;
            width: 40vw;
            background-color: #fff;
            padding: 2vh;
            border-radius: 10px;
            /* order: 2; */
            box-shadow: 0.5vh 0.5vh 3vh black;
            z-index: 7;

        }

        .info {
            height: 25vh;
            width: 55vw;
            background-color: #fff;
            padding: 3vh;
            display: flex;
            flex-direction: column;

            align-items: center;
            border-radius: 10px;
            position: relative;
            left: -5vh;
            box-shadow: 0.5vh 0.5vh 2vh black;
        }

        .info p {
            font-size: larger;
            margin-left: 5vw;
            font-weight: 600;
            height: 20vh;

        }

        img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        .viewMore {
            width: 10vw;
            height: 10vh;
            margin-top: 3vh;

        }

        .viewMore p {
            font-size: medium;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['search_btn'])) {
        $Search = $_POST['search_bar'];
    }
    ?>




    <?php
    include '../Safar/conponents/navbar.php';
    ?>
    <main>
        <div class="container">
            <div class="box">
                <div class="imgbox">
                    <img src="assets/images/goa.jpg" alt="">
                </div>
                <div class="info">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veritatis iure laboriosam quae, laborum enim! Deserunt culpa repellendus quae quas tempore facilis accusantium animi iure expedita esse itaque architecto iste necessitatibus, vero voluptatem nulla. Lorem ipsum dolor
                    </p>
                    <div class="viewMore">

                        <a href="">View more..</a>
                    </div>

                </div>
            </div>
            <div class="box">
                <div class="imgbox">
                    <img src="assets/images/goa.jpg" alt="">
                </div>
                <div class="info">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veritatis iure laboriosam quae, laborum enim! Deserunt culpa repellendus quae quas tempore facilis accusantium animi iure expedita esse itaque architecto iste necessitatibus, vero voluptatem nulla. Lorem ipsum dolor
                    </p>
                    <div class="viewMore">

                        <a href="">View more..</a>
                    </div>

                </div>
            </div>
        </div>
    </main>

</body>

</html>