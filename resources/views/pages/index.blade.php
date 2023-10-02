@extends('layouts.main')

@section('main-section')
    <main role="main">

        <section class="mt-4 mb-5">
            <div class="container mb-4">
                <h1 class="font-weight-bold title">Explore AI Images</h1>
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white pl-2 pr-2">
                        <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExplore" aria-controls="navbarsDefault" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExplore">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lifestyle</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Food</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Travel</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                                    <div class="dropdown-menu shadow-lg" aria-labelledby="dropdown01">
                                        <a class="dropdown-item" href="#">Astronomy</a>
                                        <a class="dropdown-item" href="#">Nature</a>
                                        <a class="dropdown-item" href="#">Cooking</a>
                                        <a class="dropdown-item" href="#">Fashion</a>
                                        <a class="dropdown-item" href="#">Wellness</a>
                                        <a class="dropdown-item" href="#">Dieting</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="container-fluid">
                {{-- <div class="element ftco-animate" data-animate-effect="fadeIn"> --}}
                    <!-- Display Images -->
                    <div class="row">
                        <div class="card-columns">
                            @foreach ($allProducts as $product)
                                <div class="card card-pin border">
                                    <a href="{{ asset('storage/'. $product->image_url) }}" class="image-popup" data-mfp-src="{{ asset('storage/'. $product->image_url) }}">
                                        <img class="card-img"
                                            src="{{ asset('storage/'. $product->image_url) }}"
                                            alt="{{ $product->name }}"
                                        >
                                    </a>
                                    <div class="overlay">
                                        <h2 class="card-title title">{{ $product->name }}</h2>
                                        <div class="more">
                                            <a href="javascript()" class="see-button fs-3 text-warning" title="Tap To Saw Image" data-image-src="{{ asset('storage/'. $product->image_url) }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ asset('storage/'. $product->image_url) }}" class="download-button fs-3 text-warning" title="Download Image" download>
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </section>

    </main>
@endsection

@section('custom-scripts')
    <script>
        // Initialize Magnific Popup for images
        $('.image-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom',
            gallery: {
                enabled: true,
                navigateByImgClick: false,
                preload: [0, 1]
            },
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 300
            }
        });

        // Add click event to the "See" button to open the image popup
        $('.see-button').on('click', function (e) {
            e.preventDefault();

            var imageSrc = $(this).data('image-src');

            $.magnificPopup.open({
                items: {
                    src: imageSrc
                },
                type: 'image'
            });
        });

    </script>
@endsection

