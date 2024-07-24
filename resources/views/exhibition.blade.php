<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>ZM Chemicals</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg " style="background-color: orangered">
        <div class="container-fluid d-flex">
            {{--          <a class="navbar-brand" href="#">Navbar</a>--}}
            <div class="d-flex flex-column align-items-center">
                <img src="/WhatsApp_Image_2024-06-22_at_18.12.31_a31864d9-removebg-preview (1).png" alt=""
                     style="width: 100px">
                <h3 style="font-size: 32px; font-weight: 600">Zm Enterprises</h3>
                <p class="text-white">Let's Work Together</p>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end custom-padding-div-1" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item custom-header">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item custom-header">
                        <a class="nav-link active" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item custom-header">
                        <a class="nav-link active" href="/product">Product</a>
                    </li>
                    <li class="nav-item custom-header">
                        <a class="nav-link active" href="/exihibition">Exhibition</a>
                    </li>
                    <li class="nav-item custom-header">
                        <a class="nav-link active" href="/service">Services</a>
                    </li>
                    <li class="nav-item custom-header">
                        <a class="nav-link active" href="/support">Customer support</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="container-fluid" style="padding: 0; margin-bottom: 35px;">

    <div class="custom-header">
        <h3 class="custom-header-2 text-center text-decoration-underline mb-3 mt-3" style="margin: 0">
            <span style="color:orangered ">ZM Enterprises</span> Exhibition
        </h3>
    </div>
    <div class="d-flex flex-wrap justify-content-evenly" style="padding: 20px; gap: 20px">
        <div>
            <img src="/zm-pics-1/IMG-20240708-WA0004.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-1/IMG-20240708-WA0005.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-1/IMG-20240708-WA0006.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-1/IMG-20240708-WA0007.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-1/IMG-20240708-WA0008.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-1/IMG-20240708-WA0009.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-1/IMG-20240708-WA0010.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-2/IMG-20240708-WA0011.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-2/IMG-20240708-WA0012.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-2/IMG-20240708-WA0014.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-2/IMG-20240708-WA0015.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-2/IMG-20240708-WA0016.jpg" class="custom-image-4" alt="">
        </div>
        <div>
            <img src="/zm-pics-2/IMG-20240708-WA0017.jpg" class="custom-image-4"  alt="">
        </div>
        <div>
            <img src="/zm-pics-2/IMG-20240708-WA0018.jpg" class="custom-image-4"  alt="">
        </div>
        <div>
            <img src="/zm-pics-2/IMG-20240708-WA0019.jpg" class="custom-image-4"  alt="">
        </div>
        <div>
            <img src="/zm-pics-2/IMG-20240708-WA0020.jpg" class="custom-image-4"  alt="">
        </div>
    </div>
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

            <div class="mySlides">
                <div class="numbertext">1 / 4</div>
                <img src="img1_wide.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 4</div>
                <img src="img2_wide.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 4</div>
                <img src="img3_wide.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 4</div>
                <img src="img4_wide.jpg" style="width:100%">
            </div>

            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Caption text -->
            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <!-- Thumbnail image controls -->
            <div class="column">
                <img class="demo" src="img1.jpg" onclick="currentSlide(1)" alt="Nature">
            </div>

            <div class="column">
                <img class="demo" src="img2.jpg" onclick="currentSlide(2)" alt="Snow">
            </div>

            <div class="column">
                <img class="demo" src="img3.jpg" onclick="currentSlide(3)" alt="Mountains">
            </div>

            <div class="column">
                <img class="demo" src="img4.jpg" onclick="currentSlide(4)" alt="Lights">
            </div>
        </div>
    </div>
</section>
<footer class="container-fluid" style="padding: 0; background-color: orangered">
    <div class="d-flex justify-content-between custom-footer-2">
        <div class="custom-footer-header">
            <div class="d-flex flex-column align-items-center">
                <img src="/WhatsApp_Image_2024-06-22_at_18.12.31_a31864d9-removebg-preview (1).png" alt=""
                     style="width: 100px">
                <h3 style="font-size: 32px; font-weight: 600">Zm Enterprises</h3>
                <p class="text-white">Let's Work Together</p>
            </div>
            <p class="custom-paragraph" style="width: 400px; font-weight: 600; margin-top: 30px">
                ZM Chemicals are leading pharmaceutical indenting company in Pakistan. We rank among the top most
                companies of chemicals and raw material sale and purchase and provide the best compromise between cost,
                speed and reliability.
            </p>
        </div>
        <div class="d-flex flex-column" style="gap: 19px">
            <div>
                <a href="http://" class="custom-link-1">Contact Us</a>
            </div>

            <div class="d-flex flex-column" style="gap:13px">
                <p><i class="bi bi-geo-alt-fill"></i> 139 Block G-1, Johar Town, Lahore, Pakistan</p>
                <p><i class="bi bi-telephone-fill"></i> +92-42-35291046, 35312188, 35291056</p>
                <p><i class="bi bi-envelope-at-fill"></i> ceo@zmchemicals.com mail@zmchemicals.com info@zmchemicals.com
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

</body>
</html>
