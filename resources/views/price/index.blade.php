@extends('template.blog')

@section('section')

<section class="app-section-hero">
    <div class="container">
        <div class="row">
            <div class="app-hero-first-content">
                <div class="text-center">
                    <h1>Price List</h1>
                    <p>Temukan layanan yang anda butuhkan.</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div>
        <img src="{{asset('yesblog')}}/pricelist.jpg" alt="Layanan Shoes and Care" width="100%">
    </div>
</section>

@endsection



