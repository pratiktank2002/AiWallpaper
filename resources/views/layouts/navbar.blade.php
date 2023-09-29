<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand font-weight-bolder mr-3" href="{{ route('index') }}"><img src="assets/img/logo.png"></a>
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
            <li class="nav-item">
            <a class="nav-link" href="{{ route('post') }}">Post</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('author') }}"><img class="rounded-circle mr-2" src="assets/img/av.png" width="30"><span class="align-middle">Author</span></a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg style="margin-top:10px;" class="_3DJPT" version="1.1" viewbox="0 0 32 32" width="21" height="21" aria-hidden="false" data-reactid="71"><path d="M7 15.5c0 1.9-1.6 3.5-3.5 3.5s-3.5-1.6-3.5-3.5 1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5zm21.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5zm-12.5 0c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z" data-reactid="22"></path></svg>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="dropdown02">
                <h4 class="dropdown-header display-4">Download Wallpapers</h4>
                <div class="dropdown-divider">
                </div>
                <span class="dropdown-item"><a href="#" class="btn btn-primary d-block"><i class="fa fa-download"></i> Download</a></span>
            </div>
            </li>
        </ul>
    </div>
</nav>
