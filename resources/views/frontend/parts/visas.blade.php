<section class="services-section pt-0">
    <div class="anim-icons">
        <span class="icon icon-object-2"></span>
        <span class="icon icon-object-3"></span>
    </div>
    <div class="auto-container">
        <div class="sec-title">
            <div class="row">
                <div class="col-lg-7">
                    <span class="sub-title">What do we offer</span>
                    <h2>Outstanding Immigration <br />Visa Services.</h2>
                </div>
                <div class="col-lg-5">
                    <div class="text">
                        Are you interested in moving abroad with your family? Either you can apply on your own, or you
                        can take the professional services of an experienced and the best immigration consultants.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($visas as $visa)
                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="page-service-details.html"><img src="{{ asset('uploads') }}/{{ $visa->image }}" alt="not found" /></a>
                            </figure>
                            <div class="icon-box">
                                <i class="icon fas fa-plane-departure"></i>
                            </div>
                        </div>
                        <div class="content-box">
                            <h5 class="title">
                                <a href="page-service-details.html">{{ $visa->title }}</a>
                            </h5>
                            <div class="text">
                                {{ $visa->short_details }}
                            </div>
                            <a href="page-service-details.html" class="read-more">Read More <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-info">Nothing to show here</div>
            @endforelse
        </div>
    </div>
</section>
