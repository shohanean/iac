<!-- Countries Section -->
<section class="countries-section">
    <div class="auto-container">
        <div class="bg-layer"></div>

        <div class="sec-title text-center light">
            <span class="sub-title">Countries we offer</span>
            <h2>Countries We Support <br>for Immigration.</h2>
        </div>

        <div class="carousel-outer">
            <!-- Countries Carousel -->
            <div class="countries-carousel owl-carousel owl-theme">
                @forelse ($countries as $country)
                    <!-- Country Block -->
                    <div class="country-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a
                                        href="{{ asset('frontend_assets') }}/images/resource/country-1.jpg"
                                        class="lightbox-image"><img
                                            src="{{ asset('frontend_assets') }}/images/resource/country-1.jpg"
                                            alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="flag"><img
                                        src="{{ asset('frontend_assets') }}/images/resource/flag-aus.jpg"
                                        alt="">
                                </div>
                                <h5 class="title"><a href="page-country-details.html">{{ $country->name }}</a></h5>
                                <div class="text">{{ $country->caption }}</div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-danger">
                        Nothing to show
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
<!--End Countries Section -->
