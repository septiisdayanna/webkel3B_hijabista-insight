<?php
include('config/app.php');
include('codes/authenticaction_code.php');
$auth->isLoggedIn();
?>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scaled=1.0*">
<title>Login Apps</title>

<!--style-->
<link rel="stylesheet" href="css\eva_style.css">
<!--/style-->
</head>

<?php include('message.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="py-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Login Form</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST">      

                            <div class="mb-2">
                                <label>Email Id</label>
                                <input type="text" name="email" placeholder="Enter Email Address" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Password</label>
                                <input type="text" name="password" placeholder="Enter password" class="form-control">
                            </div>
                            <div class="mb-2">
                                <button type="submit" name="login_btn" class="btn btn-primary">Submit</button>
                            </div>

                        </form>

                        <div>"belum punya akun"<a href="register.php"> Klik Disini!</a> </div>
                        
                    </div>
                </div>
            </div>   
        </div>    
    </div>
</div>