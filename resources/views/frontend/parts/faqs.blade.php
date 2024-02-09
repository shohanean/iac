<!-- FAQ Section -->
<section class="faqs-section">
    <div class="anim-icons">
        <span class="icon icon-object-2"></span>
        <span class="icon icon-object-3"></span>
    </div>
    <div class="auto-container">
        <div class="row">
            <!-- FAQ Column -->
            <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">Our faqs</span>
                        <h2>Frequently Asked Questions.</h2>
                        <div class="text">Find answers to the most common questions below. If you still can’t
                            find the answer you’re looking for, just <a href="/contact-us">Contact Us</a>!
                        </div>
                    </div>

                    <ul class="accordion-box wow fadeInRight">
                        @forelse ($faqs as $faq)
                            <!--Block-->
                            <li class="accordion block @if ($loop->index == 1) active-block @endif">
                                <div class="acc-btn @if ($loop->index == 1) active @endif">
                                    {{ $faq->question }}
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content @if ($loop->index == 1) current @endif">
                                    <div class="content">
                                        <div class="text">{!! $faq->answer !!}</div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="text-danger">
                                Nothing to show, no FAQ found
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>

            <!-- Form Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="banner-box-one">
                        <i class="icon flaticon-visa-4"></i>
                        <h3 class="title">Have 10+ Years Of Visa Experience To Give You Right Guidance.
                        </h3>
                    </div>
                    <div class="banner-box-two">
                        <figure class="image"><img src="{{ asset('frontend_assets') }}/images/resource/image-4.jpg"
                                alt="">
                        </figure>
                        <h5 class="caption">Consultant Agency.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End FAQ Section -->