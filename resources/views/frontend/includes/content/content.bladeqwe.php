{{-- <body>
    <div class="body_bg">
        <!--::header part start::-->
        <header class="main_menu single_page_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html">
                                <img src="img/logo.png" alt="logo" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"><i class="fas fa-bars"></i></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="fighter.html">fighter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="team.html">team</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="blog.html">
                                                blog</a>
                                            <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown1"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            pages
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="btn_1 d-none d-sm-block">Install Now</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-8">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h1>Best Highlights of the Latest</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Quis ipsum
                                </p>
                                <a href="#" class="btn_1">Watch Tutorial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->

        <!--::client logo part end::-->
        <section class="client_logo">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="client_logo_slider owl-carousel d-flex justify-content-between">
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_2.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::client logo part end::-->
        <!-- about_us part start-->
        <section class="about_us section_padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-6 col-xl-6">
                        <div class="learning_img">
                            <img src="img/about_img.png" alt="" />
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="about_us_text">
                            {{-- <h2>{{ $teams->name }}</h2>
                            <p>{{ $teams->deskripsi }}</p>
                            <h3>Prestasi:</h3>
                            <ul>
                                @foreach ($teams->prestasi as $prestasi)
                                    <li>{{ $prestasi }}</li>
                                @endforeach
                            </ul>
                            <a href="#" class="btn_1">Instal Sekarang</a>
                            <a href="#" class="btn_1">Tonton Tutorial</a> --}}
</div>
</div>
</div>
</div>
</section>
<!-- about_us part end-->

<!-- live_stareams part start-->
<section class="live_stareams padding_bottom">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-2 offset-lg-2 offset-sm-1">
                <div class="live_stareams_text">
                    <h2>Live Streams</h2>
                    <div class="btn_1">Install Now</div>
                </div>
            </div>
            <div class="col-md-7 offset-sm-1">
                <div class="live_stareams_slide owl-carousel">
                    @forelse ($team->players ?? [] as $player)
                        <div class="live_stareams_slide_img">
                            <img src="{{ optional($player)->photo }}" alt="{{ optional($player)->name }}" />
                            <!-- ... (code for player information) ... -->
                        </div>
                    @empty
                        <p>No players found</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
<!-- live_stareams part end-->

<!-- about_us part end-->

<!--::about_us part start::-->
<section class="live_stareams padding_bottom">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-2 offset-lg-2 offset-sm-1">
                <div class="live_stareams_text">
                    <h2>
                        live <br />
                        stareams
                    </h2>
                    <div class="btn_1">install now</div>
                </div>
            </div>
            <div class="col-md-7 offset-sm-1">
                <div class="live_stareams_slide owl-carousel">
                    <div class="live_stareams_slide_img">
                        <img src="img/live_streams_1.png" alt="" />
                        <div class="extends_video">
                            <a id="play-video_1" class="video-play-button popup-youtube"
                                href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="fas fa-play"></span>
                            </a>
                        </div>
                    </div>
                    <div class="live_stareams_slide_img">
                        <img src="img/live_streams_2.png" alt="" />
                        <div class="extends_video">
                            <a id="play-video_1" class="video-play-button popup-youtube"
                                href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="fas fa-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about_us part end-->

<!-- use sasu part end-->
<section class="Latest_War">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <h2>Latest War Fight</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12">
                <div class="Latest_War_text">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="single_war_text text-center">
                                <img src="img/favicon.png" alt="" />
                                <h4>Open War chalange</h4>
                                <p>27 june , 2020</p>
                                <a href="#">view fight</a>
                                <div class="war_text_item d-flex justify-content-around align-items-center">
                                    <img src="img/war_logo_1.png" alt="" />
                                    <h2>190<span>vs</span>189</h2>
                                    <img src="img/war_logo_2.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn_2">Watch Tutorial</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="latest_war_list">
                    <div class="single_war_text">
                        <div class="war_text_item d-flex justify-content-around align-items-center">
                            <img src="img/war_logo_1.png" alt="" />
                            <h2>190<span>vs</span>189</h2>
                            <img src="img/war_logo_2.png" alt="" />
                            <div class="war_date">
                                <a href="#">27 june 2020</a>
                                <p>Open War chalange</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="Latest_War_text Latest_War_bg_1">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="single_war_text text-center">
                                <img src="img/favicon.png" alt="" />
                                <h4>Open War chalange</h4>
                                <p>27 june , 2020</p>
                                <a href="#">view fight</a>
                                <div class="war_text_item d-flex justify-content-around align-items-center">
                                    <img src="img/war_logo_1.png" alt="" />
                                    <h2>190<span>vs</span>189</h2>
                                    <img src="img/war_logo_2.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn_2">Watch Tutorial</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- use sasu part end-->

<!-- gallery_part part start-->
<section class="gallery_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>All Fighter</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="gallery_part_item">
                    <div class="grid">
                        <div class="grid-sizer"></div>

                        <a href="img/gallery/gallery_item_6.png" class="grid-item bg_img img-gal grid-item--width-1"
                            style="
                                            background-image: url('img/gallery/gallery_item_6.png');
                                        ">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <i class="ti-zoom-in"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="img/gallery/gallery_item_4.png"
                            class="grid-item bg_img img-gal sm_weight grid-item--height-1"
                            style="
                                            background-image: url('img/gallery/gallery_item_4.png');
                                        ">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <i class="ti-zoom-in"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery_part part end-->

<!-- use sasu part end-->
<section class="upcomming_war">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <h2>Upcoming Fighter</h2>
                </div>
            </div>
        </div>
        <div class="upcomming_war_iner">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-10 col-sm-5 col-lg-3">
                    <div class="upcomming_war_counter text-center">
                        <h2>Dark Dragon</h2>
                        <div id="timer" class="d-flex justify-content-between">
                            <div id="days"></div>
                            <div id="hours"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- use sasu part end-->

<!-- pricing part start-->
<section class="pricing_part padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle text-center">
                    <h2>Pricing plans</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single_pricing_part">
                    <p>Silver Package</p>
                    <h3>$50.00</h3>
                    <ul>
                        <li>2GB Bandwidth</li>
                        <li>Two Account</li>
                        <li>15GB Storage</li>
                    </ul>
                    <a href="#" class="btn_2">Choose Plane</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing part end-->

<!--::footer_part start::-->

@include('frontend.includes.footer')
<!--::footer_part end::-->
</div>

<!-- jquery plugins here-->
@include('frontend.includes.js')
<!-- end jquery plugins here-->

</body> --}}
