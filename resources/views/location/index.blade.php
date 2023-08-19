@extends('template.blog')

@section('section')

<section class="app-section-hero">
    <div class="container">
        <div class="row">
                <div class="app-hero-first-content">
                    <div class="text-center">
                        <h1>Lokasi Toko Kami</h1>
                        <b>5 Cabang di Kota Surabaya dan 2 Cabang di Kab. Sidoarjo</b>

                        <br>

                        {{-- <section class="location-search">
                            <div class="container">
                                <div class="">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 p-0">
                                                <span class="fake-search"><i class="ti-search"></i></span><input type="text" name="search" id="search" class="form-control search-slt" placeholder="Cari berdasarkan wilayah cabang">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> --}}
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row gx-2 gy-2 mt-2">
        <div class="col-6">
            <div class="card p-2">
                <div>
                    <span class="badge bg-secondary">Surabaya Selatan</span>
                </div>
                <h1>Jl. Manunggal Kebonsari No. 05 Jambangan</h1>
                <p>
                    Monday - Sunday (9 AM - 8 PM)
                </p>
                <div class="d-flex gap-2">
                    <a class="btn btn-dark" href="https://www.google.com/maps/place/Laundry+Sepatu+Surabaya+(Scarwash+Jambangan)/@-7.3277077,112.7102674,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fc9f986b6fdb:0xe7df8bd037983099!8m2!3d-7.327713!4d112.7128423!16s%2Fg%2F11fz9yr7pz?entry=ttu" target="_blank">Location</a>
                    <a class="btn btn-success" href="https://api.whatsapp.com/send/?phone=6285706237900" target="_blank">Whatsapp</a>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card p-2">
                <div>
                    <span class="badge bg-secondary">Surabaya Pusat</span>
                </div>
                <h1>Jl. Dharmahusada Stand No. 14</h1>
                <p>
                    Monday - Sunday (9 AM - 8 PM)
                </p>
                <div class="d-flex gap-2">
                    <a class="btn btn-dark" href="https://www.google.com/maps/place/Laundry+Sepatu+Surabaya+(Scarwash+Dharmahusada)/@-7.2659841,112.7439513,15z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fb66387222e5:0xec4739245ca18d8!8m2!3d-7.2660058!4d112.7624054!16s%2Fg%2F11h1hn9pnv?entry=ttu">Location</a>
                    <a class="btn btn-success" href="https://api.whatsapp.com/send/?phone=6285706237900" target="_blank">Whatsapp</a>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card p-2">
                <div>
                    <span class="badge bg-secondary">Surabaya Barat</span>
                </div>
                <h1>Jl. Ruko Northwest bouvardnv1 No 23 Citraland</h1>
                <p>
                    Monday - Sunday (9 AM - 8 PM)
                </p>
                <div class="d-flex gap-2">
                    <a class="btn btn-dark" href="https://www.google.com/maps/place/Laundry+Sepatu+Surabaya+(Scarwash+Citraland)/@-7.2548253,112.5553399,12z/data=!4m10!1m2!2m1!1sscar+wash+ruko+north+west!3m6!1s0x2dd7fd704d13af07:0x3c8f13b19de7f899!8m2!3d-7.2548253!4d112.6253777!15sChlzY2FyIHdhc2ggcnVrbyBub3J0aCB3ZXN0WhsiGXNjYXIgd2FzaCBydWtvIG5vcnRoIHdlc3SSARBzaG9lX3JlcGFpcl9zaG9wmgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVU4xWHpSTGRqZFJSUkFC4AEA!16s%2Fg%2F11rw3bvzc0?entry=ttu">Location</a>
                    <a class="btn btn-success" href="https://api.whatsapp.com/send/?phone=6285706237900" target="_blank">Whatsapp</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card p-2">
                <div>
                    <span class="badge bg-secondary">Surabaya Barat</span>
                </div>
                <h1>Jl. Raya Lidah Wetan No. 5</h1>
                <p>
                    Monday - Sunday (9 AM - 8 PM)
                </p>
                <div class="d-flex gap-2">
                    <a class="btn btn-dark" href="https://www.google.com/maps/place/SCAR+WASH+Laundry+Sepatu+Surabaya/@-7.3080659,112.6708719,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fdeb23cd86e1:0x5a6f4ff6784a73dc!8m2!3d-7.3080659!4d112.6708719!16s%2Fg%2F11hz2dpgw_?entry=ttu">Location</a>
                    <a class="btn btn-success" href="https://api.whatsapp.com/send/?phone=6285706237900" target="_blank">Whatsapp</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card p-2">
                <div>
                    <span class="badge bg-secondary">Surabaya Timur</span>
                </div>
                <h1>Jl. Gebang Lor No. 74 Sukolilo</h1>
                <p>
                    Monday - Sunday (9 AM - 8 PM)
                </p>
                <div class="d-flex gap-2">
                    <a class="btn btn-dark" href="https://www.google.com/maps/place/Laundry+Sepatu+%26+Barbershop+Surabaya+(Scarwash+Sukolilo)/@-7.2813403,112.7868924,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fb0159dcbd95:0x356042c74f1f9ed7!8m2!3d-7.2813403!4d112.7868924!16s%2Fg%2F11sprwsrvq?entry=ttu">Location</a>
                    <a class="btn btn-success" href="https://api.whatsapp.com/send/?phone=6285706237900" target="_blank">Whatsapp</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card p-2">
                <div>
                    <span class="badge bg-secondary">Sidoarjo</span>
                </div>
                <h1>Jl. Pecantingan No. 74 Sekardangan</h1>
                <p>
                    Monday - Sunday (9 AM - 8 PM)
                </p>
                <div class="d-flex gap-2">
                    <a class="btn btn-dark" href="https://www.google.com/maps/place/Scarwash+Sidoarjo+-+Cuci+Sepatu/@-7.4681926,112.7275036,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7e7e90270df49:0x4f591246139be92b!8m2!3d-7.4681926!4d112.7275036!16s%2Fg%2F11ppb_82xf?entry=ttu">Location</a>
                    <a class="btn btn-success" href="https://api.whatsapp.com/send/?phone=6285706237900" target="_blank">Whatsapp</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card p-2">
                <div>
                    <span class="badge bg-secondary">Sidoarjo</span>
                </div>
                <h1>Jl. Raya Wadung Asri No. 26 Waru</h1>
                <p>
                    Monday - Sunday (9 AM - 8 PM)
                </p>
                <div class="d-flex gap-2">
                    <a class="btn btn-dark" href="https://www.google.com/maps/place/Scar+wash+Cuci+sepatu+dan+tas/@-7.3438574,112.7680362,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fba4581167cb:0xa75017431d49652c!8m2!3d-7.3438574!4d112.7680362!16s%2Fg%2F11v5g0w2ny?entry=ttu">Location</a>
                    <a class="btn btn-success" href="https://api.whatsapp.com/send/?phone=6285706237900" target="_blank">Whatsapp</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



