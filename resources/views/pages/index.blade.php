@extends('layouts.main')

@section('main-section')
    <main role="main" style="background: #f3f5f7">

        <section class="pt-4 mb-5">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <h1 class="font-weight-bold text-uppercase title mb-5">Explore AI Images</h1>
                        <form class="bd-search ">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark border-0">
                                        <i class="fa fa-search text-muted"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control text-dark border-0 font-weight-bold"
                                    id="search-input" placeholder="Search...eg.(panda,nature,3d...etc)" autocomplete="off">
                            </div>
                            <style>
                                /* WebKit (Chrome, Safari) */
                                input[type="range"]::-webkit-slider-thumb {
                                    background-color: #40404F;
                                }

                                /* Firefox */
                                input[type="range"]::-moz-range-thumb {
                                    background-color: #40404F;
                                }
                            </style>
                            <div class="my-2">
                                <input type="range" class="form-range mt-3 text-dark" min="3" step="0.1" max="6"
                                    id="customRange2" style="width: 50%">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                {{-- <div class="element ftco-animate" data-animate-effect="fadeIn"> --}}
                    <!-- Display Images -->
                    <div class="row">
                        <div class="card-columns" style="column-count: 4">
                            {{-- 1st time --}}
                            @foreach ($allProducts as $product)
                                <div class="card card-pin border" id="product-{{ $product->id }}">
                                    <a href="{{ asset('storage/' . $product->image_url) }}" class="image-popup"
                                        data-mfp-src="{{ asset('storage/' . $product->image_url) }}">
                                        <img class="card-img" src="{{ asset('storage/' . $product->image_url) }}"
                                            alt="{{ $product->name }}">
                                    </a>
                                    <div class="overlay">
                                        <h2 class="card-title title text-uppercase">{{ $product->name }}</h2>
                                        @auth()
                                            @if (Auth::user()->role == 'admin')
                                                <h2 class="card-title title text-uppercase">{{ $product->id }}</h2>
                                            @endif
                                        @endauth
                                        <div class="more bg-light rounded-3 m-1 p-1">
                                            <a href="javascript:void(0);" class="see-button fs-3 text-dark"
                                                title="Tap To Saw Image"
                                                data-image-src="{{ asset('storage/' . $product->image_url) }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ asset('storage/' . $product->image_url) }}"
                                                class="download-button fs-3 text-dark" title="Download Image" download ">
                                                        {{-- not working --}}
                                                        {{-- onclick="updateImageDownloadCount() --}}
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
    {{-- image popup --}}
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
                duration: 300,
                easing: 'ease-in-out'
            },
            callbacks: {
                // Add a callback to display image name
                open: function() {
                    var imgTitle = $(this.currItem.el).find('.card-title').text();
                    var mfpContent = this.contentContainer;

                    // Create and append a title element
                    $('<div class="mfp-title"></div>').text(imgTitle).appendTo(mfpContent);
                }
            }
        });

        // Add click event to the "See" button to open the image popup
        $('.see-button').on('click', function(e) {
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

    {{-- image search --}}
    <script>
        $(document).ready(function() {
            $('#search-input').on('input', function() {
                var searchTerm = $(this).val().trim().toLowerCase(); // Get the search term

                // Loop through all product cards and hide/show them based on the search term
                $('.card-columns .card').each(function() {
                    var productName = $(this).find('.card-title').text().toLowerCase();
                    var productId = $(this).attr('id').replace('product-', '');

                    if (productName.includes(searchTerm)) {
                        // Show the card if the search term matches the product name
                        $(this).show();
                    } else {
                        // Hide the card if there is no match
                        $(this).hide();
                    }
                });
            });
        });
    </script>

    {{-- column count --}}
    <script>
        $(document).ready(function() {
            // Listen for changes in the range input
            $('#customRange2').on('input', function() {
                // Get the current value of the range input
                var columnCount = $(this).val();

                // Update the column-count style of the card-columns element
                $('.card-columns').css('column-count', columnCount);
            });
        });
    </script>
@endsection
