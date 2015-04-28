<?php
include_once 'includes/register.inc.php';
include_once 'includes/db_connect.php';
include 'includes/functions.php';

if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script>
        <script type="text/JavaScript" src="js/forms.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
    </head>
    <body>
        <?php
        if (isset($_GET['error'])) {
        echo '<p class="error">Error Logging In!</p>';
        }
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <div class="container">
            <form action="includes/process_login.php" method="post" name="login_form" class="form-signin">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input placeholder="E-Mail" type="text" id="inputEmail" class="form-control" name="email" required autofocus/>
                <label for="password" class="sr-only">Password</label>
                <input type="password"
                name="password"
                id="password"
                class="form-control"
                placeholder="Password"
                required />
                <input type="button"
                value="Login"
                onclick="formhash(this.form, this.form.password);"
                class="btn btn-lg btn-primary btn-block" />
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                Register
                </button>
            </form>
            
            <?php
            if (login_check($mysqli) == true) {
            echo '<p align="center">Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
            
            echo '<p align="center">Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
            } else {
            echo '<p align="center">Currently logged ' . $logged . '.</p>';
            }
            ?>
        </div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon">Username</span>
                                <input type="text" name="username" id="username"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon default">E-Mail</span>
                                <input type="text" name="email" id="email"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">&nbsp</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon warning">Password</span>
                                <input type="password" name="password" id="password"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon warning">Password</span>
                                <input type="password" name="confirmpwd" id="confirmpwd"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="button" value="register" class="btn btn-primary" onclick="return regformhash(this.form,this.form.username,this.form.email,this.form.password,this.form.confirmpwd);"/>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>