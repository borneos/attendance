<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Malahing</title>
    <link rel="stylesheet" href="../../css/app.css">

    {{-- <link rel="stylesheet" type="text/css" href="{{asset(env('PUBLIC_ASSETS').'css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
        integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="{{asset(env('PUBLIC_ASSETS').'css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset(env('PUBLIC_ASSETS').'css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset(env('PUBLIC_ASSETS').'css/iofrm-theme18.css')}}">
    <script src="{{env('PUBLIC_ASSETS').'vendor/sweetalert/sweetalert.all.js'}}"></script> --}}
</head>

<body style="background-image: url(https://res.cloudinary.com/borneos-co/image/upload/v1667649082/images/bg-drone-malahing_sfhrqg.webp);background-position: center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
    @include('sweetalert::alert')
    {{-- <div class="form-body without-side" style="background-color: transparent">
        <div class="website-logo">
            <a href="/absen-malahing">
                <div class="logo" style="">
                    <img src="{{asset(env('PUBLIC_ASSETS').'img/malahing.png')}}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items" style="margin:1%">
                        <h3>Buku Tamu Malahing</h3>
                        <h3 class=""></h3>
                        <p>Silakan isi buku tamu kunjungan Malahing.</p>
                        <form action="{{ route('absen.store') }}" method="POST" autocomplete="off">
                            @csrf
                            @dd(Request::path())
                            <input type="hidden" name="event" value="{{ Request::path() }}">
                            <input id="input" class="form-control" type="text" name="name"
                                placeholder="Nama Lengkap" required>
                            <textarea id="input" name="address" placeholder="Alamat Asal" class="form-control"></textarea>
                            <input id="input" class="form-control" type="number" name="whatsapp"
                                placeholder="Nomor Whatsapp" min="1" required>
                            <!-- <input id="input" class="form-control" type="text" name="instagram"
                                placeholder="Instagram"> -->
                            <input id="input" class="form-control" type="text" name="institution"
                                placeholder="Asal Instansi / Lembaga">
                            <input id="input" class="form-control" type="number" name="time_visit"
                                placeholder="Kunjungan ke Berapa" min="0" required>
                            <textarea id="input" name="reason" class="form-control" placeholder="Tujuan Kunjungan"></textarea>
                            <textarea id="input" name="info" class="form-control" placeholder="Dapat info Malahing dari mana"></textarea>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn" style="width: 100%">Simpan
                                    Data</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <div class="row justify-content-md-center" style="padding-bottom: 3%">
                                <div class="col-md-auto">
                                    <a href="https://www.facebook.com/borneos.co"><i
                                            class="fab fa-facebook-f"></i>Facebook</a>
                                    <a href="https://instagram.com/borneos.co"><i
                                            class="fab fa-instagram"></i>Instagram</a>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto">
                                    <a href="https://www.linkedin.com/company/borneos-co"><i
                                            class="fab fa-linkedin-in"></i>Linkedin</a>
                                </div>
                            </div>
                        </div>
                        <div style="margin: 4%;margin-bottom:0;text-align:center">
                            <span id="footer">Made with ❤️ tech team borneos.co</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="flex flex-col justify-center items-center my-14">
        <img src={{ asset(env('PUBLIC_ASSETS').'img/malahing.png') }} alt="Better Living in Malahing" width="200" height="100">
        <div class="bg-stone-50 rounded-md my-12 text-center p-8 shadow-md border-none">
            <h1 class="font-bold text-3xl">Buku Tamu Malahing</h1>
            <p class="mt-3">Silahkan isi buku tamu kunjungan ke Malahing</p>

            <div class="my-6">
                <form action="" method="POST">
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="fullname" class="font-bold text-md">Nama Lengkap</label>
                        <input type="text" class="form-input rounded w-[100%] p-3 border-gray-300" name="fullname" id="fullname" placeholder="John Doe">
                    </div>
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="address" class="font-bold text-md">Alamat Lengkap Tamu</label>
                        <textarea class="form-input rounded w-[100%] p-3 border-gray-300" name="address" id="address" placeholder="Jl. Malahing No. 01 Kelurahan Tanjung Laut Indah, Kecamatan Bontang Selatan, Kota Bontang"></textarea>
                    </div>
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="whatsapp_number" class="font-bold text-md">Nomor HP/WhatsApp</label>
                        <input type="number" class="form-input rounded w-[100%] p-3 border-gray-300" name="whatsapp_number" id="whatsapp_number" placeholder="081234567890" />
                    </div>
                    <div class="flex gap-8">
                        <div class="flex flex-col gap-3">
                            <label for="institute" class="font-bold text-md">Asal Instansi / Lembaga</label>
                            <select class="form-input rounded p-3 border-gray-300" name="institute" id="institute">
                                <option value="government">Pemerintah</option>
                                <option value="company">Perusahaan / Swasta</option>
                                <option value="community">Komunitas</option>
                                <option value="organization">Organisasi</option>
                                <option value="education">Pendidikan</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="institute_name" class="font-bold text-md">Nama Instansi / Lembaga</label>
                            <input type="text" class="form-input rounded w-[100%] p-3 border-gray-300" name="institute_name" id="institute_name" placeholder="Dinas Pariwisata Kota Bontang">
                        </div>
                    </div>
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="total_visit" class="font-bold text-md">Kunjungan ke Berapa?</label>
                        <input type="number" class="form-input rounded w-[100%] p-3 border-gray-300" name="total_visit" id="total_visit" placeholder="33" />
                    </div>
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="reason_to_visit" class="font-bold text-md">Tujuan Kunjungan</label>
                        <textarea class="form-input rounded w-[100%] p-3 border-gray-300" name="reason_to_visit" id="reason_to_visit" placeholder="Wisata"></textarea>
                    </div>
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="user_info_source_malahing" class="font-bold text-md">Dapat Info Malahing Dari Mana?</label>
                        <textarea class="form-input rounded w-[100%] p-3 border-gray-300" name="user_info_source_malahing" id="user_info_source_malahing" placeholder="Dari Kantor, Dari Teman, Dari Instagram, Dari Facebook"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <script src="{{asset(env('PUBLIC_ASSETS').'js/jquery.min.js')}}"></script>
    <script src="{{asset(env('PUBLIC_ASSETS').'js/popper.min.js')}}"></script>
    <script src="{{asset(env('PUBLIC_ASSETS').'js/bootstrap.min.js')}}"></script>
    <script src="{{asset(env('PUBLIC_ASSETS').'js/main.js')}}"></script> --}}
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>
