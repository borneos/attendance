<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visit Malahing - By Tech Team Borneos</title>
    <link rel="icon" type="image/x-icon" href={{ asset('img/favicon/favicon.ico') }}>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>

<body>
    <div class="relative">
        <div class="px-6 w-full shadow-lg">
            <div class="flex items-center justify-between border-gray-100 py-4 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-100 lg:flex-1">
                    <a href="#">
                    <img style="width: 170px;" src="https://res.cloudinary.com/borneos-co/image/upload/v1676648237/visit-malahing/logo-visit-malahing_u8hn9v.webp" alt="Better Living in Malahing">
                    <!-- <img src={{ asset(env('PUBLIC_ASSETS').'img/malahing.png') }} alt="Better Living in Malahing" width="100" height="100"> -->
                    </a>
                </div>
                <div class="items-center justify-end md:flex md:flex-1 lg:w-0">
                    <a href={{ route('attendance') }} class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-teal-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-teal-700">Buku Tamu</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto pt-6">
            <img
                class="mx-auto w-28 md:w-36"
                src="https://res.cloudinary.com/borneos-co/image/upload/v1676648251/visit-malahing/logo-better-living-malahing_j2ibkw.webp"
                alt="Better Living in Malahing"
            >
    </div>
    <div class="my-8 swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://res.cloudinary.com/borneos-co/image/upload/v1676539405/malahing/IMG_0850_zwvcmx.webp" alt="">
            </div>
            <div class="swiper-slide">
               <img src="https://res.cloudinary.com/borneos-co/image/upload/v1676539555/malahing/DSC04663_n8hjjv.webp" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://res.cloudinary.com/borneos-co/image/upload/v1676539403/malahing/DSC07821_kkk7qd.webp" alt="">
            </div>
        </div>
         <div class="swiper-pagination"></div>
    </div>
     <div class="container mx-auto">
        <div class="text-center">
            <h1 class="font-bold text-3xl">
                Selamat Datang di Website Resmi Malahing
            </h1>
            <h2 class="my-3 font-bold text-2xl text-amber-500">This Website Still Under Construction</h2>
        </div>
    </div>

     <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        })
    </script>
</body>
</html>
