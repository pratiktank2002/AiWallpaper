{{-- <footer class="footer pt-5 pb-5 text-center">

    <div class="container">

        <div class="socials-media">

            <ul class="list-unstyled">
                <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                            class="fa fa-facebook"></i></a></li>
                <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                            class="fa fa-twitter"></i></a></li>
                <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                            class="fa fa-instagram"></i></a></li>
                <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                            class="fa fa-google-plus"></i></a></li>
                <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                            class="fa fa-behance"></i></a></li>
                <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                            class="fa fa-dribbble"></i></a></li>
            </ul>

        </div>

        <!--
          All the links in the footer should remain intact.
          You may remove the links only if you donate:
          https://www.wowthemes.net/freebies-license/
        -->
        <p>© <span class="credits font-weight-bold">
                <a target="_blank" class="text-dark"
                    href="#"><u>Pratik</u></a>
            </span>
        </p>


    </div>

</footer> --}}
<link rel="stylesheet" href="{{ asset('assets/css/footer-css.css') }}">
<!-- FOOTER -->
<footer class="w-100 py-4 flex-shrink-0">
    <div class="container py-4">
        <div class="row gy-4 gx-5">
            <div class="col-lg-4 col-md-6">
                <h5 class="h1 text-white text-uppercase">ai wallpaper</h5>
                <p class="small text-muted">An Beautifull Collection Of ai generated Images.</p>
                <p class="large text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary"
                        target="_blank"
                        href="{{ env('LINKEDIN') }}">Pratik</a></p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-3">Quick links</h5>
                <ul class="list-unstyled text-muted">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('mobileWallpapers') }}">Mobile Wallpaper</a></li>
                    <li><a href="{{ route('image_generate') }}">Genrate Images</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-3">Pages</h5>
                <ul class="list-unstyled text-muted">
                    <li><a href="{{ route('blogs') }}">Blogs</a></li>
                    <li><a href="{{ route('author') }}">Mobile Wallpaper</a></li>
                    {{-- <li><a href="{{ route('image_generate') }}">Genrate Images</a></li> --}}
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-3">Newsletter</h5>
                <p class="small text-muted">Get An monthly Update From Our Website. <br> Subscribe to Our Newsletter here!</p>
                <form action="{{ route('newsLetter') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input class="form-control" type="email" name="email" placeholder="Recipient's Email!!">
                        @error('email')
                            <div class="alert alert-secondary" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <button class="btn btn-primary" title="Subscribe" id="button-addon2" type="submit"><i
                                class="fa fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
