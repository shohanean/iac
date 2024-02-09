<!-- Blog Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">recent news feed</span>
            <h2>Latest News & Articles <br>From the Blog.</h2>
        </div>

        <div class="row">
            @forelse($blogs as $blog)
                <!-- Blog Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="news-details.html"><img
                                        src="https://via.placeholder.com/370x320" alt=""></a></figure>
                            <span class="date"><b>26</b> Nov</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fa fa-user-circle"></i> by Admin</li>
                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                            </ul>
                            <h4 class="title"><a href="news-details.html">The Human Rights and Democracy Study
                                    Visa Programms</a></h4>
                            <a href="news-details.html" class="read-more">Read More <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
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
</section>
<!--End Blog Section -->