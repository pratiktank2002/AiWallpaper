<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand font-weight-bolder mr-3" href="{{ route('index') }}"><img src="assets/img/p.jpg" height="50" width="50"></a>
    <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
        <ul class="navbar-nav mr-auto align-items-center text-center">
            <a href="{{ route('index') }}" class="text-decoration-none">
                <h3 class="text-uppercase">Ai wallpaper</h3>
            </a>
        </ul>
        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="Mobile Walpapers" href="{{ route('mobileWallpapers') }}">Mobile</a>
            </li>
            @auth()
                <li class="nav-item">
                    <a class="nav-link" title="Genrate images from text" href="{{ route('image_generate') }}">Generate Image</a>
                </li>
                {{-- Dropdown for other links --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        pages <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow-lg text-center" aria-labelledby="dropdown02">
                        {{-- Move other links to the dropdown --}}
                        <span class="dropdown-item">
                            <a href="{{ route('blogs') }}" class="btn btn-dark d-block">Blogs</a>
                        </span>
                        {{-- <div class="dropdown-divider"></div> --}}
                        <span class="dropdown-item">
                            <a href="{{ route('author') }}" class="btn btn-dark d-block">Author</a>
                        </span>
                        {{-- ... Add other links here ... --}}
                        <div class="dropdown-divider"></div>
                        <p class="text-center text-dark">Action</p>
                        <span class="dropdown-item"><a href="{{ route('profile.edit') }}" target="_blank" class="btn btn-dark d-block"><i class="fa fa-user"></i> Profile</a></span>
                        <form  method="POST" action="{{ route('logout') }}">
                            @csrf
                            <span class="dropdown-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" target="_blank" class="btn btn-dark d-block"><i class="fa fa-sign-out"></i> Logout</a></span>
                        </form>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link text-light mx-1 btn btn-dark d-block" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light btn btn-dark d-block" href="{{ route('register') }}">Register</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
@if(session('message'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Yay!',
            text: '{{ \Illuminate\Support\Str::limit(session('message'), 50, $end='...') }}',
            showConfirmButton: false,
            timer: 2500
        });
    </script>
@endif
