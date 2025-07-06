<article class="blog" data-page="blog">
    <header>
        <h2 class="h2 article-title">Blog</h2>
    </header>

    <section class="blog-posts">
        <ul class="blog-posts-list">
            @foreach ($blogs as $item)
                <li class="blog-post-item">
                    <a href="{{ route('blog.show', Crypt::encrypt($item->id)) }}">
                        <figure class="blog-banner-box">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Design conferences in 2022"
                                loading="lazy" />
                        </figure>

                        <div class="blog-content">
                            <div class="blog-meta">
                                {{-- <p class="blog-category">Design</p> --}}

                                <span class="dot"></span>

                                <time
                                    datetime="2022-02-23">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</time>
                            </div>

                            <h3 class="h3 blog-item-title">{{ $item->title }}</h3>

                            <p class="blog-text">
                                {{ Str::limit(strip_tags(html_entity_decode($item->description)), 100, '...') }}</p>


                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
</article>
