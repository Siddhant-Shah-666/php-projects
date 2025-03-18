<!-- Modal -->
<div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="signinModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signinModalLabel">Sign up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="partials/signup_handler.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Enter your name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="submit">Sign up</button>
                </div>

            </form>
        </div>
    </div>
</div>