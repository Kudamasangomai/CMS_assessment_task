<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ $site->site_title }} - {{ $site->site_tagline }}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/animate.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}" /> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

</head>

<body>



    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ route('welcome') }}">
                                {{-- <img src="assets/images/logo.png" width="50px" height="50px" alt="Logo"> --}}
                                <h5>{{ $site->site_title }}</h5>
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="#home" class="page-scroll active"
                                            aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#Services" class="page-scroll"
                                            aria-label="Toggle navigation">Services</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#pricing" 
                                          >Pricing</a>
                                    </li>


                                </ul>
                            </div> <!-- navbar collapse -->
                           

                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section id="home" class="hero-area" style="background-color: {{ $site->site_colour }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft " >
                            <h5 style="color: white;">{{ $site ? $site->site_title : 'Default Site Title' }}</h5>
                        </h1>
                        <p class="wow fadeInLeft" >{{ $hero ? $hero->description : '' }}</p>
                        <div class="button wow fadeInLeft">
                            <a href="javascript:void(0)" class="btn"><i class="lni lni-apple"></i>
                                {{ $hero ? $hero->button_text_one : '' }}</a>
                            <a href="javascript:void(0)" class="btn btn-alt"><i class="lni lni-play-store"></i>
                                {{ $hero ? $hero->button_text_two : '' }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" >
                        @if ($hero)
                            <img src="{{ asset('storage/' . $hero->image) }}" />
                        @else
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <section id="features" class="About section" style="background-color: #D2D2D2">
        <div class="content-wraper about" id="about">
            <div class="row">
                <div class="col-md-6">
                    <div class="p-4">
                        <div class="rounded overflow-hidden">
                            @if ($about)
                            <img class="w-100" src="{{ asset('storage/' . $about->aboutimage) }}" />
                        @else
                        @endif
                         
                        </div>
                    </div>
                </div>

                <div class="col-md-6 about">
                    <div class="p-4">
                        <span class="subheading">- {{ $about ? $about->titledescription : '' }}</span>
                        <h2 class="fw-bold heading">{{ $about ? $about->title : '' }}</h2>
                        <ul class="nav nav-pills nav-tab-light mb-3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#about-tab"
                                    type="button" role="tab" aria-controls="about-tab" aria-selected="true">
                                    {{ $about ? $about->whotitle : '' }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#vision-tab"
                                    type="button" role="tab" aria-controls="vision-tab"
                                    aria-selected="false">{{ $about ? $about->visiontitle : '' }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#contact-tab"
                                    type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">{{ $about ? $about->historytitle : '' }}</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about-tab" role="tabpanel"
                                aria-labelledby="about-content">
                                {{ $about ? $about->whodescription : '' }}
                            </div>
                            <div class="tab-pane fade" id="vision-tab" role="tabpanel"
                                aria-labelledby="vision-tab-content">
                                {{ $about ? $about->visiondescription : '' }}</div>
                            <div class="tab-pane fade" id="contact-tab" role="tabpanel"
                                aria-labelledby="contact-tab-content">
                                {{ $about ? $about->historydescription : '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Start Features Area -->
    <section id="Services" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn"  style="color: {{ $site->site_colour }}">Services
                        </h3>


                    </div>
                </div>
            </div>



            <div class="row">

                @forelse ($service as $service)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Feature -->
                        <div class="single-feature wow fadeInUp">
                            <i class="lni lni-cloud-upload" style="background-color: {{ $site->site_colour }}"></i>
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                        </div>
                        <!-- End Single Feature -->
                    </div>

                @empty

                    No Services Found
                @endforelse

            </div>

        </div>
    </section>
    <!-- End Features Area -->



    <!-- Start Pricing Table Area -->
    <section id="pricing" class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>pricing</h3>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Table -->
                    <div class="single-table wow fadeInUp">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Freelancer</h4>
                            <p>All the basics for starting a new business</p>
                            <div class="price">
                                <h2 class="amount">$24<span class="duration">/mo</span></h2>
                            </div>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Buy Freelancer</a>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <h4 class="middle-title">What's Included</h4>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Potenti felis, in cras ligula.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Table -->
                    <div class="single-table wow fadeInUp" >
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Startup</h4>
                            <p>All the basics for starting a new business</p>
                            <div class="price">
                                <h2 class="amount">$32<span class="duration">/mo</span></h2>
                            </div>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Buy Startup</a>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <h4 class="middle-title">What's Included</h4>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Potenti felis, in cras ligula.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Table -->
                    <div class="single-table wow fadeInUp" >
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Enterprise</h4>
                            <p>All the basics for starting a new business</p>
                            <div class="price">
                                <h2 class="amount">$48<span class="duration">/mo</span></h2>
                            </div>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Buy Enterprise</a>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <h4 class="middle-title">What's Included</h4>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Potenti felis, in cras ligula.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Pricing Table Area -->

    <!-- Start Call To Action Area -->
    <section class="section call-action" style="background-color: {{ $site->site_colour }}">>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="cta-content">
                        <h2 class="wow fadeInUp" >{{ $footer->title }} <br>
                        </h2>
                        <p class="wow fadeInUp">{{ $footer->description }}</p>
                        <div class="button wow fadeInUp" >
                            <a href="javascript:void(0)" class="btn">{{ $footer->button_text }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action Area -->



    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top" style="background-color: {{ $site->site_colour }}">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/count-up.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();

        $("button").click(function(){
            alert("Thanks");
        });


        $(document).on('click', 'a[href^="#"]', function(e){
  e.preventDefault()

  $('html, body').animate(
    {
      scrollTop: $($(this).attr('href')).offset().top,
    },
   3000,
    'linear'
  )
});
</script>
</body>

</html>
