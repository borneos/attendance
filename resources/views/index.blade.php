<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visit Malahing - By Tech Team Borneos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: salmon;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 600px;
            object-fit: cover;
        }
        .swiper-slide {
             width: 60%;
        }

        @media only screen and (max-width: 640px){
             .swiper-slide img {
                display: block;
                width: 100%;
                height: 150px;
                object-fit: cover;
            }
        }
    </style>
</head>

<body>
    <div class="relative bg-cyan-500">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#">
                <span class="sr-only">Your Company</span>
                <img src={{ asset(env('PUBLIC_ASSETS').'img/malahing.png') }} alt="Better Living in Malahing" width="100" height="100">
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <!-- Heroicon name: outline/bars-3 -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                </button>
            </div>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                <a href={{ route('attendance') }} class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Buku Tamu</a>
            </div>
            </div>
        </div>
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
            loop: true
        })
    </script>
</body>
</html>
