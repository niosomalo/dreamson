@extends('master') @section('content')
<header id="slider">
    <div class="header-content">
        <div class="inner">
            <h1 class="cursive">Dreamson</h1>
            <h4>A free landing page theme with video background</h4>
            <hr>
            <a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-primary btn-xl">Toggle Video</a>&nbsp;
            <a href="#one" class="btn btn-primary btn-xl page-scroll">Get Started</a>
        </div>
    </div>
    <video autoplay="autoplay" loop="true" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg"
        id="video-background">
        <source src="asset/kopii.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
    </video>
</header>
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <h2 class="margin-top-0 text-primary text-center"><span class="divider">LAYANAN KAMI</span></h2>
            <br>
            <div class="container">
                <div class="col-md-6 text-layanan-konveksi">
                    <h2>Layanan Konveksi</h2>
                    <p>
                        Bootstrap's responsive grid comes in 4 sizes or "breakpoints": tiny (xs), small(sm), medium(md) and large(lg). These 4 grid
                        sizes enable you create responsive layouts that behave accordingly on different devices.
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-layanan-konveksi" src="/asset/layanan-konveksi.png">
                    </img>
                </div>
            </div>
            <br><br>
            <div class="container switch-position">
                <div class="col-md-6">
                    <img class="img-responsive img-layanan-konveksi" style="float:right" src="/asset/layanan-konveksi.png"></img>
                </div>
                <div class="col-md-6 text-layanan-konveksi">
                    <h2>Layanan Konveksi</h2>
                    <p>
                        Bootstrap's responsive grid comes in 4 sizes or "breakpoints": tiny (xs), small(sm), medium(md) and large(lg). These 4 grid
                        sizes enable you create responsive layouts that behave accordingly on different devices.
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-lg btn-penawaran btn-success">Buat Penawaran</a>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary"><span class="divider">MENGAPA KAMI LAYAK BERMITRA DENGAN ANDA?</span></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s"></i>
                    <h3>Responsive</h3>
                    <p class="text-muted">Your site looks good everywhere</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-social-sass wow fadeInUp" data-wow-delay=".2s"></i>
                    <h3>Customizable</h3>
                    <p class="text-muted">Easy to theme and customize with SASS</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                    <h3>Consistent</h3>
                    <p class="text-muted">A mature, well-tested, stable codebase</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                    <h3>Consistent</h3>
                    <p class="text-muted">A mature, well-tested, stable codebase</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s"></i>
                    <h3>Responsive</h3>
                    <p class="text-muted">Your site looks good everywhere</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-social-sass wow fadeInUp" data-wow-delay=".2s"></i>
                    <h3>Customizable</h3>
                    <p class="text-muted">Easy to theme and customize with SASS</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                    <h3>Consistent</h3>
                    <p class="text-muted">A mature, well-tested, stable codebase</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                    <h3>Consistent</h3>
                    <p class="text-muted">A mature, well-tested, stable codebase</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-retail">
    <div class="container col-md-6">
        <h1>DREAMSON RETAIL SHOP</h1>
        <p>Fusce vehicula dolor arcu, sit amet blandit dolor mollis nec. Donec viverra eleifend lacus, vitae ullamcorper metus.
            Sed sollicitudin ipsum quis nunc sollicitudin ultrices. Donec euismod scel</p>
        <a href="#one" class="btn btn-primary btn-xl page-scroll">BELANJA SEKARANG</a>
    </div>
</section>
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary"><span class="divider">TESTIMONI KONSUMEN</span></h2>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item">
                            <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium
                                    totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi.
                                    Impedit temporibus nisi accusamus.</p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium
                                    totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi.
                                    Impedit temporibus nisi accusamus.</p>
                            </blockquote>
                        </div>
                        <div class="active item">
                            <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium
                                    totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi.
                                    Impedit temporibus nisi accusamus.</p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium
                                    totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi.
                                    Impedit temporibus nisi accusamus.</p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium
                                    totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi.
                                    Impedit temporibus nisi accusamus.</p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium
                                    totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi.
                                    Impedit temporibus nisi accusamus.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary-konsumen">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary-white"><span class="divider-white">KONSUMEN KAMI</span></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-social-sass wow fadeInUp" data-wow-delay=".2s"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="feature">
                    <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection