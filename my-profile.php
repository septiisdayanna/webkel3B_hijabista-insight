<?php
include('config/app.php');
include_once('controllers/AuthenticationController.php');

$authenticated = new AuthenticationController;
$data = $authenticated->authDetail();
?>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scaled=1.0*">
<title>Login Apps</title>

<!--style-->
<link rel="stylesheet" href="css\eva_style.css">
<!--/style-->
</head>

<div class="py-5">
    <div class="container">

        <?php include('message.php'); ?>
        <h1>My Profile Page</h1>
        <hr>
        <h4>Full Name : <?= $data['fname'].''.$data['lname']; ?></h4>
        <h4>Email : <?= $data['email']; ?></h4>
        <h4>Created At : <?= date('d-m-y',strtotime($data['created_at'])); ?></h4>
    </div>
</div>

