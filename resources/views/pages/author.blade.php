@extends('layouts.main')

@section('main-section')
    <main role="main">

        <div class="jumbotron border-round-0 min-50vh"
            style="background-image:url(https://plus.unsplash.com/premium_photo-1679082305620-fa44b9a3b6ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGFpJTIwZ2VuZXJhdGVkfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60);">
        </div>
        <div class="container mb-4">
            <img src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" class="mt-neg100 mb-4 rounded-circle" width="128">
            <h1 class="font-weight-bold title">Sal</h1>
            <p>
                I love Art, Web Design, Photography, Design, Illustration
            </p>
        </div>
        {{-- @dd($allProducts); --}}
        <div class="container-fluid mb-5">
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
                                    @auth()
                                        @if (Auth::user()->role == 'admin')
                                            <h2 class="card-title title text-uppercase">{{ $product->id }}</h2>
                                        @endif
                                    @endauth
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
        </div>

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
@endsection
