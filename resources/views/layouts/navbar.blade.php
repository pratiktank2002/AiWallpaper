<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand font-weight-bolder mr-3" href="{{ route('index') }}"><img src="assets/img/p.jpg" height="50" width="50"></a>
    <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
        <ul class="navbar-nav mr-auto align-items-center">
            <form class="bd-search hidden-sm-down">
                <input type="text" class="form-control bg-graylight border-0 font-weight-bold" id="search-input" placeholder="Search..." autocomplete="off">
                <div class="dropdown-menu bd-search-results" id="search-results">
                </div>
            </form>
        </ul>
        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('index') }}">Home</a>
            </li>
            @auth()
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('image_generate') }}">Generate Image</a>
                </li>
            @endauth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('post') }}">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('author') }}"><img class="rounded-circle mr-2" src="{{ asset('assets/img/av.png')}}" width="30"><span class="align-middle">Author</span></a>
            </li>
            @auth()
                {{-- drodown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg style="margin-top:10px;" class="_3DJPT" version="1.1" viewbox="0 0 32 32" width="21" height="21" aria-hidden="false" data-reactid="71"><path d="M7 15.5c0 1.9-1.6 3.5-3.5 3.5s-3.5-1.6-3.5-3.5 1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5zm21.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5zm-12.5 0c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z" data-reactid="22"></path></svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="dropdown02">
                        {{-- <h4 class="dropdown-header display-4">Profile</h4> --}}
                        <div class="dropdown-divider">
                        </div>
                        <span class="dropdown-item"><a href="{{ route('profile.edit') }}" target="_blank" class="btn btn-dark d-block"><i class="fa fa-user"></i> Profile</a></span>
                        <form  method="POST" action="{{ route('logout') }}">
                            @csrf
                            <span class="dropdown-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" target="_blank" class="btn btn-dark d-block"><i class="fa fa-sign-out"></i> logout</a></span>
                        </form>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><span class="align-middle">Register</span></a>
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
