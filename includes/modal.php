
<link rel="stylesheet" type="text/css" href="css/style.css">

<div class="modal fade" role="dialog" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">LOGIN</h3>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span></button>
        
                    </div>
                    
                    <div class="modal-body">
                        <form action="login.php" method="POST">
                            <p>Don't have an account? <a href="signup.php" style="color:#337ab7">Register</a></p>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>   
                        <button type="submit" class="btn btn-primary">Login</button>
                        <br><br>
                        <a href="forgot_pass.php" style="color:#337ab7">Forgot Password?</a>
                        </form>
                    </div>
                    
                </div>
            </div>
</div>
                        
