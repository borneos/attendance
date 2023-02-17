<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Malahing</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="{{env('PUBLIC_ASSETS').'vendor/sweetalert/sweetalert.all.js'}}"></script>
</head>

<body style="background-image: url(https://res.cloudinary.com/borneos-co/image/upload/v1667649082/images/bg-drone-malahing_sfhrqg.webp);background-position: center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;" class="max-sm:px-3 font-inter">
    @include('sweetalert::alert')
    <div class="flex flex-col justify-center items-center my-14 max-sm:mx-3">
        <img src={{ asset(env('PUBLIC_ASSETS').'img/malahing.png') }} alt="Better Living in Malahing" width="200" height="100">
        <div class="bg-stone-50 rounded-md my-12 text-center p-8 shadow-md border-none">
            <h1 class="font-bold text-3xl max-sm:text-2xl">Buku Tamu Malahing</h1>
            <p class="mt-3">Silahkan isi buku tamu kunjungan ke Malahing</p>

            <div class="my-6">
                <form action="{{ route('absen.store') }}" method="POST" autocomplete="off">
                    @csrf
                    <input type="hidden" name="event" id="event" value="{{ Request::path() }}">
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="fullname" class="font-bold text-md">Nama Lengkap</label>
                        <input type="text" class="form-input rounded w-[100%] p-3 border-gray-300" name="fullname" id="fullname" placeholder="John Doe" required>
                    </div>
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="address" class="font-bold text-md">Alamat Lengkap Tamu</label>
                        <textarea class="form-input rounded w-[100%] p-3 border-gray-300" name="address" id="address" placeholder="Jl. Malahing No. 01 Kelurahan Tanjung Laut Indah, Kecamatan Bontang Selatan, Kota Bontang" rows="8" required></textarea>
                    </div>
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="whatsapp_number" class="font-bold text-md">Nomor HP/WhatsApp</label>
                        <input type="number" class="form-input rounded w-[100%] p-3 border-gray-300" name="whatsapp_number" id="whatsapp_number" placeholder="081234567890" required />
                    </div>
                    <div class="flex md:flex-row max-sm:flex-col gap-8">
                        <div class="flex flex-col gap-3">
                            <label for="institute" class="font-bold text-md text-start max-sm:text-start">Asal Instansi / Lembaga</label>
                            <select class="form-input rounded p-3 border-gray-300" name="institute" id="institute" required>
                                <option value="Pemerintah">Pemerintah</option>
                                <option value="Perusahaan">Perusahaan / Swasta</option>
                                <option value="Komunitas">Komunitas</option>
                                <option value="Organisasi">Organisasi</option>
                                <option value="Pendidikan">Pendidikan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="institute_name" class="font-bold text-md text-start max-sm:text-start">Nama Instansi / Lembaga</label>
                            <input type="text" class="form-input rounded w-[100%] p-3 border-gray-300" name="institute_name" id="institute_name" placeholder="Dinas Pariwisata Kota Bontang" required>
                        </div>
                    </div>
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="time_visit" class="font-bold text-md">Kunjungan ke Berapa?</label>
                        <input type="number" class="form-input rounded w-[100%] p-3 border-gray-300" name="time_visit" id="time_visit" placeholder="1" required />
                    </div>
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="reason_to_visit" class="font-bold text-md">Tujuan Kunjungan</label>
                        <textarea class="form-input rounded w-[100%] p-3 border-gray-300" name="reason_to_visit" id="reason_to_visit" placeholder="Wisata" required></textarea>
                    </div>
                    <div class="flex flex-col items-start gap-3 my-4">
                        <label for="user_info_source_malahing" class="font-bold text-md">Dapat Info Malahing Dari Mana?</label>
                        <textarea class="form-input rounded w-[100%] p-3 border-gray-300" name="user_info_source_malahing" id="user_info_source_malahing" placeholder="Dari Kantor, Dari Teman, Dari Instagram, Dari Facebook" required></textarea>
                    </div>
                    <button type="submit" class="bg-cyan-700 text-white p-4 w-full my-4">Simpan Data</button>
                </form>
                <div class="my-3">
                    <div class="flex gap-3 justify-center">
                        <a href="https://instagram.com/borneos.co" class="p-5 rounded-md" target="_blank"> <i class="fa-brands fa-square-instagram fa-xl"></i></a>
                        <a href="https://www.facebook.com/borneos.co" class="p-5 rounded-md" target="_blank"> <i class="fa-brands fa-facebook fa-xl"></i></a>
                        <a href="https://www.linkedin.com/company/borneos-co" class="p-5 rounded-md" target="_blank"> <i class="fa-brands fa-linkedin fa-xl"></i></a>
                    </div>
                </div>
                <div class="my-7">
                    <p>Made with ❤️ tech team borneos.co</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset(env('PUBLIC_ASSETS').'js/jquery.min.js')}}"></script>
    <script src="{{asset(env('PUBLIC_ASSETS').'js/main.js')}}"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>
