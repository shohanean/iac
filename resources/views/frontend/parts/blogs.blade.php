<div class="row">
    @forelse($blogs as $blog)
        <!-- Blog Block -->
        <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image">
                        <a href="{{ route('blogs.details', $blog->slug) }}">
                            <img src="{{ asset('uploads') }}/{{ $blog->image }}" alt="not found">
                        </a>
                    </figure>
                    <span class="date"><b>{{ $blog->created_at->format('d') }}</b>
                        {{ $blog->created_at->format('M') }}</span>
                </div>
                <div class="content-box">
                    <ul class="post-info">
                        <li><i class="fa fa-user-circle"></i> by {{ $blog->user->name }}</li>
                    </ul>
                    <h4 class="title"><a href="{{ route('blogs.details', $blog->slug) }}">{{ $blog->heading }}</a></h4>
                    <a href="{{ route('blogs.details', $blog->slug) }}" class="read-more">Read More <i
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
