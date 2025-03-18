
<?php
    require"dbconnect.php";
   
    ?>


    
    
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>position</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      img{
        width: 100%;
        height: 100%;
      }
      header {
        display: inline-block;
        height: 25vh;
        width: 100vw;
        background-color: black;
        color: beige;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 3vh;
        font-size: 70px;
        text-align: center;
        /* position: fixed; */
        
      }
      nav {
        height: 9vh;
        width: 100vw;
        background-color: rgb(50, 1, 73);
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 900;
        position: sticky;
        top: 0;
        z-index: 77;
       
      }
      nav li {
        display: inline-block;
        margin: 1vh 1.5vw;
      }
      nav ul a {
        color: beige;
        text-decoration: none;
        font-size: 30px;
      }
      nav ul a:hover {
        color: beige;
        text-decoration: underline;
        font-size: 30px;
      }
      .UploadImage{
        position: absolute;
        right: 3vw;
        font-size: 30px;
        color: beige;
        margin-top: 1vh;
        transition: all 1s;

      }
      nav .UploadImage:hover {
        color: beige;
        text-decoration: underline;
        font-size: 30px;
      }
      .uploadBox{
        display: none;
        transition: all 1s;
      }
      .upload{
        height: 35vh;
        width: 25vw;
        padding: 2vw;
        background-color: #b89521;
        position: absolute;
        top: 37vh;
        right: 1vw;
        z-index: 77;
        border-radius: 10px;
      }
      input[type=text]{
            width: 20vw;
            height: 5vh;
            padding: 5px;
            
            border-radius: 5px;
            background-color: transparent;
            border: 0px solid;
            border-bottom: 1px solid whitesmoke;
        }
        input[type=file]::file-selector-button{
            padding: 1vh;
            border-radius: 7px;
            margin: 1vh;
        }
        input[type=submit] {
            width: 20vw;
            height: 5vh;
            padding: 5px;
            margin: 0.5vh;
            margin-left: 1vh;
             border-radius: 8px;
             font-size: larger;
             transition: all 1s;
             padding: .3vh;
             font-weight: 700;

        }
        input[type=submit]:hover{
            background-color:purple;
            color:white;
             
        }
        ::placeholder{
          font-size: large;
          color: whitesmoke;
          border: none;
        }
        .upload p{
          margin: 1vh;
          
          font-size: 1vw;
        }
      .upArrow{
        width: 0;
        height: 0;
        border-left: 1.5vh solid transparent;
        border-right: 1.5vh solid transparent;
        border-bottom: 3vh solid rgb(250, 249, 249);
        /* z-index: 99; */
        position: absolute;
        right: 3vw;
        display: none;

      }
      .dblock{
        display: block;
      }
      /* main {
      
      } */
      .container{
        width: 100vw;
        height: fit-content;
        background-color:white;
        display: flex;
        
        flex-wrap: wrap;
        gap: 2vh;
        padding: 2vw;
        padding-top: 8vh;

      }
      .box {
        height: 25vh;
        width: 23vw;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-shadow: 0.5vh 0.5vh 3vh black;
        background-color:  rgb(118, 118, 119);
        transition: all 1s;
        margin: 3vw 0;
        position: relative;
        border-radius: 5px;
      }
      .image {
        min-height: 25vh;
        width: 21vw;
        background-color: white;
        position: relative;
        top: -5vh;
        box-shadow: 0.5vh 0.5vh 3vh black;
        border-radius: 10px;
        transition: all 1s;
        overflow: hidden;
        
      }
      .box:hover > .image{
        height: 30vh;
        background-color: white;
        top: -10vh;
        
      }
      
      .options{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5vh;
        display: none;
        transition: display 1s;
       
      }
      .view{
        height: 5vh;
        width: 10vw;
        background-color: white;
        font-weight: 600;
        border-radius: 10vh;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        top: -5vh;
        transition: all 1s;
       
      }
      .options a{
        color:grey;
        text-decoration: none;
      }
      .box:hover .options{
        display: inline-block;
        transition: all 1s;
      }
     
      
    </style>
  </head>
  <body>
    
    <header>
      <h1>My Darling</h1>
    </header>
    <main>
      <nav>
        <ul>
        <li><a href="/Hinata/Hinata Fan-Page.php">Home</a></li>
          <!-- <li><a href="#">Home</a></li> -->
          <li><a href="/Hinata/hina_intro.php">About</a></li>
         
          <li><a href="#">Contact</a></li>
        </ul>
        <p class="UploadImage">Upload</p>
      </nav>
      <div class="upArrow"></div>
      <div class="uploadBox">
        
        <div class="upload">
          <form action="" method="POST" enctype="multipart/form-data">
            <label for="name">
              <p>Name : </p>
              <input type="text" class="name" placeholder="Enter name"
              name="name">
            </label>
            <label for="imgUpload">
              <p>Upload Image : </p>
              <input type="file" id="imgUpload" name="imgUpload">
            </label>
            <label for="submit">
              <input type="submit" class="submit" name="Submit">
            </label>
          </form>
        </div>
      </div>
      <div class="container">
      <?php
      $sqlshow ="SELECT * FROM `images`";
      $result2 =mysqli_query($dbconn,$sqlshow);
      $num =mysqli_num_rows($result2);
      while($row = mysqli_fetch_assoc($result2)){
        echo'<div class="box">
        <div class="image">
          <img src="'.$row['hina_imgs'].'"alt="" />
        </div>
        <div class="options">
        <div class="view">
          <p><a href="/Hinata/viewImg.php?imgid='.$row['id'].'">View</a></p>
        </div>
        
      </div>
    
      </div>';
      }
       
      
 
       ?>
       
       </div>
  <img src="" alt="">
      
    </main>


    <?php
     if(isset($_POST["Submit"])){
      $name = $_POST["name"];
      $imagename = $_FILES["imgUpload"] ["name"];
      $imagetmp_name = $_FILES["imgUpload"] ["tmp_name"];
      echo"$name";
      $folder = "images/".$imagename;
      move_uploaded_file($imagetmp_name,$folder);
      $sql = "INSERT INTO `images` (`id`, `hina_imgs`, `name`, `date`) VALUES ('','$folder', '$name', current_timestamp());";
      $result =mysqli_query($dbconn,$sql);
      
       $name = null;
      
       $imagename = null;
      
       $imagetmp_name = null;
     }
    ?>

    



    <script>
      const upload = document.getElementsByClassName('UploadImage')[0]
      const uploadbox = document.getElementsByClassName('uploadBox')[0]
      const upArrow = document.getElementsByClassName('upArrow')[0]
     
      upload.addEventListener("click",()=>{
        uploadbox.classList.toggle("dblock");
        upArrow.classList.toggle("dblock");
      })


      if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
      }
    </script>

    
  </body>
</html>