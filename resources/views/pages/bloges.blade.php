@extends('layouts.main')

@section('main-section')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/blog-page.css') }}">

    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center full-content">
                <h2 class="section-title no-border v-3"><span>Latest</span> From Blog</h2>
                <p class="sub-section-title v-2">Letest Photo Blogs From <span>{{ date('Y') }}</span>.</p>
                <div class="mrb-45"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach ($allBlogs as $blog)
                        <div class="col-md-6 col-xl-4">
                            <article class="post">
                                <div class="article-v2">
                                    <figure class="article-thumb">
                                        <a href="{{ $blog['blog_url'] }}" target="_blank">
                                            <img src="{{ asset('assets/blogs/' . $blog['image']) }}" alt="{{ $blog['title'] }} image" />
                                        </a>
                                    </figure>
                                    <div class="article-content-main">
                                        <div class="article-header">
                                            <h2 class="entry-title"><a href="{{ $blog['blog_url'] }}" target="_blank">{{ $blog['title'] }}</a></h2>
                                            <div class="entry-meta">
                                                <div class="entry-date">{{ date('F j, Y', strtotime($blog['date'])) }}</div>
                                                <div class="entry-cat">
                                                    {{-- <a href="{{ $blog['blog_url'] }}">Author Name</a> <!-- Replace with author name --> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="article-content">
                                            <p>{{ $blog['description'] }}</p>
                                        </div>
                                        <div class="article-footer">
                                            <div class="row">
                                                <div class="col-6 text-left footer-link">
                                                    <a href="{{ $blog['blog_url'] }}" target="_blank" class="more-link">Read More</a>
                                                </div>
                                                <div class="col-6 text-right footer-meta">
                                                    <!-- Add your comment and share counts here if available -->
                                                    <!-- Example: -->
                                                    <a href="#"><i class="pe-7s-comment"></i> 65</a>
                                                    <a href="#"><i class="pe-7s-share"></i> 50</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
