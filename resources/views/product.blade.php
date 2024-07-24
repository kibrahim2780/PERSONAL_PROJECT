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
<style>
    .modal-dialog{
        max-width: 100%;
        width: 750px !important;
        margin-left: auto !important;
        margin-right: auto !important;
    }
    .modal-content{
        width: 750px !important;
    }
</style>
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
    <div class="custom-div">
        <h3 class="custom-header-2 text-center text-decoration-underline mb-2" style="margin: 0">
            Our <span style="color:orangered ">Products</span>
        </h3>
    </div>

    <div style="padding-left: 20px; padding-right: 20px">
        <table class="table table-bordered" style="border: 1px solid black ;">
            <thead>
            <tr>
                <th scope="col">S/N Items</th>
                <th scope="col">Chemical</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td  data-bs-toggle="modal" data-bs-target="#exampleModal1">Aerosil 200</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal4">Aspartame</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal2">Benzyl Benzoate</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal3">Benzyle Alcohol</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Cetocetyle Alcohol</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Cetyle Alcohol </td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal6">	Citric Acid Anhydrous</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal15">Citric Acid Mono</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>CMC Sodium </td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Crosscarmellose Sodium </td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal7">Dextrose Anhydrous</td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal8">Glycerin</td>
            </tr>
            <tr>
                <th scope="row">13</th>
                <td>Hydrogen Peroxide</td>
            </tr>
            <tr>
                <th scope="row">14</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal9">Hydroxypropyl Methylcellulose (HPMC) E5</td>
            </tr>
            <tr>
                <th scope="row">15</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal5">Hydroxypropyl Methylcellulose (HPMC) K15</td>
            </tr>
            <tr>
                <th scope="row">16</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal10">IPA</td>
            </tr>
            <tr>
                <th scope="row">17</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal13">Lactose Monohydrate</td>
            </tr>
            <tr>
                <th scope="row">18</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal14">Lactose SD</td>
            </tr>
            <tr>
                <th scope="row">19</th>
                <td>Magnesium Stearate</td>
            </tr>
            <tr>
                <th scope="row">20</th>
                <td>Mannitol</td>
            </tr>
            <tr>
                <th scope="row">21</th>
                <td>Methacrylic Acid E100</td>
            </tr>
            <tr>
                <th scope="row">22</th>
                <td>Methyle Peraben Plain</td>
            </tr>
            <tr>
                <th scope="row">23</th>
                <td>Methyle Peraben Sodium</td>
            </tr>
            <tr>
                <th scope="row">24</th>
                <td>Microcrystalline Cellulose 101</td>
            </tr>
            <tr>
                <th scope="row">25</th>
                <td>Microcrystalline Cellulose 102</td>
            </tr>
            <tr>
                <th scope="row">26</th>
                <td>Microcrystalline Cellulose 200</td>
            </tr>
            <tr>
                <th scope="row">27</th>
                <td>Migloyl Oil</td>
            </tr>
            <tr>
                <th scope="row">28</th>
                <td>PEG 6000</td>
            </tr>
            <tr>
                <th scope="row">29</th>
                <td>Poly Sucralose</td>
            </tr>
            <tr>
                <th scope="row">30</th>
                <td>Methacrylic Acid L100</td>
            </tr>
            <tr>
                <th scope="row">31</th>
                <td>Potasium Sorbate</td>
            </tr>
            <tr>
                <th scope="row">32</th>
                <td>Pottasium Chloride</td>
            </tr>
            <tr>
                <th scope="row">33</th>
                <td>Propyle Peraben Plain</td>
            </tr>
            <tr>
                <th scope="row">34</th>
                <td>Propyle Peraben Sodium</td>
            </tr>
            <tr>
                <th scope="row">36</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal11">PROPYLENE GLYCOL</td>
            </tr>
            <tr>
                <th scope="row">37</th>
                <td>PVP K30</td>
            </tr>
            <tr>
                <th scope="row">38</th>
                <td>Sodium Benzoate</td>
            </tr>
            <tr>
                <th scope="row">39</th>
                <td>	Sodium Chloride </td>
            </tr>
            <tr>
                <th scope="row">40</th>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal12">Sodium Citrate</td>
            </tr>

            <tr>
                <th scope="row">42</th>
                <td>Sodium Saccharin</td>
            </tr>
            <tr>
                <th scope="row">43</th>
                <td>Sodium Starch Glycolate</td>
            </tr>
            <tr>
                <th scope="row">44</th>
                <td>Sorbitol Solution 70%</td>
            </tr>
            <tr>
                <th scope="row">45</th>
                <td>Steric Acid </td>
            </tr>
            <tr>
                <th scope="row">46</th>
                <td>Tween 80</td>
            </tr>
            <tr>
                <th scope="row">47</th>
                <td>Xanthan Gum</td>
            </tr>

            </tbody>
        </table>
    </div>

    <div class="modal fade bg-black"  id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/aerosil.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/benzylbenzoate.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/benzylalcohol.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/363333396_810479394197032_7574745254909757926_n.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/hmpc k15.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/citricacid.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/dextroseanhydrous.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/glycerine.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/hydroxypropylmethylcellulose.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/isopropylalcohol.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="product-image-2/propyleneglycol.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/sodiumcitrate.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/lactose imp.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
 <div class="modal fade bg-black"  id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/lactose imp.jpg" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bg-black"  id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/product-image-2/citricacid.jpg" alt="" style="width: 100%">
                </div>
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
<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

</body>
</html>
