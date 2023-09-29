@extends('layouts.main')


@section('main-section')
    <main role="main">

        <section class="bg-gray200 pt-5 pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <article class="card">
                            <img class="card-img-top mb-2"
                                src="{{ asset('storage/old women.png') }}"
                                alt="Card image">
                            <div class="card-body">
                                <h1 class="card-title display-4">
                                    Sushi Rolls </h1>
                                <ul>
                                    <li>5 cups short-grain sushi rice</li>
                                    <li>6 cups water</li>
                                    <li>1/2 cup rice vinegar</li>
                                    <li>2 tablespoons sugar</li>
                                    <li>A teaspoon of salt</li>
                                </ul>
                                <small class="d-block"><a class="btn btn-sm btn-gray200" href="#"><i
                                            class="fa fa-external-link"></i> Visit Website</a></small>
                                <!-- Begin Comments -replace demowebsite with your own id
                                ================================================== -->
                                <div id="comments" class="mt-4">
                                    <div id="disqus_thread">
                                    </div>
                                    <script type="text/javascript">
                                        var disqus_shortname = 'demowebsite';
                                        var disqus_developer = 0;
                                        (function() {
                                            var dsq = document.createElement('script');
                                            dsq.type = 'text/javascript';
                                            dsq.async = true;
                                            dsq.src = window.location.protocol + '//' + disqus_shortname + '.disqus.com/embed.js';
                                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                        })();
                                    </script>
                                    <noscript>
                                        Please enable JavaScript to view the <a
                                            href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a>
                                    </noscript>
                                </div>
                                <!--End Comments
                                ================================================== -->
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-5">
                <div class="row">
                    <h5 class="font-weight-bold">More like this</h5>
                    <div class="card-columns">
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1518707399486-6d702a84ff00?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b5bb16fa7eaed1a1ed47614488f7588d&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1519408299519-b7a0274f7d67?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d4891b98f4554cc55eab1e4a923cbdb1&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1506706435692-290e0c5b4505?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0bb464bb1ceea5155bc079c4f50bc36a&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1512355144108-e94a235b10af?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c622d56d975113a08c71c912618b5f83&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1518542331925-4e91e9aa0074?ixlib=rb-0.3.5&s=6958cfb3469de1e681bf17587bed53be&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1513028179155-324cfec2566c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=32ce1df4016dadc177d6fce1b2df2429&auto=format&fit=crop&w=350&q=80"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1516601255109-506725109807?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ce4f3db9818f60686e8e9b62d4920ce5&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1505210512658-3ae58ae08744?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2ef2e23adda7b89a804cf232f57e3ca3&auto=format&fit=crop&w=333&q=80"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1488353816557-87cd574cea04?ixlib=rb-0.3.5&s=06371203b2e3ad3e241c45f4e149a1b3&auto=format&fit=crop&w=334&q=80"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img"
                                src="https://images.unsplash.com/photo-1518450757707-d21c8c53c8df?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c88b5f311958f841525fdb01ab3b5deb&auto=format&fit=crop&w=500&q=60"
                                alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Some Title</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
