<?php
include('config/app.php');
include_once('controllers/AuthenticationController.php');
?>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>rekomendasi model hijab</title>

<!--style-->
<link rel="stylesheet" href="css/yanna_style.css">
<link rel="stylesheet" href="css/style_yanaa.css">
<!-- Fontawesome Link for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>
<div class="wrapper">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <ul class="carousel">

        <li class="card">
            <div class="img"><img src="img/square.jpeg" alt="square" draggable="false"></div>
            <div class="content">
               <img src="img/model2.jpg" alt="model2" draggable="false">
               <img src="img/model5.jpg" alt="model5" draggable="false">
               <img src="img/model1.jpg" alt="model1" draggable="false">
            </div>
        </li>

        <li class="card">
            <div class="img"><img src="img/rectangle.jpeg" alt="rectangle" draggable="false"></div>
            <div class="content">
                <img src="img/model4.jpg" alt="model4" draggable="false">
                <img src="img/model8.jpg" alt="model8" draggable="false">
                <img src="img/model3.jpg" alt="model3" draggable="false">
            </div>
        </li>

        <li class="card">
            <div class="img"><img src="img/oval.jpeg" alt="oval" draggable="false"></div>
            <div class="content">
                <img src="img/model5.jpg" alt="model5" draggable="false">
                <img src="img/model6.jpg" alt="model6" draggable="false">
                <img src="img/model7.jpg" alt="model7" draggable="false">
            </div>
        </li>

        <li class="card">
            <div class="img"><img src="img/heartandinvertedtriangel.jpeg" alt="heartandinvertedtriangel" draggable="false"></div>
            <div class="content">
                <img src="img/model1.jpg" alt="model1" draggable="false">
                <img src="img/model4.jpg" alt="model4" draggable="false">
                <img src="img/model8.jpg" alt="model8" draggable="false">
            </div>
        </li>

        <li class="card">
            <div class="img"><img src="img/diamond.jpeg" alt="diamond" draggable="false"></div>
            <div class="content">
                <img src="img/model5.jpg" alt="model5" draggable="false">
                <img src="img/model6.jpg" alt="model6" draggable="false">
                <img src="img/model4.jpg" alt="model4" draggable="false">
            </div>
        </li>

    </ul>
    <i id="right" class="fa-solid fa-angle-right"></i>
</div>







<!-- script js  -->
<script src="js/yanna_script.js"></script>   
</body>
</html>