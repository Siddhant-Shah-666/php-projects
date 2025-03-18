<?php
echo '<header>
        <nav>
            <div class="logo">
                    <img src="assets/images/logo.jpg" alt="">
            </div>
            <div class="search">
                <form action="" method="POST">
                    <label for="search_bar">
                        <input type="text" id="search_bar" name="search_bar" placeholder="Search for Destination">
                    </label>
                    <label for="search_btn">
                        <input type="button" value="Search" name="search_btn" class="search_btn">
                    </label>
                </form>
            </div>
            
            </div>
            <div class="addsite">
                <a href="AddSite.php"><p>Add Site</p></a>
        
                <span class="icon dropdown"></span>
                
            </div>
            <div class="logout">
                <a href="Logout.php">Logout</a>
                
                <span class="icon dropdown"></span>
                
            </div>
    
        </nav>
    </header>';
?>