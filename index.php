<?php 
include('config/app.php');
include('codes/authenticaction_code.php');
include('includes\navbar.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web - copy</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- css file link -->
    <link rel="stylesheet" href="css/style_yanaa.css">

</head>
<body>
    
<!-- home section awal-->

<section class="home" id="home">
    <div class="container-home">
        <div class="wrapper">
            <div class="content">
                <h3>Hijab Fashion and Hijab Consultation</h3>
                <P>Temukan gaya hijab yang paling sesuai dengan kebutuhan dan karakteristikmu sekarang!</P>
                <a href="#about_us" class="btn">read more</a>
            </div>
            <div class="image">
                <img src="img/logoutama.png" alt="logo utama hijab">
            </div>
        </div>
    </div>
</section>

<!-- home section akhir-->

<!-- about us section awal -->

    <section class="about_us" id="about_us">
        <h3 class="heading">about us</h3>
        <div class="row">
            <div class="img">
                <img src="img/logodua.png" alt="logo about us">
            </div>
            <div class="content">
                <h4>Selamat datang di Hijabista Insight!</h4>
                <p>Kami adalah platform yang berdedikasi untuk memberikan rekomendasi hijab sesuai preferensi Anda. Kami menghargai keunikan setiap individu dan memberikan solusi untuk menemukan hijab yang sempurna sesuai bentuk wajah, warna kulit, dan aktivitas sehari-hari Anda. Hijab bagi kami adalah ekspresi identitas dan gaya pribadi Anda.</p>
                <p>Tim kami bekerja keras menggunakan teknologi canggih dan pemahaman mendalam tentang kebutuhan hijabista modern. Dengan panduan yang Anda berikan, kami bisa merekomendasikan model, warna, dan bahan hijab yang cocok untuk Anda. Selamat menjelajahi dunia hijab bersama kami di Hijabista Insight, tempat Anda akan menemukan inspirasi hijab sesuai gaya dan keunikan Anda.</p>
                <h5>want to know more....</h5>
                <a href="#contact" class="btn">contact us</a>
            </div> 
        </div>
    </section>

<!-- about us section akhir -->

<!-- rekomendasi section awal -->

<section class="rekomendasi" id="rekomendasi">
    <h3 class="heading">rekomendasi</h3>
    <div class="box-container">
        
        <div class="box2">
            <img src="img/model.jpeg" alt="model hijab">
            <h2>model hijab</h2>
            <p>Temukanlah model hijab yang paling sesuai dengan bentuk wajah Anda</p>
            <a href="fitur_pilih_model.php" class="btn">lihat</a>
        </div>

        <div class="box2">
            <img src="img/warna.jpeg" alt="warna hijab">
            <h2>warna hijab</h2>
            <p>Temukanlah warna hijab yang paling sesuai dengan warna kulit Anda</p>
             <a href="fitur_pilih_warna.php" class="btn">lihat</a>
        </div>

        <div class="box2">
            <img src="img/bahan.jpeg" alt="bahan hijab">
            <h2>bahan hijab</h2>
            <p>Temukanlah bahan hijab yang paling sesuai dengan kegiatan sehari-hari Anda</p>
            <a href="fitur_pilih_bahan.php" class="btn">lihat</a>
        </div>

    </div>
</section>

<!-- rekomendasi section akhir -->

<!-- shop section awal -->

    <section class="shop" id="shop">
        <h3 class="heading">shop</h3>
        <div class="container-shop">
            <h4>pilih toko online favorit anda!</h4>
            <ul class="store-list">
                <li class="store-item">
                    <a href="https://bitly.ws/36KNY">
                        <div class="img">
                            <img src="img/tokotokopedia.png" alt="Tokopedia">
                        </div>
                    <span class="btn">Tokopedia</span>
                    </a>
                </li>
                <li class="store-item">
                    <a href="https://bitly.ws/36KIM">
                        <div class="img">
                            <img src="img/tokolazada.png" alt="Lazada">
                        </div>
                    <span class="btn">Lazada</span>
                    </a>
                </li>
                <li class="store-item">
                    <a href="https://shopee.co.id/search?keyword=hijab" >
                    <div class="img">
                        <img src="img/tokoshopee.png" alt="Shopee">
                    </div>
                    <span class="btn">Shopee</span>
                    </a>
                </li>
                <li class="store-item">
                    <a href="https://bitly.ws/36KJv">
                    <div class="img">
                        <img src="img/tokobukalapak.png" alt="Bukalapak">
                    </div>    
                    <span class="btn">Bukalapak</span>
                    </a>
                </li>
             </ul>
        </div>
    </section>

<!-- shop section akhir -->

<!-- contact section awal -->

<section class="contact" id="contact">
    <div class="contactus">
        <h3 class="heading">contact us</h3>

        <div class="box">

            <div class="contact form">
                <h2>send message</h2>
                <form action="">
                    <div class="formbox">
                        <div class="row50">
                            <div class="inputbox">
                                <span>first name</span>
                                <input type="text" placeholder="YourFirstName*">
                            </div>
                            <div class="inputbox">
                                <span>last name</span>
                                <input type="text" placeholder="YourLastName*">
                            </div>
                        </div>
    
                        <div class="row50">
                            <div class="inputbox">
                                <span>email</span>
                                <input type="text" placeholder="YourE-Mail*">
                            </div>
                            <div class="inputbox">
                                <span>Mobile</span>
                                <input type="text" placeholder="YourPhone*">
                            </div>
                        </div>
    
                        <div class="row100">
                            <div class="inputbox">
                                <span>Message</span>
                                <textarea placeholder="write your message here..." id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>   
                        <div class="row100">
                            <div class="inputbox">
                              <input type="submit" value="send">
                            </div>
                        </div>   
                    </div> 
                </form>
            </div>

            <div class="contact info">
                <h2>contact info</h2>
                <div class="infoBox">
                    <div>
                        <span class="fas fa-map-marker"></span>
                        <p>104, Some street, Surabaya <br>INDONESIA</p>
                    </div>
                    <div>
                        <span class="fas fa-envelope"></span>
                        <a href="#">hijabista@sitename.com</a>
                    </div>
                    <div>
                        <span class="fas fa-phone"></span>
                        <a href="#">+62 234 567890</a>
                    </div>

                    <ul class="sci">
                        <li><a href="#" class="fab fa-twitter social-iconss fa"></a></li>
                        <li><a href="#" class="fab fa-facebook social-icons"></a></li>
                        <li><a href="#" class="fab fa-pinterest social-icons"></a></li>
                        <li><a href="#" class="fab fa-google social-icons"></a></li>
                    </ul>

                </div>
            </div>


            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31658.
                512225673752!2d112.70607522621616!3d-7.318578082111735!2m3!1f0!2f0!3f0!3m2!
                1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb6551205733%3A0x32a9d1800d0cfc47!2sKetintang%
                2C%20Kec.%20Gayungan%2C%20Surabaya%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1696700678198!5m2!1
                sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referr
                erpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
</section>

<!-- contact section akhir -->

</body>

<!-- js file link -->
<script src="js/script_yanna.js"></script>


</body>
</html>