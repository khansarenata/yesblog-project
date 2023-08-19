@extends('template.blog')

@section('section')
    <!-- SECTION TYPE 1 : HERO -->
    <section class="app-section-hero">
        <div class="container">
            <div class="row">
                <!-- LEFT IMAGE -->
                <div class="col-lg-4 col-12">
                    <img class="w-100 app-hero-img"
                        src="{{asset('yesblog')}}/logo.png">
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-8 col-12 my-auto d-grid gap-4">
                    <div class="d-grid gap-4 app-hero-first-content">
                        <h1 class="mt-5">ScarWash Blog</h1>
                        <div>
                            ScarWash merupakan Shoes Laundry No. 1 di Surabaya yang berdiri sejak Tahun 2016. Saat Ini ScarWash sudah mempunyai 5 cabang di Surabaya dan 2 cabang di Sidoarjo. Kami menawarkan berbagai macam pilihan layanan dari Shoes Care, Leather Care, Bag Care, Cap Cleaning, dan masih banyak lainnya.
                        </div>
                        {{-- <div>
                            <form class="d-flex gap-2">
                                <input class="app-input flex-grow-1" placeholder="Enter your email">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </form>
                        </div> --}}
                    </div>
                    <div>
                        <b>
                            Kami Telah Melayani Pelanggan Hampir seluruh Wilayah Kota Surabaya dan Sidoarjo
                        </b>
                        <div class="row gap-4 mt-4">
                            <div class="col">
                                <b>Free Pick Up & Delivery</b>
                                <p>Memberikan layanan pick up dan delivery secara free di hampir seluruh Kota Surabaya dan Sidoarjo</p>
                            </div>
                            <div class="col">
                                <b>Berbagai macam layanan</b>
                                <p>Tersedia berbagai macam layanan laudry dan repair.</p>
                            </div>
                            <div class="col">
                                <b>7 Cabang di Kota Surabaya dan Sidoarjo</b>
                                <p>Cabang tersedia diberbagai wilayah kota Surabaya maupun Sidoarjo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 2 -->
    <section class="bg-black text-white py-5">
        <div class="container">
            <div class="d-flex">
                <h1>Promotion</h1>
            </div>
            <div class="row mt-4 gy-4">

                @foreach ($posts as $post)
                <div class="col-lg-3 col-12 rounded-3">
                    @if ($post->banner_image)
                    <div>
                    <img class="w-100 object-cover" src="{{ asset('uploads/' . $post->banner_image) }}" style="height:200px; object-fit:contain;">
                    </div>
                    @endif
                    <div class="p-4 bg-secondary d-grid gap-4" style="height: 280px; object-fit:contain;">
                        <h5><b>{{$post->title}}</b></h5>
                        <p style="font-size: 13px;">Posted by {{$post->user->name}} on {{$post->created_at}}</p>
                        <a href="{{ route('blog.show',['slug'=>$post->slug])}}">
                        <a class="btn btn-light" href="{{ route('blog.show',['slug'=>$post->slug])}}">LIHAT PROMO</a>
                    </div>
                </div>
                @endforeach
            </div>
    </section>

    <section class="container py-5">
        <div class="text-center">
            <h1>Our Gallery</h1>
        </div>
        <div>
            <img src="{{asset('yesblog')}}/galeri.png" alt="Layanan Shoes and Care" width="100%">
        </div>
        <div class="text-center py-2">
            <a href="{{route('gallery.index')}}" class="btn btn-dark">See All<i style="font-size:16px;margin-left:15px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
    </section>

    <div style="border-bottom: 2px dashed rgb(206, 206, 206);"></div>

    <!-- SECTION TYPE 4 -->
    <section class="container py-5">
        <div class="text-center">
            <h1>Our Services</h1>
            <p>Kami memberikan berbagai macam layanan yang anda butuhkan untuk perawatan barang kesayangan anda, seperti perawatan tas, sepatu, topi, helm, dsb. Kami juga menyediakan paket hemat untuk semua perawatan sepatu anda. </p>
        </div>

        <div class="row g-5">
            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" style="height:200px; object-fit:contain;"
                    src="{{asset('yesblog')}}/fastcleaning.JPG">
                <div class="py-2 d-grid gap-2">
                    <h2>Fast Cleaning</h2>
                    <p>Membersihkan bagian luar midsole dan upper.</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" style="height:200px; object-fit:contain;"
                    src="{{asset('yesblog')}}/repair.JPG">
                <div class="py-2 d-grid gap-2">
                    <h2>Repair/Reglue</h2>
                    <p>Memperbaiki/ mengelem ulang sepatu yang lekang atau sudah lepas.</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" style="height:200px; object-fit:contain;"
                    src="{{asset('yesblog')}}/unyellowing.JPG">
                <div class="py-2 d-grid gap-2">
                    <h2>Unyellowing</h2>
                    <p>Menghilangkan noda kuning pada Midsole hingga menjadi putih kembali (tidak bisa untuk sole berbahan Boots atau Busa).</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" style="height:200px; object-fit:contain;"
                    src="{{asset('yesblog')}}/repaint.JPG">
                <div class="py-2 d-grid gap-2">
                    <h2>Repaint/Change Color</h2>
                    <p>Mewarnai ulang atau mengubah warna sepatu (Sudah termasuk Deep Cleaning).</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" style="height:200px; object-fit:contain;"
                    src="{{asset('yesblog')}}/leathercare.JPG">
                <div class="py-2 d-grid gap-2">
                    <h2>Leather Care</h2>
                    <p>Mencuci seluruh bagian sepatu berbahan kulit (Leather) dan dipoles Leather Wax.</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover" style="height:200px; object-fit:contain;"
                    src="{{asset('yesblog')}}/capcleaning.JPG">
                <div class="py-2 d-grid gap-2">
                    <h2>Cap Cleaning</h2>
                    <p>Mencuci seluruh bagian topi dan Snapback.</p>
                </div>
            </div>
        </div>

        <div class="text-center py-2">
            <a href="{{route('price.index')}}" class="btn btn-dark">Read More<i style="font-size:16px;margin-left:15px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
    </section>

    <!-- SECTION TYPE 5 : EMBED MAP -->
    <section class="bg-black py-5 text-center">
        <div class="text-white">
            <h1>Our Location</h1>
            <p>Find us at here</p>
        </div>
            <div>
                {{-- <iframe class="rounded-3 w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.962455232647!2d112.7355958220893!3d-7.24511289276129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f93fc001bc5d%3A0x110e38d8a6c23fbe!2sMonumen%20Tugu%20Pahlawan%20dan%20Museum%20Sepuluh%20Nopember%20Surabaya!5e0!3m2!1sen!2sid!4v1689251639326!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe> --}}
                <iframe class="rounded-3 w-100" src="https://shoesandcare.com/assets/front/img/location.svg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="text-center py-2">
                    <a href="{{route ('location.index')}}" class="btn btn-light">Read More<i style="font-size:16px;margin-left:15px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
    </section>

@endsection
