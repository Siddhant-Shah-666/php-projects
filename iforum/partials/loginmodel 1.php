<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="partials/login_handler.php" method="post">
            <div class="modal-body">
                
                
                    <div class="form-group">
                        <label for="name">Enter your name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                



            </div>
            
            </form>
        </div>
    </div>
</div>