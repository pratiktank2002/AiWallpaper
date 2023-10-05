@extends('layouts.main')

@section('main-section')
    {{-- @dd($allBlogs); --}}
    <link rel="stylesheet" href="{{ asset('assets/css/blog-page.css') }}">

    <section class="light">
        <div class="container py-2">
            <div class="h1 text-center text-dark" id="pageHeaderTitle">Photo BLogs</div>

            @foreach ($allBlogs as $blog)
                <article class="postcard light red">
                    <a class="postcard__img_link" href="{{ $blog['blog_url'] }}" target="_blank">
                        <img class="postcard__img" src="{{ asset('assets/blogs/' . $blog['image']) }}" alt="{{ $blog['title'] }}" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title gray-dark"><a href="{{ $blog['blog_url'] }}">{{ $blog['title'] }}</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="{{ $blog['date'] }}">
                                <i class="fa fa-calendar mr-2"></i>{{ date('D, M jS Y', strtotime($blog['date'])) }}
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt my-4">{{ $blog['description'] }}</div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
