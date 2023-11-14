<body>
    <div class="body_bg">
        {{-- <!--::header part start::--> --}}
        <header class="main_menu single_page_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html">
                                @foreach ($teams as $team)
                                    <img src="{{ asset('storage/' . $team->logo) }}" alt="{{ $team->name }}"
                                        width="75px" />
                                @endforeach
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"><i class="fas fa-bars"></i></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">fighter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">team</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">
                                                blog</a>
                                            <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            pages
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                            <a class="dropdown-item" href="#">Elements</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        {{-- <!-- ... (kode header) ... --> --}}

        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-8">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                @foreach ($teams as $team)
                                    <h1>Welcome To {{ $team->name }}</h1>
                                    <p>
                                    <p>{{ Str::limit($team->description, 5) }}...</p>

                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ... (kode banner) ... -->

        <!--::client logo part end::-->

        <section class="client_logo">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section_tittle text-center">
                            <h2>Our Player</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="client_logo_slider owl-carousel d-flex justify-content-center align-items-center">

                            @foreach ($players as $player)
                                <div class="col-3 mb-4">
                                    <div class="single_client_logo">
                                        <img src="{{ asset('storage/' . $player->photo) }}" class="img-fluid"
                                            alt="" style="width: 144px; height: auto;" />
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="about_us section_padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-6 col-xl-6">
                        <div class="learning_img">
                            @forelse ($teams as $team)
                                <img src="{{ asset('storage/' . $team->logo) }}"
                                    alt="{{ $team->name }}"width="400px" />
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

                            @empty
                                <p>Tidak ada data tim</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>



        {{-- <section class="live_stareams padding_bottom">
            <div class="container-fluid">
                @foreach ($teams as $team)
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-2 offset-lg-2 offset-sm-1">
                            <div class="live_stareams_text">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 col-xl-6">
                        <div class="about_us_text">
                            <h2>{{ $team->name }}</br>Achievements:</br>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="about_us_text">
                            <p>{{ $team->achievement }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section> --}}
        <section class="live_stareams padding_bottom">
            <div class="container">
                @foreach ($teams as $team)
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="about_us_text">
                                <h2>{{ $team->name }}</h2>
                                <h2>Achievements:</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about_us_text">
                                <p>{{ $team->achievement }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

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
                                        class="grid-item bg_img img-gal"
                                        style="background-image: url('{{ asset('storage/' . $player->photo) }}')">
                                        <div class="single_gallery_item">
                                            <div class="single_gallery_item_iner">
                                                <div class="gallery_item_text">
                                                    <i class="ti-zoom-in"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @empty
                                    <p>No players available.</p>
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ... (kode gallery part) ... -->

        <!-- ... (kode pricing part) ... -->

        <!--::footer_part start::-->
        @include('frontend.includes.footer')
        <!--::footer_part end::-->
    </div>

    <!-- jquery plugins here-->
    @include('frontend.includes.js')
    <!-- end jquery plugins here-->
</body>
