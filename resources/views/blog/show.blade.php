@extends('template.blog')

@section('section')

<section class="app-section-hero">
    <div class="container">
        <div class="row">
            <!-- RIGHT CONTENT -->
            <div class="col-lg-8 col-12 my-auto d-grid gap-4">
                <div class="d-grid gap-4 app-hero-first-content">
                    <h1 class="mt-5">{{$post->title}}</h1>
                    <p style="font-size: 13px;">Posted by {{$post->user->name}} on {{$post->created_at}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('blog.index')}}">Blog</a></li>
            <li class="breadcrumb-item">
                @foreach ( $post->categories as $category )
                    {{$category->name}}
                @endforeach
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{$post->title}}
            </li>
        </ol>
    </nav>
<div class="container">
<div class="row">
    <div class="col-lg-4 col-12">
        <img class="app-hero-img"
        src="{{ asset('uploads/' . $post->banner_image) }}">
    <br>
    <br>
        <div>
            @foreach ( $post->categories as $category )
                <a href="#" class="btn btn-dark mr-2">{{$category->name}}</a>
            @endforeach
        </div>
    </div>
    <div class="col-lg-8 col-12 my-auto d-grid gap-4">
        <div class="d-grid gap-4">
            <div>
                <p>{!!$post->body!!}</p>
            </div>
        </div>
    </div>
</div>
</div>
    {{-- <div class="text-center">
        <p><p>{!!$post->body!!}</p></p>
    </div> --}}
@endsection



