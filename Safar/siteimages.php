<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form</title>
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      body {
        /* background-color: rgb(228, 198, 255); */
        background-image: url("assets/images/road.jpg");
        background-size: 100% 150%;
        background-repeat: no-repeat;
        /* filter: blur(2px);
    -webkit-filter: blur(2px); */
      }

      header {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 20vh;
        width: 30vw;
        color: aliceblue;
        /* background-color: rgb(128, 43, 207); */
        border-radius: 10px;
        text-align: center;
        margin-top: 10vh;
        margin-left: 70vh;
        font-family: Arial, Helvetica, sans-serif;
        backdrop-filter: blur(10px);
      }

      .form {
        font-size: 3vh;
      }

      .field {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 60vh;
        width: 30vw;
        color: rgb(254, 254, 255);
        /* background-color: rgb(129, 101, 155); */
        border-radius: 10px;
        text-align: center;
        backdrop-filter: blur(5px);

        /* margin-top: 5vh; */

        margin-left: 70vh;
        /* padding-left: 5vw; */

        backdrop-filter: blur(35px);
      }

      .f-elements {
        font-size: 2vh;
        border-radius: 10px;
        margin: 3vh 0;
      }
      p {
        font-size: 1.5vw;
      }
      input[type="text"] {
        width: 20vw;
        height: 5vh;
        padding: 5px;
        background: transparent;
        margin: 1vh;
        color: azure;
      }
      input[type="password"] {
        width: 20vw;
        height: 5vh;
        padding: 5px;
        background: transparent;
        margin-top: 1vh;
        color: azure;
      }

      ::placeholder {
        color: azure;
      }

      #Add {
        width: 20vw;
        height: 7vh;
        background-color: rgb(250, 247, 246);
        font-size: 4vh;
        
        
        color: rgb(216, 96, 26);
        /* backdrop-filter: blur(5px); */
      }
      input[type=file]::file-selector-button{
            padding: 1vh;
            border-radius: 7px;
            margin: 1vh;
        }
      h4{
        position: relative;
        top: -3vh;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="form">
        <h1 style="text-decoration: underline">Add Site 
            images
        </h1>
       
      </div>
    </header>

    <main>
      <div class="field">
        <form action="" method="POST" enctype="multipart/form-data">
         
          <label for="name">
            <h4>*You can choose multipke images</h4>
            <p>Name:</p>
            <input
              type="text"
              placeholder="Enter Site Name"
              class="name"
              class="f-elements"
              name="name"
              autofocus
              required
            />
          </label>
          <label for="siteImage">
            <p>Site Images:</p>
            <input
              type="file"
              placeholder=""
              class="imgUpload"
              class="f-elements"
              name="imgUpload[]"
              multiple
              required
            />
          </label>
         
         
          
       
          <label for="Add">
            <input
              type="submit"
              value="Upload"
              value="Upload"
              id="Add"
              class="f-elements"
              name="Submit"
            />
          </label>
        </form>
      </div>
    </main>

    <footer></footer>

    <?php
    include'db_conn.php';
    if(isset($_POST["Submit"])){
    for($i=0;$i < count( $_FILES["imgUpload"] ["name"]);$i++){
        $name = $_POST["name"];
        
        $imagename = $_FILES["imgUpload"] ["name"][$i];
        $imagetmp_name = $_FILES["imgUpload"] ["tmp_name"][$i];
        echo"$name";
        $folder = "images/".$imagename;
        move_uploaded_file($imagetmp_name,$folder);
        $sql = "INSERT INTO `siteimages` (`id`, `siteName`, `images`) VALUES ('','$name','$folder');";
        $result =mysqli_query($conn,$sql);
        echo'<script>
        let url ="addCuisine.php"
        window.location=url;
        </script>';

    }
      

     
      
      
     }
    ?>
    <script>
       if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
      }
    </script>
           
  </body>
</html>
]