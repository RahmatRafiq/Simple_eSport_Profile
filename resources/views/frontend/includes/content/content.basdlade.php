<body>
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
        <section class="about_us section_padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-6 col-xl-6">
                        <div class="learning_img">
                            @forelse ($teams as $team)
                                <img src="{{ asset('images/' . $team->logo) }}" alt="{{ $team->name }}" />
                            @empty
                                <p>Tidak ada data tim</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="about_us_text">
                            @forelse ($teams as $team)
                                <h2>{{ $team->name }}</h2>
                                <p>{{ $team->description }}</p>
                                <h3>Prestasi:</h3>
                                <ul>
                                    {{ $team->achievement }}
                                    ada prestasi</li>
                                </ul>
                            @empty
                                <p>Tidak ada data tim</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                            @forelse ($players as $player)
                                <div class="live_stareams_slide_img">
                                    <img src="{{ asset('storage/' . $player->photo) }}" alt="{{ $player->name }}" />

                                </div>
                            @empty
                                <p>Tidak ada data pemain</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--::about_us part start::-->
        <!--::about_us part start::-->
        <section class="live_stareams padding_bottom">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-2 offset-lg-2 offset-sm-1">
                        <div class="live_stareams_text">
                            @forelse ($teams as $team)
                                <h2>{{ $team->name }}</h2>
                                <p>
                                    achievements:
                                    @if ($team->achievements)
                                        {{ implode(', ', $team->achievements) }}
                                    @else
                                        Tidak ada prestasi
                                    @endif
                                </p>
                            @empty
                                <p>Tidak ada data tim</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about_us part end-->
        <!--about_us part end-->


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
                                @forelse ($players as $player)
                                    <a href="{{ asset('storage/' . $player->photo) }}"
                                        class="grid-item bg_img img-gal position-relative">
                                        <div class="single_gallery_item">
                                            <div class="single_gallery_item_iner">
                                                <div class="gallery_item_text">
                                                    <i class="ti-zoom-in"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="overlay text-center position-absolute w-100 h-100 d-flex flex-column justify-content-center">
                                                <p class="text-white m-0">{{ $player->name }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @empty
                                    <p>Tidak ada data pemain</p>
                                @endforelse
                            </div>
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

</body>
