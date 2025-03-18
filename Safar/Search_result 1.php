<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         *{
        padding: 0;margin: 0;
        box-sizing: border-box;
        --main_color : rgb(252, 250, 253);
    }
    img{
        height: 100%;
        width: 100%;

    }
    body{
        width: 100vw;
        
        background-color: rgb(251, 251, 253);
    }
    
    header{
        height: 15vh;
        width: 100vw;
        border: 2px solid black;
        
        box-shadow: 2px black;
      position: sticky;
      top: 0;
      z-index: 100;
      
    }
    
    header nav{
        height: 15vh;
        width: 100vw;
        /* border: 2px solid black; */
        display: flex;
        align-items: center;
        background-color:var(--main_color);
        
    }
    header p{
        color: rgb(69, 4, 95);
        font-size: larger;
    }
    header .logo{
        width: 10vw;
        height: 8vh;
        margin-left: 2vw;
        /* border: 2px solid black; */
        display: flex;
        justify-content: center;
        border-radius: 20px;        align-items: center;
        overflow: hidden;
        
    }
    header .search{
        width: 55vw;
        height: 8vh;
        margin-left:7vw;
        /* border: 2px solid black; */
        display: flex;
        justify-content: center;
        align-items: center;
        /* font-size: xx-large; */
    }
    header .search_btn{
        padding: 2vh;
        color: #340849;
        font-size: larger;
        border-radius: 10px;
        font-weight: 600;
    }
    header .login{
        width: 5vw;
        height: 8vh;
        margin-left: 2vw;
        /* border: 2px solid black; */
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        color: #40074e;
        right: 3vw;
        font-size: x-large;
        
    }
    
    header .destination{
        width: 10vw;
        height: 8vh;
        margin-left: 2vw;
        color: #40074e;
        /* border: 2px solid black; */
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        right: 12vw;
        font-size: xx-large;
    }
    
    input[type=text]{
        width: 45vw;
        height: 7vh;
        border-radius: 20px;
        font-size: x-large;
        padding: 0 2vh ;
    }
    ::placeholder{
        font-size: 3vh;
        margin-top: 1.5vh;
        padding: 1vh;
    }
        .container{
            width: 100vw;
            height: fit-content;
            padding: 2vw;
            /* background-color: #757070; */
        }
        .box{
            width: 95vw;
            height: 40vh;
            padding: 2vw;
            background-color: #5a1e5c;
            display: flex;
            justify-content: center;
            align-items: center;
            /* gap: 2vw; */
            border-radius: 10px;
        }
        .imgbox{
            height: 35vh;
            width: 40vw;
            background-color: #fff;
            padding: 2vh;
            border-radius: 10px;
            /* order: 2; */
         box-shadow: 0.5vh 0.5vh 3vh black;
         z-index: 7;

        }
        .info{
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
        .info p{
            font-size: larger;
            margin-left: 5vw;
            font-weight: 600;
            height: 20vh;

        }
        img{
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
        .viewMore{
            width: 10vw;
            height: 10vh;
            margin-top: 3vh;

        }
        .viewMore p{
            font-size: medium;
        }
    </style>
</head>
<body>
<?php
    if(isset($_POST['search_btn'])){
        $Search = $_POST['search_bar'];
      
    }
?>




    <header>
        <nav>
            <div class="logo">
                    <img src="assets/images/logo.jpg" alt="">
            </div>
            <div class="search">
                <form action="" method="POST">
                    <label for="search_bar">
                        <input type="text" id="search_bar" name="search_bar" placeholder="Search for Destinations">
                    </label>
                    <label for="search_btn">
                        <input type="button" value="Search" name="search_btn" class="search_btn">
                    </label>
                </form>
            </div>
            
            </div>
            <div class="destination">
                
                <p>Destination</p>
                <span class="icon dropdown"></span>
                
            </div>
            <div class="login">
                
                <p>Login</p>
                <span class="icon dropdown"></span>
                
            </div>
    
        </nav>
    </header>
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
        </div>
    </main>
    
</body>
</html>