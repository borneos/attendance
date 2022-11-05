<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Malahing</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
        integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme18.css">
</head>

<body
    style="background-image: url(https://res.cloudinary.com/borneos-co/image/upload/v1667649082/images/bg-drone-malahing_sfhrqg.webp);background-position: center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
    @include('sweetalert::alert')
    <div class="form-body without-side" style="background-color: transparent">
        <div class="website-logo">
            <a href="/absen-malahing">
                <div class="logo" style="">
                    <img src="img/malahing.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items" style="margin:1%">
                        <h3>Buku Tamu Malahing</h3>
                        <p>Silakan isi buku tamu kunjungan Malahing.</p>
                        <form action="{{ route('absen.store') }}" method="POST" autocomplete="off">
                            @csrf
                            {{-- @dd(Request::path()) --}}
                            <input type="hidden" name="event" value="{{ Request::path() }}">
                            <input id="input" class="form-control" type="text" name="name"
                                placeholder="Nama Lengkap" required>
                            <textarea id="input" name="address" placeholder="Alamat Asal" class="form-control"></textarea>
                            <input id="input" class="form-control" type="number" name="whatsapp"
                                placeholder="Nomor Whatsapp" min="1" required>
                            <input id="input" class="form-control" type="text" name="instagram"
                                placeholder="Instagram">
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
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>
