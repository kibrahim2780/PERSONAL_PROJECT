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
    <title>ZM Enterprises</title>
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
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="container-fluid" style="padding: 0; margin-bottom: 35px;">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/WhatsApp Image 2024-06-22 at 18.47.40_953e9882.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/WhatsApp Image 2024-07-07 at 12.44.52_e9c946b6.jpg" class="d-block custom-image-2" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/IMG-20240708-WA0013.jpg" class="d-block custom-image-3" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="custom-div">
        <h3 class="custom-header-2" style="margin: 0">
            About <span style="color:orangered ">ZM Enterprises</span>
        </h3>
        <div class="d-flex" style="gap: 45px; margin-top: 30px">
            <div>
                <p class="custom-paragraph">
                    ZM Enterprises has been very successful in the industry of pharma and is now expanding into
                    commercial import and trading. We will be focusing on importing and selling Pharma excipients, food,
                    and related chemicals. Our main goal is to provide high-quality products and meet the needs of our
                    valued customers.

                    We have a team of experienced professionals who handle the supply chain management, ensuring smooth
                    procurement and timely delivery of superior products. Our priority is to make sure our customers are
                    satisfied with the products they receive.

                    As a specialized trading firm, we have strong coordination skills and global support systems in
                    place. This allows us to represent our suppliers and customers effectively, both locally and
                    internationally. We are also registered as trusted vendors for many multinational, national, and
                    private sector organizations of pharma.

                    Our continuous growth and success are a result of our commitment to excellence. At ZM Enterprises,
                    we strive to provide top-quality products and services to our customers. We are excited to work on
                    this new venture and establish ourselves as leaders in the trading industry.
                </p>
            </div>
            <div>
                <img src="/WhatsApp Image 2024-06-22 at 18.18.52_9b1f6595.jpg" alt="" style="width: 330px">
            </div>
        </div>
    </div>
    <div class="custom-div">
        <h3 class="custom-header-2 text-center" style="margin: 0">
            <span style="color:orangered ">Zm Enterprises</span> Products
        </h3>
    </div>


    <div class="d-flex" style="padding-left: 150px;
    padding-right: 150px;">
        <div class="d-flex flex-column">
            <div class="pie-container">
                <canvas id="pieCanvas" height="180" width="180"></canvas>
            </div>
            <span>Pharmaceutical Excipients</span>
        </div>
    </div>


</section>
<footer class="container-fluid" style="padding: 0; background-color: orangered">
    <div class="d-flex justify-content-between custom-footer-2">
        <div class="custom-footer-header">
            <img src="/WhatsApp Image 2024-06-22 at 18.12.31_a31864d9.jpg" alt="" style="width: 20%">
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
<script>
    var myCarousel = document.querySelector('#carouselExampleIndicators');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000, // Set the interval time in milliseconds
        ride: 'carousel' // Automatically start the carousel
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const canvas = document.getElementById('pieCanvas');
        const ctx = canvas.getContext('2d');
        const percent = 50; // Adjust percentage here
        const imagePath = "{{ $chartData['imagePath'] }}"; // Replace with actual image path

        const centerX = canvas.width / 2;
        const centerY = canvas.height / 2;
        const radius = Math.min(centerX, centerY);

        // Load and draw the image
        const img = new Image();
        img.onload = function () {
            // Clear canvas
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Clip the image within a circular region
            ctx.save();
            ctx.beginPath();
            ctx.arc(centerX, centerY, radius, 0, Math.PI * 2);
            ctx.closePath();
            ctx.clip();
            ctx.drawImage(img, centerX - radius, centerY - radius, radius * 2, radius * 2);
            ctx.restore();

            // Draw the border around the clipped image
            drawBorderAroundImage(ctx, centerX, centerY, radius, percent);
        };
        img.src = imagePath;

        function drawBorderAroundImage(ctx, x, y, radius, percent) {
            // Calculate angles for the border based on percentage
            const startAngle = -Math.PI / 2; // Start angle at 12 o'clock position
            const endAngle = startAngle + (percent / 100) * (Math.PI * 2); // Calculate end angle

            // Draw the border
            const borderWidth = 20; // Width of the border
            ctx.beginPath();
            ctx.arc(x, y, radius, startAngle, endAngle);
            ctx.strokeStyle = '#FF4500'; // Adjust color of the border
            ctx.lineWidth = borderWidth;
            ctx.stroke();
        }
    });


</script>

</body>
</html>
