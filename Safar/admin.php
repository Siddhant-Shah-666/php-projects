<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hinata</title>
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      header{
        display: inline-block;
      }

      nav {
        background-color: rgb(119, 2, 109);
        display: inline-block;
        height: 8vh;
        width: 100vw;
      }
      footer {
        background-color: rgb(119, 2, 109);
        display: inline-block;
        height: 8vh;
        align-self: flex-end;
        width: 100vw;
      }
    p{
        margin: 1vh;
    }
    .nav-item{
        display: inline-block;
        margin: 12px 10px ;
        padding: 1vh;
        /* border: 2px solid white; */
        font-size: 20px;
      }

    .nav-item:hover {
      font-size: 22px;
      background-color: rgb(239, 236, 241);
      border-radius: 20px;
      color: rgb(119, 2, 109)
    }

      body {
        background-image: url("img/imagebg.jpg");
      }
      main {
        display: flex;
        flex-wrap: wrap;
        min-height: calc(100vh - 8vh - 8vh);
        /* flex-direction: column; */
      }

      #hina {
        display: flex;
        align-content: center;
        align-items: center;
        width: 25vw;
        height: 84vh;
        margin: 0 8vw 0 10vw;
        /* background-color: aqua; */
      }

      .intro {
        height: 30vh;
        width: 33vw;
        color: rgb(159, 29, 219);
        /* background-color: blueviolet; */
        margin: 0 8vw 0 0;
      }
      pre{
        margin: 40vh 10px;
        text-shadow: 5;
      }
      #hinaa{
        height: 80vh;
      }

      #content {
        display: flex;
        min-height: 75vh;
        flex-direction: column;
        align-content: center;
      }

      

      .content-item {
        display: flex;
        color: beige;
        flex-direction: column;
        /* background-color: aqua; */
        height: 15vh;
        width: 10vw;
        /* border: 2px solid white; */
        align-items: center;
        margin: 6vh 6vh 6vh 3vh ;
        /* padding: 1vw; */
      }
      .content-item h3{
      font-size: 20px;
      }
      a:link {
        color: rgb(107, 6, 107);
        text-decoration: none;
      }

      a:hover {
        color: rgb(238, 5, 238);
        text-decoration: bold;
      }
      .hinata:hover{
        height: 15vh;
        font-size: 30px;
        
      }

      
      h1{
        font-size:  30px;
      }

      .f-items{
        font-size: 25px;
      }

       @media only screen and (max-width :800px) { 
        footer{
            background-color: aqua;
            #hinaa{
                height: 50vh;
            }
        }
        #content-item{
          display: flex;
          flex-direction: row;
          flex-wrap: wrap;
        }
        
      } 

    </style>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li class="nav-item">
            <div>
            <a style="color: white" href="/index.html"><h3>Home</h3></a>
          </div>
          </li>
          <li class="nav-item">
            <div>
            <a style="color: white" href="/index.html"><h3>Hinata</h3></a>
          </div>
          </li>
          <li class="nav-item">
            <div>
            <a style="color: white" href="/index.html"><h3>My Skills</h3></a>
          </div>
          </li>
        </ul>
      </nav>
      
    </header>
    <main>
      <div id="hina">
        <img id="hinaa" src="img/hinata.png" alt="hinata" />
      </div>

      <div class="intro"> 
        <pre><h1>Hello,
I'm Siddhant Kumar.
And I'm Web Developer...!</h1></pre>
      </div>

      <div id="content">
        <div id="about" class="content-item">
          <a href="My_self.html">
            <img src="img/hina.png" class="hinata" height="100vh"
          /></a>
          <a href="/My_self.html"><h3>My Self</h3></a>
        </div>

        <div id="skills" class="content-item">
          <a href="Skills.html">
            <img src="img/light-bulb.png" class="hinata" height="100vh"
          /></a>
          <a href="/My_self.html"><h3>My Skills</h3></a>
        </div>

        <div id="achievement" class="content-item">
          <a href="achievement.html">
            <img src="img/trophy.png" class="hinata" height="100vh"
          /></a>
          <a href="/achievement.html"><h3>My Achievement</h3></a>
        </div>
      </div>
    </main>
    <footer class="f-items">

<p style="color: white" >@ 2023 Siddhant_kumar</p>
    </footer>
  </body>
</html>
<script>
  
</script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              