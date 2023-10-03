@extends('layouts.main')

@section('main-section')
    <main role="main">

        <section class="mt-4 mb-5">
            <div class="container mb-4">
                <h1 class="font-weight-bold title">Explore AI Images</h1>
                <div class="row">
                    <form class="bd-search hidden-sm-down">
                        <input type="text" class="form-control bg-graylight border-0 font-weight-bold" id="search-input" placeholder="Search...eg.(panda,nature,3d...etc)" autocomplete="off">
                        <div class="dropdown-menu bd-search-results" id="search-results">
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-fluid">
                {{-- <div class="element ftco-animate" data-animate-effect="fadeIn"> --}}
                    <!-- Display Images -->
                    <div class="row">
                        <div class="card-columns">
                            {{-- 1st time --}}
                            @foreach ($allProducts as $product)
                                <div class="card card-pin border" id="product-{{ $product->id }}">
                                    <a href="{{ asset('storage/'. $product->image_url) }}" class="image-popup" data-mfp-src="{{ asset('storage/'. $product->image_url) }}">
                                        <img class="card-img"
                                            src="{{ asset('storage/'. $product->image_url) }}"
                                            alt="{{ $product->name }}"
                                        >
                                    </a>
                                    <div class="overlay see-button" data-image-src="{{ asset('storage/'. $product->image_url) }}">
                                        <h2 class="card-title title text-uppercase">{{ $product->name }}</h2>
                                        @if (Auth::user()->role == 'admin')
                                            <h2 class="card-title title text-uppercase">{{ $product->id }}</h2>
                                        @endif
                                        <div class="more bg-light rounded-3 m-1 p-1">
                                            <a href="javascript:void(0);" class="see-button fs-3 text-dark" title="Tap To Saw Image" data-image-src="{{ asset('storage/'. $product->image_url) }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ asset('storage/'. $product->image_url) }}" class="download-button fs-3 text-dark" title="Download Image" download ">
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


@endsection

